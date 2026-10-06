<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccueilClient extends CI_Controller {

    public function _construct()
    {
        parent::__construct();
        $this->load->model('Employee_model');
        $this->load->model('Activite_model');
    }
    
    public function index()
    {
        $head_data['title'] = "Liste des activités disponibles";
        $this->load->view('head_content',$head_data);
        $this->load->view('commons/nav');
        
        $content_data['heading'] =  "Liste des activités disponible de Blue Lagoon";		
        $content_data['content'] = $this->Activite_model->get_all();
        $this->load->view('AccueilClient_view',$content_data);
        
        $this->load->view('end_file_content');
    }
}