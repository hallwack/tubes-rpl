<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDetailTransactionsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'detail_transaction_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'transaction_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'null' => true,
			],
			'book_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'null' => true,
			],
			'quantity_purchased' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'total_purchase' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at datetime default current_timestamp',
		]);

		$this->forge->addPrimaryKey('detail_transaction_id');
		$this->forge->addForeignKey('transaction_id', 'transactions', 'transaction_id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('book_id', 'books', 'book_id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('detail_transactions');
	}

	public function down()
	{
		$this->forge->dropForeignKey('detail_transactions', 'transaction_id');
		$this->forge->dropForeignKey('detail_transactions', 'book_id');
		$this->forge->dropTable('detail_transactions');
	}
}
