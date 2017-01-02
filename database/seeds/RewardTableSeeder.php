<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\ProjectReward;

class RewardTableSeeder extends Seeder {
    public function run()
    {
    	for($i=1;$i<50;$i++){
            ProjectReward::create([
            'reward_amount'=>'100',
            'reward_img'=>'',
            'reward_introduction' => '只單純贊助，不求回饋',
            'project_id'=>$i,
            ]);
            ProjectReward::create([
            'reward_amount'=>'200',
            'reward_img'=>'/images/reward/1443003035-1.jpg',
            'reward_introduction' => '贊助200元，贈送精美文具組',
            'project_id'=>$i,
            ]);
            ProjectReward::create([
            'reward_amount'=>'300',
            'reward_img'=>'/images/reward/1443003057-02.gif',
            'reward_introduction' => '贊助300元，贈送月曆一份',
            'project_id'=>$i,
            ]);
        }
    }
}