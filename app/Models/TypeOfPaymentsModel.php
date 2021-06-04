<?php

namespace App\Models;

use CodeIgniter\Model;

class TypeOfPaymentsModel extends Model
{
	protected $table                = 'type_of_payments';
	protected $primaryKey           = 'type_of_payment_id';
	protected $useAutoIncrement     = true;

	protected $useSoftDeletes       = true;
	protected $allowedFields        = [];

	protected $useTimestamps        = true;
}
