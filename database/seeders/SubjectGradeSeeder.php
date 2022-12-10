<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubjectGrade;


class SubjectGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = 
        [
            //Student 1, 1st year 1st sem
                [
                    'id' => '1',
                    'subject_id' => '1',
                    'grade' =>'2',
                    'stud_id' => '1',
                    'term_id' => '1'
        
                ],
                [
                    'id' => '2',
                    'subject_id' => '2',
                    'grade' =>'2',
                    'stud_id' => '1',
                    'term_id' => '1'
        
                ],
                [
                    'id' => '3',
                    'subject_id' => '6',
                    'grade' =>'1.25',
                    'stud_id' => '1',
                    'term_id' => '1'
        
                ],
                
                [
                    'id' => '4',
                    'subject_id' => '7',
                    'grade' =>'1.25',
                    'stud_id' => '1',
                    'term_id' => '1'
        
                ],
                [
                    'id' => '5',
                    'subject_id' => '30',
                    'grade' =>'INC',
                    'stud_id' => '1',
                    'term_id' => '1'
        
                ],
        ];
        SubjectGrade::insert($data);

    }
}
