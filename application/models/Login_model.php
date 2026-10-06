    <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    protected $table = 'employe';
    
    public function get_emp($user)
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->where('mailEmploye', $user)
                    ->get()
                    ->result();
    }
    
    public function isAdmin($user, $pwd)
    {
        $don = $this->db->select('*')
                    ->from($this->table)
                    ->where('mailEmploye', $user)
                    ->where('pswEmploye', $pwd)
                    ->get()
                    ->result();
        if(count($don) == 1){
            if ($don[0]->idFonction == 1)
            {
                return true;
            }
        }
    }
    
    public function isEmp($user, $pwd)
    {
        $don = $this->db->select('*')
                    ->from($this->table)
                    ->where('mailEmploye', $user)
                    ->where('pswEmploye', $pwd)
                    ->get()
                    ->result();
        if(count($don) == 1){
            if ($don[0]->idFonction == 2)
            {
                return true;
            }
        }
    }
    
    
}
