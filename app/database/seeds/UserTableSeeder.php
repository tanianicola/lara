<?php

/**
 * Created by PhpStorm.
 * User: tania_nicola
 * Date: 6/05/14
 * Time: 13:52
 */
class UserTableSeeder extends Seeder
{
    const ADMIN_NAME = 'Administrator';
    const ADMIN_EMAIL = 'Admin@';
    const ADMIN_PASSWORD = 'root';

    public function run()
    { // create Users
        User::create(
            array('name' => self::ADMIN_NAME,
                'email' => self::ADMIN_EMAIL,
                'root' => true,
                'role' =>'guest',
                'password' => Hash::make(self::ADMIN_PASSWORD)
            )
        );
        User::create(
            array('name' => 'Tania Nicola',
                'email' => 'tanianicola@telenet.be',
                'root' => true,
                'role' =>'guest',
                'password' => Hash::make('Tania')
            )
        );
    }
} 