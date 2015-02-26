<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {

    public function run()
    {
        \DB::table( 'users' )->insert( array (
            'first_name'=> 'Jesus',
            'last_name' => 'García',
            'email'     => 'jesus.garciav@me.com',
            'password'  => \Hash::make( 'secret' ),
            'type'      => 'admin'
        ) );
    }

}
