<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model','LogManager',TRUE);
        $this->load->model('Logins_model','LogMan',TRUE);
    }
    
    function index()
    {
         $head_data['title'] = "Liste des employés";
         $content_data['heading'] = "Identifiez-vous";
         $this->load->view('commons/nav');
        $this->load->view('head_content',$head_data);
        $this->load->view('login_view',$content_data);
        
        $this->load->view('end_file_content');
    }
    
    function check_Form()
    {
        $this->form_validation->set_rules('login','Adresse e-mail','required');
        $this->form_validation->set_rules('pwd','Mot de Passe','required');
        if($this->form_validation->run() == false )
        {
            $data['heading'] = 'Erreur de saisie';
            $this->load->view('login_view',$data);
        }
        
        $user = $this->input->post('login');
        $pwd = $this->input->post('pwd');
        
        $id = $this->LogManager->get_emp($user);
        
        $this->session->set_userdata($user);
        
        if ($this->LogManager->isAdmin($user, $pwd))
        {
            redirect('AccueilAdmin/','location');
        }
        else
        if ($this->LogManager->isEmp($user, $pwd))
        {
            redirect('AccueilEmploye/','location');
        }
        else
        if($this->LogMan->isCli($user, $pwd))
        {
            redirect('AccueilClient/','location');
        }
        else
        {
            $head_data['title'] = "Liste des employés";
            $content_data['heading'] = "Erreur dans les identifiants";	
            $this->load->view('head_content',$head_data);
            $this->load->view('login_view',$content_data);
            var_dump($user);
            var_dump($pwd);
            var_dump($this->LogMan->isCli($user, $pwd));
            $this->load->view('end_file_content');
           
        }
    }
        function disconnect()
        {
            $this->session->sess_destroy();
            redirect('FreeAccess');
        }
    }
