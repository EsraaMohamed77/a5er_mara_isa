<?php

use Illuminate\Database\Seeder;
use DB;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('users')->insert([
            'name'  =>  string(10),
             'email' => string(10).'@admin.com',
             'password' => bcrypt('secret'),
           ]);
    //factory(App\User::class,50)->create();
    }
}
