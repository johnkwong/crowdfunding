<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();
        //rand(100,999)=rand(100,999);
        //substr(md5(microtime()),rand(0,26),5)=rand(1,1000000);
        User::create([
        	'name'=>'吳敏音',
        	'email' => '123@gmail.com',
        	'password'=>Hash::make('123'),
            'avator' => 'https://graph.facebook.com/v2.4/504923186329578/picture?type=normal',
        	'permission'=>'0',
        	]);

        User::create([
        	'name'=>'楊志峰',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),
        	'permission'=>'0',
        	]);
        User::create([
        	'name'=>'彭幼強',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),
        	'permission'=>'2',
        	]);
        User::create([
        	'name'=>'吳宗翰',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),
        	'permission'=>'2',
        	]);
        User::create([
        	'name'=>'張欣蕙',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),
        	'permission'=>'2',
        	]);
        User::create([
        	'name'=>'李文欣',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'2',
        	]);
        User::create([
        	'name'=>'盛成雲',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'2',
        	]);
        User::create([
        	'name'=>'郭淑琴',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'2',
        	]);
        User::create([
        	'name'=>'戴培宸',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'2',
        	]);
        User::create([
        	'name'=>'簡筱婷',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'周語慈',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'林君瑞',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'宋金俊',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'梁泰瑤',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'游惠婷',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'蔡文心',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'謝珮豐',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'鄭麗亦',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'葉麗珠',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'楊婉君',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'林芝青',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'吳舜芷',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'洪偉廷',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'簡卉貴',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'陳至仲',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'王子堯',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'陳恒行',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'吳佳穎',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'陳孟天',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'林怡君',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',

        	]);
        User::create([
        	'name'=>'柯雯翰',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'王秀青',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'韓政斌',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'陳昭孝',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'黃佳容',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'胡孝海',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'張芳儀',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'李佳光',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'盧家維',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'王志帆',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'蔡俊穎',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'林韋易',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'楊怡靜',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'顏登義',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'馮恩宏',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'吳佳樺',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'林立偉',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'馮彥君',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'李文珍',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);
        User::create([
        	'name'=>'林怡君',
        	'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'password'=>rand(100000,999999),'permission'=>'0',
        	]);

             User::create([
            'name'=>'Wefund管理員',
            'email' => 'admin@wefund.dev',
            'password'=>Hash::make('123'),
            'permission'=>'1',
            ]);
             
             User::create([
            'name'=>'王永慶',
            'email' => 'sponsor@wefund.dev',
            'password'=>Hash::make('123'),
            'permission'=>'0',
            ]);

             User::create([
            'name'=>'審查大爺',
            'email' => 'check@wefund.dev',
            'password'=>Hash::make('123'),
            'permission'=>'2',
            ]);


       

    }
}