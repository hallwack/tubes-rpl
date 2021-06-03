<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsersTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'users_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'users_name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'users_address' => [
				'type' => 'TEXT',
			],
			'users_phone_number' => [
				'type' => 'VARCHAR',
				'constraint' => 14,
			],
			'users_email' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'users_password' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'users_level' => [
				'type' => 'ENUM',
				'constraint' => ['Admin', 'User'],
				'default' => 'User',
			],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at datetime default current_timestamp',
		]);

		$this->forge->addPrimaryKey('users_id');
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
