<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccueilAdmin extends CI_Controller {

    public function _construct()
    {
        parent::__construct();
        $this->load->model('Employee_model');
        $this->load->model('Activite_model');
    }
    
    public function index()
    {
        
        $head_data['title'] = "Blue Lagoon";
        $this->load->view('head_content',$head_data);    
        $this->load->view('commons/adminNav');    
        $this->load->view('AccueilAdmin_index');
        $this->load->view('end_file_content');
    }
    
}
