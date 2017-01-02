<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\SponsorProject;

class ProjectSponsorTableSeeder extends Seeder {
    public function run()
    {
            SponsorProject::create([
            'amount'=>'5000',
            'messages'=>'加油~~~~~',
            'sponsor_id'=>'1',
            'project_id' =>'1',
            ]);

            SponsorProject::create([
            'amount'=>'5000',
            'messages'=>'加油~~~~~',
            'sponsor_id'=>'1',
            'project_id' =>'45',
            ]);

            SponsorProject::create([
            'amount'=>'5000',
            'messages'=>'加油~~~~~',
            'sponsor_id'=>'2',
            'project_id' =>'27',
            ]);

            SponsorProject::create([
            'amount'=>'5000',
            'messages'=>'加油~~~~~',
            'sponsor_id'=>'1',
            'project_id' =>'13',
            ]);


            SponsorProject::create([
            'amount'=>'5000',
            'messages'=>'加油~~~~~',
            'sponsor_id'=>'2',
            'project_id' =>'23',
            ]);

            SponsorProject::create([
            'amount'=>'5000',
            'messages'=>'加油~~~~~',
            'sponsor_id'=>'2',
            'project_id' =>'8',
            ]);

            SponsorProject::create([
            'amount'=>'5000',
            'messages'=>'加油~~~~~',
            'sponsor_id'=>'3',
            'project_id' =>'39',
            ]);

            SponsorProject::create([
            'amount'=>'5000',
            'messages'=>'加油~~~~~',
            'sponsor_id'=>'3',
            'project_id' =>'23',
            ]);

            SponsorProject::create([
            'amount'=>'5000',
            'messages'=>'加油~~~~~',
            'sponsor_id'=>'1',
            'project_id' =>'4',
            ]);
    }
}