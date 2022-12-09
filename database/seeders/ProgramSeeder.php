<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =[
            [
                'id' => '1',
                'department_id' => '1',
                'program_name' => 'Information Technology'
            ],
            [
                'id' => '2',
                'department_id' => '3',
                'program_name' => 'Computer Science'
            ],
            
        ];
        Program::insert($data);
    }
}
