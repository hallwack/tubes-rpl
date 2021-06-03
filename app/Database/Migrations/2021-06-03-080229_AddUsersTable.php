<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsersTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'user_name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'user_address' => [
				'type' => 'TEXT',
			],
			'user_phone_number' => [
				'type' => 'VARCHAR',
				'constraint' => 14,
			],
			'user_email' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'user_password' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'user_level' => [
				'type' => 'ENUM',
				'constraint' => ['Admin', 'User'],
				'default' => 'User',
			],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at datetime default current_timestamp',
		]);

		$this->forge->addPrimaryKey('user_id');
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
