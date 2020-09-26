<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

       $admin= User::create(['name'=>'sidiki','email'=>'sidikioue@fdd.gg','password'=>Hash::make('password')]);
       $agence= User::create(['name'=>'papi','email'=>'papi@fdd.gg','password'=>Hash::make('password')]);
       $visiteur= User::create(['name'=>'messi','email'=>'essi@fdd.gg','password'=>Hash::make('password')]);

        $adminRole=Role::where('name','admin')->first();
        $agenceRole=Role::where('name','agence')->first();
        $visiteurRole=Role::where('name','visiteur')->first();
        
        $admin->roles()->attach($adminRole);
        $agence->roles()->attach($agenceRole);
        $visiteur->roles()->attach($visiteurRole);
    }
}
