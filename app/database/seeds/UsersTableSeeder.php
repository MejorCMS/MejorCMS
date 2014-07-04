<?php
use MerjorCMS\Entities\User;
class UsersTableSeeder extends \Seeder {

	public function run()
	{
        Sentry::createUser(array(
            'first_name'    =>'Mejor',
            'last_name'     =>'CMS',
            'email'         =>'team@mejorcms.com',
            'password'      =>'123',
            'activated'     =>true,
        ));

	}

}