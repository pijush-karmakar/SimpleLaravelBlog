<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name'          => "Laravel Blog",
            'contact_number'     => "01878045671",
            'contact_email'      => "kpijush88@gmail.com",
            'address'            => "Maijdee Noakhali"
        ]);
    }
}
