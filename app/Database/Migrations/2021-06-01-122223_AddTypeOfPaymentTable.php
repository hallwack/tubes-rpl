<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTypeOfPaymentTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'type_of_payment_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'payment_type' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at datetime default current_timestamp',
		]);

		$this->forge->addPrimaryKey('type_of_payment_id');
		$this->forge->createTable('type_of_payment');
	}

	public function down()
	{
		$this->forge->dropTable('type_of_payment');
	}
}
