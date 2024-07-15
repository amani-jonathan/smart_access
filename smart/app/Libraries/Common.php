<?php  namespace app\Libraries;

class Common 
{

    public function move_file($path, $file)
	{
		if($img = $file)
        {
            if ($img->isValid() && !$img->hasMoved())
            {
                $newName = $img->getRandomName();
                $img->move($path, $newName);

				return $path.$newName;
            }
        }
	}

    public function convert_money($montant)
    {
        $montant = ceil($montant);
        $val = substr($montant, -1);

        if($val < 5)
        {
            $val = 5-$val;
        }
        elseif($val >5)
        {
            $val = 10-$val;
        }

        $montant = $montant + $val;
        return $montant;
    }

    public function nohtml($message) 
    {
        $message = trim($message);
        $message = strip_tags($message);
        $message = htmlspecialchars($message, ENT_QUOTES);
        return $message;
    }

	public function encrypt($password) 
    {
        $phpass = new PasswordHash(12, false);
        $hash = $phpass->HashPassword($password);
    	return $hash;
    }

    public function randomPassword() 
    {
    	$letters = array(
            "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q",
            "r","s","t","u","v","w","x","y","z"
        );
    	$pass = "";
    	for($i=0;$i<10;$i++) {
    		shuffle($letters);
    		$letter = $letters[0];
    		if(rand(1,2) == 1) {
	    		$pass .= $letter;
    		} else {
	    		$pass .= strtoupper($letter);
    		}
    		if(rand(1,3)==1) {
    			$pass .= rand(1,9);
    		}
    	}
    	return $pass;
    }

    public function getMonths($num)
    {
        $mois = "";
        switch ($num) {
            case '01':
                $mois = "Janvier";
                break;
            case '02':
                $mois = "Février";
                break;
            case '03':
                $mois = "Mars";
                break;
            case '04':
                $mois = "Avril";
                break;
            case '05':
                $mois = "Mai";
                break;
            case '06':
                $mois = "Juin";
                break;
            case '07':
                $mois = "Juillet";
                break;
            case '08':
                $mois = "Août";
                break;
            case '09':
                $mois = "Septembre";
                break;
            case '10':
                $mois = "Octobre";
                break;
            case '11':
                $mois = "Novembre";
                break;
            case '12':
                $mois = "Décembre";
                break;
        }

        return $mois;
    }

    public function getAccessLevel($level) 
    {
        if($level == 0) {
            return "Member";
        } elseif($level == 1) {
            return "Moderator";
        } elseif($level == 2) {
            return "Power Moderator";   
        } elseif($level == 3) {
            return "User Admin";
        } elseif($level == 4) {
            return "Admin";
        } elseif($level == -1) {
            return "Banned";
        } else {
            return "Invalid Level";
        }
    }

    public function checkAccess($level, $required) 
    {
        $CI =& get_instance();
        if($level < $required) {
            $CI->template->error(
                "You do not have the required access to use this page. 
                You must be a ". $this->getAccessLevel($required)
                . "to use this page."
            );
        }
    }

    public function send_email($subject, $body, $emailt) 
    {
        $CI =& get_instance();
        $CI->load->library('email');

        $CI->email->from($CI->settings->info->site_email, $CI->settings->info->site_name);
        $CI->email->to($emailt);

        $CI->email->subject($subject);
        $CI->email->message($body);

        $CI->email->send();
    }

    public function clean_characters($string) 
    {
        // Replaces all spaces  
       $string = str_replace('à', 'a', $string); 
       $string = str_replace('ä', 'a', $string);
       $string = str_replace('â', 'a', $string); 

       $string = str_replace('é', 'e', $string); 
       $string = str_replace('ê', 'e', $string);
       $string = str_replace('è', 'e', $string); 
       $string = str_replace('ë', 'e', $string);

       $string = str_replace('ï', 'i', $string); 
       $string = str_replace('î', 'i', $string);

       $string = str_replace('ù', 'u', $string); 
       $string = str_replace('ü', 'u', $string);
       $string = str_replace('û', 'u', $string); 

       $string = str_replace('ç', 'c', $string);
       $string = str_replace('ô', 'o', $string); 
       $string = str_replace('ö', 'o', $string);

       return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    public function escape_string($string) 
    {
        $string = preg_replace('/\s+/', ' ', $string);
        $string = explode(" ", $string);
        if(strlen($string[0]) == 1)
        {
            $new = $string[0]."".$string[1];
            $new = $this->clean_characters($new);
            if(strlen($new) == 1)
            {
                $new = $string[0]."".$string[1]."".$string[2];
            }
        }
        else
        {
            $new = $string[0];
            $new = $this->clean_characters($new);
            if(strlen($new) == 1)
            {
                $new = $string[0]."".$string[1]."".$string[2];
            }
        }

        return $new;
    }

    public function check_mime_type($file) {
        return true;
    }

    public function replace_keywords($array, $message) {
        foreach($array as $k=>$v) {
            $message = str_replace($k, $v, $message);
        }
        return $message;
    }

    public function dateNow()
    {
    // date_default_timezone_set('UTC');
			$datestring = "%Y-%m-%d";
			$datenow = date('Y-m-d H:i:s', time());
		    return $datenow ;
		}
	public  function datesitetoserver($date){
        $date = explode('/',$date);
        $date = array_reverse($date);
        $date = implode('-',$date);
        return "$date";
    }

    public  function datesitetoserver2($date){
        $date = explode('-',$date);
        $date = array_reverse($date);
        $date = implode('-',$date);
        return "$date";
    }	
    	
    public function move_files($logo, $temp, $chemein)
    {
	 	$file_name = null;
		$extensions_valides = array('pdf' , 'txt', 'docx', 'jpg', 'jpeg', 'png', 'gif', 'bmp','xlsx', 'xls', 'xsn', 'pptx','mp4', 'mp3','rar', 'csv');
		//1. strrchr renvoie l'extension avec le point (« . »).
		//2. substr(chaine,1) ignore le premier caractère de chaine.
		//3. strtolower met l'extension en minuscules.
		
		if (!empty($logo))//on verifie l'image puis on stocke dans le dossier sur le disque
		{
			if (is_uploaded_file($temp))
			{
				// Déplacement du fichier UpLoadé
				if (($logo))
				{		
					$extension_upload = strtolower(substr(strrchr($logo, '.'),1));
				    $newnom = $logo;
					 
					if ( in_array($extension_upload,$extensions_valides) ) 
					{
						//$token= uniqid(rand(), true);// Token pour créer une différence entre les noms de fichiers
						//$newnom = $id_auto."_".$nom."_".$logo;
                        $newnom = time().".".$extension_upload;
						
						if(move_uploaded_file($temp, $chemein."".$newnom))
						{
							return $file_name = $chemein."".$newnom; 
						}
						
					}
					
				}
			}

		}
	}
	
	public function resize_auto_pic($id_auto, $nom, $photo, $temp, $chemin, $newwidth, $newheight)
	{
		$extension = $this->getExtension($photo);
		$extension = strtolower($extension);
		
		if($extension=="jpg" || $extension=="jpeg" )
		{
			$file_paths = imagecreatefromjpeg($temp);
		}
		else if($extension=="png")
		{
			$file_paths = imagecreatefrompng($temp);
		}
		else 
		{
			$file_paths = imagecreatefromgif($temp);
		}
		
		list($width,$height)=getimagesize($temp);

		$tmp=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($tmp,$file_paths,0,0,0,0,$newwidth,$newheight,$width,$height);
		
		//$image_redim = $chemin.time().$photo;
        $image_redim = $chemin.$id_auto."_".$nom.".".$extension;
		imagejpeg($tmp,$image_redim,100);

		imagedestroy($file_paths);
		imagedestroy($tmp);	
		
		return 	$image_redim;
	}	
	
	public function getExtension($str) {
		$i = strrpos($str,".");
		if (!$i) { return ""; }
		$l = strlen($str) - $i;
		$ext = substr($str,$i+1,$l);
		return $ext;
 	}

    public function generateRandomNberString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    public function generateRandomString($length = 10)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function getMinutes($date1, $date2)
    {
        $time = strtotime($date2) - strtotime($date1);
        $time = round(abs($time) / 60,2);

        return $time;
    }

    public function getAge($date1)
    {
        $date1 = date('Ymd', strtotime($date1));
        $date2 = date('Ymd');
        $age = intval(substr($date2 - $date1, 0, -4));

        return $age;
    }
}

?>
