<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ContactModel extends DB {
	public function __construct(){
		parent::__construct();
	}
	protected $table = "contacts";

}

