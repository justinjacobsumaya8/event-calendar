<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CalendarDateEvent;

class DropEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CalendarDateEvent::truncate();
    }
}
