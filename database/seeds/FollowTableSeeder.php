<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\FollowProject;

class FollowTableSeeder extends Seeder {
    public function run()
    {
        $follow=array();

        for($i=1;$i<=50;$i++)
        {
            $follow[]=$i;/*將所有的數字寫入陣列*/
        }

        $fo=array_rand($follow,31);

    	for($i=1;$i<=47;$i++){
            for($j=1;$j<=30;$j++){
                FollowProject::create([
                'project_id'=>$i,
                'user_id'=>$follow[$fo[$j]],
            ]);
            }
        }
    }
}