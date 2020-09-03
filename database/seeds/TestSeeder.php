<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Project::create([
            'name'=>'Calsoft',
            'client'=>'ABC',
            'image'=>'',
            'status'=>'Completed',
            'company_id'=>22,
        ]);
        \App\Project::create([
            'name'=>'Infosys',
            'client'=>'XYZ',
            'image'=>'',
            'status'=>'In Progress',
            'company_id'=>22,
        ]);
        \App\Project::create([
            'name'=>'Dell',
            'client'=>'PQR',
            'image'=>'',
            'status'=>'Completed',
            'company_id'=>20,
        ]);
        \App\Project::create([
            'name'=>'Tech Mahindra',
            'client'=>'ABC',
            'image'=>'',
            'status'=>'Completed',
            'company_id'=>22,
        ]);
    }
}
