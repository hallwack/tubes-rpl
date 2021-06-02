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

    public function getBookCategory()
    {
        $builder = $this->db->table('book');

        $builder->select('book.*, book_category.book_category')->join('book_category', 'book.book_category_id = book_category.book_category_id');

        return $builder->get();
    }
}
