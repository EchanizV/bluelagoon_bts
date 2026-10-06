<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employe extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_model');
        $this->load->helper('url');
    }
    
    function index()
    {   
        $head_data['title'] = "Liste des employés";
        $this->load->view('head_content',$head_data);
        $this->load->view('commons/adminNav'); 
        $content_data['heading'] = "Liste des employés de Blue Lagoon";		
        $content_data['content'] = $this->Employee_model->get_all();
        $this->load->view('emp_liste',$content_data);
        $this->load->view('end_file_content');
    }
    
    function formmodifier($id)
    {
        $emp  = $this->Employee_model->get_emp($id);
        $head_data['title'] = "Modifier un employé";
        $this->load->view('commons/adminNav'); 
        $this->load->view('head_content',$head_data);
        
        $content_data['heading'] = "Modifier un employé";		
        $content_data['content'] = $this->Employee_model->get_all();
        $content_data['emp'] = $emp[0];
        $this->load->view('modif_view',$content_data);
        
        $this->load->view('end_file_content');
    }
    
    function addemploye()
    {
        $head_data['title'] = "Modifier un employé";
        $this->load->view('commons/adminNav'); 
        $this->load->view('head_content',$head_data);
        $content_data['content'] = $this->Employee_model->get_all();
        $content_data['heading'] = "Ajouter un employé";
        $this->load->view('addEmploye_view',$content_data);
        
        $this->load->view('end_file_content');
    }
    
    function add()
    {
        $nom = $this->input->post('nom');
        $pre = $this->input->post('prenom');
        $rue = $this->input->post('rue');
        $cp = $this->input->post('cp');
        $vil = $this->input->post('ville');
        $mail = $this->input->post('mail');
        $tel = $this->input->post('tel');
        
        $this->Employee_model->add($nom, $pre, $rue, $cp, $vil, $mail, $tel); 
        
        redirect('Employe','location'); 
    }
    
    function afficheremp($id)
    {
        $emp  = $this->Employee_model->get_emp($id);
        $head_data['title'] = "Afficher l'employé";
        $this->load->view('commons/adminNav'); 
        $this->load->view('head_content',$head_data);	
        $content_data['content'] = $this->Employee_model->get_all();
        $content_data['emp'] = $emp[0];
        $this->load->view('afficherEmp_view',$content_data);
        
        $this->load->view('end_file_content');
    }
   
    function modifier($id){
        
        
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $rue = $this->input->post('rue');
        $cp = $this->input->post('cp');
        $ville = $this->input->post('ville');
        $mail = $this->input->post('mail');
        $tel = $this->input->post('tel');
        $psw = $this->input->post('psw');
        
        $this->Employee_model->modif($nom, $prenom, $rue, $cp, $ville, $mail, $tel, $psw, $id);
        
        redirect('Employe','location');  
    }
   
}
