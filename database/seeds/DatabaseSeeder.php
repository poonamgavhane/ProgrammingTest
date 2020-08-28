<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        \Illuminate\Support\Facades\DB::table('users')->insert([
//           'name'=>'admin',
//           'email'=>'admin@gmail.com',
//           'password'=>'password',
//        ]);
       \App\Employee::create([
               'first_name'=>'Poonam',
               'last_name'=>'Gavhane',
               'email'=>'poonam@gmail.com',
               'company_id'=>'1',
               'phone'=>'9870768798',
       ]);
       \App\Employee::create([
               'first_name'=>'Divya',
               'last_name'=>'Gavhane',
               'email'=>'divya@gmail.com',
               'company_id'=>'1',
               'phone'=>'9870768794',
       ]);
       \App\Employee::create([
               'first_name'=>'Gagan',
               'last_name'=>'Gavhane',
               'email'=>'gagan@gmail.com',
               'company_id'=>'2',
               'phone'=>'9870768398',
       ]);
       \App\Company::create([
               'name'=>'Poonam',
               'email'=>'poonam@gmail.com',
               'logo'=>'',
               'website'=>'www.gmail.com',
       ]);
       \App\Company::create([
               'name'=>'Divya',
               'email'=>'divya@gmail.com',
               'logo'=>'',
               'website'=>'www.gmail.com',
       ]);


        // $this->call(UserSeeder::class);
    }
}
