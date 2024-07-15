<?php

namespace App\Controllers;
use App\Models\AdminModel;




class Main extends BaseController
{
    private $qrcode_dir = 'public/assets/images/qrcode/';

    public function index()
    {
        $data['data'] = $this->nano->gets("preoccupation");
        //var_dump($data); exit;
        return view('scanner/scan', $data);
    }  

    public function checking()
    {
        $reference = $_POST['reference'];
        
        if(!empty($reference))
        {
            $param= $this->nano->getId("parametre", "id", "1");

            $info= $this->nano->getId("demande", "reference", $reference);
            if(!empty($info))
            {
                //on va verifier certaines conditions
                //1- on va verifier le nombre possibilité d'entrée dans l'établissement avec le QRCODE
                $nb_visiteur = $this->nano->query_counts('SELECT * FROM entree_sortie WHERE reference="'.$reference.'" ');

                if($param->nbre_possibilite > $nb_visiteur)
                {
                    //on verifie si le système de lecture de code barre est activé
                    if($param->verrouillage_porte == 1)
                    {
                        //on verifie si le portail doit etre ouvert automatiquement
                        if($param->ouverture_portail == 1)
                        {
                            //on verifie si un bip sonore est activé
                            if($param->bip_sonore == 1)
                            {
                                //enregistrement des données dans la table: entree_sortie
                                $data = array("reference"=> $reference, "date_checking_entree"=> date('Y-m-d H:i:s'),);
                                
                                $this->nano->saves("entree_sortie", $data);

                                //on lance le code python pour le bip sonore
                                shell_exec(base_url()."public/assets/code_python/bip_sonore.py");

                                //on lance le code python d'ouverture du portail automatique
                                shell_exec(base_url()."public/assets/code_python/ouverture.py");

                                echo "La reférence N° ".$reference."<br><br>est autorisée à entrer <br>dans l'établissement.";
                            }
                            else
                            {
                                //enregistrement des données dans la table: entree_sortie
                                $data = array("reference"=> $reference, "date_checking_entree"=> date('Y-m-d H:i:s'),);
                                
                                $this->nano->saves("entree_sortie", $data);

                                //on lance le code python d'ouverture du portail automatique
                                shell_exec(base_url()."public/assets/code_python/ouverture.py");

                                echo "La reférence N° ".$reference."<br><br>est autorisée à entrer <br>dans l'établissement.";
                            }
                        }
                        else
                        {
                            //on declenche automatiquement l'ouverture du portail

                            //on verifie si un bip sonore est activé
                            if($param->bip_sonore == 1)
                            {
                                //enregistrement des données dans la table: entree_sortie
                                $data = array("reference"=> $reference, "date_checking_entree"=> date('Y-m-d H:i:s'), );
                                
                                $this->nano->saves("entree_sortie", $data);

                                //on lance le code python pour le bip sonore
                                shell_exec(base_url()."public/assets/code_python/bip_sonore.py");

                                echo "La reférence N° ".$reference."<br><br>est autorisée à entrer <br>dans l'établissement.";
                            }
                            else
                            {
                                //enregistrement des données dans la table: entree_sortie
                                $data = array("reference"=> $reference, "date_checking_entree"=> date('Y-m-d H:i:s'), );
                                
                                $this->nano->saves("entree_sortie", $data);

                                echo "La reférence N° ".$reference."<br><br>est autorisée à entrer <br>dans l'établissement.";
                            }
                        }
                    } 
                    else
                    {
                        echo "3";
                    }
                }
                else
                {
                    echo "2";
                }
            }
            else
            {
                echo "1";
            }
        }
        else
        {
            echo "0";
        }
        
    }

    public function checking_sortie()
    {

    }

    public function gate_validation($ref)
    {
        $reference = base64_decode($ref);

        $param= $this->nano->getId("parametre", "id", "1");
        if($param->ouverture_portail == 0)
        {
            $info= $this->nano->query_one("SELECT * FROM entree_sortie WHERE reference='".$reference."' ORDER BY id_ens DESC LIMIT 1");
            if(!empty($info))
            {
                $data = array("agent_entree"=> session('user_email'), "agent_date_ouverture"=> date('Y-m-d H:i:s'),);
                
                $this->nano->updates('entree_sortie', 'id_ens', $info->id_ens, $data);

                //OUVERTURE DU PORTAIL
                shell_exec(base_url()."public/assets/code_python/ouverture.py");

                $this->session->setFlashdata('message', 'Ouverture éffectuée.');
				return redirect('dashboard');
            }
        }        
    }

}






