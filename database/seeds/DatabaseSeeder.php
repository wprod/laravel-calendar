<?php

use Illuminate\Database\Seeder;
use App\User;
use App\CalendarEvent;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('powpow'), //nope, its not a real password
        ]);

        for($i=0; $i < 5; $i++)
        {
            $t = factory(CalendarEvent::class)->create();

        };
    }
}
