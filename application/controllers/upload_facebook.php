<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_Facebook extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');


    }

	public function index()
	{
        $this->PostImageUseCurl();
       
       
		$this->load->view('uploadpage.html');
    }
    
    function PostImageUseCurl(){
        $action = $this->input->post();
        
        if(!empty($action) && $action['action'] == 'save')
        {
            $fileImage = $_FILES['uploadImage'];
            //echo('<pre>');print_r($fileImage);echo('</pre>');exit();
            //echo('<pre>');print_r($fileImage);echo('</pre>');exit();
            $post_array = array(
            		"access_token" => 'EAAF65xLU4I0BAN1jFoKZAKXy2ZA7ZBwsLUfbpCla5kQyHPVkkr4zF2CnPUHZAHFNWx3KZCEb6xwVnZAMSxCN6wUEdaI0JiZBHZBzI24FjNmIZAexkNG7UR1mkw86UkqeOSyh9gajGZAAjzjiKzzZB7li6GODbYrrkb9xPIJFAExXDiDkwZDZD',
            		"source" => new CurlFile($fileImage['tmp_name']),//"@".$fileImage['tmp_name'],
            		"message"=>"Upload Test",
            );
            //echo('<pre>');print_r($post_array);echo('</pre>');exit();
            $url = "https://graph.facebook.com/2235410473159646/photos";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_array);
            
            
            $buffer = curl_exec($ch);
            
            $info = curl_getinfo($ch);
            
            curl_close($ch);
            
            echo('<pre>');print_r($buffer);echo('</pre>');
            echo('<pre>');print_r($info);echo('</pre>');exit();
        }
    }

    function PostImageUseApp()
    {
        require_once 'D:\xampp\htdocs\upload-image\application\libraries\facebook-php-sdk\src\Facebook\autoload.php';

        require_once 'D:\xampp\htdocs\upload-image\application\libraries\facebook-php-sdk\src\Facebook\FileUpload\FacebookFile.php';
        
        $action = $this->input->post('action');

        if(!empty($action))
        {
            $file = $_FILES['uploadImage'];
                $app_id = '416607848685709';

                $app_secret = 'd0f71d7257f07efe09e891771d39464e';

                $page_id = '1148101135223924';

                $album_id = '2235410473159646';

                $page_access_token = 'EAAF65xLU4I0BAN1jFoKZAKXy2ZA7ZBwsLUfbpCla5kQyHPVkkr4zF2CnPUHZAHFNWx3KZCEb6xwVnZAMSxCN6wUEdaI0JiZBHZBzI24FjNmIZAexkNG7UR1mkw86UkqeOSyh9gajGZAAjzjiKzzZB7li6GODbYrrkb9xPIJFAExXDiDkwZDZD';
                $config = array(
                    'app_id' => $app_id,
                    'app_secret' => $app_secret,
                    'default_graph_version' => 'v2.2',
                    );
                    $fb = new Facebook\Facebook($config);
                    
                    $data = [
                    'message' => 'This is my Photo',
                    'source' => $fb->fileToUpload($file['tmp_name']),
                    ];
                    try {
                    // Returns a `Facebook\FacebookResponse` object
                    $response = $fb->post('/'.$album_id.'/photos', $data, $page_access_token);
                    $graphNode = $response->getGraphNode();
                    echo 'Success!!! Photo ID: ' . $graphNode['id'];
                    } catch(Facebook\Exceptions\FacebookResponseException $e) {
                    echo 'Graph returned an error: ' . $e->getMessage();
                    exit;
                    } catch(Facebook\Exceptions\FacebookSDKException $e) {
                    echo 'Facebook SDK returned an errorour: ' . $e->getMessage();
                    exit;
                    }
        }
    }
}
