<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTransactionTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'transaction_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'users_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'type_of_payment_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'transaction_date' => [
				'type' => 'TIMESTAMP',
			],
			'transaction_total' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at datetime default current_timestamp',
		]);

		$this->forge->addPrimaryKey('transaction_id');
		$this->forge->addForeignKey('users_id', 'users', 'users_id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('type_of_payment_id', 'type_of_payment', 'type_of_payment_id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('transaction');
	}

	public function down()
	{
		$this->forge->dropForeignKey('transaction', 'users_id');
		$this->forge->dropForeignKey('transaction', 'type_of_payment_id');
		$this->forge->dropTable('transaction');
	}
}
