<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBookTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'book_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'book_category_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'book_name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'book_slug' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'book_author' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'book_publisher' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'book_description' => [
				'type' => 'TEXT',
			],
			'book_price' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at datetime default current_timestamp',
		]);

		$this->forge->addPrimaryKey('book_id');
		$this->forge->addForeignKey('book_category_id', 'book_category', 'book_category_id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('book');
	}

	public function down()
	{
		$this->forge->dropForeignKey('book', 'book_category_id');
		$this->forge->dropTable('buku');
	}
}
