<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10)->create();

        factory(User::class)->create([
        	'name' => 'Onesimo Batista',
        	'email' => 'onesimobatista@gmail.com'
        ]);

        factory(User::class)->create([
        	'name' => 'Onesimo',
        	'email' => 'onesimoguitar@hotmail.com'
        ]);
    }
}
