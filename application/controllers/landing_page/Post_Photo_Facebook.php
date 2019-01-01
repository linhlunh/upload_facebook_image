<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Post_Photo_Facebook extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->database();

        $this->load->model('Landing_Page_Model');

        $this->load->library('form_validation');

        $this->load->helper(array('url', 'form'));

        $this->lang->load('event_tet_lang','vietnamese');

        $this->config->load('oauth_users_meta');
        
    }


    public function index()
    { 
        $time_start = $this->microtime_float();
        
        $dataSubmit = $this->input->post();
        
        $data = array();
     
        $oauth_users_rules = $this->config->item('oauth_users');
        
        $this->form_validation->set_rules($oauth_users_rules);
        
        $this->form_validation->set_error_delimiters('<span style="color:red">','</span>');
        
        if ($this->form_validation->run() && !empty($_FILES['picture']['name']) && (stripos($_FILES['picture']['name'], 'jpeg') !== false || stripos($_FILES['picture']['name'], '.png') !== false || stripos($_FILES['picture']['name'], '.jpg') !== false || stripos($_FILES['picture']['name'], '.heic') !== false) )
        {
            if (!empty($dataSubmit['action']) && $dataSubmit['action'] == 'submit')
            {
                $urlMoveUploadFile = str_replace('application\controllers\landing_page','',__DIR__).'/images/landing_page/post_photo_facebook';

                $urlMoveUploadFile = str_replace('application/controllers/landing_page','',$urlMoveUploadFile);

                $urlMoveUploadFile = str_replace('\\','/',$urlMoveUploadFile);

                $urlMoveUploadFile = str_replace('//','/',$urlMoveUploadFile);
                
                $urlMoveUploadFileConvert = str_replace('application\controllers\landing_page','',__DIR__).'/images/landing_page/post_photo_facebook_convert';
                
                $urlMoveUploadFileConvert = str_replace('application/controllers/landing_page','',$urlMoveUploadFileConvert);
                
                $urlMoveUploadFileConvert = str_replace('\\','/',$urlMoveUploadFileConvert);
                
                $urlMoveUploadFileConvert = str_replace('//','/',$urlMoveUploadFileConvert);
                
                unset($dataSubmit['action']);

                $dataSubmit['created'] = date("Y-m-d H:i:s");
                $dataSubmit['link'] = "share-photo";
                
                $name_arr = explode('.', $_FILES['picture']['name']);
                $type_img = '.'.$name_arr[count($name_arr)-1];
                $new_name = '';
                while(empty($nameImg) || $this->Landing_Page_Model->isSetImageName($nameImg))
                {
                    $new_name = $this->_generate_random_code();//.'.'.$type_img
                    $nameImg = $new_name.$type_img;
                }
                unset($dataSubmit['date_']);
                
                $InsertedId = $this->Landing_Page_Model->create_img($dataSubmit);
                
                $dataSubmit['event_code'] = 'BP'.str_pad($InsertedId,4,'0',STR_PAD_LEFT);
                
                $nameImg = $dataSubmit['event_code'].'_'.$nameImg;

                $dataSubmit['picture'] = $nameImg;
                
                $description = '';
                $description .= $dataSubmit['event_code'].'-'.$dataSubmit['full_name'];
                $description .= !empty($dataSubmit['description']) ? "\n------------------------------" : "";
                $description .= !empty($dataSubmit['description']) ? "\n".$dataSubmit['description'] : "";

                $imgPath = $urlMoveUploadFile .'/'.$dataSubmit['picture'];
                
                $tmp_name = $_FILES['picture']['tmp_name'];
                
               	//move_uploaded_file($_FILES['picture']['tmp_name'], $imgPath);
               	copy($_FILES['picture']['tmp_name'], $imgPath);
               	
               	if (strtolower($type_img) == '.heic'){
                	$time_convert_1 = time(true);                	
                	$tmp_name = $this->convertTypeImage($imgPath, $new_name, $urlMoveUploadFileConvert);
                	//$imgPath = $urlMoveUploadFileConvert .'/'.$new_name.'.jpg';                	
                	$time_convert_2 = time(true);
                	log_message('error', 'Time Convert Photo => '.($time_convert_2-$time_convert_1));
                }
                
                $facebook_picture_id = $this->PostImageUseCurl($tmp_name, $description, $InsertedId);//$_FILES['picture']['tmp_name']
                
                $this->Landing_Page_Model->UpdateEventCodeOauthUsers($InsertedId,$dataSubmit);
                
                if(empty($facebook_picture_id['error_code']))
                {
                    $dataSubmit['facebook_picture_id'] = $facebook_picture_id;

                    $facebook_picture_link = $this->GetLinkImage($dataSubmit['facebook_picture_id'], $InsertedId)->link;

                    if(empty($facebook_picture_link['error_code']))
                    {
                        $dataSubmit['facebook_picture_link'] =  $facebook_picture_link;

                        $this->Landing_Page_Model->UpdateEventCodeOauthUsers($InsertedId,$dataSubmit);

                        $post_array = array(
                            "access_token" => 'EAAF65xLU4I0BAN1jFoKZAKXy2ZA7ZBwsLUfbpCla5kQyHPVkkr4zF2CnPUHZAHFNWx3KZCEb6xwVnZAMSxCN6wUEdaI0JiZBHZBzI24FjNmIZAexkNG7UR1mkw86UkqeOSyh9gajGZAAjzjiKzzZB7li6GODbYrrkb9xPIJFAExXDiDkwZDZD',
                            "id" => $dataSubmit['facebook_picture_id'],
                            "fields" => "images",
                        );
                        $url = "https://graph.facebook.com/".$dataSubmit['facebook_picture_id'];
                
                        $urlImage = $this->GetLinkImage($dataSubmit['facebook_picture_id'], $InsertedId, $post_array, $url);

                        $dataSubmit['urlImage'] = reset($urlImage->images)->source;

                        $emailContentHtml = $this->load->view('landing_page/post_photo_facebook/email_template',$dataSubmit,true);

                        $subjectEmail = 'Thông tin đăng ký dự thi Đăng ảnh đón xuân khuân tour miễn phí.';

                        $this->send_email_by_marketing('marketing@bestprice.vn', $dataSubmit['email'], $subjectEmail, $emailContentHtml, 'marketing@bestprice.vn');
    
                        //$this->send_email_by_marketing('marketing@bestprice.vn','marketing@bestprice.vn',$subjectEmail,$emailContentHtml);

                        $data['post_success'] = '1';
                    }else{
                        $error['erros_mesage'] = json_decode($facebook_picture_link['message'],true);
                        $error['oauth_users'] = json_decode($facebook_picture_link['oauth_users'],true);
                        $email_error_html = $this->load->view('landing_page/post_photo_facebook/email_error_template',$error,true);
                        $this->send_email_by_marketing('marketing@bestprice.vn', 'giangdo@bestprice.vn', 'Event Tết: Get link photo facebook error', $email_error_html);
                        $this->send_email_by_marketing('marketing@bestprice.vn', 'huudt@bestprice.vn', 'Event Tết: Get link photo facebook error', $email_error_html);
                        $data['post_success'] = '1';
                    }
                }else{
                    $error['erros_mesage'] = json_decode($facebook_picture_id['message'],true);
                    $error['oauth_users'] = json_decode($facebook_picture_id['oauth_users'],true);
                    $email_error_html = $this->load->view('landing_page/post_photo_facebook/email_error_template',$error,true);
                    $this->send_email_by_marketing('marketing@bestprice.vn', 'giangdo@bestprice.vn', 'Event Tết: Submit photo facebook error', $email_error_html);
                    $this->send_email_by_marketing('marketing@bestprice.vn', 'huudt@bestprice.vn', 'Event Tết: Submit photo facebook error', $email_error_html);
                    $data['post_success'] = '1';
                }
            }
        }elseif(empty($_FILES['picture']['name']) && !empty($dataSubmit['action'])) {
            $data['errors'] = 'Chua upload file';
        }
        
        $time_end  = $this->microtime_float();
        
        $data['action'] = $this->input->post('action');;
        
        $this->load->view('landing_page/post_photo_facebook/post_photo',$data);
    }


    public function delete($id)
    {
        
    }

    public function show()
    {
    
        
        $img['list_img'] = $this->Landing_Page_Model->getPictureByid(1);
        
        $keyword = $this->input->post('keyword');

        if (!empty($keyword)) {

            $data['results'] = $this->Landing_Page_Model->search($keyword);
            
            $img['list_img'] = $data['results']; 
        } else {
            
            $img['list_img'] = $this->Landing_Page_Model->getPictureByid(1);
        }
        $this->load->view('landing_page/post_photo_facebook/list_img', $img);
    }

    function PostImageUseCurl($fileImage = '',$message = '',$oauth_users_id) {
    	
            $albumId = '2242409652459728';
            
            $accessToken = 'EAAF65xLU4I0BAN1jFoKZAKXy2ZA7ZBwsLUfbpCla5kQyHPVkkr4zF2CnPUHZAHFNWx3KZCEb6xwVnZAMSxCN6wUEdaI0JiZBHZBzI24FjNmIZAexkNG7UR1mkw86UkqeOSyh9gajGZAAjzjiKzzZB7li6GODbYrrkb9xPIJFAExXDiDkwZDZD';
            
            $post_array = array(
                "access_token" => $accessToken,
                "source"       => new CurlFile($fileImage),//'@'.realpath($fileImage),//$fileImage,//new CurlFile()
                "message"      => $message,
            );
            
            $url = "https://graph.facebook.com/".$albumId."/photos";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
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
                    $dataReturn['message'] = json_encode($result->error);

                    $dataReturn['oauth_users'] = json_encode($this->Landing_Page_Model->getOauthUsers($oauth_users_id));

                    $dataReturn['error_code'] = $result->error->code;

                    return $dataReturn;
                }else
                {
                    return $result->id;
                }
            }else
            {
                $dataReturn['message'] = json_encode(array('Post_image' => 'Undifine error'));

                $dataReturn['oauth_users'] = json_encode($this->Landing_Page_Model->getOauthUsers($oauth_users_id));

                $dataReturn['error_code'] = 'BP';

                return $dataReturn;
            }
    }
    
    function GetLinkImage($pictureId, $oauth_users_id, $post_array = '', $url = '')
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
                    $dataReturn['message'] = json_encode($result->error);

                    $dataReturn['oauth_users'] = json_encode($this->Landing_Page_Model->getOauthUsers($oauth_users_id));

                    $dataReturn['error_code'] = $result->error->code;

                    return $dataReturn;
                }else
                {
                    return $result;
                }
            }else
            {
                $dataReturn['message'] = json_encode(array('Get_link_picture_error' => 'Undifine error'));

                $dataReturn['oauth_users'] = json_encode($this->Landing_Page_Model->getOauthUsers($oauth_users_id));

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
	   	$config['smtp_user'] = 'marketing@bestprice.vn';
        $config['smtp_pass'] = 'Bpt052010$';
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

	    $this->email->from($from, 'BestPrice Travel');
	    
	    if (!empty($reply_to)) {
	        $this->email->to($to);
	        $this->email->reply_to($reply_to);
	    } else {
	        $this->email->to($to);
	    }
	    
	    $this->email->subject($subject);

	    $this->email->message($content);

	    if (!$this->email->send()) {
            log_message('error', 'Email Debug => '.$this->email->print_debugger());
        }
	    return true;
    }
    
    function convertTypeImage($imgPath, $file_name = '', $save_path = '')
    {
        $url = "https://api.cloudconvert.com/convert";
        
        $list_key = array(
        	0 => 'cRiCmpSDlR3lr8Zz5TRdDukWM8xmpzkWwSDmhwx9aeUDhwPYBXUsuB5U8sVawCbr',
        	1 => 'cVLN60rnU1JnEHAAPrlL4qwlI0vARVtURaFdz63jhPTD6qvRplQMa5GIjAvg0g2m',
        	2 => 'kdtr0dkhHoo4Ik0z4CVBa78By7yu5JpyH54uvPzxw9BwQMuenYx3djdVuhxm9FFu',
        	3 => '8HB4jrV1fRxVNeUdCXsySsjKKtxKrP3VSEgBBwA2qsvtpkfMwQ61zKfh9tokUyDC',
        	4 => '81bH3rDFKee7L8JgjFT0kE8DdWKRhSg5YEfnXnT42CqZxIohqqTI3O237R4DbhBJ',
        	5 => 'znyuA3rr3UA5aZG5p48I29HXq1WrUdpCTXTZ1Qi5kXYZsUxirqx3MDAGNQIL5zqU',
        	6 => 'DEtsKZqMBSrbrAwqzWhumVN1JlNbFPtXu9dWwpBRtFLT9jFef7fbrpoWvhijPSbj',
        	7 => 'HbP19sDgx1EI4bOYFexLqvhxssPAQMFCZVMSVVx3cVF9v8xZNSUHgbXUmxpiKbwU'
        );
        
        array_rand($list_key);
        
        $post_array = array(
            'file' => new CurlFile($imgPath),
            'apikey' => $list_key[0],
            'inputformat' => 'heic',
            "outputformat" => "jpg", 
            "input" => "upload", 
            "wait" => "true",
            "download" => "false",
            "filename=".$file_name.".jpg", 
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_array);
        
        $result = curl_exec($ch);
        
        $info = curl_getinfo($ch);
        
        curl_close($ch);
        
        $result = json_decode($result, true);
        
        $link = !empty($result['output']['url']) ? 'https:'.$result['output']['url'] : '';
        
        if (isset($result['code']) && $result['code'] == 402){
        	$this->convertTypeImage($imgPath, $file_name);
        }
        
        $tempnam = '';
        
        if(!empty($link)){
        	$data_image = file_get_contents($link);
        	$file = $save_path .'/'. $file_name.'.jpg';
        	$savefile = fopen($file, 'w+');
        	fwrite($savefile, $data_image);
        	fclose($savefile);

        	//$temp = tmpfile();
        	$tempnam = tempnam(sys_get_temp_dir(), 'VUI');
        	$temp = fopen($tempnam, 'w+');
        	fseek($temp, 0);
        	fwrite($temp, $data_image);
        	fclose($temp);
        	
        	return $tempnam;
        }
        
        return false;
        
    }
    
    function microtime_float()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }

}