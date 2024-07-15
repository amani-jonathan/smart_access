<?php
namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'demande';
    protected $primaryKey = 'id';
    protected $allowedFields = ['reference','date_rdv','service', 'nom', 'prenoms','matricule','objet','message'];
}
