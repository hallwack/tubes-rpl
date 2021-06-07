<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'book_id';
    protected $useAutoIncrement = true;

    protected $useSoftDeletes = false;
    protected $allowedFields = ['book_name', 'book_category_id', 'book_slug', 'book_image', 'book_author', 'book_publisher', 'book_description', 'book_price'];

    protected $useTimestamps = true;

    public function getBooksWithCategory()
    {
        $builder = $this->db->table('books');

        $builder->select('books.*, book_categories.book_category')
            ->join('book_categories', 'books.book_category_id = book_categories.book_category_id');

        return $builder->get();
    }

    public function getBookCategories()
    {
        $builder = $this->db->table('book_categories');

        return $builder->select('book_categories.*')->get();
    }

    public function getIdBooks($id = null)
    {
        return $this->where('book_id', $id)->first();
    }
}
