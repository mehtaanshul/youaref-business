<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_registrationnotification extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_registrationnotification_model');
    } 

    /*
     * Listing of user_registrationnotification
     */
    function index()
    {
        $data['user_registrationnotification'] = $this->User_registrationnotification_model->get_all_user_registrationnotification();
        
        $data['_view'] = 'user_registrationnotification/index';
        $this->load->view('layouts/main',$data);
    }
}