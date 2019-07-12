<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_Videos extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->database();

        $this->load->model('Landing_Page_Model');

        $this->load->library('form_validation');

        $this->load->helper(array('url', 'form', 'upload_videos'));

        $this->lang->load('event_tet_lang','vietnamese');

        $this->config->load('oauth_users_meta');
        
    }


    public function index()
    { 
        $dataSubmit = $this->input->post();
        
        $data = array();
     
        $oauth_users_rules = $this->config->item('oauth_users');
        
        $this->form_validation->set_rules($oauth_users_rules);
        
        $this->form_validation->set_error_delimiters('<span style="color:red">','</span>');
        
        if ($this->form_validation->run() && !empty($_FILES['picture']['name']) && (stripos($_FILES['picture']['name'], '.mp4') !== false || stripos($_FILES['picture']['name'], '.mov') !== false || stripos($_FILES['picture']['name'], '.mpeg4') !== false || stripos($_FILES['picture']['name'], '.avi') !== false || stripos($_FILES['picture']['name'], '.wmv') !== false || stripos($_FILES['picture']['name'], '.mpegps') !== false || stripos($_FILES['picture']['name'], '.flv') !== false || stripos($_FILES['picture']['name'], '.hevc') !== false || stripos($_FILES['picture']['name'], '.3gpp') !== false || stripos($_FILES['picture']['name'], '.WebM') !== false || stripos($_FILES['picture']['name'], '.DNxHR') !== false || stripos($_FILES['picture']['name'], '.ProRes') !== false || stripos($_FILES['picture']['name'], '.CineForm') !== false) )
        {
            if (!empty($dataSubmit['action']) && $dataSubmit['action'] == 'submit')
            {
            	$time_start = $this->microtime_float();
            	
                $urlMoveUploadFile = str_replace('application\controllers\landing_page','',__DIR__).'videos/landing_page/post_video_facebook';
                
                $urlMoveUploadFile = str_replace('application/controllers/landing_page','',$urlMoveUploadFile);
                
                $urlMoveUploadFileConvert = str_replace('application\controllers\landing_page','',__DIR__).'videos/landing_page/post_video_facebook_convert';
                
                $urlMoveUploadFileConvert = str_replace('application/controllers/landing_page','',$urlMoveUploadFileConvert);
                
                unset($dataSubmit['action']);

                $dataSubmit['created'] = date("Y-m-d H:i:s");
                $dataSubmit['link'] = "upload-videos";
                $name_arr = explode('.', $_FILES['picture']['name']);
                
                $type_img = '.'.$name_arr[count($name_arr)-1];
                $new_name = '';
                
                while(empty($nameVideo) || $this->Landing_Page_Model->isSetImageName())
                {
                    
                    $new_name = $this->_generate_random_code();//.'.'.$type_img
                    
                    $nameVideo = $new_name.$type_img;
                    
                }
                unset($dataSubmit['date_']);
                
                $InsertedId = $this->Landing_Page_Model->create_img($dataSubmit);
                
                $dataSubmit['event_code'] = 'BP'.str_pad($InsertedId,4,'0',STR_PAD_LEFT);
                
                $nameVideo = $dataSubmit['event_code'].'_'.$nameVideo;
                
                $dataSubmit['picture'] = $nameVideo;
                
                $description = '';

                $videoPath = $urlMoveUploadFile .'/'.$dataSubmit['picture'];
                
                $tmp_name = $_FILES['picture']['tmp_name'];
                
               	//move_uploaded_file($_FILES['picture']['tmp_name'], $imgPath);
               	copy($_FILES['picture']['tmp_name'], $videoPath);
               	
                $this->Landing_Page_Model->UpdateEventCodeOauthUsers($InsertedId,$dataSubmit);
                
                redirect(site_url('form-upload-videos-dt/'.$InsertedId));
                
            }
        }elseif(empty($_FILES['picture']['name']) && !empty($dataSubmit['action'])) {
            $data['errors'] = 'Chua upload file';
        }
        
        $data['action'] = $this->input->post('action');
        
        $data['is_post'] = $this->input->get('is_post');

        $data['post_success'] = $this->input->get('post_success');
        
        $this->load->view('landing_page/post_photo_facebook/upload_videos_form_dk', $data);
    }

    public function form_upload($article_id)
    {
        $data = hit_counter($article_id);

        $data['articles'] = $this->Landing_Page_Model->get_view($article_id);

        $data['videos'] = $this->Landing_Page_Model->get_videos($article_id);
        
        $this->load->view('landing_page/post_photo_facebook/upload_videos_form', $data);
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
		return preg_match('/^0(9\d{8}|8\d{8}|7\d{8}|3\d{8}|5\d{8})$/', $phone) ? true : false;
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
    
    function microtime_float()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }
    /**
	 * Get like and share landing page
	 *
	 * @author CuongLD
	 * @since Jan 30 2019
	 */
    function get_like_and_share(){

        $list_user_landing_page = $this->Landing_Page_Model->getFacebookIdOfLandingPage();
    
        $list_user_landing_page_new = array();
        
        foreach($list_user_landing_page as $user_landing_page){
            $field_facebook = 'reactions.type(LIKE).summary(total_count).limit(0).as(like),
                            reactions.type(LOVE).summary(total_count).limit(0).as(love),
                            reactions.type(WOW).summary(total_count).limit(0).as(wow),
                            reactions.type(HAHA).summary(total_count).limit(0).as(haha),
                            reactions.type(SAD).summary(total_count).limit(0).as(sad),
                            reactions.type(ANGRY).summary(total_count).limit(0).as(angry)';
            $user_landing_page['facebook_picture_id'] = '2246628752116991';
            $result_share_facebook = $this->count_like_and_share_landing_page('shares', '1459223034190904_'.$user_landing_page['facebook_picture_id']);
            
            $result_like_facebook = $this->count_like_and_share_landing_page($field_facebook, $user_landing_page['facebook_picture_id']);

            $total_like_facebook = 0;

            foreach($result_like_facebook as $type_like){
                if(count($type_like)==1){
                    continue;
                }
                $total_like_facebook += (int)$type_like['summary']['total_count'];
            }
            $total_share_facebook = $result_share_facebook['shares']['count'];

            $user_landing_page_new = array(
                'id'    => $user_landing_page['id'],
                'count_like_facebook'   => $total_like_facebook,
                'count_share_facebook'  => $total_share_facebook,
            );

            array_push($list_user_landing_page_new, $user_landing_page_new);

            $this->Landing_Page_Model->saveOauthUsers($list_user_landing_page_new);
        }
    }

    function count_like_and_share_landing_page($field_facebook, $post_id){
        $accessToken = 'EAAgZCCZAfTPeYBANFa9gAOtvqIfWFePlgy9SCe4W3yQkViLsGug10lEOxsZBvZBb0qnZBJVsqvQEUpLsY0w3YFBbvAUMV5zjhEZAK4ZAVzZC1KAQaXB7wLzhmu20Y1sgbzpu1hjlQU4lGwhlHvgYhqZCDS0QWZC5uXqv6Gs5HG24AfQBXKPaiSZAfxtWfa4KZAt44ArXmbII18hBQQZDZD';
        
        if(empty($post_array))
        {
            $post_array = array(
                "access_token" => $accessToken,
                'fields' => $field_facebook,
                'message'=> '',
            );
            
        }
            if(empty($url))
            {
                $url = "https://graph.facebook.com/".$post_id;
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
          
            $result = json_decode($result, true);
            return $result;
    }
}