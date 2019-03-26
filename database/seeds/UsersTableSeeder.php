<?php

use App\User;
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
        (new User([
            'name' => 'Superadministrator',
            'email' => 'superadministrator@app.com',
            'password' => bcrypt('password')
        ]))->save();
    }
}
