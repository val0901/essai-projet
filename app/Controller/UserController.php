<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	public function login()
	{
		$this->show('default/user/login');
	}
}