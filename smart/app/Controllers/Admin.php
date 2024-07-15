<?php namespace App\Controllers;

//use CodeIgniter\Controller;

class Admin extends BaseController
{
	private $content_dir = "public/backend/assets/upload/banniere/";
	private $content_dir2 = "public/backend/assets/upload/cours/";

	public function index()
	{
		$data['active_menu'] = "dashboard"; 
		$data['param'] = "dashboard";

		$data["param"] = $this->nano->getId("parametre", "id", 1);

		$data['demandes'] = $this->nano->query_count('demande');
		$data['new_dmd'] = $this->nano->query_counts('SELECT * FROM demande WHERE user_traitement="" ');
		$data['current_dmd'] = $this->nano->query_counts('SELECT * FROM demande WHERE ouverture_dossier=1 AND user_traitement="" ');
		$data['validated_dmd'] = $this->nano->query_counts('SELECT * FROM demande WHERE etat=1 AND user_traitement<>"" ');

		$data['data'] = $this->nano->query_result('SELECT * FROM entree_sortie WHERE date_checking_entree <>"0000-00-00 00:00:00" AND agent_entree="" ORDER BY date_checking_entree DESC LIMIT 5 ');

		return view('dashboard', $data);
	}

	public function service_list()
	{
		$data['active_menu'] = "parametres";
		$data['active_menu1'] = "banniere";

		$data['data'] = $this->nano->gets('services');

		return view('liste_service', $data);
	}

	public function type_list()
	{
		// $data['active_menu'] = "parametres";
		// $data['active_menu1'] = "banniere";

		$data['service'] = $this->nano->gets('services');
		$data['data'] = $this->nano->gets('preoccupation');

		return view('liste_type', $data);
	}

	public function param_list()
	{
		$data['param'] = $this->nano->getId("parametre", "id", "1");

		return view('liste_param', $data);
	}

	public function new_demande()
	{
		$data['active_menu'] = "demandes";
		$data['active_menu1'] = "new";

		$data['data'] = $this->nano->gets('demande');

		return view('demande_new', $data);
	}

	public function add_service()
    {
        if($this->request->getMethod() == "post")
        {
            $libelle = $this->request->getPost('libelle');  
			$btn_value= $this->request->getPost('Enregistrer');            

            if($libelle != "" )
            {
				if($btn_value == "Enregistrer")
				{
					$data = array("libelle"=> $libelle,);

					$this->nano->saves("services", $data);

					$this->session->setFlashdata('message', 'Enregistrement éffectué avec succès.');
					return redirect()->back();
				}
				else
				{
					$id = $this->request->getPost('id'); 
					
					$data = array("libelle"=> $libelle, );

					$this->nano->updates('services', 'id', $id, $data);
	
					$this->session->setFlashdata('message', 'Modification éffectuée avec succès.');
					return redirect()->back();
				}			
            }
        }
        else
        {
            $this->session->setFlashdata('messages', 'Erreur de méthode.');
            return redirect()->back();
        }
    }

	public function add_type()
    {
        if($this->request->getMethod() == "post")
        {
            $libelle = $this->request->getPost('libelle');  
            $service = $this->request->getPost('service');  
			$btn_value= $this->request->getPost('Enregistrer');            

            if($libelle != "" && $service != "" )
            {
				if($btn_value == "Enregistrer")
				{
					$data = array("libelle"=> $libelle, "service"=> $service, );

					$this->nano->saves("preoccupation", $data);

					$this->session->setFlashdata('message', 'Enregistrement éffectué avec succès.');
					return redirect()->back();
				}
				else
				{
					$id = $this->request->getPost('id'); 
					
					$data = array("libelle"=> $libelle, "service"=> $service, );

					$this->nano->updates('preoccupation', 'id', $id, $data);
	
					$this->session->setFlashdata('message', 'Modification éffectuée avec succès.');
					return redirect()->back();
				}			
            }
        }
        else
        {
            $this->session->setFlashdata('messages', 'Erreur de méthode.');
            return redirect()->back();
        }
    }

	public function update_params($var1, $var2)
    {
		switch ($var1) 
		{
			case '1':
				$data = array("ouverture_portail"=> $var2, );
				break;
			
			case '2':
				# code...
				break;

			case '3':
				$data = array("retour_visite_termine"=> $var2, );
				break;

			case '4':
				$data = array("verrouillage_porte"=> $var2, );
				break;

			case '5':
				$data = array("bip_sonore"=> $var2, );
				break;
		}

		$this->nano->updates('parametre', 'id', "1", $data);

		$this->session->setFlashdata('message', 'Paramètre modifié avec succès.');
		return redirect()->back();
    }

	public function update_params2()
    {
		$data = array("nbre_possibilite"=> $this->request->getPost('param'), );
	
		$this->nano->updates('parametre', 'id', "1", $data);

		$this->session->setFlashdata('message', 'Paramètre modifié avec succès.');
		return redirect()->back();
    }

	public function getServiceId($id)
	{
		$data = $this->nano->getId("services", "id", $id);
		echo json_encode($data);
		
	}

	public function getTypeId($id)
	{
		$data = $this->nano->getId("preoccupation", "id", $id);
		echo json_encode($data);
		
	}

	public function deleteServiceId($id)
	{
		$data = $this->nano->deletes("services", "id", $id);
		echo json_encode($data);
	}

	public function deleteTypeId($id)
	{
		$data = $this->nano->deletes("preoccupation", "id", $id);
		echo json_encode($data);
	}

}
