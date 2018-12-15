<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
* Upload_Model
*/

class Upload_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        
    }
    
    public function create_img($img)
    {
        
        $this->db->insert('oauth_users', $img);
        
        $id = $this->db->insert_id();
        
        return $id;
    }

    public function getPictureByid($id)
    {
        $query = $this->db->get('oauth_users');
        
		$img = $query->result_array();
		
		if (!empty($img))
		{
			return $img;
		}
		
		return false;
    }
}