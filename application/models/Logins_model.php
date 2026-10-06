<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logins_model extends CI_Model
{
    protected $table = 'client';
    
    public function isCli($user, $pwd)
    {
        $don = $this->db->select('*')
                    ->from($this->table)
                    ->where('mailClient', $user)
                    ->where('codeAcces', $pwd)
                    ->get()
                    ->result();
                    if(count($don) == 1)
                    {
                        return true;
                    }
    }
}