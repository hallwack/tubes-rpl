<?php

namespace App\Models;

use CodeIgniter\Model;

class BookCategoryModel extends Model
{
    protected $table = 'book_category';
    protected $primaryKey = 'book_category_id';
    protected $useAutoIncrement = true;

    protected $useSoftDeletes = true;
    protected $allowedFields = [''];

    protected $useTimestamps = true;
}
