<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukAdminModel extends Model
{
    protected $table = 'product'; 
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'name','price','stock','image'];
}
