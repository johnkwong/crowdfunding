<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Starter;

class StarterTableSeeder extends Seeder {
    public function run()
    {
    	DB::table('starters')->delete();
    	//rand(100,999)=rand(100,999),
       // substr(md5(microtime()),rand(0,26),5)=rand(a,z),
        Starter::create([
        	'name'=>'黃嘉琳',
        	'id_no'=>'A151618897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>'09'.rand(10000000,99999999),
    		'introduction'=>'美國華盛頓大學西雅圖校區教育學院博士候選人、校園午餐搞非基行動發起人。',
    		'user_id'=>'1',
    		]);

        Starter::create([
        	'name'=>'陳儒瑋',
        	'id_no'=>'B151658876',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>'09'.rand(10000000,99999999),
    		'introduction'=>' 成功大學環境工程學系、台灣師範大學環境教育研究所畢業。',
    		'user_id'=>'1',
    		]);

        Starter::create([
        	'name'=>'顏登',
        	'id_no'=>'A1516176347',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>'09'.rand(10000000,99999999),
    		'introduction'=>' 台灣大學環境工程學系，2011年取得環境教育人員認證。NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'1',
    		]);

        Starter::create([
        	'name'=>'顏義',
        	'id_no'=>'F254618897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>'09'.rand(10000000,99999999),
    		'introduction'=>' 台灣師範大學環境教育研究所畢業，NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'2',
    		]);

        Starter::create([
        	'name'=>'顏登義',
        	'id_no'=>'G651618897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>'09'.rand(10000000,99999999),
    		'introduction'=>' 台灣大學工程學系，2011年取得環境教育人員認證。刊物總編輯八年以上資歷。',
    		'user_id'=>'2',
    		]);

        Starter::create([
        	'name'=>'林芝',
        	'id_no'=>'C156518877',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>'09'.rand(10000000,99999999),
    		'introduction'=>' 台灣大學環境教育研究所畢業，2011年取得環境教育人員認證。NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'3',
    		]);

        Starter::create([
        	'name'=>'林青',
        	'id_no'=>'A251614897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>'09'.rand(10000000,99999999),
    		'introduction'=>' 成功大學環境工程學系，2011年取得環境教育人員認證。NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'3',
    		]);

        Starter::create([
        	'name'=>'林芝青',
        	'id_no'=>'D251548897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>'09'.rand(10000000,99999999),
    		'introduction'=>' 成功大學環境工程學系、台灣師範大學環境教育研究所畢業，2011年取得環境教育人員認證。',
    		'user_id'=>'4',
    		]);

        Starter::create([
        	'name'=>'林請青',
        	'id_no'=>'C161878897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>'09'.rand(10000000,99999999),
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>' 成功大學環境工程學系，2011年取得環境教育人員認證。NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'4',
    		]);

        Starter::create([
        	'name'=>'林芝勻',
        	'id_no'=>'A365618897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>' 台灣師範大學環境教育研究所畢業，2011年取得環境教育人員認證。NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'5',
    		]);

        Starter::create([
        	'name'=>'林芝青',
        	'id_no'=>'P153648897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>' 2011年取得環境教育人員認證。NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'5',
    		]);

        Starter::create([
        	'name'=>'吳敏音',
        	'id_no'=>'P1565458897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>' 台灣大學環境工程學系、台灣師範大學環境教育研究所畢業，2011年取得環境教育人員認證。NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'6',
    		]);

        Starter::create([
        	'name'=>'謝珮',
        	'id_no'=>'O156487897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>' 成功大學環境工程學系、台灣大學環境教育研究所畢業，2011年取得環境教育人員認證。NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'6',
    		]);

        Starter::create([
        	'name'=>'謝豐陳',
        	'id_no'=>'B156487897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>' 成功大學環境工程學系、台灣大學環境教育研究所畢業，2011年取得環境教育人員認證。NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'7',
    		]);

        Starter::create([
        	'name'=>'謝珮豐',
        	'id_no'=>'D789877897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>' 成功大學環境工程學系、高雄師範大學環境教育研究所畢業，2011年取得環境教育人員認證。NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'7',
    		]);

        Starter::create([
        	'name'=>'陳珮榮',
        	'id_no'=>'A654618897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>' 輔仁大學環境工程學系、台灣師範大學環境教育研究所畢業，2011年取得環境教育人員認證。NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'8',
    		]);

        Starter::create([
        	'name'=>'岑珮豐',
        	'id_no'=>'B654818897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>' 國立中興大學環境教育研究所畢業，2011年取得環境教育人員認證。NGO資深秘書及刊物總編輯八年以上資歷。',
    		'user_id'=>'9',
    		]);

        Starter::create([
        	'name'=>'吳敏音',
        	'id_no'=>'F165418897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'美國哈弗大學教育學院博士候選人、校園午餐搞非基行動發起人。曾任職台灣及美國學術單位研究人員、NGO工作者、教師與輔導主任。',
    		'user_id'=>'10',
    		]);

        Starter::create([
        	'name'=>'謝豐',
        	'id_no'=>'G165448897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'中國人民大學教育學院博士候選人、校園午餐搞非基行動發起人。曾任職台灣及美國學術單位研究人員、NGO工作者。',
    		'user_id'=>'11',
    		]);

        Starter::create([
        	'name'=>'謝中豐',
        	'id_no'=>'H165488897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'曾任職台灣及美國學術單位研究人員、NGO工作者、教師與輔導主任。',
    		'user_id'=>'12',
    		]);

        Starter::create([
        	'name'=>'馮君',
        	'id_no'=>'P895458897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'美國華盛頓大學西雅圖校區教育學院博士候選人。曾任職台灣及美國學術單位研究人員、NGO工作者、教師與輔導主任。',
    		'user_id'=>'13',
    		]);

        Starter::create([
        	'name'=>'吳敏',
        	'id_no'=>'A965118897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'校園午餐搞非基行動發起人。曾任職台灣及美國學術單位研究人員、NGO工作者、教師與輔導主任。',
    		'user_id'=>'14',
    		]);

        Starter::create([
        	'name'=>'馮加君',
        	'id_no'=>'K151648997',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'英國牛津大學教育學院博士候選人、校園午餐搞非基行動發起人。曾任職台灣及美國學術單位研究人員、NGO工作者、教師與輔導主任。',
    		'user_id'=>'15',
    		]);

        Starter::create([
        	'name'=>'吳敏音',
        	'id_no'=>'A984518897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'美國華盛頓大學西雅圖校區教育學院博士候選人。曾任職台灣及美國學術單位研究人員、NGO工作者、教師與輔導主任。',
    		'user_id'=>'16',
    		]);

        Starter::create([
        	'name'=>'馮彥君',
        	'id_no'=>'O146518897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'美國華盛頓大學西雅圖校區教育學院博士候選人、校園午餐搞非基行動發起人。曾任職台灣及美國學術單位研究人員、NGO工作者、教師與輔導主任。',
    		'user_id'=>'17',
    		]);

        Starter::create([
        	'name'=>'馮彥中',
        	'id_no'=>'B146548897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'校園午餐搞非基行動發起人。曾任職台灣及美國學術單位研究人員、NGO工作者、教師與輔導主任。',
    		'user_id'=>'18',
    		]);

        Starter::create([
        	'name'=>'馮曹君',
        	'id_no'=>'I146548897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'美國華盛頓大學西雅圖校區教育學院博士候選人、校園午餐搞非基行動發起人。曾任職台灣及美國學術單位研究人員、NGO工作者、教師與輔導主任。',
    		'user_id'=>'19',
    		]);

        Starter::create([
        	'name'=>'吳音',
        	'id_no'=>'U145648897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'美國華盛頓大學西雅圖校區教育學院博士候選人。曾任職台灣及美國學術單位研究人員、NGO工作者、教師與輔導主任。',
    		'user_id'=>'20',
    		]);

        Starter::create([
        	'name'=>'吳敏中',
        	'id_no'=>'C451618897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'美國華盛頓大學西雅圖校區教育學院博士候選人、校園午餐搞非基行動發起人。NGO工作者、教師與輔導主任。',
    		'user_id'=>'21',
    		]);

        Starter::create([
        	'name'=>'陳彥君',
        	'id_no'=>'P165618897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'美國哈佛大學西雅圖校區教育學院博士候選人、校園午餐搞非基行動發起人。曾任職台灣及美國學術單位研究人員、NGO工作者。',
    		'user_id'=>'22',
    		]);

        Starter::create([
        	'name'=>'陳忠君',
        	'id_no'=>'F145518897',
			'email' => substr(md5(microtime()),rand(0,26),5).rand(100,999).'@gmail.com',
        	'phone_no'=>rand(10000000,99999999),
    		'introduction'=>'美國哈佛大學西雅圖校區教育學院博士候選人。曾任NGO工作者、教師與輔導主任。',
    		'user_id'=>'23',
    		]);


    	 }
}