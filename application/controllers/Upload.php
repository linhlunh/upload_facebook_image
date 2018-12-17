<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->database();

        $this->load->model('Upload_Model');

        $this->load->library('form_validation');

        $this->load->helper(array('url', 'form'));
    }


    public function index()
    { 
        $img = $this->input->post();
        $today = date("Y-m-d H:i:s");
        $data = array();
        if (!empty($_FILES['picture']['name'])) {
            $img['picture'] = $_FILES['picture']['name'];
        }
        $img['created'] = $today;
        $img['link'] = "share-photo";
       
        $config_rule = array(
            array('field'=> 'full_name', 'label'=> 'full_name', 'rules'=> 'required'),
            array('field'=>'birthday', 'label' =>'birthday', 'rules'=> 'required'),
            array('field'=>'email', 'label' => 'email', 'rules' => 'required'),
            array('field'=>'phone', 'label' =>'phone_number', 'rules' => 'required'),
            
            array('field'=> 'description', 'label' =>'description', 'rules'=>'required'),
            
        );
       
        $this->form_validation->set_rules($config_rule);
        $this->form_validation->set_message('required','<span style="color:red">Xin moi nhap %s</span>');
        
		
		if ($this->form_validation->run() && !empty($_FILES['picture']['name'])){
            unset($img['action']);
            if (!empty($img)){
                $status = $this->Upload_Model->create_img($img);
                
                $this->PostImageUseCurl();

                $urlMoveUploadFile = str_replace('application\controllers','',__DIR__).'assets\img';

                $urlMoveUploadFile = str_replace('\\','/',$urlMoveUploadFile);

                move_uploaded_file($_FILES['picture']['tmp_name'], $urlMoveUploadFile .'/'. $_FILES['picture']['name']);
                
            }
        }elseif(empty($_FILES['picture']['name']) && !empty($img['action'])){
            $data['errors'] = 'Chua upload file';
            
        } 
        $this->load->view('upload/upload',$data);
    }

    public function show()
    {
        
        $img['list_img'] = $this->Upload_Model->getPictureByid(1);
        
        $this->load->view('upload/list_img', $img);
    }

    function PostImageUseCurl(){
        
       
            $fileImage = $_FILES['picture'];

            $albumId = '2235410473159646';
           
            $accessToken = 'EAAF65xLU4I0BAN1jFoKZAKXy2ZA7ZBwsLUfbpCla5kQyHPVkkr4zF2CnPUHZAHFNWx3KZCEb6xwVnZAMSxCN6wUEdaI0JiZBHZBzI24FjNmIZAexkNG7UR1mkw86UkqeOSyh9gajGZAAjzjiKzzZB7li6GODbYrrkb9xPIJFAExXDiDkwZDZD';

            $post_array = array(
            		"access_token" => $accessToken,
            		"source" => new CurlFile($fileImage['tmp_name']),//"@".$fileImage['tmp_name'],
            		"message"=>"Upload Test",
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
            
            
            $buffer = curl_exec($ch);
            
            $info = curl_getinfo($ch);
            
            curl_close($ch);
    }
}