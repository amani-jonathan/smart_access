<?php

namespace App\Controllers;
use App\Models\AdminModel;




class Login extends BaseController
{
    private $qrcode_dir = 'public/assets/images/qrcode/';

    public function inscription()
    {
        $data['data'] = $this->nano->gets("objet_rdv");
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
                                "prenoms"=> $prenoms, "objet"=> $objet, "message"=> $message, "statut"=> true );

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
        
        
        
    public function store(){

        $chaine = $this->common->get_string(3);
        $date = $this->common->get_DateTime();

            $adminModel = new AdminModel();
            $data = [
                'reference' => $chaine. $date,
                'date_rdv'  => $this->request->getVar('date_rdv'),
                'service'  => $this->request->getVar('service'),
                'nom'  => $this->request->getVar('nom'),
                'prenoms'  => $this->request->getVar('prenoms'),
                'matricule'  => $this->request->getVar('matricule'),
                'objet'  => $this->request->getVar('objet'),
                'message'  => $this->request->getVar('message'),
            ];


            $adminModel->insert($data);
            return $this->response->redirect(site_url('/qrcode'));

            
        } 
        
        
    
    public function index(){
        return view('auth/login');
    }  

        
        public function dashboard(){
            return view('dashboard');
        }  
        
        
        public function validation(){
            return view('auth/qrcode');
        }
}






