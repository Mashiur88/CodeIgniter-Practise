<?php
namespace App\Models;

use CodeIgniter\Model;

class UserInfo extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'id';
	protected $allowedFields = ['first_name', 'last_name','user_name','email','password','address','gender','status','image'];
}
?>