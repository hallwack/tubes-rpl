<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailTransactionsModel extends Model
{
	protected $table                = 'detail_transactions';
	protected $primaryKey           = 'detail_transaction_id';
	protected $useAutoIncrement     = true;

	protected $useSoftDeletes       = true;
	protected $allowedFields        = [];

	protected $useTimestamps        = true;
}
