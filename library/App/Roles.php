<?php

class App_Roles
{
	const GUEST = 'guest';
	const MEMBER = 'user';
	const ADMIN = 'admin';

	public function roleFromInt($role)
	{
		switch($role)
		{
			case 1: return App_Roles::ADMIN;
			case 2: return App_Roles::MEMBER;
			default: return App_Roles::GUEST;
		}
	}
}