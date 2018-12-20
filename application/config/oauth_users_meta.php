<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config = array();

$config['oauth_users'] = array(
    array(
        'field' => 'full_name',
        'label' => lang("full_name"),
        'rules' => 'required'),
    array(
        'field' =>'birthday',
        'label' => lang("birthday"),
        'rules'=> 'required'),
    array(
        'field' =>'email',
        'label' => lang("email"),
        'rules' => 'required|valid_emails'),
    array(
        'field' =>'phone',
        'label' => lang("phone"),
        'rules' => 'required|callback_phone_check'),
    array(
        'field' => 'description',
        'label' => lang("description"),
        'rules' =>''),
);

$config['facebook_errors'] = array(
    '190' => 'Access token ',
);