<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Sponsor;

class SponsorTableSeeder extends Seeder {
    public function run()
    {
            Sponsor::create([
            'company_name'=>'金源軟件',
            'logo_path'=>'/images/sponsorlogo/1443165191-7.jpg',
            'user_id'=>'1',
            ]);

            Sponsor::create([
            'company_name'=>'Amazing Story',
            'logo_path'=>'/images/sponsorlogo/1443321866-1111.jpg',
            'user_id'=>'2',
            ]);

            Sponsor::create([
            'company_name'=>'嘉宇建設',
            'logo_path'=>'/images/sponsorlogo/1443155090-33.gif',
            'user_id'=>'3',
            ]);
    }
}