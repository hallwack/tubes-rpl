<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDetailTransactionTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_detail_transaksi' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'id_transaksi' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'id_buku' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'banyak_pembelian' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'total_pembelian' => [
				'type' => 'INT',
				'constraint' => 11,
			]
		]);

		$this->forge->addPrimaryKey('id_detail_transaksi');
		$this->forge->addForeignKey('id_transaksi', 'transaksi', 'id_transaksi', 'RESTRICT', 'RESTRICT');
		$this->forge->addForeignKey('id_buku', 'buku', 'id_buku', 'RESTRICT', 'RESTRICT');
		$this->forge->createTable('detail_transaksi');
	}

	public function down()
	{
		$this->forge->dropForeignKey('detail_transaksi', 'id_transaksi');
		$this->forge->dropForeignKey('detail_transaksi', 'id_buku');
		$this->forge->dropTable('detail_transaksi');
	}
}
