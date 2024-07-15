<?php namespace App\Controllers;

class Login extends BaseController
{
	private $qrcode_dir = 'public/assets/images/qrcode/';

	public function index()
	{
		// $password = password_hash("admin2023", PASSWORD_DEFAULT);
		// var_dump($password); exit;

		return view('auth/login');
	}

	public function inscription()
    {
        $data['data'] = $this->nano->gets("preoccupation");
        //var_dump($data); exit;
        return view('auth/register', $data);
    }  

    public function save_rdv()
    {
        if($this->request->getMethod() == "post")
        {
            $nom = $this->request->getPost('nom');  
            $prenoms = $this->request->getPost('prenoms');  
            $email = $this->request->getPost('email');  
            $date_rdv = $this->request->getPost('date_rdv'); 
            $objet = $this->request->getPost('objet'); 
            $message = $this->request->getPost('message'); 
            

            if($nom != "" && $prenoms != "" && $date_rdv !="" && $objet !="")
            {
                $reference = $this->common->generateRandomString(3).date("YmdHis");
                $info = $this->nano->getId("objet_rdv", "libelle", $objet);

                $data = array("reference"=> $reference, "date_rdv"=> $date_rdv, "service"=> $info->service, "nom"=> $nom,
                                "prenoms"=> $prenoms, "objet"=> $objet, "message"=> $message, "statut"=> true,  );

                $this->nano->saves("demande", $data);

                return redirect()->to('notif/'.$reference);			
            }
        }
        else
        {
            $this->session->setFlashdata('messages', 'Erreur de méthode.');
            return redirect()->back();
        }
    }

    public function notif($ref)
    {
        $info= $this->nano->getId("demande", "reference", $ref);

        $np = $info->nom." ".$info->prenoms;

        //on genere le qrcode
        $data['qrcode'] = $this->generate_rdv_qrcode($ref, $np, $info->date_rdv);
        $data['message'] = "Votre rendez-vous a bien été pris en compte. <br>Merci de conserver ce <b>QRCODE</b>, jusqu'au jour du rendez-vous.";

        return view('auth/notification', $data);
    } 

    public function generate_rdv_qrcode($ref, $nom, $date_rdv)
	{
		//GENERATE QRCODE
		$params['data'] = $ref."\n".$nom."\n".$date_rdv;
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = FCPATH.$this->qrcode_dir.$ref.'.png';
		$this->ciqrcode->generate($params);

		return base_url().$this->qrcode_dir.$ref.".png";
	}

	public function login()
	{
		if($this->request->getMethod() == "post")
		{
			$username = $this->request->getPost('username');  
			$password = $this->request->getPost('password');  

			//on check le code_campagne
			$data = $this->user->asObject()->where('email', $username)->first();

			if(!empty($data))
			{
				//on va checker si le password est juste
				if(password_verify($password, $data->password))
				{
					//on va checker si le statut est == 1
					if($data->status == true)
					{
						$user_data = [
							'user_id'       => $data->id_user, 
							'nom'     => $data->nom, 'prenoms'     => $data->prenoms,
							'user_pseudo'    => $data->pseudo, 'user_email'    => $data->email,
							'user_password'    => $data->password, 'user_status'    => $data->status, 
							'logged_in'     => true,
						];
						
						$this->session->set($user_data);

						return redirect()->to('dashboard');
					}
					else
					{
						$this->session->setFlashdata('messages', 'Desolé! Ce compte est inactif.');
						return redirect()->back()->withInput();
					}
				}
				else
				{
					$this->session->setFlashdata('messages', 'Mot de passe incorrect.');
					return redirect()->back()->withInput();
				}
			}
			else
			{
				$this->session->setFlashdata('messages', 'Cet utilisateur n\'est pas reconnu.');
				return redirect()->back()->withInput();
			}
		}
	}

	public function liste_user()
	{
		$data['active_menu'] = "utilisateur";

		$data['data'] = $this->user->asObject()->findAll();

		return view('backend/liste_user', $data);
	}

	public function create_user()
	{
		if($this->request->getMethod() == "post")
		{
			$nom = $this->request->getPost('nom');  
			$prenoms = $this->request->getPost('prenoms');  
			$pseudo = $this->request->getPost('pseudo');  
			$email = $this->request->getPost('email');  
			$password = $this->request->getPost('password');  
			$conf_password = $this->request->getPost('conf_password');  
			$statut = $this->request->getPost('status');  

			$btn_value= $this->request->getPost('Enregistrer');

			if($nom != "" && $email!="")
			{
				if($btn_value == "Enregistrer")
				{
					//on check si cet utilisateur existe deja
					$check = $this->user->asObject()->where('email', $email)->first();
					if(empty($check))
					{
						if($password == $conf_password)
						{
							$data = array("nom"=> $nom, "prenoms"=> $prenoms, "pseudo"=> $pseudo, "email"=> $email
										, "password"=> $password, "status"=> $statut );

							$this->user->insert($data);
			
							$this->session->setFlashdata('message', 'Enregistrement éffectué avec succès.');
							return redirect()->back();
						}
						else
						{
							$this->session->setFlashdata('messages', 'Les mots de passe ne sont pas identiques.');
							return redirect()->back();
						}
					}
					else
					{
						$this->session->setFlashdata('messages', 'Cet utilisateur existe déjà.');
						return redirect()->back();
					}
				}
				else
				{
					$id = $this->request->getPost('id_'); 

					if($password == $conf_password)
					{
						$data = array("nom"=> $nom, "prenoms"=> $prenoms, "pseudo"=> $pseudo, "email"=> $email
									, "password"=> $password, "status"=> $statut );

						$this->user->where('id_user', $id)
									->set($data)
									->update();
		
						$this->session->setFlashdata('message', 'Modification éffectuée avec succès.');
						return redirect()->back();
					}
					else
					{
						$this->session->setFlashdata('messages', 'Les mots de passe ne sont pas identiques.');
						return redirect()->back();
					}
				}				
			}
		}
		else
		{
			$this->session->setFlashdata('messages', 'Erreur de méthode.');
			return redirect()->back();
		}
	}

	public function getUserId($id)
	{
		$data = $this->nano->getId("user", "id_user", $id);
		echo json_encode($data);
	}

	public function deleteUserId($id)
	{
		$data = $this->nano->deletes("user", "id_user", $id);
		echo json_encode($data);
	}

	public function logout()
    {
        $this->session->destroy();

        return redirect()->to('admin');
    }

}
