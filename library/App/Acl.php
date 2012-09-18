<?php

class App_Acl extends Zend_Acl
{
	public function __construct()
	{
		//Roles
		$this->addRole(new Zend_Acl_Role(App_Roles::GUEST));
		$this->addRole(new Zend_Acl_Role(App_Roles::MEMBER), App_Roles::GUEST);
		$this->addRole(new Zend_Acl_Role(App_Roles::ADMIN), App_Roles::MEMBER);

		//Resources
		$this->add(new Zend_Acl_Resource(App_Resources::HOME));
		$this->add(new Zend_Acl_Resource(App_Resources::USER));
		
		$this->add(new Zend_Acl_Resource(App_Resources::ADMIN));
        $this->add(new Zend_Acl_Resource(App_Resources::ADMIN.':index'), App_Resources::ADMIN);
		
		
		//Guest
		$this->allow(App_Roles::GUEST, App_Resources::HOME, array('index', 'about'));
		$this->allow(App_Roles::GUEST, App_Resources::HOME, array('index', 'trucks'));
		$this->deny(App_Roles::GUEST, App_Resources::USER);
		$this->allow(App_Roles::GUEST, App_Resources::USER, array('login', 'register'));
		$this->deny(App_Roles::GUEST, App_Resources::ADMIN);

		//User
		$this->deny(App_Roles::MEMBER, App_Resources::USER, array('login', 'register'));
		$this->allow(App_Roles::MEMBER, App_Resources::USER, array('profile', 'logout'));
		$this->allow(App_Roles::GUEST, App_Resources::USER, array('index', 'trucks'));
		 
		$this->allow(App_Roles::ADMIN, App_Resources::ADMIN);

	}

}