<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'product'; // Nama tabel
    protected $primaryKey       = 'id';      // Primary key

    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'name',
        'price',
        'category',
        'image',
        'description',
        'created_at',
        'updated_at',
    ];

    // Timestamp
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Optional: Validasi
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
