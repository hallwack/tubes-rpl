<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'book';
    protected $primaryKey = 'book_id';
    protected $useAutoIncrement = true;

    protected $useSoftDeletes = true;
    protected $allowedFields = [''];

    protected $useTimestamps = true;
}