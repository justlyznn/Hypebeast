<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table      = 'blog';
    protected $primaryKey = 'id_blog';
    protected $returnType = 'array';
    protected $allowedFields = [
        'title', 'category', 'author', 'image',
        'published_at', 'hype_count', 'content'
    ];
}
