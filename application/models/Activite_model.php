    <?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activite_model extends CI_Model
{    
    protected $table = 'seance';

    public function get_all()
    {
        return $this->db->select('*')
                        ->from('seance')
                        ->join('semaine','seance.idSemaine = semaine.idSemaine','left')
                        ->join('type_activite','seance.idTA = type_activite.idTA  ','left')
                        ->join('employe','seance.idEmploye = employe.idEmploye   ','left')
                        ->order_by(1, 'asc')
                        ->get()
                        ->result();
    }
    
    public function getAct($id)
    {
        return $this->db->select('*')
                    ->from($this->table)
                    ->where('idSeance', $id)
                    ->get()
                    ->result();
    }
    
     public function reserve($nbP, $id)
    {
         $act =  $this->Activite_model->getAct($id);
         $nbrP = $act[0]->nbrPlaces - $nbP;        
        $this->db->set('nbrPlaces', $nbrP);
        $this->db->where('idSeance',$id);
        $this->db->update($this->table);
        
        
    }
    
}
    