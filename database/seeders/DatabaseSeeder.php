<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'arbiansyah',
            'email' => 'arbyphoco@gmail.com',
            'role' => 'Admin',
            'phone_number' => '6282293310979',
            'password' => Hash::make('arby2002'),
        ]);

        DB::table('users')->insert([
            'name' => 'ichsan',
            'email' => 'muhammadichsanduatiga2323@gmail.com',
            'phone_number' => '6282293896513',
            'role' => 'Admin',
            'password' => Hash::make('arby2002'),
        ]);

        DB::table('capacities')->insert([
            'capacity' => 'Small',

        ]);
        DB::table('capacities')->insert([
            'capacity' => 'Medium',

        ]);
        DB::table('capacities')->insert([
            'capacity' => 'Large',

        ]);

        DB::table('roles')->insert([
            'role' => 'Admin',

        ]);

        DB::table('roles')->insert([
            'role' => 'Buyer',

        ]);
    }
}
