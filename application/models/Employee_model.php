<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model
{    
    protected $table = 'employe';
    protected $tables = 'fonction';

    public function get_all()
    {
        return $this->db->select('*')
                        ->from($this->table, $this->tables)
                        ->order_by(1, 'asc')
                        ->get()
                        ->result();
    }
    
    public function get_emp($id)
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->where('idEmploye', $id)
                    ->get()
                    ->result();
    }
    
    public function modif($nom, $prenom, $rue, $cp, $ville, $mail, $tel, $psw, $id)
    {
        $this->db->set('nomEmploye',$nom);
        $this->db->set('prenomEmploye',$prenom);
        $this->db->set('adresseEmploye',$rue);
        $this->db->set('cpEmploye',$cp);
        $this->db->set('villeEmploye',$ville);
        $this->db->set('mailEmploye',$mail);
        $this->db->set('telEmploye',$tel);
        $this->db->set('pswEmploye',$psw);
        
        $this->db->where('idEmploye',$id);
        $this->db->update($this->table);
        
        
    }
    
    public function add($nom, $pre, $rue, $cp, $vil, $mail, $tel)
    {
        $this->db->set('NomEmploye', $nom);
        $this->db->set('prenomEmploye', $pre);
        $this->db->set('adresseEmploye', $rue);
        $this->db->set('cpEmploye',$cp);
        $this->db->set('villeEmploye',$vil);
        $this->db->set('mailEmploye',$mail);
        $this->db->set('telEmploye',$tel);
        $this->db->set('idFonction', 2);
        
        $this->db->insert($this->table);
    } 
}
    