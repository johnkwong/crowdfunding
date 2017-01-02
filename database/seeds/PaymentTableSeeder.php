<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Payment;

class PaymentTableSeeder extends Seeder {
    public function run()
    {
    	for($i=1;$i<=30;$i++){
            for($j=1;$j<70;$j++){
                Payment::create([
                'amount'=>rand(100,350),
                'type'=>rand(0,1),
                'project_id'=>$i,
                'user_id'=>rand(1,30),
            ]);
            }
        }
    }
}