<?php

namespace App\Models;

use CodeIgniter\Model;

class Article extends Model {
   
    protected $table = "artikel";
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar', 'filepath_gambar'];
    
}
