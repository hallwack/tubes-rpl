<?php

namespace App\Models;

use CodeIgniter\Model;

class BookCategoriesModel extends Model
{
    protected $table = 'book_categories';
    protected $primaryKey = 'book_category_id';
    protected $useAutoIncrement = true;

    protected $useSoftDeletes = false;
    protected $allowedFields = ['book_category'];

    protected $useTimestamps = true;

    public function getIdCategory($id = null)
    {
        return $this->where('book_category_id', $id)->first();
    }
}
