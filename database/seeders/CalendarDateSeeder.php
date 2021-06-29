<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CalendarDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('calendar_dates')->delete();
        
        \DB::table('calendar_dates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'date' => '2021-06-01',
                'monday' => 0,
                'tuesday' => 1,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            1 => 
            array (
                'id' => 2,
                'date' => '2021-06-02',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 1,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            2 => 
            array (
                'id' => 3,
                'date' => '2021-06-03',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 1,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            3 => 
            array (
                'id' => 4,
                'date' => '2021-06-04',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 1,
                'saturday' => 0,
                'sunday' => 0
            ),
            4 => 
            array (
                'id' => 5,
                'date' => '2021-06-05',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 1,
                'sunday' => 0
            ),
            5 => 
            array (
                'id' => 6,
                'date' => '2021-06-06',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 1
            ),
            6 => 
            array (
                'id' => 7,
                'date' => '2021-06-07',
                'monday' => 1,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            7 => 
            array (
                'id' => 8,
                'date' => '2021-06-08',
                'monday' => 0,
                'tuesday' => 1,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            8 => 
            array (
                'id' => 9,
                'date' => '2021-06-09',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 1,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            9 => 
            array (
                'id' => 10,
                'date' => '2021-06-10',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 1,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            10 => 
            array (
                'id' => 11,
                'date' => '2021-06-11',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 1,
                'saturday' => 0,
                'sunday' => 0
            ),
            11 => 
            array (
                'id' => 12,
                'date' => '2021-06-12',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 1,
                'sunday' => 0
            ),
            12 => 
            array (
                'id' => 13,
                'date' => '2021-06-13',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 1
            ),
            13 => 
            array (
                'id' => 14,
                'date' => '2021-06-14',
                'monday' => 1,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            14 => 
            array (
                'id' => 15,
                'date' => '2021-06-15',
                'monday' => 0,
                'tuesday' => 1,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            15 => 
            array (
                'id' => 16,
                'date' => '2021-06-16',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 1,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            16 => 
            array (
                'id' => 17,
                'date' => '2021-06-17',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 1,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            17 => 
            array (
                'id' => 18,
                'date' => '2021-06-18',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 1,
                'saturday' => 0,
                'sunday' => 0
            ),
            18 => 
            array (
                'id' => 19,
                'date' => '2021-06-19',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 1,
                'sunday' => 0
            ),
            19 => 
            array (
                'id' => 20,
                'date' => '2021-06-20',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 1
            ),
            20 => 
            array (
                'id' => 21,
                'date' => '2021-06-21',
                'monday' => 1,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            21 => 
            array (
                'id' => 22,
                'date' => '2021-06-22',
                'monday' => 0,
                'tuesday' => 1,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            22 => 
            array (
                'id' => 23,
                'date' => '2021-06-23',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 1,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            23 => 
            array (
                'id' => 24,
                'date' => '2021-06-24',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 1,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            24 => 
            array (
                'id' => 25,
                'date' => '2021-06-25',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 1,
                'saturday' => 0,
                'sunday' => 0
            ),
            25 => 
            array (
                'id' => 26,
                'date' => '2021-06-26',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 1,
                'sunday' => 0
            ),
            26 => 
            array (
                'id' => 27,
                'date' => '2021-06-27',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 1
            ),
            27 => 
            array (
                'id' => 28,
                'date' => '2021-06-28',
                'monday' => 1,
                'tuesday' => 0,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            28 => 
            array (
                'id' => 29,
                'date' => '2021-06-29',
                'monday' => 0,
                'tuesday' => 1,
                'wednesday' => 0,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            ),
            29 => 
            array (
                'id' => 30,
                'date' => '2021-06-30',
                'monday' => 0,
                'tuesday' => 0,
                'wednesday' => 1,
                'thursday' => 0,
                'friday' => 0,
                'saturday' => 0,
                'sunday' => 0
            )
        ));
    }
}
