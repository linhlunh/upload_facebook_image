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
    
   public function getFullname()
   {
       $this->db->select('full_name');

       $query = $this->db->get('oauth_users');

       $img = $query->result_array();

       return $img;
      
   }

   function search($keyword)
    {
        $this->db->like('full_name',$keyword);

        $query  =  $this->db->get('oauth_users');

        return $query->result_array();
    }
}