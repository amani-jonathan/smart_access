<?php namespace App\Models;

use CodeIgniter\Model;

class Nano extends Model {
	
	protected $db;
	
	function __construct() {
		parent::__construct();

		$this->db = \Config\Database::connect();
	}
	
	public function saves($table, $data)
    {
        $this->db->table($table)
        		->insert($data); 

		return true;
	}

	public function gets($table)
    {
        $rek= $this->db->table($table)
					   ->get()
					   ->getResult(); 
		return $rek;
	}

	public function getCampagne($perPage, $offset)
    {
        $rek= $this->db->table('campagne')
					   ->where('etat_validation', 1)
					   ->orderBy('id_camp', 'DESC')
					   ->get($perPage, $offset)
					   ->getResult(); 
		return $rek;
	}

	public function getAnnonce($rccm, $perPage, $offset)
    {
        $rek= $this->db->table('entreprises')
					   ->where('FORME_JURIDIQUE', $rccm)
					   ->orderBy('Date_pub', 'DESC')
					   ->limit($perPage, $offset)
					   ->get()
					   ->getResult(); 
		return $rek;
	}
	
	public function getId($table, $id, $value)
    {
        $rek= $this->db->table($table)
					   ->where($id, $value)
					   ->get()
					   ->getFirstRow(); 
		return $rek;
	} 
	
	public function query_one($query)
    {
        $rek = $this->db->query($query)
				->getFirstRow(); 

		return $rek;
	}

	public function query_count($table)
    {
        $rek = $this->db->table($table)
				->countAll(); 

		return $rek;
	}
	public function query_counts($query)
    {
        $rek = $this->db->query($query)
				->getResult(); 

		return count($rek);
	}

	public function query_result($query)
    {
        $rek = $this->db->query($query)
				->getResult(); 

		return $rek;
	}

	public function updates($table, $id, $value, $data)
    {
        $this->db->table($table)
				->set($data)
				->where($id, $value)
        		->update(); 

		return true;
	}

	public function updates_two($table, $id, $id2, $value, $value2, $data)
    {
        $this->db->table($table)
				->set($data)
				->where($id, $value)
				->where($id2, $value2)
        		->update(); 

		return true;
	}

	public function updates_three($table, $id, $id2, $id3, $value, $value2, $value3, $data)
    {
        $this->db->table($table)
				->set($data)
				->where($id, $value)
				->where($id2, $value2)
				->where($id3, $value3)
        		->update(); 

		return true;
	}

	public function deletes($table, $id, $value)
    {
        $this->db->table($table)
				->where($id, $value)
        		->delete(); 

		return true;
	}

	public function deletes_two($table, $id, $id2, $value, $value2)
    {
        $this->db->table($table)
				->where($id, $value)
				->where($id2, $value2)
        		->delete(); 

		return true;
	}

	public function genereId($table, $id )
    {
	   $query = $this->db->query("SELECT IFNULL(MAX($id),0)+1 AS last_id FROM $table ")
       					->getFirstRow();
       return $query->last_id;
	}

	public function genereIdSexe($table, $id, $sexe)
    {
	   $query = $this->db->query("SELECT IFNULL(MAX($id),0)+1 AS last_id FROM $table WHERE sexe='".$sexe."' ")
       					->getFirstRow();
       return $query->last_id;
	}
    
    public function genereIdString($table, $id, $nb_substr )
    {
	   $query = $this->db->query("SELECT IFNULL(MAX(SUBSTR($id,$nb_substr)),0)+1 AS last_id FROM $table ")
						->getFirstRow();

       return $query->last_id;
    }
    
}
		