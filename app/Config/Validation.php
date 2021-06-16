<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $register = [
		'name' => [
			'rules' => 'required',
		],
		'address' => [
			'rules' => 'required',
		],
		'phoneNumber' => [
			'rules' => 'required'
		],
		'email' => [
			'rules' => 'required|valid_email|is_unique[users.user_email]',
		],
		'password' => [
			'rules' => 'required|min_length[6]',
		],
		'repeatPassword' => [
			'rules' => 'required|matches[password]',
		],
	];

	public $login = [
		'email' => [
			'rules' => 'required|valid_email',
		],
		'password' => [
			'rules' => 'required|min_length[6]',
		],
	];

	public $order = [
		'order' => 'required',
	];
}
