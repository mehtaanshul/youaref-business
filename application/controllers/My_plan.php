<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class My_plan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('My_plan_model');
    } 

    /*
     * Listing of my_plans
     */
    function index()
    {
        $data['my_plans'] = $this->My_plan_model->get_all_my_plans();
        
        $data['_view'] = 'my_plan/index';
        $this->load->view('layouts/main',$data);
    }
}
