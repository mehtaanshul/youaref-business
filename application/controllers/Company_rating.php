<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Company_rating extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Company_rating_model');
    } 

    /*
     * Listing of company_rating
     */
    function index()
    {
        $data['company_rating'] = $this->Company_rating_model->get_all_company_rating($_SESSION['company_id']);
        
        $data['_view'] = 'company_rating/index';
        $this->load->view('layouts/main',$data);
    }
}
