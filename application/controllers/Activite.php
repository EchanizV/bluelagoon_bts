<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activite extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Activite_model');
        $this->load->helper('url');
    }
    
    function index()
    {
        $head_data['title'] = "Liste des activités";
        $this->load->view('head_content',$head_data);
        $this->load->view('commons/adminNav'); 
        $content_data['heading'] = "Liste des employés de Blue lagoon";		
        $content_data['content'] = $this->Activite_model->get_all();
        $this->load->view('act_liste',$content_data);
        
        $this->load->view('end_file_content');
    }
    
    function getAct($id)
    {
        $emp  = $this->Employee_model->get_emp($id);
        $head_data['title'] = "Voir mes activités";
        $this->load->view('head_content',$head_data);
        $this->load->view('commons/adminNav'); 
        $content_data['heading'] = "Modifier un employé";		
        $content_data['content'] = $this->Employee_model->get_all();
        $content_data['emp'] = $emp[0];
        $this->load->view('modif_view',$content_data);
        
        $this->load->view('end_file_content');
    }
    
    function reserver($id)
    {
        $act  = $this->Activite_model->getAct($id);
        $head_data['title'] = "Réserver l'activité";
        $this->load->view('head_content',$head_data);	
        $content_data['content'] = $this->Activite_model->get_all();
        $content_data['act'] = $act[0];
        $this->load->view('reserver_view',$content_data);
        
        $this->load->view('end_file_content');
    }
    
    function res($id)
    {
            $nbP = $this->input->post('res');
            $this->Activite_model->reserve($nbP, $id);
            redirect('FreeAccess');
    }
    
    function modifAct()
    {
        $head_data['title'] = "Modification des activités";
        $this->load->view('head_content',$head_data);
        $this->load->view('commons/adminNav'); 
        $content_data['heading'] = "Modification des activités de Blue lagoon";		
        $content_data['content'] = $this->Activite_model->get_all();
        $this->load->view('modifAct_view',$content_data);
        
        $this->load->view('end_file_content');
    }
    
    function modAct($id)
    {
        $act  = $this->Activite_model->getAct($id);
        $head_data['title'] = "Modifier un employé";
        $this->load->view('commons/adminNav'); 
        $this->load->view('head_content',$head_data);
        
        $content_data['heading'] = "Modifier un employé";		
        $content_data['content'] = $this->Activite_model->get_all();
        $content_data['emp'] = $act[0];
        $this->load->view('modAct_view',$content_data);
        
        $this->load->view('end_file_content');
    }
}
