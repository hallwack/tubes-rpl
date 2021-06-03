<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBookImageColumnOnBookTable extends Migration
{
	public function up()
	{
		$fields = [
			'book_image' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'after' => 'book_slug',
			]
		];

		$this->forge->addColumn('book', $fields);
	}

	public function down()
	{
		$this->forge->dropColumn('book', 'book_image');
	}
}
