<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'book_id';
    protected $useAutoIncrement = true;

    protected $useSoftDeletes = true;
    protected $allowedFields = [''];

    protected $useTimestamps = true;

    public function getBookCategory()
    {
        $builder = $this->db->table('books');

        $builder->select('books.*, book_categories.book_category')->join('book_categories', 'books.book_category_id = book_categories.book_category_id');

        return $builder->get();
    }
}
