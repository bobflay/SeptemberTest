<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,50)
        	->create()
        	->each(function($user){
        		$user->addresses()->createMany(factory(App\Address::class,rand(1,4))->make()->toArray());
        	});
    }
}
