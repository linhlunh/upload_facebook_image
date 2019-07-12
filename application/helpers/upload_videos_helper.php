<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function hit_counter($article_id) {
	$CI = &get_instance();
	$CI->load->model('Landing_Page_Model');
	$saved = $CI->Landing_Page_Model->increase_hit_counter($article_id);

	return $saved;
}