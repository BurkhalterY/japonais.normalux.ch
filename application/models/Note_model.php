<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class note_model extends MY_Model
{
	/* SET MY_Model VARIABLES */
	protected $_table = 'notes';
	protected $primary_key = 'id';
	protected $protected_attributes = ['id'];
	protected $has_many = ['users' => ['primary_key' => 'fk_user',
									   'model' => 'user_model'],
						   'words' => ['primary_key' => 'fk_word',
									   'model' => 'word_model']];

	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}

}