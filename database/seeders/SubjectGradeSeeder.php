<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [
            //Student 1, 1st year 1st sem
                [
                    'id' => '1',
                    'subject_id' => '1',
                    'grade' =>'2',
                    'stud_id' => '1'
        
                ],
                [
                    'id' => '2',
                    'subject_id' => '2',
                    'grade' =>'2',
                    'stud_id' => '1'
        
                ],
                [
                    'id' => '3',
                    'subject_id' => '6',
                    'grade' =>'1.25',
                    'stud_id' => '1'
        
                ],
                
                [
                    'id' => '4',
                    'subject_id' => '7',
                    'grade' =>'1.25',
                    'stud_id' => '1'
        
                ],
                [
                    'id' => '5',
                    'subject_id' => '9',
                    'grade' =>'1.25',
                    'stud_id' => '1'
        
                ],
                [
                    'id' => '6',
                    'subject_id' => '23',
                    'grade' =>'1.75',
                    'stud_id' => '1'
        
                ],
                [
                    'id' => '7',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '1'
        
                ],
                [
                    'id' => '8',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '1'
        
                ],
        
                //Student 2, 1st year 1 sem
                
                [
                    'id' => '9',
                    'subject_id' => '1',
                    'grade' =>'1.5',
                    'stud_id' => '2'
        
                ],
                [
                    'id' => '10',
                    'subject_id' => '2',
                    'grade' =>'1.5',
                    'stud_id' => '2'
        
                ],
                [
                    'id' => '11',
                    'subject_id' => '6',
                    'grade' =>'1.25',
                    'stud_id' => '2'
        
                ],
                [
                    'id' => '12',
                    'subject_id' => '7',
                    'grade' =>'1',
                    'stud_id' => '2'
        
                ],
                [
                    'id' => '13',
                    'subject_id' => '9',
                    'grade' =>'1.25',
                    'stud_id' => '2'
        
                ],
                [
                    'id' => '14',
                    'subject_id' => '23',
                    'grade' =>'2',
                    'stud_id' => '2'
        
                ],
                [
                    'id' => '15',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '2'
        
                ],
                [
                    'id' => '16',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '2'
        
                ],
        
                //student 3, 1st year 1st sem
        
                [
                    'id' => '17',
                    'subject_id' => '1',
                    'grade' =>'1.75',
                    'stud_id' => '3'
        
                ],
                [
                    'id' => '18',
                    'subject_id' => '2',
                    'grade' =>'1.75',
                    'stud_id' => '3'
        
                ],
                [
                    'id' => '19',
                    'subject_id' => '6',
                    'grade' =>'1',
                    'stud_id' => '3'
        
                ],
                [
                    'id' => '20',
                    'subject_id' => '7',
                    'grade' =>'1.5',
                    'stud_id' => '3'
        
                ],
                [
                    'id' => '21',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '3'
        
                ],
        
                [
                    'id' => '22',
                    'subject_id' => '23',
                    'grade' =>'2.5',
                    'stud_id' => '3'
        
                ],
                [
                    'id' => '23',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '3'
        
                ],
                [
                    'id' => '24',
                    'subject_id' => '17',
                    'grade' =>'1.25',
                    'stud_id' => '3'
        
                ],
        
                //Student 4, 1st year, 1st Sem
                [
                    'id' => '25',
                    'subject_id' => '1',
                    'grade' =>'1.5',
                    'stud_id' => '4'
        
                ],
                [
                    'id' => '26',
                    'subject_id' => '2',
                    'grade' =>'1.75',
                    'stud_id' => '4'
        
                ],
                [
                    'id' => '27',
                    'subject_id' => '6',
                    'grade' =>'1',
                    'stud_id' => '4'
        
                ],
                [
                    'id' => '28',
                    'subject_id' => '7',
                    'grade' =>'1',
                    'stud_id' => '4'
        
                ],
                [
                    'id' => '29',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '4'
        
                ],
                [
                    'id' => '30',
                    'subject_id' => '23',
                    'grade' =>'2',
                    'stud_id' => '4'
        
                ],
                [
                    'id' => '31',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '4'
        
                ],
                [
                    'id' => '32',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '4'
        
                ],
                //Student 5, 1st year, 1st sem
                [
                    'id' => '33',
                    'subject_id' => '1',
                    'grade' =>'2',
                    'stud_id' => '5'
        
                ],
                [
                    'id' => '34',
                    'subject_id' => '2',
                    'grade' =>'1.75',
                    'stud_id' => '5'
        
                ],
                [
                    'id' => '35',
                    'subject_id' => '6',
                    'grade' =>'1.25',
                    'stud_id' => '5'
        
                ],
                [
                    'id' => '36',
                    'subject_id' => '7',
                    'grade' =>'1',
                    'stud_id' => '5'
        
                ],
                [
                    'id' => '37',
                    'subject_id' => '9',
                    'grade' =>'1.75',
                    'stud_id' => '5'
        
                ],
                [
                    'id' => '38',
                    'subject_id' => '23',
                    'grade' =>'1.75',
                    'stud_id' => '5'
        
                ],
                [
                    'id' => '39',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '5'
        
                ],
                [
                    'id' => '40',
                    'subject_id' => '17',
                    'grade' =>'1.25',
                    'stud_id' => '5'
        
                ],
                //Student 6, 1st yr 1st sem
                [
                    'id' => '41',
                    'subject_id' => '1',
                    'grade' =>'1.75',
                    'stud_id' => '6'
        
                ],
                [
                    'id' => '42',
                    'subject_id' => '2',
                    'grade' =>'1.25',
                    'stud_id' => '6'
        
                ],
                [
                    'id' => '43',
                    'subject_id' => '6',
                    'grade' =>'1',
                    'stud_id' => '6'
        
                ],
                [
                    'id' => '44',
                    'subject_id' => '7',
                    'grade' =>'1.5',
                    'stud_id' => '6'
        
                ],
                [
                    'id' => '45',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '6'
        
                ],
                [
                    'id' => '46',
                    'subject_id' => '23',
                    'grade' =>'1.75',
                    'stud_id' => '6'
        
                ],
                [
                    'id' => '47',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '6'
        
                ],
                [
                    'id' => '48',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '6'
        
                ],
                //Student 7, 1st yr 1st sem
                [
                    'id' => '49',
                    'subject_id' => '1',
                    'grade' =>'1.75',
                    'stud_id' => '7'
        
                ],
                [
                    'id' => '50',
                    'subject_id' => '2',
                    'grade' =>'1',
                    'stud_id' => '7'
        
                ],
                [
                    'id' => '51',
                    'subject_id' => '7',
                    'grade' =>'1.5',
                    'stud_id' => '7'
        
                ],
                [
                    'id' => '52',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '7'
        
                ],
                [
                    'id' => '53',
                    'subject_id' => '23',
                    'grade' =>'2.25',
                    'stud_id' => '7'
        
                ],
                [
                    'id' => '54',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '7'
        
                ],
                [
                    'id' => '55',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '7'
        
                ],
                [
                    'id' => '56',
                    'subject_id' => '6',
                    'grade' =>'1.5',
                    'stud_id' => '7'
        
                ],
        
                //Student 8 1st yr, 1st sem
                [
                    'id' => '57',
                    'subject_id' => '1',
                    'grade' =>'1.75',
                    'stud_id' => '8'
        
                ],
                [
                    'id' => '58',
                    'subject_id' => '2',
                    'grade' =>'1',
                    'stud_id' => '8'
        
                ],
                [
                    'id' => '59',
                    'subject_id' => '6',
                    'grade' =>'1',
                    'stud_id' => '8'
        
                ],
                [
                    'id' => '60',
                    'subject_id' => '7',
                    'grade' =>'1.5',
                    'stud_id' => '8'
        
                ],
                [
                    'id' => '61',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '8'
        
                ],
                [
                    'id' => '62',
                    'subject_id' => '23',
                    'grade' =>'2.25',
                    'stud_id' => '8'
        
                ],
                [
                    'id' => '63',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '8'
        
                ],
                [
                    'id' => '64',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '8'
        
                ],
        
                //Student 9 1st yr, 1st sem
                [
                    'id' => '65',
                    'subject_id' => '1',
                    'grade' =>'2',
                    'stud_id' => '9'
        
                ],
                [
                    'id' => '66',
                    'subject_id' => '2',
                    'grade' =>'1.75',
                    'stud_id' => '9'
        
                ],
                [
                    'id' => '67',
                    'subject_id' => '7',
                    'grade' =>'1.25',
                    'stud_id' => '9'
        
                ],
                [
                    'id' => '68',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '9'
        
                ],
                [
                    'id' => '69',
                    'subject_id' => '23',
                    'grade' =>'2.25',
                    'stud_id' => '9'
        
                ],
                [
                    'id' => '70',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '9'
        
                ],
                [
                    'id' => '71',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '9'
        
                ],
                [
                    'id' => '72',
                    'subject_id' => '6',
                    'grade' =>'1.25',
                    'stud_id' => '9'
        
                ],
                //Student 10, 1st yr 1st sem
                [
                    'id' => '73',
                    'subject_id' => '1',
                    'grade' =>'1.75',
                    'stud_id' => '10'

                ],
                [
                    'id' => '74',
                    'subject_id' => '2',
                    'grade' =>'1.75',
                    'stud_id' => '10'

                ],
                [
                    'id' => '75',
                    'subject_id' => '6',
                    'grade' =>'1',
                    'stud_id' => '10'

                ],
                [
                    'id' => '76',
                    'subject_id' => '7',
                    'grade' =>'1',
                    'stud_id' => '10'

                ],
                [
                    'id' => '77',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '10'

                ],
                [
                    'id' => '78',
                    'subject_id' => '23',
                    'grade' =>'1.75',
                    'stud_id' => '10'

                ],
                [
                    'id' => '79',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '10'

                ],
                [
                    'id' => '80',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '10'

                ],
                //student 11 1st year 1st sem

                [
                    'id' => '81',
                    'subject_id' => '1',
                    'grade' =>'1.75',
                    'stud_id' => '11'

                ],
                [
                    'id' => '82',
                    'subject_id' => '2',
                    'grade' =>'1.5',
                    'stud_id' => '11'

                ],
                [
                    'id' => '83',
                    'subject_id' => '6',
                    'grade' =>'1',
                    'stud_id' => '11'

                ],
                [
                    'id' => '84',
                    'subject_id' => '7',
                    'grade' =>'1.5',
                    'stud_id' => '11'

                ],
                [
                    'id' => '85',
                    'subject_id' => '9',
                    'grade' =>'2.25',
                    'stud_id' => '11'

                ],
                [
                    'id' => '86',
                    'subject_id' => '23',
                    'grade' =>'1.75',
                    'stud_id' => '11'

                ],
                [
                    'id' => '87',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '11'

                ],
                [
                    'id' => '88',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '11'

                ],
                //student 12, 1st yr 1st sem

                [
                    'id' => '89',
                    'subject_id' => '1',
                    'grade' =>'2',
                    'stud_id' => '12'

                ],
                [
                    'id' => '90',
                    'subject_id' => '2',
                    'grade' =>'1.75',
                    'stud_id' => '12'

                ],
                [
                    'id' => '91',
                    'subject_id' => '6',
                    'grade' =>'1.25',
                    'stud_id' => '12'

                ],
                [
                    'id' => '92',
                    'subject_id' => '7',
                    'grade' =>'1',
                    'stud_id' => '12'

                ],
                [
                    'id' => '93',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '12'

                ],
                [
                    'id' => '94',
                    'subject_id' => '23',
                    'grade' =>'2.25',
                    'stud_id' => '12'

                ],
                [
                    'id' => '95',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '12'

                ],
                [
                    'id' => '96',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '12'

                ],
                //Student 13, 1st yr 1st sem
                [
                    'id' => '97',
                    'subject_id' => '1',
                    'grade' =>'2',
                    'stud_id' => '13'

                ],
                [
                    'id' => '98',
                    'subject_id' => '2',
                    'grade' =>'1.75',
                    'stud_id' => '13'

                ],
                [
                    'id' => '99',
                    'subject_id' => '6',
                    'grade' =>'1.25',
                    'stud_id' => '13'

                ],
                [
                    'id' => '100',
                    'subject_id' => '7',
                    'grade' =>'1',
                    'stud_id' => '13'

                ],
                [
                    'id' => '101',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '13'

                ],
                [
                    'id' => '102',
                    'subject_id' => '23',
                    'grade' =>'2.5',
                    'stud_id' => '13'

                ],
                [
                    'id' => '103',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '13'

                ],
                [
                    'id' => '104',
                    'subject_id' => '17',
                    'grade' =>'1.25',
                    'stud_id' => '13'

                ],
                //student 14 1st yr, 1st sem 
                [
                    'id' => '105',
                    'subject_id' => '1',
                    'grade' =>'1.75',
                    'stud_id' => '14'

                ],
                [
                    'id' => '106',
                    'subject_id' => '2',
                    'grade' =>'1.25',
                    'stud_id' => '14'

                ],
                [
                    'id' => '107',
                    'subject_id' => '6',
                    'grade' =>'1',
                    'stud_id' => '14'

                ],
                [
                    'id' => '108',
                    'subject_id' => '7',
                    'grade' =>'1.25',
                    'stud_id' => '14'

                ],
                [
                    'id' => '109',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '14'

                ],
                [
                    'id' => '110',
                    'subject_id' => '23',
                    'grade' =>'2',
                    'stud_id' => '14'

                ],
                [
                    'id' => '111',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '14'

                ],
                [
                    'id' => '112',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '14'

                ],
                //student 15 1st yr, 1st sem 
                [
                    'id' => '113',
                    'subject_id' => '1',
                    'grade' =>'1.75',
                    'stud_id' => '15'

                ],
                [
                    'id' => '114',
                    'subject_id' => '2',
                    'grade' =>'1.5',
                    'stud_id' => '15'

                ],
                [
                    'id' => '115',
                    'subject_id' => '6',
                    'grade' =>'1.25',
                    'stud_id' => '15'

                ],
                [
                    'id' => '116',
                    'subject_id' => '7',
                    'grade' =>'1.5',
                    'stud_id' => '15'

                ],
                [
                    'id' => '117',
                    'subject_id' => '9',
                    'grade' =>'2',
                    'stud_id' => '15'

                ],
                [
                    'id' => '118',
                    'subject_id' => '23',
                    'grade' =>'2',
                    'stud_id' => '15'

                ],
                [
                    'id' => '119',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '15'

                ],
                [
                    'id' => '120',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '15'

                ],
                //student 16 1st yr, 1st sem 
                [
                    'id' => '121',
                    'subject_id' => '1',
                    'grade' =>'1.75',
                    'stud_id' => '16'

                ],
                [
                    'id' => '122',
                    'subject_id' => '2',
                    'grade' =>'1.25',
                    'stud_id' => '16'

                ],
                [
                    'id' => '123',
                    'subject_id' => '6',
                    'grade' =>'1.5',
                    'stud_id' => '16'

                ],
                [
                    'id' => '124',
                    'subject_id' => '7',
                    'grade' =>'1',
                    'stud_id' => '16'

                ],
                [
                    'id' => '125',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '16'

                ],
                [
                    'id' => '126',
                    'subject_id' => '23',
                    'grade' =>'2',
                    'stud_id' => '16'

                ],
                [
                    'id' => '127',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '16'

                ],
                [
                    'id' => '128',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '16'

                ],

                //student 17, 1st yr 1st sem
                [
                    'id' => '129',
                    'subject_id' => '1',
                    'grade' =>'1.75',
                    'stud_id' => '17'

                ],
                [
                    'id' => '130',
                    'subject_id' => '2',
                    'grade' =>'1.',
                    'stud_id' => '17'

                ],
                [
                    'id' => '131',
                    'subject_id' => '6',
                    'grade' =>'1.75',
                    'stud_id' => '17'

                ],
                [
                    'id' => '132',
                    'subject_id' => '7',
                    'grade' =>'1.5',
                    'stud_id' => '17'

                ],
                [
                    'id' => '133',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '17'

                ],
                [
                    'id' => '134',
                    'subject_id' => '23',
                    'grade' =>'2',
                    'stud_id' => '17'

                ],
                [
                    'id' => '135',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '17'

                ],
                [
                    'id' => '136',
                    'subject_id' => '17',
                    'grade' =>'1.25',
                    'stud_id' => '17'

                ],
                //student 18, 1st yr 1st sem
                [
                    'id' => '137',
                    'subject_id' => '1',
                    'grade' =>'1.5',
                    'stud_id' => '18'

                ],
                [
                    'id' => '138',
                    'subject_id' => '2',
                    'grade' =>'1.25',
                    'stud_id' => '18'

                ],
                [
                    'id' => '139',
                    'subject_id' => '6',
                    'grade' =>'1',
                    'stud_id' => '18'

                ],
                [
                    'id' => '140',
                    'subject_id' => '7',
                    'grade' =>'1.25',
                    'stud_id' => '18'

                ],
                [
                    'id' => '141',
                    'subject_id' => '9',
                    'grade' =>'1.5',
                    'stud_id' => '18'

                ],
                [
                    'id' => '142',
                    'subject_id' => '23',
                    'grade' =>'2',
                    'stud_id' => '18'

                ],
                [
                    'id' => '143',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '18'

                ],
                [
                    'id' => '144',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '1'

                ],
                //student 19, 1st yr 1sts sem 
                [
                    'id' => '145',
                    'subject_id' => '1',
                    'grade' =>'2',
                    'stud_id' => '19'

                ],
                [
                    'id' => '146',
                    'subject_id' => '2',
                    'grade' =>'1',
                    'stud_id' => '19'

                ],
                [
                    'id' => '147',
                    'subject_id' => '6',
                    'grade' =>'1.5',
                    'stud_id' => '19'

                ],
                [
                    'id' => '148',
                    'subject_id' => '7',
                    'grade' =>'1',
                    'stud_id' => '19'

                ],
                [
                    'id' => '149',
                    'subject_id' => '9',
                    'grade' =>'1.75',
                    'stud_id' => '19'

                ],
                [
                    'id' => '150',
                    'subject_id' => '23',
                    'grade' =>'2',
                    'stud_id' => '19'

                ],
                [
                    'id' => '151',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '19'

                ],
                [
                    'id' => '152',
                    'subject_id' => '17',
                    'grade' =>'1.25',
                    'stud_id' => '19'

                ],
                //student 20, 1st yr 1st sem
                [
                    'id' => '153',
                    'subject_id' => '1',
                    'grade' =>'1.75',
                    'stud_id' => '20'

                ],
                [
                    'id' => '154',
                    'subject_id' => '2',
                    'grade' =>'1',
                    'stud_id' => '20'

                ],
                [
                    'id' => '155',
                    'subject_id' => '6',
                    'grade' =>'1.5',
                    'stud_id' => '20'

                ],
                [
                    'id' => '156',
                    'subject_id' => '7',
                    'grade' =>'1.75',
                    'stud_id' => '20'

                ],
                [
                    'id' => '157',
                    'subject_id' => '9',
                    'grade' =>'1.25',
                    'stud_id' => '20'

                ],
                [
                    'id' => '158',
                    'subject_id' => '23',
                    'grade' =>'1.75',
                    'stud_id' => '20'

                ],
                [
                    'id' => '159',
                    'subject_id' => '21',
                    'grade' =>'1',
                    'stud_id' => '20'

                ],
                [
                    'id' => '160',
                    'subject_id' => '17',
                    'grade' =>'1',
                    'stud_id' => '20'

                ],
                //student 1, 1st 2nd sem 
                [
                    'id' => '161',
                    'subject_id' => '3',
                    'grade' =>'1.5',
                    'stud_id' => '1'

                ],
                [
                    'id' => '162',
                    'subject_id' => '28',
                    'grade' =>'1',
                    'stud_id' => '1'

                ],
                [
                    'id' => '163',
                    'subject_id' => '10',
                    'grade' =>'1.25',
                    'stud_id' => '1'

                ],
                [
                    'id' => '164',
                    'subject_id' => '12',
                    'grade' =>'1.25',
                    'stud_id' => '1'

                ],
                [
                    'id' => '165',
                    'subject_id' => '13',
                    'grade' =>'1.25',
                    'stud_id' => '1'

                ],
                [
                    'id' => '166',
                    'subject_id' => '24',
                    'grade' =>'1.75',
                    'stud_id' => '1'

                ],
                [
                    'id' => '167',
                    'subject_id' => '22',
                    'grade' =>'1',
                    'stud_id' => '1'

                ],
                [
                    'id' => '168',
                    'subject_id' => '18',
                    'grade' =>'1.25',
                    'stud_id' => '1'

                ],
                //student 2, 1st 2nd sem
                [
                    'id' => '169',
                    'subject_id' => '3',
                    'grade' =>'1.5',
                    'stud_id' => '2'

                ],
                [
                    'id' => '170',
                    'subject_id' => '28',
                    'grade' =>'1',
                    'stud_id' => '2'

                ],
                [
                    'id' => '171',
                    'subject_id' => '10',
                    'grade' =>'1',
                    'stud_id' => '2'

                ],
                [
                    'id' => '172',
                    'subject_id' => '12',
                    'grade' =>'1.25',
                    'stud_id' => '2'

                ],
                [
                    'id' => '173',
                    'subject_id' => '13',
                    'grade' =>'1.5',
                    'stud_id' => '2'

                ],
                [
                    'id' => '174',
                    'subject_id' => '24',
                    'grade' =>'2.5',
                    'stud_id' => '2'

                ],
                [
                    'id' => '175',
                    'subject_id' => '22',
                    'grade' =>'1.25',
                    'stud_id' => '2'

                ],
                [
                    'id' => '176',
                    'subject_id' => '18',
                    'grade' =>'1.25',
                    'stud_id' => '2'

                ],
                //student 3, 1st yr 2nd sem 

                [
                    'id' => '177',
                    'subject_id' => '3',
                    'grade' =>'INC',
                    'stud_id' => '3'

                ],
                [
                    'id' => '178',
                    'subject_id' => '28',
                    'grade' =>'1.5',
                    'stud_id' => '3'

                ],
                [
                    'id' => '179',
                    'subject_id' => '10',
                    'grade' =>'1.5',
                    'stud_id' => '3'

                ],
                [
                    'id' => '180',
                    'subject_id' => '12',
                    'grade' =>'1',
                    'stud_id' => '3'

                ],
                [
                    'id' => '181',
                    'subject_id' => '13',
                    'grade' =>'1.75',
                    'stud_id' => '3'

                ],
                [
                    'id' => '182',
                    'subject_id' => '24',
                    'grade' =>'1.75',
                    'stud_id' => '3'

                ],
                [
                    'id' => '183',
                    'subject_id' => '22',
                    'grade' =>'1',
                    'stud_id' => '3'

                ],
                [
                    'id' => '184',
                    'subject_id' => '18',
                    'grade' =>'1.5',
                    'stud_id' => '3'

                ],
                //student 4, 1st yr 2nd sem 
                [
                    'id' => '185',
                    'subject_id' => '3',
                    'grade' =>'1.5',
                    'stud_id' => '4'

                ],
                [
                    'id' => '186',
                    'subject_id' => '28',
                    'grade' =>'1.25',
                    'stud_id' => '4'

                ],
                [
                    'id' => '187',
                    'subject_id' => '10',
                    'grade' =>'1',
                    'stud_id' => '4'

                ],
                [
                    'id' => '188',
                    'subject_id' => '12',
                    'grade' =>'1',
                    'stud_id' => '4'

                ],
                [
                    'id' => '189',
                    'subject_id' => '13',
                    'grade' =>'1.25',
                    'stud_id' => '4'

                ],
                [
                    'id' => '190',
                    'subject_id' => '24',
                    'grade' =>'2',
                    'stud_id' => '4'

                ],
                [
                    'id' => '191',
                    'subject_id' => '22',
                    'grade' =>'1',
                    'stud_id' => '4'

                ],
                [
                    'id' => '192',
                    'subject_id' => '18',
                    'grade' =>'1',
                    'stud_id' => '4'

                ],

                //student 5 1st yr 2nd sem
                [
                    'id' => '193',
                    'subject_id' => '3',
                    'grade' =>'1',
                    'stud_id' => '5'

                ],
                [
                    'id' => '194',
                    'subject_id' => '28',
                    'grade' =>'1',
                    'stud_id' => '5'

                ],
                [
                    'id' => '195',
                    'subject_id' => '10',
                    'grade' =>'1',
                    'stud_id' => '5'

                ],
                [
                    'id' => '196',
                    'subject_id' => '12',
                    'grade' =>'1.25',
                    'stud_id' => '5'

                ],
                [
                    'id' => '197',
                    'subject_id' => '13',
                    'grade' =>'2',
                    'stud_id' => '5'

                ],
                [
                    'id' => '198',
                    'subject_id' => '24',
                    'grade' =>'2',
                    'stud_id' => '5'

                ],
                [
                    'id' => '199',
                    'subject_id' => '22',
                    'grade' =>'1',
                    'stud_id' => '5'

                ],
                [
                    'id' => '200',
                    'subject_id' => '18',
                    'grade' =>'1.5',
                    'stud_id' => '5'

                ],
                //student 6, 1st yr 2nd sem
                [
                    'id' => '201',
                    'subject_id' => '3',
                    'grade' =>'1.5',
                    'stud_id' => '6'

                ],
                [
                    'id' => '202',
                    'subject_id' => '28',
                    'grade' =>'1',
                    'stud_id' => '6'

                ],
                [
                    'id' => '203',
                    'subject_id' => '10',
                    'grade' =>'1.5',
                    'stud_id' => '6'

                ],
                [
                    'id' => '204',
                    'subject_id' => '12',
                    'grade' =>'1',
                    'stud_id' => '7'

                ],
                [
                    'id' => '205',
                    'subject_id' => '13',
                    'grade' =>'1.75',
                    'stud_id' => '6'

                ],
                [
                    'id' => '206',
                    'subject_id' => '24',
                    'grade' =>'2.75',
                    'stud_id' => '6'

                ],
                [
                    'id' => '207',
                    'subject_id' => '22',
                    'grade' =>'1',
                    'stud_id' => '6'

                ],
                [
                    'id' => '208',
                    'subject_id' => '18',
                    'grade' =>'1.5',
                    'stud_id' => '6'

                ],

                //student 7, 1st yr 2nd sem

                [
                    'id' => '209',
                    'subject_id' => '3',
                    'grade' =>'2',
                    'stud_id' => '7'

                ],
                [
                    'id' => '210',
                    'subject_id' => '28',
                    'grade' =>'1',
                    'stud_id' => '7'

                ],
                [
                    'id' => '211',
                    'subject_id' => '10',
                    'grade' =>'1',
                    'stud_id' => '7'

                ],
                [
                    'id' => '212',
                    'subject_id' => '12',
                    'grade' =>'1.5',
                    'stud_id' => '7'

                ],
                [
                    'id' => '213',
                    'subject_id' => '13',
                    'grade' =>'1.25',
                    'stud_id' => '7'

                ],
                [
                    'id' => '214',
                    'subject_id' => '24',
                    'grade' =>'2.5',
                    'stud_id' => '7'

                ],
                [
                    'id' => '215',
                    'subject_id' => '22',
                    'grade' =>'1',
                    'stud_id' => '7'

                ],
                [
                    'id' => '216',
                    'subject_id' => '18',
                    'grade' =>'1',
                    'stud_id' => '7'

                ],

                //student 8, 1st yr 2nd sem

                [
                    'id' => '217',
                    'subject_id' => '3',
                    'grade' =>'1.5',
                    'stud_id' => '8'

                ],
                [
                    'id' => '218',
                    'subject_id' => '28',
                    'grade' =>'1.25',
                    'stud_id' => '8'

                ],
                [
                    'id' => '219',
                    'subject_id' => '10',
                    'grade' =>'1.5',
                    'stud_id' => '8'

                ],
                [
                    'id' => '220',
                    'subject_id' => '12',
                    'grade' =>'1',
                    'stud_id' => '8'

                ],
                [
                    'id' => '221',
                    'subject_id' => '13',
                    'grade' =>'1.25',
                    'stud_id' => '8'

                ],
                [
                    'id' => '222',
                    'subject_id' => '24',
                    'grade' =>'3',
                    'stud_id' => '8'

                ],
                [
                    'id' => '223',
                    'subject_id' => '22',
                    'grade' =>'1',
                    'stud_id' => '8'

                ],
                [
                    'id' => '224',
                    'subject_id' => '18',
                    'grade' =>'1.25',
                    'stud_id' => '8'

                ],

                //student 9, 1st yr 2nd sem 
                [
                    'id' => '225',
                    'subject_id' => '3',
                    'grade' =>'2',
                    'stud_id' => '9'

                ],
                [
                    'id' => '226',
                    'subject_id' => '28',
                    'grade' =>'1',
                    'stud_id' => '9'

                ],
                [
                    'id' => '227',
                    'subject_id' => '10',
                    'grade' =>'1.25',
                    'stud_id' => '9'

                ],
                [
                    'id' => '228',
                    'subject_id' => '12',
                    'grade' =>'1.25',
                    'stud_id' => '9'

                ],
                [
                    'id' => '229',
                    'subject_id' => '13',
                    'grade' =>'1.5',
                    'stud_id' => '9'

                ],
                [
                    'id' => '230',
                    'subject_id' => '24',
                    'grade' =>'1.75',
                    'stud_id' => '9'

                ],
                [
                    'id' => '231',
                    'subject_id' => '22',
                    'grade' =>'1',
                    'stud_id' => '9'

                ],
                [
                    'id' => '232',
                    'subject_id' => '18',
                    'grade' =>'1.5',
                    'stud_id' => '9'

                ],

                //student 10, 1st yr 2nd sem
                
                [
                    'id' => '233',
                    'subject_id' => '3',
                    'grade' =>'2',
                    'stud_id' => '10'

                ],
                [
                    'id' => '234',
                    'subject_id' => '28',
                    'grade' =>'1',
                    'stud_id' => '10'

                ],
                [
                    'id' => '235',
                    'subject_id' => '10',
                    'grade' =>'1',
                    'stud_id' => '10'

                ],
                [
                    'id' => '236',
                    'subject_id' => '12',
                    'grade' =>'1',
                    'stud_id' => '10'

                ],
                [
                    'id' => '237',
                    'subject_id' => '13',
                    'grade' =>'2',
                    'stud_id' => '10'

                ],
                [
                    'id' => '238',
                    'subject_id' => '24',
                    'grade' =>'2.25',
                    'stud_id' => '10'

                ],
                [
                    'id' => '239',
                    'subject_id' => '22',
                    'grade' =>'1',
                    'stud_id' => '10'

                ],
                [
                    'id' => '240',
                    'subject_id' => '18',
                    'grade' =>'1.25',
                    'stud_id' => '10'

                ],

                
                //student 11 1st 2nd sem

                [
                    'id' => ' 241 ',
                    'subject_id' => ' 3 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 11 '
                ],
                [
                    'id' => ' 242 ',
                    'subject_id' => ' 28 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 11 '
                ],
                [
                    'id' => ' 243 ',
                    'subject_id' => ' 10 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 11 '
                ],
                [
                    'id' => ' 244 ',
                    'subject_id' => ' 12 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 11 '
                ],
                [
                    'id' => ' 245 ',
                    'subject_id' => ' 13 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 11 '
                ],
                [
                    'id' => ' 246 ',
                    'subject_id' => ' 24 ',
                    'grade' => ' 2.25 ',
                    'stud_id' => ' 11 '
                ],
                [
                    'id' => ' 247 ',
                    'subject_id' => ' 22 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 11 '
                ],
                [
                    'id' => ' 248 ',
                    'subject_id' => ' 18 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 11 '
                ],
                [
                    'id' => ' 249 ',
                    'subject_id' => ' 3 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 12 '
                ],
                [
                    'id' => ' 250 ',
                    'subject_id' => ' 28 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 12 '
                ],
                [
                    'id' => ' 251 ',
                    'subject_id' => ' 10 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 12 '
                ],
                [
                    'id' => ' 252 ',
                    'subject_id' => ' 12 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 12 '
                ],
                [
                    'id' => ' 253 ',
                    'subject_id' => ' 13 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 12 '
                ],
                [
                    'id' => ' 254 ',
                    'subject_id' => ' 24 ',
                    'grade' => ' 3 ',
                    'stud_id' => ' 12 '
                ],
                [
                    'id' => ' 255 ',
                    'subject_id' => ' 22 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 12 '
                ],
                [
                    'id' => ' 256 ',
                    'subject_id' => ' 18 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 12 '
                ],
                [
                    'id' => '257',
                    'subject_id' => ' 3 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 13 '
                ],
                [
                    'id' => ' 258 ',
                    'subject_id' => ' 28 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 13 '
                ],
                [
                    'id' => ' 259 ',
                    'subject_id' => ' 10 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 13 '
                ],
                [
                    'id' => ' 260 ',
                    'subject_id' => ' 12 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 13 '
                ],
                [
                    'id' => ' 261 ',
                    'subject_id' => ' 13 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 13 '
                ],
                [
                    'id' => ' 262 ',
                    'subject_id' => ' 24 ',
                    'grade' => ' 3 ',
                    'stud_id' => ' 13 '
                ],
                [
                    'id' => ' 263 ',
                    'subject_id' => ' 22 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 13 '
                ],
                [
                    'id' => ' 264 ',
                    'subject_id' => ' 18 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 13 '
                ],
                //student 14, 1st yr 2nd sem 
                [
                'id' => '265 ',
                'subject_id' => ' 18 ',
                'grade' => ' 1 ',
                'stud_id' => ' 13 '
                ],
                [
                    'id' => ' 266 ',
                    'subject_id' => ' 28 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 14 '
                   ],
                   [
                    'id' => ' 267 ',
                    'subject_id' => ' 10 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 14 '
                   ],
                   [
                    'id' => ' 268 ',
                    'subject_id' => ' 12 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 14 '
                   ],
                   [
                    'id' => ' 269 ',
                    'subject_id' => ' 13 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 14 '
                   ],
                   [
                    'id' => ' 270 ',
                    'subject_id' => ' 24 ',
                    'grade' => ' 3 ',
                    'stud_id' => ' 14 '
                   ],
                   [
                    'id' => ' 271 ',
                    'subject_id' => ' 22 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 14 '
                   ],
                   [
                    'id' => ' 272 ',
                    'subject_id' => ' 18 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 14 '
                   ],
                   //student 15, 1st yr 2nd sem 
                   [
                    'id' => ' 273 ',
                    'subject_id' => ' 3 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 15 '
                   ],
                   [
                    'id' => ' 274 ',
                    'subject_id' => ' 28 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 15 '
                   ],
                   [
                    'id' => ' 275 ',
                    'subject_id' => ' 10 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 15 '
                   ],
                   [
                    'id' => ' 276 ',
                    'subject_id' => ' 12 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 15 '
                   ],
                   [
                    'id' => ' 277 ',
                    'subject_id' => ' 13 ',
                    'grade' => ' 2.25 ',
                    'stud_id' => ' 15 '
                   ],
                   [
                    'id' => ' 278 ',
                    'subject_id' => ' 24 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 15 '
                   ],
                   [
                    'id' => ' 279 ',
                    'subject_id' => ' 22 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 15 '
                   ],
                   [
                    'id' => ' 280 ',
                    'subject_id' => ' 18 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 15 '
                   ],
                   //student 16, 1st year 2nd sem 
                   [
                    'id' => ' 281 ',
                    'subject_id' => ' 3 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 16 '
                   ],
                   [
                    'id' => ' 282 ',
                    'subject_id' => ' 28 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 16 '
                   ],
                   [
                    'id' => ' 283 ',
                    'subject_id' => ' 10 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 16 '
                   ],
                   [
                    'id' => ' 284 ',
                    'subject_id' => ' 12 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 16 '
                   ],
                   [
                    'id' => ' 285 ',
                    'subject_id' => ' 13 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 16 '
                   ],
                   [
                    'id' => ' 286 ',
                    'subject_id' => ' 24 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 16 '
                   ],
                   [
                    'id' => ' 287 ',
                    'subject_id' => ' 22 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 16 '
                   ],
                   [
                    'id' => ' 288 ',
                    'subject_id' => ' 18 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 16 '
                   ],

                   [
                    'id' => ' 289 ',
                    'subject_id' => ' 3 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 17 '
                   ],
                   [
                    'id' => ' 290 ',
                    'subject_id' => ' 28 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 17 '
                   ],
                   [
                    'id' => ' 291 ',
                    'subject_id' => ' 10 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 17 '
                   ],
                   [
                    'id' => ' 292 ',
                    'subject_id' => ' 12 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 17 '
                   ],
                   [
                    'id' => ' 293 ',
                    'subject_id' => ' 13 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 17 '
                   ],
                   [
                    'id' => ' 294 ',
                    'subject_id' => ' 24 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 17 '
                   ],
                   [
                    'id' => ' 295 ',
                    'subject_id' => ' 22 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 17 '
                   ],
                   [
                    'id' => ' 296 ',
                    'subject_id' => ' 18 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 17 '
                   ],
        
                   //student 18, 1st yr 2nd sem
                   [
                    'id' => ' 297 ',
                    'subject_id' => ' 3 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 18 '
                   ],
                   [
                    'id' => ' 298 ',
                    'subject_id' => ' 28 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 18 '
                   ],
                   [
                    'id' => ' 299 ',
                    'subject_id' => ' 10 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 18 '
                   ],
                   [
                    'id' => ' 300 ',
                    'subject_id' => ' 12 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 18 '
                   ],
                   [
                    'id' => ' 301 ',
                    'subject_id' => ' 13 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 18 '
                   ],
                   [
                    'id' => ' 302 ',
                    'subject_id' => ' 24 ',
                    'grade' => ' 2.5 ',
                    'stud_id' => ' 18 '
                   ],
                   [
                    'id' => ' 303 ',
                    'subject_id' => ' 22 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 18 '
                   ],
                   [
                    'id' => ' 304 ',
                    'subject_id' => ' 18 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 18 '
                   ],
                   //student 19 1st sem 2nd sem 
                   [
                    'id' => ' 305 ',
                    'subject_id' => ' 3 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 19 '
                   ],
                   [
                    'id' => ' 306 ',
                    'subject_id' => ' 28 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 19 '
                   ],
                   [
                    'id' => ' 307 ',
                    'subject_id' => ' 10 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 19 '
                   ],
                   [
                    'id' => ' 308 ',
                    'subject_id' => ' 12 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 19 '
                   ],
                   [
                    'id' => ' 309 ',
                    'subject_id' => ' 13 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 19 '
                   ],
                   [
                    'id' => ' 310 ',
                    'subject_id' => ' 24 ',
                    'grade' => ' 2.5 ',
                    'stud_id' => ' 19 '
                   ],
                   [
                    'id' => ' 311 ',
                    'subject_id' => ' 22 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 19 '
                   ],
                   [
                    'id' => ' 312 ',
                    'subject_id' => ' 18 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 19 '
                   ],
                   //student 20 1st yr 2nd sem
                   [
                    'id' => ' 313 ',
                    'subject_id' => ' 3 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 20 '
                   ],
                   [
                    'id' => ' 314 ',
                    'subject_id' => ' 28 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 20 '
                   ],
                   [
                    'id' => ' 315 ',
                    'subject_id' => ' 10 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 20 '
                   ],
                   [
                    'id' => ' 316 ',
                    'subject_id' => ' 12 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 20 '
                   ],
                   [
                    'id' => ' 317 ',
                    'subject_id' => ' 13 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 20 '
                   ],
                   [
                    'id' => ' 318 ',
                    'subject_id' => ' 24 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 20 '
                   ],
                   [
                    'id' => ' 319 ',
                    'subject_id' => ' 22 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 20 '
                   ],
                   [
                    'id' => ' 320 ',
                    'subject_id' => ' 18 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 20 '
                   ],
                   //student 1 2nd sem
                   [
                    'id' => ' 321 ',
                    'subject_id' => ' 4 ',
                    'grade' => ' 2.25 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 322 ',
                    'subject_id' => ' 14 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 323 ',
                    'subject_id' => ' 15 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 324 ',
                    'subject_id' => ' 29 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 325 ',
                    'subject_id' => ' 25 ',
                    'grade' => ' 2.25 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 326 ',
                    'subject_id' => ' 36 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 327 ',
                    'subject_id' => ' 19 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 328 ',
                    'subject_id' => ' 5 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 329 ',
                    'subject_id' => ' 16 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 330 ',
                    'subject_id' => ' 30 ',
                    'grade' => ' 2.25 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 331 ',
                    'subject_id' => ' 31 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 332 ',
                    'subject_id' => ' 32 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 333 ',
                    'subject_id' => ' 20 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 334 ',
                    'subject_id' => ' 26 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 1 '
                   ],
                   [
                    'id' => ' 335 ',
                    'subject_id' => ' 27 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 1 '
                   ],
                   //student 2 2nd yr
                   [
                    'id' => ' 336 ',
                    'subject_id' => ' 4 ',
                    'grade' => ' 2.25 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 337 ',
                    'subject_id' => ' 14 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 338 ',
                    'subject_id' => ' 15 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 339 ',
                    'subject_id' => ' 29 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 340 ',
                    'subject_id' => ' 25 ',
                    'grade' => ' 2.25 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 341 ',
                    'subject_id' => ' 36 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 342 ',
                    'subject_id' => ' 19 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 343 ',
                    'subject_id' => ' 5 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 344 ',
                    'subject_id' => ' 16 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 345 ',
                    'subject_id' => ' 30 ',
                    'grade' => ' 2.25 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 346 ',
                    'subject_id' => ' 31 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 347 ',
                    'subject_id' => ' 32 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 348 ',
                    'subject_id' => ' 20 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 349 ',
                    'subject_id' => ' 26 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 2 '
                   ],
                   [
                    'id' => ' 350 ',
                    'subject_id' => ' 27 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 2 '
                   ],
                   //student 3 2nd yr
                   [
                    'id' => ' 351 ',
                    'subject_id' => ' 4 ',
                    'grade' => ' WDRW ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 352 ',
                    'subject_id' => ' 14 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 353 ',
                    'subject_id' => ' 15 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 354 ',
                    'subject_id' => ' 29 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 355 ',
                    'subject_id' => ' 25 ',
                    'grade' => ' 3 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 356 ',
                    'subject_id' => ' 36 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 357 ',
                    'subject_id' => ' 19 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 358 ',
                    'subject_id' => ' 5 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 359 ',
                    'subject_id' => ' 16 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 360 ',
                    'subject_id' => ' 30 ',
                    'grade' => ' 3 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 361 ',
                    'subject_id' => ' 31 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 362 ',
                    'subject_id' => ' 32 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 363 ',
                    'subject_id' => ' 20 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 364 ',
                    'subject_id' => ' 26 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 3 '
                   ],
                   [
                    'id' => ' 365 ',
                    'subject_id' => ' 27 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 3 '
                   ],
                   //student 4 2nd year
                   [
                    'id' => ' 366 ',
                    'subject_id' => ' 4 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 367 ',
                    'subject_id' => ' 14 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 368 ',
                    'subject_id' => ' 15 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 369 ',
                    'subject_id' => ' 29 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 370 ',
                    'subject_id' => ' 25 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 371 ',
                    'subject_id' => ' 36 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 372 ',
                    'subject_id' => ' 19 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 373 ',
                    'subject_id' => ' 5 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 374 ',
                    'subject_id' => ' 16 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 375 ',
                    'subject_id' => ' 30 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 376 ',
                    'subject_id' => ' 31 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 377 ',
                    'subject_id' => ' 32 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 378 ',
                    'subject_id' => ' 20 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 379 ',
                    'subject_id' => ' 26 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 4 '
                   ],
                   [
                    'id' => ' 380 ',
                    'subject_id' => ' 27 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 4 '
                   ],
                   //student 5 2nd yr 
                   [
                    'id' => ' 381 ',
                    'subject_id' => ' 4 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 382 ',
                    'subject_id' => ' 14 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 383 ',
                    'subject_id' => ' 15 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 384 ',
                    'subject_id' => ' 29 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 385 ',
                    'subject_id' => ' 25 ',
                    'grade' => ' 5 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 386 ',
                    'subject_id' => ' 36 ',
                    'grade' => ' 2.25 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 387 ',
                    'subject_id' => ' 19 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 388 ',
                    'subject_id' => ' 5 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 389 ',
                    'subject_id' => ' 16 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 390 ',
                    'subject_id' => ' 30 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 391 ',
                    'subject_id' => ' 31 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 392 ',
                    'subject_id' => ' 32 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 393 ',
                    'subject_id' => ' 20 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 394 ',
                    'subject_id' => ' 26 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 5 '
                   ],
                   [
                    'id' => ' 395 ',
                    'subject_id' => ' 27 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 5 '
                   ],
                   //student 6 2nd yr
                   [
                    'id' => ' 396 ',
                    'subject_id' => ' 4 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 397 ',
                    'subject_id' => ' 14 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 398 ',
                    'subject_id' => ' 15 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 399 ',
                    'subject_id' => ' 29 ',
                    'grade' => ' 2.5 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 400 ',
                    'subject_id' => ' 25 ',
                    'grade' => ' 5 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 401 ',
                    'subject_id' => ' 36 ',
                    'grade' => ' 2.25 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 402 ',
                    'subject_id' => ' 19 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 403 ',
                    'subject_id' => ' 5 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 404 ',
                    'subject_id' => ' 16 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 405 ',
                    'subject_id' => ' 30 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 406 ',
                    'subject_id' => ' 31 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 407 ',
                    'subject_id' => ' 32 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 408 ',
                    'subject_id' => ' 20 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 409 ',
                    'subject_id' => ' 26 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 6 '
                   ],
                   [
                    'id' => ' 410 ',
                    'subject_id' => ' 27 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 6 '
                   ],
                   //student 7 2nd yr
                   [
                    'id' => ' 411 ',
                    'subject_id' => ' 4 ',
                    'grade' => ' 2.5 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 412 ',
                    'subject_id' => ' 14 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 413 ',
                    'subject_id' => ' 15 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 414 ',
                    'subject_id' => ' 29 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 415 ',
                    'subject_id' => ' 25 ',
                    'grade' => ' 2.25 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 416 ',
                    'subject_id' => ' 36 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 417 ',
                    'subject_id' => ' 19 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 418 ',
                    'subject_id' => ' 5 ',
                    'grade' => ' 2.25 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 419 ',
                    'subject_id' => ' 16 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 420 ',
                    'subject_id' => ' 30 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 421 ',
                    'subject_id' => ' 31 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 422 ',
                    'subject_id' => ' 32 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 423 ',
                    'subject_id' => ' 20 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 424 ',
                    'subject_id' => ' 26 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 7 '
                   ],
                   [
                    'id' => ' 425 ',
                    'subject_id' => ' 27 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 7 '
                   ],
                   //student 8 2nd yr
                   [
                    'id' => ' 426 ',
                    'subject_id' => ' 4 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 427 ',
                    'subject_id' => ' 14 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 428 ',
                    'subject_id' => ' 15 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 429 ',
                    'subject_id' => ' 29 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 430 ',
                    'subject_id' => ' 25 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 431 ',
                    'subject_id' => ' 36 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 432 ',
                    'subject_id' => ' 19 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 433 ',
                    'subject_id' => ' 5 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 434 ',
                    'subject_id' => ' 16 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 435 ',
                    'subject_id' => ' 30 ',
                    'grade' => ' 2 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 436 ',
                    'subject_id' => ' 31 ',
                    'grade' => ' 1 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 437 ',
                    'subject_id' => ' 32 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 438 ',
                    'subject_id' => ' 20 ',
                    'grade' => ' 1.25 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 439 ',
                    'subject_id' => ' 26 ',
                    'grade' => ' 1.5 ',
                    'stud_id' => ' 8 '
                   ],
                   [
                    'id' => ' 440 ',
                    'subject_id' => ' 27 ',
                    'grade' => ' 1.75 ',
                    'stud_id' => ' 8 '
                   ],

                   //student 9 2nd yr 
           [
            'id' => ' 441 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 442 ',
            'subject_id' => ' 14 ',
            'grade' => ' 1 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 443 ',
            'subject_id' => ' 15 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 444 ',
            'subject_id' => ' 29 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 445 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 446 ',
            'subject_id' => ' 36 ',
            'grade' => ' 2 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 447 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 448 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 449 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 450 ',
            'subject_id' => ' 30 ',
            'grade' => ' INC ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 451 ',
            'subject_id' => ' 31 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 452 ',
            'subject_id' => ' 32 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 453 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 454 ',
            'subject_id' => ' 26 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 9 '
           ],
           [
            'id' => ' 455 ',
            'subject_id' => ' 27 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 9 '
           ],
           //student 10 2nd year 
           [
            'id' => ' 456 ',
            'subject_id' => ' 4 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 457 ',
            'subject_id' => ' 14 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 458 ',
            'subject_id' => ' 15 ',
            'grade' => ' 2 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 459 ',
            'subject_id' => ' 29 ',
            'grade' => ' 2 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 460 ',
            'subject_id' => ' 25 ',
            'grade' => ' 3 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 461 ',
            'subject_id' => ' 36 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 462 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 463 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 464 ',
            'subject_id' => ' 16 ',
            'grade' => ' 2 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 465 ',
            'subject_id' => ' 30 ',
            'grade' => ' 3 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 466 ',
            'subject_id' => ' 31 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 467 ',
            'subject_id' => ' 32 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 468 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 469 ',
            'subject_id' => ' 26 ',
            'grade' => ' 1 ',
            'stud_id' => ' 10 '
           ],
           [
            'id' => ' 470 ',
            'subject_id' => ' 27 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 10 '
           ],
           
           //student 11 2nd yr 
           [
            'id' => ' 471 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 472 ',
            'subject_id' => ' 14 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 473 ',
            'subject_id' => ' 15 ',
            'grade' => ' 2 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 474 ',
            'subject_id' => ' 29 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 475 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 476 ',
            'subject_id' => ' 36 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 477 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 478 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 479 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 480 ',
            'subject_id' => ' 30 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 481 ',
            'subject_id' => ' 31 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 482 ',
            'subject_id' => ' 32 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 483 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 484 ',
            'subject_id' => ' 26 ',
            'grade' => ' 1 ',
            'stud_id' => ' 11 '
           ],
           [
            'id' => ' 485 ',
            'subject_id' => ' 27 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 11 '
           ],
           
           //student 12 
           [
            'id' => ' 486 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 487 ',
            'subject_id' => ' 14 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 488 ',
            'subject_id' => ' 15 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 489 ',
            'subject_id' => ' 29 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 490 ',
            'subject_id' => ' 25 ',
            'grade' => ' 5 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 491 ',
            'subject_id' => ' 36 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 492 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 493 ',
            'subject_id' => ' 5 ',
            'grade' => ' 2 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 494 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 495 ',
            'subject_id' => ' 30 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 496 ',
            'subject_id' => ' 31 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 497 ',
            'subject_id' => ' 32 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 498 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 499 ',
            'subject_id' => ' 26 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 12 '
           ],
           [
            'id' => ' 500 ',
            'subject_id' => ' 27 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 12 '
           ],
           //student 13
           [
            'id' => ' 501 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 502 ',
            'subject_id' => ' 14 ',
            'grade' => ' 1 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 503 ',
            'subject_id' => ' 15 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 504 ',
            'subject_id' => ' 29 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 505 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 506 ',
            'subject_id' => ' 36 ',
            'grade' => ' 2 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 507 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 508 ',
            'subject_id' => ' 5 ',
            'grade' => ' 2 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 509 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 510 ',
            'subject_id' => ' 30 ',
            'grade' => ' 3 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 511 ',
            'subject_id' => ' 31 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 512 ',
            'subject_id' => ' 32 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 513 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 514 ',
            'subject_id' => ' 26 ',
            'grade' => ' 1 ',
            'stud_id' => ' 13 '
           ],
           [
            'id' => ' 515 ',
            'subject_id' => ' 27 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 13 '
           ],
           
           //student 14 2nd year
           
           [
            'id' => ' 516 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 517 ',
            'subject_id' => ' 14 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 518 ',
            'subject_id' => ' 15 ',
            'grade' => ' 1 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 519 ',
            'subject_id' => ' 29 ',
            'grade' => ' 2 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 520 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 521 ',
            'subject_id' => ' 36 ',
            'grade' => ' 2 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 522 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 523 ',
            'subject_id' => ' 5 ',
            'grade' => ' 2 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 524 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 525 ',
            'subject_id' => ' 30 ',
            'grade' => ' 3 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 526 ',
            'subject_id' => ' 31 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 527 ',
            'subject_id' => ' 32 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 528 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 529 ',
            'subject_id' => ' 26 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 14 '
           ],
           [
            'id' => ' 530 ',
            'subject_id' => ' 27 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 14 '
           ],   
           
           //student 15 2nd yr
           
           [
            'id' => ' 531 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 532 ',
            'subject_id' => ' 14 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 533 ',
            'subject_id' => ' 15 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 534 ',
            'subject_id' => ' 29 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 535 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 536 ',
            'subject_id' => ' 36 ',
            'grade' => ' 2 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 537 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 538 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 539 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 540 ',
            'subject_id' => ' 30 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 541 ',
            'subject_id' => ' 31 ',
            'grade' => ' 2 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 542 ',
            'subject_id' => ' 32 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 543 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 544 ',
            'subject_id' => ' 26 ',
            'grade' => ' 1 ',
            'stud_id' => ' 15 '
           ],
           [
            'id' => ' 545 ',
            'subject_id' => ' 27 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 15 '
           ],
           //student 16
           [
            'id' => ' 546 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 547 ',
            'subject_id' => ' 14 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 548 ',
            'subject_id' => ' 15 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 549 ',
            'subject_id' => ' 29 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 550 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 551 ',
            'subject_id' => ' 36 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 552 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 553 ',
            'subject_id' => ' 5 ',
            'grade' => ' 2 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 554 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 555 ',
            'subject_id' => ' 30 ',
            'grade' => ' 2 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 556 ',
            'subject_id' => ' 31 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 557 ',
            'subject_id' => ' 32 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 558 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 559 ',
            'subject_id' => ' 26 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 16 '
           ],
           [
            'id' => ' 560 ',
            'subject_id' => ' 27 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 16 '
           ],
           //student 17
           [
            'id' => ' 561 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 562 ',
            'subject_id' => ' 14 ',
            'grade' => ' 1 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 563 ',
            'subject_id' => ' 15 ',
            'grade' => ' 2 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 564 ',
            'subject_id' => ' 29 ',
            'grade' => ' 2 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 565 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 566 ',
            'subject_id' => ' 36 ',
            'grade' => ' 2 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 567 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 568 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 569 ',
            'subject_id' => ' 16 ',
            'grade' => ' 2 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 570 ',
            'subject_id' => ' 30 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 571 ',
            'subject_id' => ' 31 ',
            'grade' => ' 1 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 572 ',
            'subject_id' => ' 32 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 573 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 574 ',
            'subject_id' => ' 26 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 17 '
           ],
           [
            'id' => ' 575 ',
            'subject_id' => ' 27 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 17 '
           ],
          //student 18 
           [
            'id' => ' 576 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 577 ',
            'subject_id' => ' 14 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 578 ',
            'subject_id' => ' 15 ',
            'grade' => ' 1 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 579 ',
            'subject_id' => ' 29 ',
            'grade' => ' 2 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 580 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 581 ',
            'subject_id' => ' 36 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 582 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 583 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 584 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 585 ',
            'subject_id' => ' 30 ',
            'grade' => ' 2 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 586 ',
            'subject_id' => ' 31 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 587 ',
            'subject_id' => ' 32 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 588 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 589 ',
            'subject_id' => ' 26 ',
            'grade' => ' 1 ',
            'stud_id' => ' 18 '
           ],
           [
            'id' => ' 590 ',
            'subject_id' => ' 27 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 18 '
           ],
           // Student 19 
           
           [
            'id' => ' 591 ',
            'subject_id' => ' 4 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 592 ',
            'subject_id' => ' 14 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 593 ',
            'subject_id' => ' 15 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 594 ',
            'subject_id' => ' 29 ',
            'grade' => ' 2 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 595 ',
            'subject_id' => ' 25 ',
            'grade' => ' 3 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 596 ',
            'subject_id' => ' 36 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 597 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 598 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 599 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 600 ',
            'subject_id' => ' 30 ',
            'grade' => ' 3 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 601 ',
            'subject_id' => ' 31 ',
            'grade' => ' 1 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 602 ',
            'subject_id' => ' 32 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 603 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 604 ',
            'subject_id' => ' 26 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 19 '
           ],
           [
            'id' => ' 605 ',
            'subject_id' => ' 27 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 19 '
           ],
           
           //student 20 
           
           [
            'id' => ' 606 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 607 ',
            'subject_id' => ' 14 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 608 ',
            'subject_id' => ' 15 ',
            'grade' => ' 1 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 609 ',
            'subject_id' => ' 29 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 610 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 611 ',
            'subject_id' => ' 36 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 612 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 613 ',
            'subject_id' => ' 5 ',
            'grade' => ' 2 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 614 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 615 ',
            'subject_id' => ' 30 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 616 ',
            'subject_id' => ' 31 ',
            'grade' => ' 1 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 617 ',
            'subject_id' => ' 32 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 618 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 619 ',
            'subject_id' => ' 26 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 20 '
           ],
           [
            'id' => ' 620 ',
            'subject_id' => ' 27 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 20 '
           ],
           //BS CS, 1st yr
           //STUDENT 1​​
           [
            'id' => ' 621 ',
            'subject_id' => ' 1 ',
            'grade' => ' 2 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 622 ',
            'subject_id' => ' 2 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 623 ',
            'subject_id' => ' 24 ',
            'grade' => ' 2 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 624 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 625 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 626 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 627 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 628 ',
            'subject_id' => ' 3 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 629 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 630 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 631 ',
            'subject_id' => ' 10 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 632 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 633 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1 ',
            'stud_id' => ' 21 '
           ],
           //Student 2

           [
            'id' => ' 634 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 635 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 636 ',
            'subject_id' => ' 24 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 637 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 638 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 639 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 640 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 641 ',
            'subject_id' => ' 3 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 642 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 643 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 644 ',
            'subject_id' => ' 10 ',
            'grade' => ' 2 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 645 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 646 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 22 '
           ],
           //student 23
           [
            'id' => ' 647 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 648 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 649 ',
            'subject_id' => ' 24 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 650 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 651 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 652 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 653 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 654 ',
            'subject_id' => ' 3 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 655 ',
            'subject_id' => ' 25 ',
            'grade' => ' 3 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 656 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 657 ',
            'subject_id' => ' 10 ',
            'grade' => ' 2 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 658 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 659 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1 ',
            'stud_id' => ' 23 '
           ],
           //student 24
           [
            'id' => ' 660 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 661 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 662 ',
            'subject_id' => ' 24 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 663 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 664 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 665 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 666 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 667 ',
            'subject_id' => ' 3 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 668 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 669 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 670 ',
            'subject_id' => ' 10 ',
            'grade' => ' 2 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 671 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 672 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1 ',
            'stud_id' => ' 24 '
           ],
           //student 25

           [
            'id' => ' 673 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 674 ',
            'subject_id' => ' 2 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 675 ',
            'subject_id' => ' 24 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 676 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 677 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 678 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 679 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 680 ',
            'subject_id' => ' 3 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 681 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 682 ',
            'subject_id' => ' 8 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 683 ',
            'subject_id' => ' 10 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 684 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 685 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1 ',
            'stud_id' => ' 25 '
           ],

           //student 26
           [
            'id' => ' 686 ',
            'subject_id' => ' 1 ',
            'grade' => ' 2 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 687 ',
            'subject_id' => ' 2 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 688 ',
            'subject_id' => ' 24 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 689 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 690 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 691 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 692 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 693 ',
            'subject_id' => ' 3 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 694 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 695 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 696 ',
            'subject_id' => ' 10 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 697 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 698 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1 ',
            'stud_id' => ' 26 '
           ],
           // student 27
           [
            'id' => ' 699 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 700 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 701 ',
            'subject_id' => ' 24 ',
            'grade' => ' 2 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 702 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 703 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 704 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 705 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 706 ',
            'subject_id' => ' 3 ',
            'grade' => ' 2 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 707 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 708 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 709 ',
            'subject_id' => ' 10 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 710 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 711 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1 ',
            'stud_id' => ' 27 '
           ],
           //student 28

           [
            'id' => ' 712 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 713 ',
            'subject_id' => ' 2 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 714 ',
            'subject_id' => ' 24 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 715 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 716 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 717 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 718 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 719 ',
            'subject_id' => ' 3 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 720 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 721 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 722 ',
            'subject_id' => ' 10 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 723 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 724 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 28 '
           ],

           //Student 29

           [
            'id' => ' 725 ',
            'subject_id' => ' 1 ',
            'grade' => ' 2 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 726 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 727 ',
            'subject_id' => ' 24 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 728 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 729 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 730 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 731 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 732 ',
            'subject_id' => ' 3 ',
            'grade' => ' 2 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 733 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 734 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 735 ',
            'subject_id' => ' 10 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 736 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 737 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1 ',
            'stud_id' => ' 29 '
           ],
           //Student 30
           [
            'id' => ' 738 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 739 ',
            'subject_id' => ' 2 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 740 ',
            'subject_id' => ' 24 ',
            'grade' => ' 2 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 741 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 742 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 743 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 744 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 745 ',
            'subject_id' => ' 3 ',
            'grade' => ' 2 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 746 ',
            'subject_id' => ' 25 ',
            'grade' => ' 3 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 747 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 748 ',
            'subject_id' => ' 10 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 749 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 750 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 30 '
           ],
           //Student 31     
           [
            'id' => ' 751 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 31 '
           ],
           [
            'id' => ' 752 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 31 '
           ],
           [
            'id' => ' 753 ',
            'subject_id' => ' 24 ',
            'grade' => ' 2 ',
            'stud_id' => ' 31 '
           ],
           [
            'id' => ' 754 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 31 '
           ],
           [
            'id' => ' 755 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1 ',
            'stud_id' => ' 31 '
           ],
           [
            'id' => ' 756 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 31 '
           ],
           [
            'id' => ' 757 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 31 '
           ],
           [
            'id' => ' 758 ',
            'subject_id' => ' 3 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 31 '
           ],
           [
            'id' => ' 759 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 31 '
           ],
           [
            'id' => ' 760 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2 ',
            'stud_id' => ' 31 '
           ],
           [
            'id' => ' 761 ',
            'subject_id' => ' 10 ',
            'grade' => ' 2 ',
            'stud_id' => ' 31 '
           ],
           [
            'id' => ' 762 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 31 '
           ],
           [
            'id' => ' 763 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1 ',
            'stud_id' => ' 31 '
           ],

           [
            'id' => ' 764 ',
            'subject_id' => ' 1 ',
            'grade' => ' 2 ',
            'stud_id' => ' 32 '
           ],
           [
            'id' => ' 765 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2 ',
            'stud_id' => ' 32 '
           ],
           [
            'id' => ' 766 ',
            'subject_id' => ' 24 ',
            'grade' => ' 2 ',
            'stud_id' => ' 32 '
           ],
           [
            'id' => ' 767 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 32 '
           ],
           [
            'id' => ' 768 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 32 '
           ],
           [
            'id' => ' 769 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 32 '
           ],
           [
            'id' => ' 770 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 32 '
           ],
           [
            'id' => ' 771 ',
            'subject_id' => ' 3 ',
            'grade' => ' 2 ',
            'stud_id' => ' 32 '
           ],
           [
            'id' => ' 772 ',
            'subject_id' => ' 25 ',
            'grade' => ' 5 ',
            'stud_id' => ' 32 '
           ],
           [
            'id' => ' 773 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 32 '
           ],
           [
            'id' => ' 774 ',
            'subject_id' => ' 10 ',
            'grade' => ' 2 ',
            'stud_id' => ' 32 '
           ],
           [
            'id' => ' 775 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1 ',
            'stud_id' => ' 32 '
           ],
           [
            'id' => ' 776 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1 ',
            'stud_id' => ' 32 '
           ],
            //Student 33 BS-CS
           [
            'id' => ' 777 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 33 '
           ],
           [
            'id' => ' 778 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2 ',
            'stud_id' => ' 33 '
           ],
           [
            'id' => ' 779 ',
            'subject_id' => ' 24 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 33 '
           ],
           [
            'id' => ' 780 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1 ',
            'stud_id' => ' 33 '
           ],
           [
            'id' => ' 781 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 33 '
           ],
           [
            'id' => ' 782 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 33 '
           ],
           [
            'id' => ' 783 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 33 '
           ],
           [
            'id' => ' 784 ',
            'subject_id' => ' 3 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 33 '
           ],
           [
            'id' => ' 785 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 33 '
           ],
           [
            'id' => ' 786 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 33 '
           ],
           [
            'id' => ' 787 ',
            'subject_id' => ' 10 ',
            'grade' => ' 2 ',
            'stud_id' => ' 33 '
           ],
           [
            'id' => ' 788 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1 ',
            'stud_id' => ' 33 '
           ],
           [
            'id' => ' 789 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 33 '
           ],

           //Student 34 

           [
            'id' => ' 790 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 34 '
           ],
           [
            'id' => ' 791 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 34 '
           ],
           [
            'id' => ' 792 ',
            'subject_id' => ' 24 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 34 '
           ],
           [
            'id' => ' 793 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 34 '
           ],
           [
            'id' => ' 794 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1 ',
            'stud_id' => ' 34 '
           ],
           [
            'id' => ' 795 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 34 '
           ],
           [
            'id' => ' 796 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 34 '
           ],
           [
            'id' => ' 797 ',
            'subject_id' => ' 3 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 34 '
           ],
           [
            'id' => ' 798 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2 ',
            'stud_id' => ' 34 '
           ],
           [
            'id' => ' 799 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 34 '
           ],
           [
            'id' => ' 800 ',
            'subject_id' => ' 10 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 34 '
           ],
           [
            'id' => ' 801 ',
            'subject_id' => ' 34 ',
            'grade' => ' 2 ',
            'stud_id' => ' 34 '
           ],
           [
            'id' => ' 802 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 34 '
           ],

           //Student 35 

           [
            'id' => ' 803 ',
            'subject_id' => ' 1 ',
            'grade' => ' 2 ',
            'stud_id' => ' 35 '
           ],
           [
            'id' => ' 804 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2 ',
            'stud_id' => ' 35 '
           ],
           [
            'id' => ' 805 ',
            'subject_id' => ' 24 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 35 '
           ],
           [
            'id' => ' 806 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 35 '
           ],
           [
            'id' => ' 807 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1 ',
            'stud_id' => ' 35 '
           ],
           [
            'id' => ' 808 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 35 '
           ],
           [
            'id' => ' 809 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 35 '
           ],
           [
            'id' => ' 810 ',
            'subject_id' => ' 3 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 35 '
           ],
           [
            'id' => ' 811 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 35 '
           ],
           [
            'id' => ' 812 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 35 '
           ],
           [
            'id' => ' 813 ',
            'subject_id' => ' 10 ',
            'grade' => ' 2 ',
            'stud_id' => ' 35 '
           ],
           [
            'id' => ' 814 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1 ',
            'stud_id' => ' 35 '
           ],
           [
            'id' => ' 815 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 35 '
           ],
           // student 36

           [
            'id' => ' 816 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 36 '
           ],
           [
            'id' => ' 817 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2 ',
            'stud_id' => ' 36 '
           ],
           [
            'id' => ' 818 ',
            'subject_id' => ' 24 ',
            'grade' => ' 2 ',
            'stud_id' => ' 36 '
           ],
           [
            'id' => ' 819 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 36 '
           ],
           [
            'id' => ' 820 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 36 '
           ],
           [
            'id' => ' 821 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 36 '
           ],
           [
            'id' => ' 822 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 36 '
           ],
           [
            'id' => ' 823 ',
            'subject_id' => ' 3 ',
            'grade' => ' 2 ',
            'stud_id' => ' 36 '
           ],
           [
            'id' => ' 824 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2 ',
            'stud_id' => ' 36 '
           ],
           [
            'id' => ' 825 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2 ',
            'stud_id' => ' 36 '
           ],
           [
            'id' => ' 826 ',
            'subject_id' => ' 10 ',
            'grade' => ' 2 ',
            'stud_id' => ' 36 '
           ],
           [
            'id' => ' 827 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1 ',
            'stud_id' => ' 36 '
           ],
           [
            'id' => ' 828 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1 ',
            'stud_id' => ' 36 '
           ],
           
           //Student 37

           [
            'id' => ' 829 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 37 '
           ],
           [
            'id' => ' 830 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 37 '
           ],
           [
            'id' => ' 831 ',
            'subject_id' => ' 24 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 37 '
           ],
           [
            'id' => ' 832 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1 ',
            'stud_id' => ' 37 '
           ],
           [
            'id' => ' 833 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 37 '
           ],
           [
            'id' => ' 834 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 37 '
           ],
           [
            'id' => ' 835 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 37 '
           ],
           [
            'id' => ' 836 ',
            'subject_id' => ' 3 ',
            'grade' => ' 2 ',
            'stud_id' => ' 37 '
           ],
           [
            'id' => ' 837 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 37 '
           ],
           [
            'id' => ' 838 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 37 '
           ],
           [
            'id' => ' 839 ',
            'subject_id' => ' 10 ',
            'grade' => ' 2 ',
            'stud_id' => ' 37 '
           ],
           [
            'id' => ' 840 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1 ',
            'stud_id' => ' 37 '
           ],
           [
            'id' => ' 841 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 37 '
           ],
           //student 38
           [
            'id' => ' 842 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 38 '
           ],
           [
            'id' => ' 843 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2 ',
            'stud_id' => ' 38 '
           ],
           [
            'id' => ' 844 ',
            'subject_id' => ' 24 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 38 '
           ],
           [
            'id' => ' 845 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 38 '
           ],
           [
            'id' => ' 846 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 38 '
           ],
           [
            'id' => ' 847 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 38 '
           ],
           [
            'id' => ' 848 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 38 '
           ],
           [
            'id' => ' 849 ',
            'subject_id' => ' 3 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 38 '
           ],
           [
            'id' => ' 850 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2 ',
            'stud_id' => ' 38 '
           ],
           [
            'id' => ' 851 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2 ',
            'stud_id' => ' 38 '
           ],
           [
            'id' => ' 852 ',
            'subject_id' => ' 10 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 38 '
           ],
           [
            'id' => ' 853 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1 ',
            'stud_id' => ' 38 '
           ],
           [
            'id' => ' 854 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 38 '
           ],

           //student 39

           [
            'id' => ' 855 ',
            'subject_id' => ' 1 ',
            'grade' => ' 2 ',
            'stud_id' => ' 39 '
           ],
           [
            'id' => ' 856 ',
            'subject_id' => ' 2 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 39 '
           ],
           [
            'id' => ' 857 ',
            'subject_id' => ' 24 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 39 '
           ],
           [
            'id' => ' 858 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1 ',
            'stud_id' => ' 39 '
           ],
           [
            'id' => ' 859 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1 ',
            'stud_id' => ' 39 '
           ],
           [
            'id' => ' 860 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 39 '
           ],
           [
            'id' => ' 861 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 39 '
           ],
           [
            'id' => ' 862 ',
            'subject_id' => ' 3 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 39 '
           ],
           [
            'id' => ' 863 ',
            'subject_id' => ' 25 ',
            'grade' => ' 3 ',
            'stud_id' => ' 39 '
           ],
           [
            'id' => ' 864 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2 ',
            'stud_id' => ' 39 '
           ],
           [
            'id' => ' 865 ',
            'subject_id' => ' 10 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 39 '
           ],
           [
            'id' => ' 866 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 39 '
           ],
           [
            'id' => ' 867 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 39 '
           ],
           //student 40
           [
            'id' => ' 868 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 40 '
           ],
           [
            'id' => ' 869 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2 ',
            'stud_id' => ' 40 '
           ],
           [
            'id' => ' 870 ',
            'subject_id' => ' 24 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 40 '
           ],
           [
            'id' => ' 871 ',
            'subject_id' => ' 12 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 40 '
           ],
           [
            'id' => ' 872 ',
            'subject_id' => ' 33 ',
            'grade' => ' 1 ',
            'stud_id' => ' 40 '
           ],
           [
            'id' => ' 873 ',
            'subject_id' => ' 17 ',
            'grade' => ' 1 ',
            'stud_id' => ' 40 '
           ],
           [
            'id' => ' 874 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1 ',
            'stud_id' => ' 40 '
           ],
           [
            'id' => ' 875 ',
            'subject_id' => ' 3 ',
            'grade' => ' 2 ',
            'stud_id' => ' 40 '
           ],
           [
            'id' => ' 876 ',
            'subject_id' => ' 25 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 40 '
           ],
           [
            'id' => ' 877 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 40 '
           ],
           [
            'id' => ' 878 ',
            'subject_id' => ' 10 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 40 '
           ],
           [
            'id' => ' 879 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 40 '
           ],
           [
            'id' => ' 880 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1 ',
            'stud_id' => ' 40 '
           ],

           //BS CS YEAR 2 
           //Student 21
           [
            'id' => ' 881 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 882 ',
            'subject_id' => ' 37 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 883 ',
            'subject_id' => ' 38 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 884 ',
            'subject_id' => ' 39 ',
            'grade' => ' 2 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 885 ',
            'subject_id' => ' 13 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 886 ',
            'subject_id' => ' 35 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 887 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 888 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 889 ',
            'subject_id' => ' 42 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 890 ',
            'subject_id' => ' 41 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 891 ',
            'subject_id' => ' 40 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 892 ',
            'subject_id' => ' 7 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 893 ',
            'subject_id' => ' 16 ',
            'grade' => ' 2 ',
            'stud_id' => ' 21 '
           ],
           [
            'id' => ' 894 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 21 '
           ],
           
           //student 22
           [
            'id' => ' 895 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 896 ',
            'subject_id' => ' 37 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 897 ',
            'subject_id' => ' 38 ',
            'grade' => ' 3 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 898 ',
            'subject_id' => ' 39 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 899 ',
            'subject_id' => ' 13 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 900 ',
            'subject_id' => ' 35 ',
            'grade' => ' 1 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 901 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 902 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 903 ',
            'subject_id' => ' 42 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 904 ',
            'subject_id' => ' 41 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 905 ',
            'subject_id' => ' 40 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 906 ',
            'subject_id' => ' 7 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 907 ',
            'subject_id' => ' 16 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 22 '
           ],
           [
            'id' => ' 908 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 22 '
           ],
           
           //student 23

           [
            'id' => ' 909 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 910 ',
            'subject_id' => ' 37 ',
            'grade' => ' 1 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 911 ',
            'subject_id' => ' 38 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 912 ',
            'subject_id' => ' 39 ',
            'grade' => ' INC ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 913 ',
            'subject_id' => ' 13 ',
            'grade' => ' 1 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 914 ',
            'subject_id' => ' 35 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 915 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 916 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 917 ',
            'subject_id' => ' 42 ',
            'grade' => ' 3 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 918 ',
            'subject_id' => ' 41 ',
            'grade' => ' 2 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 919 ',
            'subject_id' => ' 40 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 920 ',
            'subject_id' => ' 7 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 921 ',
            'subject_id' => ' 16 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 23 '
           ],
           [
            'id' => ' 922 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 23 '
           ],

           //Student 24
           [
            'id' => ' 923 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 924 ',
            'subject_id' => ' 37 ',
            'grade' => ' 1 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 925 ',
            'subject_id' => ' 38 ',
            'grade' => ' 2 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 926 ',
            'subject_id' => ' 39 ',
            'grade' => ' 2 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 927 ',
            'subject_id' => ' 13 ',
            'grade' => ' 1 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 928 ',
            'subject_id' => ' 35 ',
            'grade' => ' 1 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 929 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 930 ',
            'subject_id' => ' 5 ',
            'grade' => ' 2 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 931 ',
            'subject_id' => ' 42 ',
            'grade' => ' 2 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 932 ',
            'subject_id' => ' 41 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 933 ',
            'subject_id' => ' 40 ',
            'grade' => ' 2 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 934 ',
            'subject_id' => ' 7 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 935 ',
            'subject_id' => ' 16 ',
            'grade' => ' 2 ',
            'stud_id' => ' 24 '
           ],
           [
            'id' => ' 936 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 24 '
           ],

           //Student 25 
           [
            'id' => ' 937 ',
            'subject_id' => ' 4 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 938 ',
            'subject_id' => ' 37 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 939 ',
            'subject_id' => ' 38 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 940 ',
            'subject_id' => ' 39 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 941 ',
            'subject_id' => ' 13 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 942 ',
            'subject_id' => ' 35 ',
            'grade' => ' 1 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 943 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 944 ',
            'subject_id' => ' 5 ',
            'grade' => ' 2 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 945 ',
            'subject_id' => ' 42 ',
            'grade' => ' INC ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 946 ',
            'subject_id' => ' 41 ',
            'grade' => ' 2 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 947 ',
            'subject_id' => ' 40 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 948 ',
            'subject_id' => ' 7 ',
            'grade' => ' 2 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 949 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 25 '
           ],
           [
            'id' => ' 950 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 25 '
           ],
           //Student 26
           [
            'id' => ' 951 ',
            'subject_id' => ' 4 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 952 ',
            'subject_id' => ' 37 ',
            'grade' => ' 1 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 953 ',
            'subject_id' => ' 38 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 954 ',
            'subject_id' => ' 39 ',
            'grade' => ' 2 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 955 ',
            'subject_id' => ' 13 ',
            'grade' => ' 1 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 956 ',
            'subject_id' => ' 35 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 957 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 958 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 959 ',
            'subject_id' => ' 42 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 960 ',
            'subject_id' => ' 41 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 961 ',
            'subject_id' => ' 40 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 962 ',
            'subject_id' => ' 7 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 963 ',
            'subject_id' => ' 16 ',
            'grade' => ' 2 ',
            'stud_id' => ' 26 '
           ],
           [
            'id' => ' 964 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 26 '
           ],

           //Student 27

           [
            'id' => ' 965 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 966 ',
            'subject_id' => ' 37 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 967 ',
            'subject_id' => ' 38 ',
            'grade' => ' 3 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 968 ',
            'subject_id' => ' 39 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 969 ',
            'subject_id' => ' 13 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 970 ',
            'subject_id' => ' 35 ',
            'grade' => ' 1 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 971 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 972 ',
            'subject_id' => ' 5 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 973 ',
            'subject_id' => ' 42 ',
            'grade' => ' 2 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 974 ',
            'subject_id' => ' 41 ',
            'grade' => ' 2 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 975 ',
            'subject_id' => ' 40 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 976 ',
            'subject_id' => ' 7 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 977 ',
            'subject_id' => ' 16 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 27 '
           ],
           [
            'id' => ' 978 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 27 '
           ],

           //Student 28

           [
            'id' => ' 979 ',
            'subject_id' => ' 4 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 980 ',
            'subject_id' => ' 37 ',
            'grade' => ' 1 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 981 ',
            'subject_id' => ' 38 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 982 ',
            'subject_id' => ' 39 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 983 ',
            'subject_id' => ' 13 ',
            'grade' => ' 1 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 984 ',
            'subject_id' => ' 35 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 985 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 986 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 987 ',
            'subject_id' => ' 42 ',
            'grade' => ' 2 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 988 ',
            'subject_id' => ' 41 ',
            'grade' => ' 2 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 989 ',
            'subject_id' => ' 40 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 990 ',
            'subject_id' => ' 7 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 991 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 28 '
           ],
           [
            'id' => ' 992 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 28 '
           ],
           //sTUDENT 29 ​
           [
            'id' => ' 993 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 994 ',
            'subject_id' => ' 37 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 995 ',
            'subject_id' => ' 38 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 996 ',
            'subject_id' => ' 39 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 997 ',
            'subject_id' => ' 13 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 998 ',
            'subject_id' => ' 35 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 999 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 1000 ',
            'subject_id' => ' 5 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 1001 ',
            'subject_id' => ' 42 ',
            'grade' => ' INC ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 1002 ',
            'subject_id' => ' 41 ',
            'grade' => ' 2 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 1003 ',
            'subject_id' => ' 40 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 1004 ',
            'subject_id' => ' 7 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 1005 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 29 '
           ],
           [
            'id' => ' 1006 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 29 '
           ],

           //Student 30 
           [
            'id' => ' 1007 ',
            'subject_id' => ' 4 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1008 ',
            'subject_id' => ' 37 ',
            'grade' => ' 1 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1009 ',
            'subject_id' => ' 38 ',
            'grade' => ' 2 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1010 ',
            'subject_id' => ' 39 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1011 ',
            'subject_id' => ' 13 ',
            'grade' => ' 1 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1012 ',
            'subject_id' => ' 35 ',
            'grade' => ' 1 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1013 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1014 ',
            'subject_id' => ' 5 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1015 ',
            'subject_id' => ' 42 ',
            'grade' => ' 3 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1016 ',
            'subject_id' => ' 41 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1017 ',
            'subject_id' => ' 40 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1018 ',
            'subject_id' => ' 7 ',
            'grade' => ' 2 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1019 ',
            'subject_id' => ' 16 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 30 '
           ],
           [
            'id' => ' 1020 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 30 '
           ],

           //student 31
           
[
    'id' => ' 1021 ',
    'subject_id' => ' 4 ',
    'grade' => ' 2.5 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1022 ',
    'subject_id' => ' 37 ',
    'grade' => ' 1 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1023 ',
    'subject_id' => ' 38 ',
    'grade' => ' 1.75 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1024 ',
    'subject_id' => ' 39 ',
    'grade' => ' 2.5 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1025 ',
    'subject_id' => ' 13 ',
    'grade' => ' 1 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1026 ',
    'subject_id' => ' 35 ',
    'grade' => ' 1.5 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1027 ',
    'subject_id' => ' 19 ',
    'grade' => ' 1.5 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1028 ',
    'subject_id' => ' 5 ',
    'grade' => ' 1.5 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1029 ',
    'subject_id' => ' 42 ',
    'grade' => ' 2.25 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1030 ',
    'subject_id' => ' 41 ',
    'grade' => ' 2.5 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1031 ',
    'subject_id' => ' 40 ',
    'grade' => ' 2.25 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1032 ',
    'subject_id' => ' 7 ',
    'grade' => ' 1.5 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1033 ',
    'subject_id' => ' 16 ',
    'grade' => ' 2.5 ',
    'stud_id' => ' 31 '
   ],
   [
    'id' => ' 1034 ',
    'subject_id' => ' 20 ',
    'grade' => ' 1 ',
    'stud_id' => ' 31 '
   ],

   //Student 32
   [
    'id' => ' 1035 ',
    'subject_id' => ' 4 ',
    'grade' => ' 2 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1036 ',
    'subject_id' => ' 37 ',
    'grade' => ' 1.25 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1037 ',
    'subject_id' => ' 38 ',
    'grade' => ' 2.5 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1038 ',
    'subject_id' => ' 39 ',
    'grade' => ' 2.25 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1039 ',
    'subject_id' => ' 13 ',
    'grade' => ' 1.25 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1040 ',
    'subject_id' => ' 35 ',
    'grade' => ' 1 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1041 ',
    'subject_id' => ' 19 ',
    'grade' => ' 1 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1042 ',
    'subject_id' => ' 5 ',
    'grade' => ' 2.25 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1043 ',
    'subject_id' => ' 42 ',
    'grade' => ' 3 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1044 ',
    'subject_id' => ' 41 ',
    'grade' => ' 1.75 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1045 ',
    'subject_id' => ' 40 ',
    'grade' => ' 2 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1046 ',
    'subject_id' => ' 7 ',
    'grade' => ' 1.25 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1047 ',
    'subject_id' => ' 16 ',
    'grade' => ' 2 ',
    'stud_id' => ' 32 '
   ],
   [
    'id' => ' 1048 ',
    'subject_id' => ' 20 ',
    'grade' => ' 1.25 ',
    'stud_id' => ' 32 '
   ],

   //Student 33

   [
    'id' => ' 1049 ',
    'subject_id' => ' 4 ',
    'grade' => ' 2 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1050 ',
    'subject_id' => ' 37 ',
    'grade' => ' 1 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1051 ',
    'subject_id' => ' 38 ',
    'grade' => ' 3 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1052 ',
    'subject_id' => ' 39 ',
    'grade' => ' 2 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1053 ',
    'subject_id' => ' 13 ',
    'grade' => ' 1 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1054 ',
    'subject_id' => ' 35 ',
    'grade' => ' 1.25 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1055 ',
    'subject_id' => ' 19 ',
    'grade' => ' 1.5 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1056 ',
    'subject_id' => ' 5 ',
    'grade' => ' 1.5 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1057 ',
    'subject_id' => ' 42 ',
    'grade' => ' 2.5 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1058 ',
    'subject_id' => ' 41 ',
    'grade' => ' 2 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1059 ',
    'subject_id' => ' 40 ',
    'grade' => ' 2 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1060 ',
    'subject_id' => ' 7 ',
    'grade' => ' 1.25 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1061 ',
    'subject_id' => ' 16 ',
    'grade' => ' 2 ',
    'stud_id' => ' 33 '
   ],
   [
    'id' => ' 1062 ',
    'subject_id' => ' 20 ',
    'grade' => ' 1 ',
    'stud_id' => ' 33 '
   ],

   //Student 34

   [
    'id' => ' 1063 ',
    'subject_id' => ' 4 ',
    'grade' => ' 2.25 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1064 ',
    'subject_id' => ' 37 ',
    'grade' => ' 1.25 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1065 ',
    'subject_id' => ' 38 ',
    'grade' => ' 2 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1066 ',
    'subject_id' => ' 39 ',
    'grade' => ' 2.75 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1067 ',
    'subject_id' => ' 13 ',
    'grade' => ' 1.25 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1068 ',
    'subject_id' => ' 35 ',
    'grade' => ' 1.5 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1069 ',
    'subject_id' => ' 19 ',
    'grade' => ' 1 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1070 ',
    'subject_id' => ' 5 ',
    'grade' => ' 2.5 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1071 ',
    'subject_id' => ' 42 ',
    'grade' => ' 2.25 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1072 ',
    'subject_id' => ' 41 ',
    'grade' => ' 2 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1073 ',
    'subject_id' => ' 40 ',
    'grade' => ' 2.25 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1074 ',
    'subject_id' => ' 7 ',
    'grade' => ' 1.75 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1075 ',
    'subject_id' => ' 16 ',
    'grade' => ' 2.25 ',
    'stud_id' => ' 34 '
   ],
   [
    'id' => ' 1076 ',
    'subject_id' => ' 20 ',
    'grade' => ' 1 ',
    'stud_id' => ' 34 '
   ],
      //Student 35
   [
                
            'id' => ' 1077 ',
            'subject_id' => ' 4 ',
            'grade' => ' 2 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1078 ',
            'subject_id' => ' 37 ',
            'grade' => ' 1 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1079 ',
            'subject_id' => ' 38 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1080 ',
            'subject_id' => ' 39 ',
            'grade' => ' 2 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1081 ',
            'subject_id' => ' 13 ',
            'grade' => ' 1 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1082 ',
            'subject_id' => ' 35 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1083 ',
            'subject_id' => ' 19 ',
            'grade' => ' 1 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1084 ',
            'subject_id' => ' 5 ',
            'grade' => ' 2 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1085 ',
            'subject_id' => ' 42 ',
            'grade' => ' 2.75 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1086 ',
            'subject_id' => ' 41 ',
            'grade' => ' 2 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1087 ',
            'subject_id' => ' 40 ',
            'grade' => ' 2 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1088 ',
            'subject_id' => ' 7 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1089 ',
            'subject_id' => ' 16 ',
            'grade' => ' 2 ',
            'stud_id' => ' 35 '
            ],
            [
            'id' => ' 1090 ',
            'subject_id' => ' 20 ',
            'grade' => ' 1 ',
            'stud_id' => ' 35 '
            ],
            // Student 36 

            [
                'id' => ' 1091 ',
                'subject_id' => ' 4 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1092 ',
                'subject_id' => ' 37 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1093 ',
                'subject_id' => ' 38 ',
                'grade' => ' 3 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1094 ',
                'subject_id' => ' 39 ',
                'grade' => ' 2 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1095 ',
                'subject_id' => ' 13 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1096 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1097 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1098 ',
                'subject_id' => ' 5 ',
                'grade' => ' 2 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1099 ',
                'subject_id' => ' 42 ',
                'grade' => ' 2 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1100 ',
                'subject_id' => ' 41 ',
                'grade' => ' 2 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1101 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1102 ',
                'subject_id' => ' 7 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1103 ',
                'subject_id' => ' 16 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 36 '
            ],
            [
                'id' => ' 1104 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 36 '
            ],

            //Student 37 

            [
                'id' => ' 1105 ',
                'subject_id' => ' 4 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1106 ',
                'subject_id' => ' 37 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1107 ',
                'subject_id' => ' 38 ',
                'grade' => ' 2 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1108 ',
                'subject_id' => ' 39 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1109 ',
                'subject_id' => ' 13 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1110 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1111 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1112 ',
                'subject_id' => ' 5 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1113 ',
                'subject_id' => ' 42 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1114 ',
                'subject_id' => ' 41 ',
                'grade' => ' 2 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1115 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1116 ',
                'subject_id' => ' 7 ',
                'grade' => ' 2 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1117 ',
                'subject_id' => ' 16 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 37 '
            ],
            [
                'id' => ' 1118 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 37 '
            ],

            //Student 38 

            [
                'id' => ' 1119 ',
                'subject_id' => ' 4 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1120 ',
                'subject_id' => ' 37 ',
                'grade' => ' 1 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1121 ',
                'subject_id' => ' 38 ',
                'grade' => ' 2 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1122 ',
                'subject_id' => ' 39 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1123 ',
                'subject_id' => ' 13 ',
                'grade' => ' 1 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1124 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1125 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1126 ',
                'subject_id' => ' 5 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1127 ',
                'subject_id' => ' 42 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1128 ',
                'subject_id' => ' 41 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1129 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1130 ',
                'subject_id' => ' 7 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1131 ',
                'subject_id' => ' 16 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 38 '
            ],
            [
                'id' => ' 1132 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 38 '
            ],
            // Student 39 

            [
                'id' => ' 1133 ',
                'subject_id' => ' 4 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1134 ',
                'subject_id' => ' 37 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1135 ',
                'subject_id' => ' 38 ',
                'grade' => ' 3 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1136 ',
                'subject_id' => ' 39 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1137 ',
                'subject_id' => ' 13 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1138 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1139 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1140 ',
                'subject_id' => ' 5 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1141 ',
                'subject_id' => ' 42 ',
                'grade' => ' 3 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1142 ',
                'subject_id' => ' 41 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1143 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1144 ',
                'subject_id' => ' 7 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1145 ',
                'subject_id' => ' 16 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 39 '
            ],
            [
                'id' => ' 1146 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 39 '
            ],
             // Student 40 
            [
                'id' => ' 1147 ',
                'subject_id' => ' 4 ',
                'grade' => ' 2 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1148 ',
                'subject_id' => ' 37 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1149 ',
                'subject_id' => ' 38 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1150 ',
                'subject_id' => ' 39 ',
                'grade' => ' 2 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1151 ',
                'subject_id' => ' 13 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1152 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1153 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1154 ',
                'subject_id' => ' 5 ',
                'grade' => ' 2 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1155 ',
                'subject_id' => ' 42 ',
                'grade' => ' 2.75 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1156 ',
                'subject_id' => ' 41 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1157 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1158 ',
                'subject_id' => ' 7 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1159 ',
                'subject_id' => ' 16 ',
                'grade' => ' 2 ',
                'stud_id' => ' 40 '
            ],
            [
                'id' => ' 1160 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 40 '
            ],

                //BS 1st year class 2
            // Student 41
            [
                'id' => ' 1161 ',
                'subject_id' => ' 4 ',
                'grade' => ' 2 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1162 ',
                'subject_id' => ' 37 ',
                'grade' => ' 2 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1163 ',
                'subject_id' => ' 38 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1164 ',
                'subject_id' => ' 39 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1165 ',
                'subject_id' => ' 13 ',
                'grade' => ' 2 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1166 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1167 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1168 ',
                'subject_id' => ' 5 ',
                'grade' => ' 3 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1169 ',
                'subject_id' => ' 42 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1170 ',
                'subject_id' => ' 41 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1171 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1172 ',
                'subject_id' => ' 7 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1173 ',
                'subject_id' => ' 16 ',
                'grade' => ' 1 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1174 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 41 '
            ],

            // Student 42
            [
                'id' => ' 1175 ',
                'subject_id' => ' 4 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1176 ',
                'subject_id' => ' 37 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1177 ',
                'subject_id' => ' 38 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1178 ',
                'subject_id' => ' 39 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1179 ',
                'subject_id' => ' 13 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1180 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1181 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1182 ',
                'subject_id' => ' 5 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1183 ',
                'subject_id' => ' 42 ',
                'grade' => ' 2 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1184 ',
                'subject_id' => ' 41 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1185 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1186 ',
                'subject_id' => ' 7 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1187 ',
                'subject_id' => ' 16 ',
                'grade' => ' 1 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1188 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 42 '
            ],
            [
                'id' => ' 1189 ',
                'subject_id' => ' 4 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1190 ',
                'subject_id' => ' 37 ',
                'grade' => ' 3 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1191 ',
                'subject_id' => ' 38 ',
                'grade' => ' 2.75 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1192 ',
                'subject_id' => ' 39 ',
                'grade' => ' 2 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1193 ',
                'subject_id' => ' 13 ',
                'grade' => ' 2 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1194 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1195 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1196 ',
                'subject_id' => ' 5 ',
                'grade' => ' 2 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1197 ',
                'subject_id' => ' 42 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1198 ',
                'subject_id' => ' 41 ',
                'grade' => ' 2.75 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1199 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1200 ',
                'subject_id' => ' 7 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1201 ',
                'subject_id' => ' 16 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1202 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 43 '
            ],
            //Student 44

            [
                'id' => ' 1203 ',
                'subject_id' => ' 4 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1204 ',
                'subject_id' => ' 37 ',
                'grade' => ' 2 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1205 ',
                'subject_id' => ' 38 ',
                'grade' => ' 2 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1206 ',
                'subject_id' => ' 39 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1207 ',
                'subject_id' => ' 13 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1208 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1209 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1210 ',
                'subject_id' => ' 5 ',
                'grade' => ' 2 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1211 ',
                'subject_id' => ' 42 ',
                'grade' => ' 2 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1212 ',
                'subject_id' => ' 41 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1213 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1214 ',
                'subject_id' => ' 7 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1215 ',
                'subject_id' => ' 16 ',
                'grade' => ' 1 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1216 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 44 '
            ],
            //Student 45

            [
                'id' => ' 1217 ',
                'subject_id' => ' 4 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1218 ',
                'subject_id' => ' 37 ',
                'grade' => ' 2 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1219 ',
                'subject_id' => ' 38 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1220 ',
                'subject_id' => ' 39 ',
                'grade' => ' 2 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1221 ',
                'subject_id' => ' 13 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1222 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1223 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1224 ',
                'subject_id' => ' 5 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1225 ',
                'subject_id' => ' 42 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1226 ',
                'subject_id' => ' 41 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1227 ',
                'subject_id' => ' 40 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1228 ',
                'subject_id' => ' 7 ',
                'grade' => ' 2 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1229 ',
                'subject_id' => ' 16 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1230 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 45 '
            ],

            //46 Students 
            [
                'id' => ' 1231 ',
                'subject_id' => ' 4 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1232 ',
                'subject_id' => ' 37 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1233 ',
                'subject_id' => ' 38 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1234 ',
                'subject_id' => ' 39 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1235 ',
                'subject_id' => ' 13 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1236 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1237 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1238 ',
                'subject_id' => ' 5 ',
                'grade' => ' 2.75 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1239 ',
                'subject_id' => ' 42 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1240 ',
                'subject_id' => ' 41 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1241 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1242 ',
                'subject_id' => ' 7 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1243 ',
                'subject_id' => ' 16 ',
                'grade' => ' 1 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1244 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 46 '
            ],

            [
                'id' => ' 1245 ',
                'subject_id' => ' 4 ',
                'grade' => ' 2 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1246 ',
                'subject_id' => ' 37 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1247 ',
                'subject_id' => ' 38 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1248 ',
                'subject_id' => ' 39 ',
                'grade' => ' 2 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1249 ',
                'subject_id' => ' 13 ',
                'grade' => ' 2 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1250 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1251 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1252 ',
                'subject_id' => ' 5 ',
                'grade' => ' 2.75 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1253 ',
                'subject_id' => ' 42 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1254 ',
                'subject_id' => ' 41 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1255 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2.75 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1256 ',
                'subject_id' => ' 7 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1257 ',
                'subject_id' => ' 16 ',
                'grade' => ' 1 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1258 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1259 ',
                'subject_id' => ' 4 ',
                'grade' => ' 1 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1260 ',
                'subject_id' => ' 37 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1261 ',
                'subject_id' => ' 38 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1262 ',
                'subject_id' => ' 39 ',
                'grade' => ' 2 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1263 ',
                'subject_id' => ' 13 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1264 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1265 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1266 ',
                'subject_id' => ' 5 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1267 ',
                'subject_id' => ' 42 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1268 ',
                'subject_id' => ' 41 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1269 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1270 ',
                'subject_id' => ' 7 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1271 ',
                'subject_id' => ' 16 ',
                'grade' => ' 1 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1272 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 48 '
            ],

            //Student 49 
            [
                'id' => ' 1273 ',
                'subject_id' => ' 4 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1274 ',
                'subject_id' => ' 37 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1275 ',
                'subject_id' => ' 38 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1276 ',
                'subject_id' => ' 39 ',
                'grade' => ' 2 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1277 ',
                'subject_id' => ' 13 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1278 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1279 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1280 ',
                'subject_id' => ' 5 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1281 ',
                'subject_id' => ' 42 ',
                'grade' => ' 2 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1282 ',
                'subject_id' => ' 41 ',
                'grade' => ' 2 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1283 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1284 ',
                'subject_id' => ' 7 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1285 ',
                'subject_id' => ' 16 ',
                'grade' => ' 1 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1286 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 49 '
            ],
            // Student 50 

            [
                'id' => ' 1287 ',
                'subject_id' => ' 4 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1288 ',
                'subject_id' => ' 37 ',
                'grade' => ' 2.75 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1289 ',
                'subject_id' => ' 38 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1290 ',
                'subject_id' => ' 39 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1291 ',
                'subject_id' => ' 13 ',
                'grade' => ' 2 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1292 ',
                'subject_id' => ' 35 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1293 ',
                'subject_id' => ' 19 ',
                'grade' => ' 1 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1294 ',
                'subject_id' => ' 5 ',
                'grade' => ' 3 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1295 ',
                'subject_id' => ' 42 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1296 ',
                'subject_id' => ' 41 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1297 ',
                'subject_id' => ' 40 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1298 ',
                'subject_id' => ' 7 ',
                'grade' => ' 2 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1299 ',
                'subject_id' => ' 16 ',
                'grade' => ' 1 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1300 ',
                'subject_id' => ' 20 ',
                'grade' => ' 1 ',
                'stud_id' => ' 50 '
            ],
            //BS CS 1st year 2nd class
            //student 41
            [
                'id' => ' 1301 ',
                'subject_id' => ' 1 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1302 ',
                'subject_id' => ' 2 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1303 ',
                'subject_id' => ' 24 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1304 ',
                'subject_id' => ' 12 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1305 ',
                'subject_id' => ' 33 ',
                'grade' => ' 2 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1306 ',
                'subject_id' => ' 17 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1307 ',
                'subject_id' => ' 21 ',
                'grade' => ' 1 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1308 ',
                'subject_id' => ' 3 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1309 ',
                'subject_id' => ' 25 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1310 ',
                'subject_id' => ' 8 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1311 ',
                'subject_id' => ' 10 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1312 ',
                'subject_id' => ' 34 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 41 '
            ],
            [
                'id' => ' 1313 ',
                'subject_id' => ' 18 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 41 '
            ],

            //Student 42 
                [
            'id' => ' 1314 ',
            'subject_id' => ' 1 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 42 '
            ],
            [
            'id' => ' 1315 ',
            'subject_id' => ' 2 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 42 '
            ],
            [
            'id' => ' 1316 ',
            'subject_id' => ' 24 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 42 '
            ],
            [
            'id' => ' 1317 ',
            'subject_id' => ' 12 ',
            'grade' => ' 2 ',
            'stud_id' => ' 42 '
            ],
            [
            'id' => ' 1318 ',
            'subject_id' => ' 33 ',
            'grade' => ' 2.5 ',
            'stud_id' => ' 42 '
            ],
            [
            'id' => ' 1319 ',
            'subject_id' => ' 17 ',
            'grade' => ' 2.25 ',
            'stud_id' => ' 42 '
            ],
            [
            'id' => ' 1320 ',
            'subject_id' => ' 21 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 42 '
            ],
            [
            'id' => ' 1321 ',
            'subject_id' => ' 3 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 42 '
            ],
            [
            'id' => ' 1322 ',
            'subject_id' => ' 25 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 42 '
            ],
            [
            'id' => ' 1323 ',
            'subject_id' => ' 8 ',
            'grade' => ' 2 ',
            'stud_id' => ' 42 '
            ],
            [
            'id' => ' 1324 ',
            'subject_id' => ' 10 ',
            'grade' => ' 1.25 ',
            'stud_id' => ' 42 '
            ],
            [
            'id' => ' 1325 ',
            'subject_id' => ' 34 ',
            'grade' => ' 1.5 ',
            'stud_id' => ' 42 '
            ],
            [
            'id' => ' 1326 ',
            'subject_id' => ' 18 ',
            'grade' => ' 1.75 ',
            'stud_id' => ' 42 '
            ],

            //43 
            [
                'id' => ' 1327 ',
                'subject_id' => ' 1 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1328 ',
                'subject_id' => ' 2 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1329 ',
                'subject_id' => ' 24 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1330 ',
                'subject_id' => ' 12 ',
                'grade' => ' 2.75 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1331 ',
                'subject_id' => ' 33 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1332 ',
                'subject_id' => ' 17 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1333 ',
                'subject_id' => ' 21 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1334 ',
                'subject_id' => ' 3 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1335 ',
                'subject_id' => ' 25 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1336 ',
                'subject_id' => ' 8 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1337 ',
                'subject_id' => ' 10 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1338 ',
                'subject_id' => ' 34 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 43 '
            ],
            [
                'id' => ' 1339 ',
                'subject_id' => ' 18 ',
                'grade' => ' 2 ',
                'stud_id' => ' 43 '
            ],

            // Student 44 

            [
                'id' => ' 1340 ',
                'subject_id' => ' 1 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1341 ',
                'subject_id' => ' 2 ',
                'grade' => ' 2 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1342 ',
                'subject_id' => ' 24 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1343 ',
                'subject_id' => ' 12 ',
                'grade' => ' 2 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1344 ',
                'subject_id' => ' 33 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1345 ',
                'subject_id' => ' 17 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1346 ',
                'subject_id' => ' 21 ',
                'grade' => ' 1 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1347 ',
                'subject_id' => ' 3 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1348 ',
                'subject_id' => ' 25 ',
                'grade' => ' 2 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1349 ',
                'subject_id' => ' 8 ',
                'grade' => ' 2 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1350 ',
                'subject_id' => ' 10 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1351 ',
                'subject_id' => ' 34 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 44 '
            ],
            [
                'id' => ' 1352 ',
                'subject_id' => ' 18 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 44 '
            ],

            //Student 45 

            [
                'id' => ' 1353 ',
                'subject_id' => ' 1 ',
                'grade' => ' 2 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1354 ',
                'subject_id' => ' 2 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1355 ',
                'subject_id' => ' 24 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1356 ',
                'subject_id' => ' 12 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1357 ',
                'subject_id' => ' 33 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1358 ',
                'subject_id' => ' 17 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1359 ',
                'subject_id' => ' 21 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1360 ',
                'subject_id' => ' 3 ',
                'grade' => ' 2 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1361 ',
                'subject_id' => ' 25 ',
                'grade' => ' 2 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1362 ',
                'subject_id' => ' 8 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1363 ',
                'subject_id' => ' 10 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1364 ',
                'subject_id' => ' 34 ',
                'grade' => ' 2 ',
                'stud_id' => ' 45 '
            ],
            [
                'id' => ' 1365 ',
                'subject_id' => ' 18 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 45 '
            ],
            //Student 46 
            [
                'id' => ' 1366 ',
                'subject_id' => ' 1 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1367 ',
                'subject_id' => ' 2 ',
                'grade' => ' 2.24 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1368 ',
                'subject_id' => ' 24 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1369 ',
                'subject_id' => ' 12 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1370 ',
                'subject_id' => ' 33 ',
                'grade' => ' 2.5 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1371 ',
                'subject_id' => ' 17 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1372 ',
                'subject_id' => ' 21 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1373 ',
                'subject_id' => ' 3 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1374 ',
                'subject_id' => ' 25 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1375 ',
                'subject_id' => ' 8 ',
                'grade' => ' 2 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1376 ',
                'subject_id' => ' 10 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1377 ',
                'subject_id' => ' 34 ',
                'grade' => ' 2 ',
                'stud_id' => ' 46 '
            ],
            [
                'id' => ' 1378 ',
                'subject_id' => ' 18 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 46 '
            ],

            //Student 47 
            [
                'id' => ' 1379 ',
                'subject_id' => ' 1 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1380 ',
                'subject_id' => ' 2 ',
                'grade' => ' 2 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1381 ',
                'subject_id' => ' 24 ',
                'grade' => ' 2 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1382 ',
                'subject_id' => ' 12 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1383 ',
                'subject_id' => ' 33 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1384 ',
                'subject_id' => ' 17 ',
                'grade' => ' 2 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1385 ',
                'subject_id' => ' 21 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1386 ',
                'subject_id' => ' 3 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1387 ',
                'subject_id' => ' 25 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1388 ',
                'subject_id' => ' 8 ',
                'grade' => ' 1 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1389 ',
                'subject_id' => ' 10 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1390 ',
                'subject_id' => ' 34 ',
                'grade' => ' 2 ',
                'stud_id' => ' 47 '
            ],
            [
                'id' => ' 1391 ',
                'subject_id' => ' 18 ',
                'grade' => ' 2.25 ',
                'stud_id' => ' 47 '
            ],

            //Student 48 
            [
                'id' => ' 1392 ',
                'subject_id' => ' 1 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1393 ',
                'subject_id' => ' 2 ',
                'grade' => ' 1 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1394 ',
                'subject_id' => ' 24 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1395 ',
                'subject_id' => ' 12 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1396 ',
                'subject_id' => ' 33 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1397 ',
                'subject_id' => ' 17 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1398 ',
                'subject_id' => ' 21 ',
                'grade' => ' 1 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1399 ',
                'subject_id' => ' 3 ',
                'grade' => ' 1 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1400 ',
                'subject_id' => ' 25 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1401 ',
                'subject_id' => ' 8 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1402 ',
                'subject_id' => ' 10 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1403 ',
                'subject_id' => ' 34 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 48 '
            ],
            [
                'id' => ' 1404 ',
                'subject_id' => ' 18 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 48 '
            ],
             // Student 49 
            [
                'id' => ' 1405 ',
                'subject_id' => ' 1 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1406 ',
                'subject_id' => ' 2 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1407 ',
                'subject_id' => ' 24 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1408 ',
                'subject_id' => ' 12 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1409 ',
                'subject_id' => ' 33 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1410 ',
                'subject_id' => ' 17 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1411 ',
                'subject_id' => ' 21 ',
                'grade' => ' 1 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1412 ',
                'subject_id' => ' 3 ',
                'grade' => ' 1 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1413 ',
                'subject_id' => ' 25 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1414 ',
                'subject_id' => ' 8 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1415 ',
                'subject_id' => ' 10 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1416 ',
                'subject_id' => ' 34 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 49 '
            ],
            [
                'id' => ' 1417 ',
                'subject_id' => ' 18 ',
                'grade' => ' 1 ',
                'stud_id' => ' 49 '
            ],
            
            // Student 50 

            [
                'id' => ' 1418 ',
                'subject_id' => ' 1 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1419 ',
                'subject_id' => ' 2 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1420 ',
                'subject_id' => ' 24 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1421 ',
                'subject_id' => ' 12 ',
                'grade' => ' 1.25 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1422 ',
                'subject_id' => ' 33 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1423 ',
                'subject_id' => ' 17 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1424 ',
                'subject_id' => ' 21 ',
                'grade' => ' 1 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1425 ',
                'subject_id' => ' 3 ',
                'grade' => ' 1 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1426 ',
                'subject_id' => ' 25 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1427 ',
                'subject_id' => ' 8 ',
                'grade' => ' 1.5 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1428 ',
                'subject_id' => ' 10 ',
                'grade' => ' 1.75 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1429 ',
                'subject_id' => ' 34 ',
                'grade' => ' 2 ',
                'stud_id' => ' 50 '
            ],
            [
                'id' => ' 1430 ',
                'subject_id' => ' 18 ',
                'grade' => ' 1 ',
                'stud_id' => ' 50 '
            ],

        ];
        
        SubjectGrade::insert($data);


    }
}
