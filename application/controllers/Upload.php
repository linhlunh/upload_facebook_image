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

                
                move_uploaded_file($_FILES['picture']['tmp_name'], 'E:/XAmppp/htdocs/Upload_img/assets/img/' . $_FILES['picture']['name']);
                
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
}