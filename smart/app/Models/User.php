<?php namespace App\Models;

use CodeIgniter\Model;

class User extends Model {
	
	protected $table = 'user';
	protected $allowedFields = ['nom', 'prenoms', 'pseudo', 'email', 'password', 'status', ];
	
}
		