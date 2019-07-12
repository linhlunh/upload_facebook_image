<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
* Upload_Model
*/

class Landing_Page_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        
    }
    
    public function isSetImageName($nameVideo)
    {
        $this->db->select('*');

        $this->db->where('picture',$nameVideo);

        $query = $this->db->get('oauth_users');

        $result = $query->result_array();

        if(!empty($result))
        {
            return true;
        }else
        {
            return false;
        }
    }

    public function create_img($img)
    {
        
        $this->db->insert('oauth_users', $img);
        
        $id = $this->db->insert_id();
        
        return $id;
    }

    public function UpdateEventCodeOauthUsers($id,$oauthUsers)
    {
        $this->db->where('id',$id);

        $this->db->update('oauth_users',$oauthUsers);
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

        $this->db->or_like('event_code',$keyword);

        $query  =  $this->db->get('oauth_users');

        return $query->result_array();
    }

    function getOauthUsers($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $query = $this->db->get('oauth_users');
        $result = $query->result_array()[0];
        return !empty($result) ? $result : '';
    }

    /**
	 * Get like and share landing page
	 *
	 * @author CuongLD
	 * @since Jan 30 2019
	 */
    function getFacebookIdOfLandingPage(){

        $this->db->select('id, facebook_picture_id');

        $this->db->where('link','share-photo');

        $this->db->where('facebook_picture_id !=','');

        $this->db->where('facebook_picture_id !=',null);

        $query = $this->db->get('oauth_users');

        $result = $query->result_array();

        return !empty($result) ? $result : '';
    }

    function saveOauthUsers($list_user_landing_page){
        $this->db->update_batch('oauth_users', $list_user_landing_page, 'id');
    }

    function increase_hit_counter($article_id) {
        $str_query = " UPDATE oauth_users SET views = views + 1 WHERE id = ".$article_id;
        $this->db->query($str_query);
    }

    function get_view($article_id){

        $this->db->select('views');

        $this->db->where('id', $article_id);

        $query = $this->db->get('oauth_users');

        $result = $query->result_array();

        return $result;

    }

    function get_videos($article_id){
        $this->db->select('picture');

        $this->db->where('id', $article_id);

        $query = $this->db->get('oauth_users');

        $result = $query->result_array();

        return $result;
    }
}