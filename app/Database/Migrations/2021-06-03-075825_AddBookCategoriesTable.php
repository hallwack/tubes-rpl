<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBookCategoriesTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'book_category_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'book_category' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at datetime default current_timestamp',
		]);

		$this->forge->addPrimaryKey('book_category_id');
		$this->forge->createTable('book_categories');
	}

	public function down()
	{
		$this->forge->dropTable('book_categories');
	}
}
