<?php

use Illuminate\Database\Seeder;
use App\sysusers;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        sysusers::insert([
        	'uname' => 'admin',
        	'namalengkap' => 'administrator',
        	'email' => 'admin@pbo3.com',
        	'upass' => sha1 ('admin')
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
