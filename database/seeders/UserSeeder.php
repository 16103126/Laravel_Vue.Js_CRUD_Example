<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**App\Models\User::create([
            'name'=>'Ambarish Das',
            'email' => 'ambarishdas1610@gmail.com',
            'password' => bcrypt('16103126'),
            ]);*/

            DB::table('users')->insert([
                'name'=>'Ambarish Das',
                'email' => 'ambarishdas1610@gmail.com',
                'password' => bcrypt('16103126'),
                ]);
}
}