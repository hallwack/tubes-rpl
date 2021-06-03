<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTransactionsTable extends Migration
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
			'user_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'null' => true,
			],
			'type_of_payment_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'null' => true,
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
		$this->forge->addForeignKey('user_id', 'users', 'user_id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('type_of_payment_id', 'type_of_payments', 'type_of_payment_id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('transactions');
	}

	public function down()
	{
		$this->forge->dropForeignKey('transactions', 'user_id');
		$this->forge->dropForeignKey('transactions', 'type_of_payment_id');
		$this->forge->dropTable('transactions');
	}
}
