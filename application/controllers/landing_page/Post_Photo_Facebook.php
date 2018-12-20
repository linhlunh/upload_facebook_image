<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Post_Photo_Facebook extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->database();

        $this->load->model('Upload_Model');

        $this->load->library('form_validation');

        $this->load->helper(array('url', 'form'));

        $this->lang->load('event_tet_lang','vietnamese');

        $this->config->load('oauth_users');
        
    }


    public function index()
    { 
        $dataSubmit = $this->input->post();

        $data = array();
     
        $oauth_users_rules = $this->config->item('oauth_users');
        
        $this->form_validation->set_rules($oauth_users_rules);
        
        $this->form_validation->set_error_delimiters('<span style="color:red">','</span>');
       
        if ($this->form_validation->run() && !empty($_FILES['picture']['name']))
        {
            if (!empty($dataSubmit))
            {
                $urlMoveUploadFile = str_replace('application\controllers\landing_page','',__DIR__).'/images/landing_page/post_photo_facebook';

                $urlMoveUploadFile = str_replace('\\','/',$urlMoveUploadFile);

                unset($dataSubmit['action']);

                $dataSubmit['created'] = date("Y-m-d H:i:s");
                $dataSubmit['link'] = "share-photo";

                while(empty($nameImg) || $this->Upload_Model->isSetImageName($nameImg))
                {
                    $nameImg = $this->_generate_random_code().'.'.str_replace('image/','',$_FILES['picture']['type']);
                }

              

                $InsertedId = $this->Upload_Model->create_img($dataSubmit);
                        
                $dataSubmit['event_code'] = 'BP'.str_pad($InsertedId,4,'0',STR_PAD_LEFT);

                $nameImg = $dataSubmit['event_code'].'_'.$nameImg;

                $dataSubmit['picture'] = $nameImg;
                
                $description = '';
                $description .= $dataSubmit['event_code'].'-'.$dataSubmit['full_name'];
                $description .= !empty($dataSubmit['description']) ? "\n------------------------------" : "";
                $description .= !empty($dataSubmit['description']) ? "\n".$dataSubmit['description'] : "";

                $facebook_picture_id = $this->PostImageUseCurl($description);

                $this->Upload_Model->UpdateEventCodeOauthUsers($InsertedId,$dataSubmit);

                move_uploaded_file($_FILES['picture']['tmp_name'], $urlMoveUploadFile .'/'.$dataSubmit['picture']);


                if(empty($facebook_picture_id['error_code']))
                {
                    $dataSubmit['facebook_picture_id'] = $facebook_picture_id;

                    $facebook_picture_link = $this->GetLinkImage($dataSubmit['facebook_picture_id'])->link;

                    if(empty($facebook_picture_link['error_code']))
                    {
                        $dataSubmit['facebook_picture_link'] =  $facebook_picture_link;

                        $this->Upload_Model->UpdateEventCodeOauthUsers($InsertedId,$dataSubmit);

                        $post_array = array(
                            "access_token" => 'EAAF65xLU4I0BAN1jFoKZAKXy2ZA7ZBwsLUfbpCla5kQyHPVkkr4zF2CnPUHZAHFNWx3KZCEb6xwVnZAMSxCN6wUEdaI0JiZBHZBzI24FjNmIZAexkNG7UR1mkw86UkqeOSyh9gajGZAAjzjiKzzZB7li6GODbYrrkb9xPIJFAExXDiDkwZDZD',
                            "id" => $dataSubmit['facebook_picture_id'],
                            "fields" => "images",
                        );
                        $url = "https://graph.facebook.com/".$dataSubmit['facebook_picture_id'];
                
                        $urlImage = $this->GetLinkImage($dataSubmit['facebook_picture_id'], $post_array, $url);

                        $dataSubmit['urlImage'] = reset($urlImage->images)->source;

                        $emailContentHtml = $this->load->view('landing_page/post_photo_facebook/email_template',$dataSubmit,true);

                        $subjectEmail = 'Xác nhận thông tin dự thi';

                        $this->send_email_by_marketing('meoconyy123@gmail.com',$dataSubmit['email'],$subjectEmail,$emailContentHtml);
    
                        $this->send_email_by_marketing('meoconyy123@gmail.com','meoconyy123@gmail.com',$subjectEmail,$emailContentHtml);

                    }else
                    {
                        $this->send_email_by_marketing('meoconyy123@gmail.com','meoconyy123@gmail.com','Error event Tết',$facebook_picture_link['message']);    
                    }
                }else{
                    $this->send_email_by_marketing('meoconyy123@gmail.com','meoconyy123@gmail.com','Error event Tết',$facebook_picture_id['message']);  
                }
            }
        }elseif(empty($_FILES['picture']['name']) && !empty($dataSubmit['action']))
        {
            $data['errors'] = 'Chua upload file';
        } 
        $this->load->view('landing_page/post_photo_facebook/post_photo',$data);
    }


    public function delete($id)
    {
        
    }

    public function show()
    {
    
        
        $img['list_img'] = $this->Upload_Model->getPictureByid(1);
        
        $keyword = $this->input->post('keyword');

        if (!empty($keyword)) {

            $data['results'] = $this->Upload_Model->search($keyword);
            
            $img['list_img'] = $data['results']; 
        } else {
            
            $img['list_img'] = $this->Upload_Model->getPictureByid(1);
        }
        $this->load->view('landing_page/post_photo_facebook/list_img', $img);
    }

    function PostImageUseCurl($message = '')
    {
            $fileImage = $_FILES['picture'];

            $albumId = '2242409652459728';
           
            $accessToken = 'EAAF65xLU4I0BAN1jFoKZAKXy2ZA7ZBwsLUfbpCla5kQyHPVkkr4zF2CnPUHZAHFNWx3KZCEb6xwVnZAMSxCN6wUEdaI0JiZBHZBzI24FjNmIZAexkNG7UR1mkw86UkqeOSyh9gajGZAAjzjiKzzZB7li6GODbYrrkb9xPIJFAExXDiDkwZDZD';

            $post_array = array(
                "access_token" => $accessToken,
                "source"       => new CurlFile($fileImage['tmp_name']),//"@".$fileImage['tmp_name'],
                "message"      => $message,
            );
            //echo('<pre>');print_r($post_array);echo('</pre>');exit();
            $url = "https://graph.facebook.com/".$albumId."/photos";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_array);
            
            
            $result = curl_exec($ch);
            
            $info = curl_getinfo($ch);
            
            curl_close($ch);

            $result = json_decode($result);

            if(!empty($result))
            {
                if(!empty($result->error))
                {
                    $dataReturn['message'] = 'Post image error:<br/>'.$result->error->message;

                    $dataReturn['error_code'] = $result->error->code;

                    return $dataReturn;
                }else
                {
                    return $result->id;
                }
            }else
            {
                $dataReturn['message'] = 'Post image error:<br/>Undifine error';

                $dataReturn['error_code'] = 'BP';

                return $dataReturn;
            }
    }
    
    function GetLinkImage($pictureId, $post_array = '', $url = '')
    {
        $accessToken = 'EAAF65xLU4I0BAN1jFoKZAKXy2ZA7ZBwsLUfbpCla5kQyHPVkkr4zF2CnPUHZAHFNWx3KZCEb6xwVnZAMSxCN6wUEdaI0JiZBHZBzI24FjNmIZAexkNG7UR1mkw86UkqeOSyh9gajGZAAjzjiKzzZB7li6GODbYrrkb9xPIJFAExXDiDkwZDZD';

        if(empty($post_array))
        {
            $post_array = array(
                "access_token" => $accessToken,
                "id" => $pictureId,
                'fields' => 'link',
            );
        }

        if(empty($url))
        {
            $url = "https://graph.facebook.com/".$pictureId;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_array);
        
        
        $result = curl_exec($ch);
        
        $info = curl_getinfo($ch);
        
        curl_close($ch);
       
         $result = json_decode($result);

            if(!empty($result))
            {
                if(!empty($result->error))
                {
                    $dataReturn['message'] = 'Get link picture error:<br/>'.$result->error->message;

                    $dataReturn['error_code'] = $result->error->code;

                    return $dataReturn;
                }else
                {
                    return $result;
                }
            }else
            {
                $dataReturn['message'] = 'Get link picture error:<br/>Undifine error';

                $dataReturn['error_code'] = 'BP';

                return $dataReturn;
            }
    }
    function _generate_random_code($alphabet = "ABCDEFGHIKLMN0123456789", $code_len = 13)
	{

		$pass = array(); //remember to declare $pass as an array

		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache

		for ($i = 0; $i < $code_len; $i++) {

			$n = rand(0, $alphaLength);

			$pass[] = $alphabet[$n];

		}

		return implode($pass); //turn the array into a string
    }
    private function is_email($email) 
    {
    	return (preg_match("/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/", $email) || !preg_match("/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/", $email)) ? false : true;
	}

    private function is_phone($phone)
    {
		return preg_match('/^0(1\d{9}|9\d{8}|8\d{8})$/', $phone) ? true : false;
    }

    function phone_check($str)
    {
        if($this->is_phone($str))
        {
            return TRUE;
        }else
        {
            $this->form_validation->set_message('phone_check',lang('error_phone_format'));
            return FALSE;
        }
    }
    private function send_email_by_marketing($from, $to, $subject, $content, $reply_to = '')
    {
        $this->load->library('email');
        
        $count_user = 1;

	    $config = array();

	    $config['protocol'] = 'smtp';
	    $config['smtp_host'] = 'ssl://smtp.googlemail.com';
	    $config['smtp_port'] = '465';
	    $config['smtp_timeout'] = '30';
	   	$config['smtp_user'] = 'meoconyy123@gmail.com';
        $config['smtp_pass'] = 'anhduc123';
        $config['charset'] = 'utf-8';

	    if($count_user['num'] > 350){
	    	$config['smtp_user'] = 'marketing2@bestprice.vn';
	    	$config['smtp_pass'] = 'Bpt052010';
	    } elseif($count_user['num'] > 700) {
	    	$config['smtp_user'] = 'marketing3@bestprice.vn';
	    	$config['smtp_pass'] = 'Bpt052010';
	    } elseif($count_user['num'] > 1000) {
	    	$config['smtp_user'] = 'marketing4@bestprice.vn';
	    	$config['smtp_pass'] = 'Bpt052010';
	    }

	    //$config['protocol'] = 'mail';
	    $config['charset'] = 'utf-8';
	    $config['newline'] = "\r\n";
	    $config['mailtype'] = 'html';

	    // send to customer
	    $this->email->initialize($config);

	    if(ENVIRONMENT == 'production'){
	    	$this->email->from($from, 'BEST PRICE');
	    }else{  // 'testing', 'development'
	    	$this->email->from($from, 'BEST PRICE');
	    }

	    if (!empty($reply_to)) {
	        $this->email->to($to);
	        $this->email->reply_to($reply_to);
	    } else {
	        $this->email->to($to);
	    }
	    
	    $this->email->subject($subject);

	    $this->email->message($content);

	    if (!$this->email->send()) {
            show_error($this->email->print_debugger());
        }
	    return true;
	}
}