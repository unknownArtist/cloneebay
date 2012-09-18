<?php

class App_Acl_Plugin extends Zend_Controller_Plugin_Abstract
{
	private $acl = null;
	private $auth = null;

	public function __construct($acl, $auth)
	{
		$this->acl = $acl;
		$this->auth = $auth;
	}

	public function preDispatch(Zend_Controller_Request_Abstract $request)
	{
		if($this->auth->hasIdentity()) {
			$identity = $this->auth->getIdentity();
			$role =  App_Roles::roleFromInt($identity->user_level);
		}else{
			$role = App_Roles::GUEST;
		}

		$controller = $request->controller;
		$action = $request->action;
		$module = $request->module;
		$resource = $request->controller;

		if(!$this->acl->has($resource)) {
			$resource = null;
		}


		if (!$this->acl->isAllowed($role, $controller, $action)) {
			if ($role == App_Roles::GUEST) {
				$request->setControllerName('user');
				$request->setActionName('login');
			} else {
				$request->setControllerName('error');
				$request->setActionName('noauth');
			}
		}
			

		/*
		 if (!$this->acl->isAllowed($role, $resource, $module)) {
			if ($role == App_Roles::GUEST) {
			$request->setModuleName('default');
			$request->setControllerName('user');
			$request->setActionName('login');
			} else {
			$request->setModuleName('default');
			$request->setControllerName('error');
			$request->setActionName('noauth');
			}
			}

			$request->setModuleName($module);
			$request->setControllerName($controller);
			$request->setActionName($action);
			*/
	}
}