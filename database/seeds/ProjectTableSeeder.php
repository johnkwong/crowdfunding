<?php

use Illuminate\Database\Seeder;
use App\Project;
use Carbon\Carbon;


class ProjectTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		$items = array("1437556249-07", "1437556731-02", "1437303434-5", "1437223473-2015-06-24 21_31_38-Java EE - Eclipse", "1437228918-google","1437223331-07-04200-midterm","1437552346-database","1437553542-08","1437195042-5","1437223422-EclipseTomcatServerPortSetup","20150726164048","20150726164357","20150726164556","20150726164809","20150726164835","20150726164944","20150726165015","20150726165123","20150726165253","20150726165324","20150726165528","20150726165604","20150726165702");
		$today = Carbon::now();
			Project::create([
				'name' => '金萱，新時代中文字型，培育新鮮台灣文字風景',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '十五年來，台灣幾乎沒有設計自己的新字型。
不過，這一次，我們將能自己開發、研製一系列的新中文字型。',
				'start_date' => date("Y-m-d", strtotime($today."-10 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+30 day")),
				'cover_img_path' => '/images/project/1.png' ,
				'video_link' => 'https://www.youtube.com/embed/8L35oJaggEk',
				'content' => '想到台灣，你會想到什麼？台北 101、夜市小吃，很棒。珍珠奶茶、蚵仔煎、滷肉飯，都很經典。

不過，還有一位很具代表性的候選人：正體中文。想到正體中文的美麗與博大精深，或許大多數人會先想到書法。但其實，中文字普遍更以「字型」的形式存在於生活中。在資訊時代裡，「字型」拾俯即是，存在於各種媒介裡。一般大眾、專業人士，每天都在使用，比書法藝術更能凸顯一國的文化影響力。',
				'status' => '4',
				'hitpoint'=>rand(0,10000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => '1', 
				]);
			
			Project::create([
				'name' => 'SketchyNotebook',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '市面上最多功能的筆記本！不論你想塗鴉、寫字或素描，一本在手，功用無窮！',
				'start_date' => date("Y-m-d", strtotime($today."-15 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+25 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/9ddd835c3faee73428ed94ea7a263b04.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/LQOsJLy6tGU',
				'content' => '這是怎麼開始的？
如同大多數的藝術家，當靈感一迸現時，我便立刻想把它寫下或畫出來以免忘記。但問題是，大多數的時候我會猶豫，因為我並不希望把筆記本的頁面弄得凌亂、沒有條理。

有時候，我只是想塗鴉、繪製個網頁的版型、描繪一個 iPhone 的 app，或只是想記錄下一個念頭。當然，市面上有許多已經印有方格、點點、格線的筆記本，但這些預先存在的限制，總是讓我難以自在地把想法謄到紙上。

筆記本裡預先存在的模板，侷限了我的創意與自由。我試著在空白的素描本上發揮，但它缺少了我所需要的精確度。

我要的其實很簡單：我享受空白的自在，但我也喜歡指引的陪伴。有沒有可能，我可以同時擁有來自兩個世界的絕配，撇除餘下的一切？



傳統筆記本的問題：

單環或線圈筆記本易變形
大小不一
紙張易落，欠缺耐久度
只能有一種格式
圓滑的邊角與打洞孔易導致混亂的頁面',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1372055681,1398057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
			
			
			
			Project::create([
				'name' => '割闌尾計劃 Appendectomy Project',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '可割可棄，利大於弊
5月3號，割闌尾行動正式動刀！
5月5號，上午10:30北三區記者會開始！',
				'start_date' => date("Y-m-d", strtotime($today."-10 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+30 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/4e4866962ad2d1516563ba8380004960.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/_F36LVanRE0',
				'content' => '【5月4號23:10更新：割闌尾募款結束預告：感謝你的每一份心意】

割闌尾 VDemocracy 募資活動 (http://www.vdemocracy.tw/project/3080) 上線45小時以來，
已有超過5400名夥伴加入支持的行列，我們非常感謝你的每一份心意！
儘管這條路勢必艱辛，這場仗勢必嚴苛，有了你的火力支援，就能讓我們往前挺進。
由於募資已達階段性目標，割闌尾 VDemocracy 募資活動將會於5/5(一)中午截止。

戰役才正要開始，接下來我們更需要你的挺身而出。站出來行動吧！
寫連署書、走出門、丟進郵筒－一個簡單的動作，
你或許就能創造台灣的歷史：讓台灣人民首度成功行使罷免權。

全國各地區的不適任立委罷免行動，也正由網友、民眾、公民團體自主發起。
不管你位於何處，都可以透過網路平台參與後續活動、
加入行動志工、或主動號召夥伴組成在地罷免團隊，讓全民監督代議士的力量遍地開花。

再次呼籲，所有「蔡正元、林鴻池、吳育昇」立委選區的割友 ─ 
即日起，凡是台北市第4選區（南港、內湖）、新北市第6選區（板橋區中正里等65里）、
新北市第1選區（包括石門區、三芝區、淡水區、八里區、林口區與泰山區）的民眾，
皆可前往割闌尾行動官網（http://appy.tw/）下載實體連署書，
',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);

						
			Project::create([
				'name' => 'ZENLET -唯一帶給你簡單，安全，直覺的錢包',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '
重新思考錢包的需求與功能，將「禪」設計哲學貫徹於錢包設計， 故取名為ZENLET。',
				'start_date' => date("Y-m-d", strtotime($today."-10 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+50 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/478ddac72021217bc8fdafdc532f3c2d.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/5ZDGRokY6lY',
				'content' => ' 你是否曾有過站在一個長長的排隊隊伍裡，輪到了你卻找不到卡片的窘境？你是否擔心下雨會讓你的卡片，支票濕掉？你知道一般人背部疼痛的原因可能來自於厚重的錢包嗎？甚至還有更多充斥在你身上的問題。看一下下面列表當你帶著你的錢包經常會發生的十個問題。 ',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);

			Project::create([
				'name' => '流浪狗不再流浪，流浪狗家園計畫 ',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '流浪動物的世界及環境與我們想像的不太相同，也有太多的事實大家都不知道。現在大部分的流浪狗相關協會都已有固定的募款對象及方法，就在這個時候我們看到了-小黑的故事，並進而找到了「高雄市愛護流浪狗協會」(汪媽媽狗園)。',
				'start_date' => date("Y-m-d", strtotime($today."-15 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+30 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/f2519f81120a2dbe719b19302abbc23a.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/S-3DNww1euI',
				'content' => '流浪狗的定義是指沒有主人的寵物犬，而最常見的原因包括飼主刻意遺棄、自行走失或野生繁殖等。

　　在台灣，棄養的問題非常不被重視；飼主不想飼養時就將動物丟至收容所，更惡劣的甚至會直接遺棄在郊區，這些行為對飼主來說雖不會受到嚴重的懲罰，但對狗狗來說卻是最可怕的噩夢。人的一生可以擁有過很多隻狗，但對狗狗來說你是牠的唯一、是牠的全世界，所以愛牠請不要遺棄牠。

　　被遺棄的狗兒或野生的流浪狗都會造成流浪狗繁殖，導致更多的流浪狗出現，而解決流浪狗的問題不是撲殺，是棄養問題及結紮的觀念，這樣才能正確又有效的減少流浪狗。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
			
			Project::create([
				'name' => '歐洲M.i.樂團 音樂巡島計畫',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '我在世界不同的角落，遇見了各個充滿奇特魅力的樂手，我一直告訴他們台灣的音樂是什麼，把台灣的音樂讓他們演奏，但我更想直接把他們帶到台灣來，看看什麼是台灣，也想讓台灣人看看這群充滿獨有魅力的音樂人。',
				'start_date' => date("Y-m-d", strtotime($today."-8 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+30 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/d573722cedd7785db17577bdc40c95f9.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/TK1l52CEGN8',
				'content' => ' 大家好，我是M.i樂團的團長黃柏樹，我是一個吹竹笛的台灣小孩！但是我從小開始就是一個不太容易被旁人理解的小孩。或許是因為溝通的問題，很多時候在台灣的學校教育裡我總是感到太多的衝撞與苦痛，因此在國中畢業後我決定暫別家鄉台灣，去看看其他的世界。我不想放棄，我相信只要我用對方法，誠心誠意，一定可以和所有人有好的溝通。走出台灣後，我到了歐洲，重新認識自己，也重新認識了全世界的語言—音樂。我認識到一種充滿即興的樂種，在這種樂種裡你必須要用你自己的語言，說你自己的話，這個樂種，叫做爵士。從此，我用它和人溝通，開始試著將我的語言用爵士來傳達。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
	
			
			Project::create([
				'name' => '2014跑步環島資助計畫',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '影片是屬於我一個小部分的微電影，

裡面說明著我練習的精神與不放棄，

希望我能夠帶著這份勇氣完成計畫。

因為時間的關係無法拍出相關性的影片，

所以只好用一個精神來告訴大家我的勇氣。',
				'start_date' => date("Y-m-d", strtotime($today."-6 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+50 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/4a6f4a2c52163f1d8bd097db985792ae.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/Zb1qVSEO1Ts',
				'content' => ' 【計畫緣起】

兩年前高一的暑假，教練讓我們放一個禮拜的假期，而假期的目標是做一件有意義的事情，
我心裡想著如果能靠著自己的雙腳跑到自己想要到地方那是不是會很有意義?


於是我開始著手規劃路線並實現這一段小小的夢想，沿路上我看到了許多不同的景象，
在捷運上、公車上你可能是玩著手機或著與朋友聊著天，
但你一定從沒想過如果是用跑的或者是用走的卻可以那麼認真的觀察每一個地方，
甚至是覺得原來自己所規劃完的夢想然而去實踐完成會是那麼的有意義。


一年前高二，我擔任班上的愛心大使參加學校推動的世界展望會(World Vision)兒童資助計畫
每個禮拜每個月收著這些小錢，寄出到國外資助這些有需要的小朋友。


這一刻起
我想嘗試完成去築另一個夢想，我想靠著自己的雙腳深入的走進台灣每一個小角落，
在這個過程中去發現需要被幫助的人。這不禁讓我想起昔日的高中同學們，
她們因為家裡的經濟狀況而無法與我們一起同行前往畢業旅行，
但那時的我們卻沒有能力可以幫助她們什麼或者是為她們做點什麼，
因此讓我更想要去做這件事情並幫助到所有需要被幫助的人。

【計畫內容】

學校所推動的兒童資助計畫讓我深刻了解到世界其他角落的小孩需要的是什麼，
也進而關心到台灣的小孩呢? 是不是也同樣有這些問題或者需要的是什麼?
是一雙鞋子? 一套衣服? 一份晚餐? 還是一個深深的擁抱?

而最重要的是要讓大家知道不只是世界其他角落的孩子需要被幫助，
就連台灣也有不少的孩子甚至有其他人也都需要我們去幫助。


【計畫目標】

透過網路群眾募資及環島過程中募資的方式，來幫助這些這些需要被資助的人，
資金的要求不限，有多少就算多少，只要你願意出點力哪怕只是1元、5元、10元,。

任何一個夢想所需要的資源是未知，
但是一個創造成功的夢想卻是無價。

將目標設定為100元，
是希望你因為支持而樂捐，
而目標的資金是無上限的。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);


			Project::create([
				'name' => 'DEMON ART : metal 金屬經典鍵盤',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '期待已久的 DEMON ART :metal【金屬經典鍵盤】開始募資, 產品預計 2014年8~10月左右上市

(此次贊助者為第一批出貨對象,預計出貨時間為 2014年7~8月左右)



為了回報廣大台灣粉絲長期的支持和鼓勵 , 我們特別在 FlyingV 開放募資 ,

讓喜歡 DEMON ART :metal的用戶能在上市前用【極優惠】的價格得到這經典鍵盤 ,

同時也更加充實我們的產品資金!',
				'start_date' => date("Y-m-d", strtotime($today."-90 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-30 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/bacd1f2435aabd7d65732496d55d6bac.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/bmGLSqtItCc',
				'content' => '產品規格與注意事項
長/寬/高：31cm*13cm*1.2cm (實際量產品會有些微調整)
鍵盤重量：約 680g  (實際量產品會有些微調整，不同版本也會有相對上的差異)
作動結構：剪刀腳薄膜式鍵盤 (就像你的筆記型電腦鍵盤一樣)
表面符號：台灣版為 英文 / 注音( 注意:本產品表面符號無 倉頡/大易 )
使用時間：非發光版( 290 mAh,可充電鋰電池),約可使用 120小時
                       發光版( 1550 mAh,可充電鋰電池,) 約可使用 700小時(無開啟背光的情形下),
充電方式 : 電池耗盡只要插上USB線即可輕鬆充電與使用
商品保固：有限硬體保固一年 (人為或不可抗力之外力造成之損害不在保固範圍內)
過保後維修 : 可寄送DEMON ART台灣原廠維修

外殼 : 航太鋁合金CNC陽極處理
按鍵表面 : 髮絲紋貼膜

面板 : 防刮面板 (防刮等級: 指甲) / 符號背面印刷

USB線長 : 預定長度 1.5M(分離式設計)

注意事項：以上照片為預覽版樣品機，實際外觀以出貨產品為準 (在以模具生產成商品前外觀有可能會有局部設計上的調整喔！)  ',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
			Project::create([
				'name' => '癱瘓流浪狗Lucky的復健之路',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '今年年初寒流最冷的時候，我們在公司的停車場發現一隻不斷發抖的小狗，看起來才出生不到兩三個月，看到人很興奮想討食。後來陸續遇過幾次，每次餵點小東西後，想帶牠到別處避雨時，牠就逃走了。',
				'start_date' => date("Y-m-d", strtotime($today."-10 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+32 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/5bfdf8dafbc0aa5b02d4800a2123437a.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/Vpge10VnEYw',
				'content' => '今年年初寒流最冷的時候，我們在公司的停車場發現一隻不斷發抖的小狗，看起來才出生不到兩三個月，看到人很興奮想討食。後來陸續遇過幾次，每次餵點小東西後，想帶牠到別處避雨時，牠就逃走了。

　　2/24，有人開車時後方傳來一聲狗叫，對方看一下就開走了。同事發現躺在地上的，是之前的狗狗，後半身不能動且失禁了。我們在辦公室不知所措一小時後，決定帶牠去醫院。那時的想法是：「雖然很怕接下來的負擔，但我怕現在不做些什麼，以後會後悔一輩子。」',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);

			
			Project::create([
				'name' => '全球第一台入侵者追蹤機器人',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '全球第一台自動物件追蹤安控機器人
        榮獲2015年CES全球最佳創新獎',
				'start_date' => date("Y-m-d", strtotime($today."-75 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-20 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/82a45ad27db0f52897573df33207e309.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/J4S5-6OeMNg',
				'content' => 'iCamPRO FHD 世界上第一台智慧家庭安防機器人.

在美國募資平台創下前三天募得15萬美金的佳績

不同於任何其他的家庭保全裝置，iCamPRO是第一個家庭安全攝像機器人，不但可以看，聽，感應，並追踪移動物體，同時還能與您溝通。 “在今天的聰明的小偷或破壞者盛行的同時，iCamPRO將完美的記錄每一個動作細節，因此您可以識別是否是安全威脅或普通盜賊，保護您的企業和家庭”，--大衛·羅德威爾，活動贊助者之一評論。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);

			Project::create([
				'name' => '跟你的孩子一樣，他們需要你的愛！幫台東天琪幼兒園的孩子籌一個月學費',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '1963年於台東成立的「尚武會院」，基於孩童教育需要，附設「天琪幼稚園」。長期以來，支持貧童的教育，就算必須由教職員自願減薪來補貼全園支出，讓孩子們有好的受教環境，也在所不惜。',
				'start_date' => date("Y-m-d", strtotime($today."-14 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+32 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/1fc76370523c4cc742a0fed7803cc07d.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/DyhbMZQi1XY',
				'content' => '天主教私立天琪幼兒園主任沈秀惠表示，二十多年來，園方好幾次面臨經營困難，都是靠聖十字架慈愛修女會補助，勉強度過難關。但是這幾年修女會已經無法再出資補助，有意要結束經營。瑞士籍院長宋玉潔修女到處奔波籌錢，甚至向遠在瑞士的親友們募款，為的就是一股「孩子的教育不能中斷」的信念。

宋玉潔修女：
「一定要給小孩子教育，才有機會脫離貧困，未來才有希望。」


宋玉潔修女自願奉召來台服務35年，曾獲得2013年第23屆的醫療奉獻獎。宋修女始終秉持「哪裡需要我，就往那裡去」的精神，默默為後山貧困及原住民學子貢獻心力。即使自己是個癌症病人，也拒絕返回瑞士聖十字架慈愛修女總院療養，寧願將餘生分享給更多需要幫助的人。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
			
			Project::create([
				'name' => 'iSensor Patio: 全球第一台迷你專業防雨智慧安控攝影機',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => 'iSensor HD Patio 是全球第一支迷你專業級的戶外監視器，它持續關注著你公司與住宅的一舉一動！',
				'start_date' => date("Y-m-d", strtotime($today."-45 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-5 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/99103d6c75b2147cf2e616cb1e2c7ca6.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/3-NDA9aJZ2M',
				'content' => 'Amaryllo設計，測試和組裝所有產品及配件。在過去的幾個月，我們一直在試圖提高iSensor HD Patio外殼的防水性。

現在已經達到專業等級的防水功能，為了避免消費者自行組裝產生漏水的情形，我們發貨前會進行密封。我們強烈建議您不要打開外殼，因為它可能會影響墊片並導致橡膠密封件洩漏的情況。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => '1', 
				]);

Project::create([
				'name' => '聽，吉他說。第十七屆全國大學院校校際吉他音樂邀請賽',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '在什麼時候我們還沒成熟就已經老了，

一卡車載不動的夢想，就讓一把吉他，帶著你前行，

關於那些過去及未來，聽吉他說、聽你說…。',
				'start_date' => date("Y-m-d", strtotime($today."-19 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+50 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/f5d77dfc311cc30e346ab35759d9be88.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/DLtv_kQRAik',
				'content' => '# 17歲的大吉盃 舉辦說明

活動地點：

國立高雄大學圖書資訊館 2F 國際會議廳

舉辦日期：

104/1/19 : 獨唱組、創作組 

104/1/20 : 鋼弦組、鋼弦創作組 

104/1/21 : 團體組



參加對象：

大吉盃的比賽是全程公開的場合，雖比賽資格須符合國內大專院校的學生，

但誠摯邀請一般民眾皆可來一同觀賞比賽，

我們希望透過 flyingV 網站，讓大吉盃的消息傳播出去，傳給更多熱愛音樂的人，

因為我們希望它不只是一個比賽，而是讓每個人都能享受吉他與音樂的美好。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1372055681,1398057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);	
			
			Project::create([
				'name' => '金萱，新時代中文字型，培育新鮮台灣文字風景',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '十五年來，台灣幾乎沒有設計自己的新字型。
不過，這一次，我們將能自己開發、研製一系列的新中文字型。',
				'start_date' => date("Y-m-d", strtotime($today."-36 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-2 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/aacd6f448cd08ade4de0edd21169626e.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/8L35oJaggEk',
				'content' => '想到台灣，你會想到什麼？台北 101、夜市小吃，很棒。珍珠奶茶、蚵仔煎、滷肉飯，都很經典。

不過，還有一位很具代表性的候選人：正體中文。想到正體中文的美麗與博大精深，或許大多數人會先想到書法。但其實，中文字普遍更以「字型」的形式存在於生活中。在資訊時代裡，「字型」拾俯即是，存在於各種媒介裡。一般大眾、專業人士，每天都在使用，比書法藝術更能凸顯一國的文化影響力。',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);

	
Project::create([
				'name' => 'meArm.Joystick',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => 'meArm.Joystick 是甚麼

meArm.Joystick 是時下最夯的桌上型機器手臂，藉由DIY套件，它不只能帶你走入 maker 世界，更能透過 30 餘程式教程培養程式設計能力，從學生到社會人士都適合玩。meArm.Joystick 目的是要喚酷大家潛藏已久的自造魂，希望藉時下最夯的機器手臂來引發興趣，同時透過深入淺出的教程帶領大家進入程式設計殿堂。',
				'start_date' => date("Y-m-d", strtotime($today."-15 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+42 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/27e763ac327041a285c8ce31545b3319.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/d9rGvIEFrJs',
				'content' => 'meArm.Joystick 不只是一條手臂

除了機械手臂特質外，meArm.Joystick 更代表開源精神，因為它搭載開放的 Arduino 主板，我們特別設計的搖桿擴展板也會開源出來。不僅如此，它的軟體也是開源的，包括C語言和圖形語言開發環境，您所在上面修改的任何一條程式碼，都可以放到社群供大家分享，藉以融入廣大的國際 Arduino 和 MeArm 社群，透過 meArm.Joystick，您不僅能鍛鍊程設功力，並能融入國際社群，為未來開創無限可能。meArm.Joystick 品質如何？

雖然我們是初次在國內募資，但實已長期累積許多軟硬體技術，不僅軟體教程，連 Arduino 擴展板都是我們自己佈的線，meArm.Joystick 已成功試作並在 Fablab Taipei 成功跑過親子組裝樂活動，是穩定實用的教育用電子產品，就連 meArm 最原始開發者都稱讚。下為台北活動剪影。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);


Project::create([
				'name' => 'Lulus Hand - 讓人人都可以沖出好咖啡',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '看著一流咖啡師專注的以陶瓷的濾杯搭配優美的尖嘴壺沖泡出濃香醇厚的咖啡的一幕，總是令我難以忘懷。不過輪到自己購買器具，費盡工夫得來的卻完全不是那回事。原來店中要價百元以上的單品咖啡，賣的不只是咖啡，更多的是背後磨出來的功夫。

我在想，若是讓自己簡簡單單就能沖泡出接近名家所沖泡出的咖啡，那該有多好。',
				'start_date' => date("Y-m-d", strtotime($today."-20 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+32 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/b24947d584a22ad3efce45b305b43081.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/cn5Lcc5NjZI',
				'content' => '專屬台灣設計的台灣咖啡濾杯

近幾年來全球吹起了精品咖啡的風潮，濃郁的口感、酸甜的果香和堅果的香氣，各種多樣化的味道是他迷人的地方。

我們是一群喜歡喝咖啡的人，也自己烘培咖啡、沖泡咖啡，甚至於自己研究咖啡。

我們一直想著，大家聽過美式咖啡機、義大利濃縮咖啡機、法式濾壓壺等沖泡器具，那為何世界上不能有台灣咖啡濾杯呢？

因此 Lulus Hand 誕生了！一個由台灣原創設計的咖啡沖泡器具。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
Project::create([
				'name' => '本草綱目粽---從中國第一藥典吃出健康',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '【本草綱目】

是由明朝的李時珍花了近20年的時間所著，有「中國第一藥典」之稱。

我們站在這部擁有400多年的歷史、14萬字的big data為基礎，

致力讓它成為一個能永續經營的企業，

只要談到養生、健康、天然

就會聯想到

【本草綱目】',
				'start_date' => date("Y-m-d", strtotime($today."-16 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+41 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/85cec268b734ea81aca5035fbc6f5b6d.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/6Q--f6kWH_I',
				'content' => '菜色介紹

本草綱目團隊榮幸地邀請到中山醫大前校長&台灣營養學會理事長──王進崑博士，為我們的粽子，針對食材調配上的營養價值進行把關。以下四種粽子的功效、對人體的益處，由王校長為我們推薦。

1.十全大補粽

主：十全藥膳包煮糯米

配：干貝、蝦米、魷魚、栗子、香菇、櫻花蝦、蘿蔔乾、黑芝麻 



緣起:

外食族的增加和食安危機，讓本草綱目團隊決定推出<補粽>來調理外食朋友的健康。十全大補粽帶領消費朋友們躲過太

油太鹹的外食，一個十全大補當作正餐，讓您營養滿分！另外，比一般粽子更加大份量的<十全大補粽>，讓您不再有一

顆吃不飽、兩顆吃太撐的困擾，作為您養生、健康又滿足的好朋友。



2.香檳茸粽

主：糯米

配：香檳茸、十全藥膳包、干貝、蝦米、魷魚、栗子、櫻花蝦、蘿蔔乾',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);


Project::create([
				'name' => '臺灣婚姻平權貼紙計畫 LEGALIZE GAY MARRIAGE15',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '我們是一群關心臺灣社會、同志權益的臺灣人，在兩年前的「1130反對多元成家遊行」後
於網路集結募資，展開「婚姻平權貼紙計畫」。 去年我們在這裡成功地募集到了貼紙的製
作經費，並完成回饋商品的製作及寄送。 在過去十一個月以來，以每個月製作、發送約一
萬份貼紙的速度進行著貼紙計畫。',
				'start_date' => date("Y-m-d", strtotime($today."-61 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-37 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/e050bcee7153fe139f9afa07467f8587.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/sk_EXNNFTKM',
				'content' => '截至今年七月共印製、發出了約二十萬份的 LEGALIZE GAY MARRIAGE 婚姻平權貼紙，這個計劃最初期是由
Okinafa Chen 建立，最初的目的是透過文字無聲的抗議，向反對立法保障同志權益的團體表達婚姻平權的訴求
後來決定利用貼紙這個簡單又方便的媒材，希望能將支持婚姻平權的聲音，透過不一樣的方式傳遞到台灣的每一
個角落。「婚姻平權」雖然爭取的是修改民法972條婚姻制度的法律草案，但「貼紙計畫」希望能將生硬的法律草案，簡化
成一張悠遊卡大小的貼紙，讓貼紙去傳遞支持同志權益的訴求，經由任何一種想像，讓這個聲音變成簡單的、容易
接觸的，而參與社會運動、關心同志或任何一個族群的權益，不再只侷限在上街抗議、高喊口號訴求，也可以透過
很簡單、很輕鬆的方式，讓我們的聲音被社會聽見。



「婚姻平權貼紙計畫」想做的，是打破原來社會對於抗爭的想像，就像婚姻平權草案，要打破的就是我們對於一男一女婚姻制度的想像，讓婚姻制度不再只是異性戀者專有的權利，同性戀者同樣該擁有一樣的權利去選擇要不要結婚，在一樣的制度下生存，才有機會走向平等、多元；跨性別、變性者、性別未定等任何一種生活方式，或是任何一種家庭結合方式的想像同樣，我們都該去尊重這每一種想像，認同這每一種方式，保障他們獲得應有的權利，才是建立多元社會的開始。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);


Project::create([
				'name' => 'ch+u：超電能飛行腕錶',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '預告了將近半年，中間收到了不下上百次讀者的熱情詢問，ch+u也都戰戰兢兢的回覆，為了呈現出最好的品質在大家面前，這隻腕錶上所有的細節ch+u都花了很多時間反覆檢視，試用。從第一隻sample到現在最新的版本，大大小小的修改總共超過了30項，花費了超過一年的時間，為的就是把這支 ch+u 心目中最理想的腕錶介紹給所有的時尚愛好者。 ',
				'start_date' => date("Y-m-d", strtotime($today."-40 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-2 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/84e434f890df1ba3646c66361170dc3e.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/bDTrOEF83mQ',
				'content' => '所有 ch+u 的讀者應該都知道我們喜歡好東西，一年多以來，我們嘗試著用自己的品味來說服影響讀者，介紹報導了許多我們認為適合讀者的產品，也都得到了很正面的回應。每個獨立的商品固然都有其優缺點，這樣的情況讓我們一直想到一個可能性，一個世界上大部分時尚網站都不曾嘗試過的挑戰：如果我們真的可以推出一個，自己心目中的理想商品，那該有多好？ 當然，說了再多其實也沒有用，最好的辦法就是直接推出符合自己理念的產品。什麼樣的東西是你一定需要，中性/不分男女，它可以是一個基本工具，卻又是重要的時尚設計配件呢？答案已經呼之欲出– 『就是腕錶。』 ',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);

Project::create([
				'name' => '把愛傳下去-Adopt, dont Buy',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '把愛傳下去 → 請以認養代替購買',
				'start_date' => date("Y-m-d", strtotime($today."-69 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-25 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/6042f84ae9b34228bee263a8fb923b37.jpg' ,
				'video_link' => 'https://ksr-ugc.imgix.net/projects/1389347/photo-original.jpg?v=1446677939&w=1024&h=768&fit=crop&auto=format&q=92&s=d7d60194fa11b1e409a57441912f36dc',
				'content' => '五年前，張媽媽義無反顧地投身於動物救援後，就再也沒有回頭了！



在張媽媽流浪動物之家

每一天有接不完的電話

每一通大多都是求救電話

『張媽媽...我看見有一隻狗被....』

『張媽媽...我朋友說有一隻貓在....』

『張媽媽...我家樓下有流浪狗好可憐該怎麼辦』',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
Project::create([
				'name' => '《救助》台南鍾媽媽狗場---流浪毛小孩的【鍾】心期盼',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '【台南鍾媽媽狗場】，需要您我的幫助！',
				'start_date' => date("Y-m-d", strtotime($today."-38 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-5 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/c05c29cc30f27ed1c14a74956d7be264.jpg' ,
				'video_link' => 'https://ksr-ugc.imgix.net/projects/1964676/photo-original.jpg?v=1447104602&w=1024&h=768&fit=crop&auto=format&q=92&s=b475343efc900471ec425b7a0417f336',
				'content' => '鍾媽媽狗園摘要：
20年前，鍾媽媽在一次偶然的機緣下，發現一隻不會走(受傷)的流浪狗⋯⋯，漸漸地，鍾媽媽收養了越來越多需要幫助的狗兒⋯⋯。光陰似箭，鍾媽媽現在已經是68歲的鍾奶奶了，由於鍾奶奶沒有足夠的錢來醫療本身的糖尿病，因此導致雙眼失明⋯⋯。
這幾年，一切僅靠鍾爺爺獨立照顧狗園100多隻狗兒


希望藉由各位的力量，募集到必須的費用：鍾爺爺與鍾奶奶的醫療及狗場的飼料費用。 ',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
Project::create([
				'name' => '太陽花主題設計商品助印 4am 海報計畫',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '用音樂改變世界？
2014年3月22日，五月天阿信在紐約麥迪遜花園廣場演唱會謝幕時發表感言，那一幕讓許多人心碎了。一直以來，阿信要用他的音樂，告訴所有喜歡音樂的人，音樂也可以有力量，也能改變世界，可是一直到今天，原來喜歡音樂，卻還是不能大聲說出自己心裡的話，難道阿信錯了嗎',
				'start_date' => date("Y-m-d", strtotime($today."-129 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-88 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/4f3abd4ae93e0d764e440043551868f9.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/ecihUDqLZNU',
				'content' => 'Democracy at 4 am
2014年3月24日，太陽花學運遭到血腥鎮壓，為了記錄歷史性的一刻，由3621位公民發起群眾募資，並與設計師聶永真、網站工程師Evenwu Design與Bonana king 共同組織了 4am.tw 團隊，讓 Democracy at 4 am 廣告登上紐約時報，讓全世界看見台灣黑暗的一夜，也要讓大眾永遠記得，你們的鮮血不會白流，民主之火永遠不會被熄滅！


現在就行動！
受到4am.tw團隊的熱情與專業感召，我們希望能讓這個深具意義的廣告被更多人看見。因此，身為設計師的我們以太陽花學運為主題，設計了一系列的主題商品，希望透過創意的設計，傳達堅定的信念，喚起更多人關心，並參與聲援。（因為4月5日已經有傳言警方將準備攻堅，我們擔心募資完成後學生已經遭到驅離，因此我們已經事先掏腰包墊付了印製費用，並將於4月6日下午發放第一批海報數量共1500份，相關的消息請見設計就是力量粉絲團）


讓更多人看見！
如同4am.tw團隊的主張，我們僅是公民意志的代行，因此不希望也不會透過此計劃營利。下述太陽花主題商品銷售所得，扣除成本後均將用來印製經 4am.tw 團隊授權使用的海報，除於合法地區張貼外，並將無償贈送給參與太陽花學運的夥伴們。全數產品皆為在台灣製造，除海報與酷卡外，均採用高畫質數位直噴方式，非網版大量印刷，雖然成本較高，但速度較快。所有的費用均已包含台灣本島運費和手續費。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
Project::create([
				'name' => '山茶堂 - 100%原萃阿里山茶',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '茶葉農藥超標、越南境外茶危機連環爆，喜歡喝茶的朋友買不到好茶，山上踏實打拼的茶農卻面臨好茶賤賣的困境。',
				'start_date' => date("Y-m-d", strtotime($today."-77 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-43 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/9c61b82725e5004bf02babefd39854c1.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/isE5pY-Hs34',
				'content' => '我是從小住在阿里山下的劉倪維，也和許多朋友一樣獨自上台北打拼，每每看到遊客買阿里山茶，但在地人其實都知道，遊客買到的大部分都不是阿里山茶，而是包裝與內容物不符的假茶，大都是越南進口茶來混充的，而身邊愛喝茶朋友也總是希望我幫忙買茶，可是真正的純阿里山茶，一般外地遊客，怎麼會知道要去哪邊買呢? 

於是我們產生了一個想法 : 推廣阿里山茶，就讓我們一起來改變，讓真正的阿里山高山茶被看見！',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);


Project::create([
				'name' => 'SNAP! PRO－最專業的iPhone照相手機殼',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '鏡頭及手工皮革腕繩開放加購中】
感謝大家的支持，讓我們在3天內即達成目標
接下來我們也開放大家加購鏡頭跟手工皮革手腕繩（黑／淺駝）
請想要加購的朋友們
直接在右邊的贊助選項中點選你想加購的品項
我們會連同您原本贊助的品項一同寄出！',
				'start_date' => date("Y-m-d", strtotime($today."-79 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-35 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/0d0f7a52283ab67d8f6dd99f0440efe3.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/XvwWaGVnFZI',
				'content' => '拍照，就是為了抓住生活中的精彩片刻。而想拍照時，手機往往是最快速便利的，所以不知不覺中，手機已經默默地取代了傳統相機，變成最多人使用的相機！但，在使用手機拍了這麼多照片後，總覺得它不夠順手，少了以前使用相機時的一種...順暢感。

2013年，我們在flyingV上，推出擁有實體快門鍵的SNAP! 5，獲得許多人的迴響，但是我們並沒有因此停止前進 ，反而更加努力地希望能讓台灣的品牌能被世界看到。於是在2014年，我們挑戰全球最大募資網站Kickstarter.com，推出了可以轉換不同外接鏡頭的SNAP! 6手機殼，最後也很成功的募得超過11萬美元。

我們團隊真心地希望能讓iPhone攝影變得更簡單、帶來更多樂趣，所以我們不斷的傾聽使用者給我們的意見予以改良，今年2015，我們帶著我們有史以來最好的作品回來了：SNAP! PRO - 最專業的iPhone拍照手機殼。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
Project::create([
				'name' => 'AIESEC 盛夏海灘巾（經典復刻版）',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '感謝大家對 AAGC 海灘巾的支持
昨天（7/10）在 AAT 聚會上 AAGC 的相關產品詢問度也非常高
團隊決定也在 FlyingV 上讓大家認購',
				'start_date' => date("Y-m-d", strtotime($today."-110 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-72 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/483f0de14a33fe18617e41b040805400.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/XLe7hOmCrY4',
				'content' => '臺北一日票（8/22）：
傑出的企業家將在論壇中與各位分享未來趨勢以及在亞太的下一個機會與可能；科技廣場中，將看到許多亟欲打破遊戲規則的台灣新創公司，並親自體驗這些在台灣出發的創新軟硬整合實力。
當然，在早上豐富的論壇及會議內容後，晚上的派對將使會議越夜越精采！


高雄與 IC 同樂票（含8/23住宿及8/24 Gala Dinner）：
我們將在熱情的高雄與International Congress的青年領袖們會師，一同見證Alumni名人堂的榮耀以及會議精心準備的Taiwan Night-台灣夜市的精采節目！
其中Alumni Talk的分享論壇中，我們將聽見在不同領域成為佼佼者的Alumni分享他們的故事；在晚上我們將與IC一同在Gala Dinner歡慶！',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);

Project::create([
				'name' => '《龐氏騙局》，翻轉你對桌上遊戲的想像',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '大家好，我是Jesse，對大家來說這名字應該很陌生。 如果你曾經參加過台灣桌遊設計圈的一些聚會，那麼你可能聽過這個名字，知道有一個人「在桌遊設計圈混了很久，但總是等不到他的遊戲出版」。

一切「不幸」的源頭是從我設計的第一款遊戲《歷史長流》開始，它是一款以競標機制推進的文明發展主題遊戲。「不幸」的咀咒就落在「文明發展」這四個字上。一開始的野心太大，加上學習過程的跌跌撞撞，一直到2年後才有信心帶著「完成」的版本向出版社投搞。',
				'start_date' => date("Y-m-d", strtotime($today."-95 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-53 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/9140211b026b1ec229ad464a853cd62e.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/u0x9NI9rvxE',
				'content' => '在尋求出版的過程中，又遇到了籠罩在台灣桌遊出版界上空的另一個魔咒：「策略遊戲的國內年銷量」。每當我自信滿滿向出版社推銷這款遊戲的「前瞻性」時，總是無法突破「《電力公司》國內年銷量之壁」(你說，你作的策略有多好玩，但你有信心賣得比《電力公司》還要好嗎?)。《歷史長流》最後的命運如何呢? 經歷過34次改版，共用掉2500張左右的測試代牌，去年有一整年在國外出版社那裡流浪，聽說最近有間國內出版有計畫出版，但目前也只是聽說而已。

在2012年12月的時候，我開設了《紙貓咪》桌遊設計部落格，除了紀錄一些遊戲測試的心得，也嘗試著把桌遊設計上的一些想法，用理論化的文字進行整理。也就是在這段時間「桌遊不只該是有趣，還是可以更深刻的什麼……」的想像下，開始著手《龐氏騙局》的設計。

',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
Project::create([
				'name' => 'OVO！台灣電視讚起來',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => 'OVO 電視盒 （OVO TV Tomorrow），一款老人小孩都會用的雲端智慧電視盒。
用一支遙控器，看電視、看網路影片、聽音樂、玩遊戲，還可以對電視節目按讚，
參與全新的雲端收視率與滿意度調查，共同決定台灣電視的未來。',
				'start_date' => date("Y-m-d", strtotime($today."-63 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-19 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/a1b3a2c05dc271e607bd7c56c43dd9d2.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/PorWI1h6CJk',
				'content' => '台灣電視生態怎麼了？
1. 「節目品質低落，自製節目愈來愈少，台灣文化逐漸喪失，最後將形同於亡國。」
→ 電視亡國－電視生態沉淪下的文化大危機 / 今周刊 (2010/11/11)
→ Mobile01 討論串 (2010/11/12)
2. 「由他們來決定收視率，其結果就是成本低廉的本土劇、卡通片、及低俗談話節目收視居高不下，相反地，一些高水準及國際性的節目當然收視慘淡。」
→ 尼爾森是怎麼調查台灣收視率的？ / 李方儒 臉書貼文與討論串 (2013/05/28)
3. 「台灣現行的收視率調查，是選定樣本戶，在電視機上裝設收視紀錄器，再將數據彙集整理。這樣的收視率調查，長期以來都被批評樣本數偏少，社經地位偏低，誤差偏高。但是這樣不精確、被質疑的收視調查，卻主導了全台灣電視節目的方向，甚至主宰了社會文化的走向。」',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
Project::create([
				'name' => '筆箸 PenstiX --史上最迷你、精巧的隨行筷',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '計劃源起
有美食天堂之稱的台灣以美味小吃聞名於世，食客們卻大多以含化工毒物的免洗筷進食，而每天的使用量竟超過
280萬雙，這些毒害經年累月被吞下肚或棄於土地，嚴重危害健康又破壞環境，然而，在環保筷普及率最高的台灣
，使用率卻不高，我們試圖找出主因並設計出幾近不可思議的尺寸，把 "一雙筷子加一個筷架" 變成 "一支筆" 的大小，打
造出精巧實用、簡約時尚，令人愛不釋手的精品，藉以提高隨行筷的攜帶率。深切期盼不久的將來，台灣可以成為樂活
又先進的美食之鄉。',
				'start_date' => date("Y-m-d", strtotime($today."-59 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-9 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/934e9c94a7c8d3b4e7a187d58738ef46.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/XlyN2AJ3ljM',
				'content' => '筷子是源自六、七千年前老祖宗的發明，象徵著中華飲食的文化，亦是飲食文明的開始。隨著中、日、韓等料理的國際化與普及，用筷人口日益增長，用筷文化不僅深入餐廳，也成為越來越多家庭的食器之一。

然而，外食人數的增加與尚未落實的環保政策導致每年全球約有800億雙免洗筷被丟棄，到現在大多數的店家人仍提供免洗筷，為了防腐與防霉，免洗筷需經過藥水與漂白劑浸泡處理，其中幾乎每雙含有有毒化學溶劑，不僅危害人體健康也造成環境資源的重大浪費與破壞。

由於市場上遍尋不著真正適合現代人攜帶的環保筷，於是我們決定重新設計，針對外食者者的需求研發前所未有，更方便攜帶、展開、收納與清洗，以更佳的比例與材質，製作精緻質感的環保筷，讓它不僅環保實用，亦能成為搭配時尚衣著及配件的精品。經過一年多來不計其數的修正設計與打樣試驗，終於產出革命性創新的環保隨行筷 - 筆箸 PenstiX。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
Project::create([
				'name' => '進擊的新世代！2014創業論壇。',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '如果今年你只想參與一場論壇，
接下來請您務必分一點時間給我們.....',
				'start_date' => date("Y-m-d", strtotime($today."-115 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-68 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/c5a38950e25b83e30b252f124d389c0e.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/2LzpAzFsMHo',
				'content' => '2014 創業論壇暨 RYLA 青年領袖營
 

21 世紀景氣的陰霾即將慢慢消散，在此時身處大環境對年輕人不甚友善的台灣，
如何面對全球市場的挑戰，以及實踐自我目標是所有青年人的共同課題。

懷抱創業夢想的青年朋友唯有發揮創意，加強執行力，才有機會撥雲見日，開創屬於自己的天空，
而想要【懷抱創意成功創業】，分析創業環境、懂得尋找資源將是最重要的任務。

創業論壇為 台北市新世代扶輪社 每年最重要的活動，
今年與 RYLA 青年領袖營合併舉辦，主題定為【進擊的新世代】，
希望藉由成功的青年創業家以及各界專家分享經驗，給予懷抱創業夢想的青年一條可循的軌跡，
讓學員更了解現今的創業環境，做好準備，面對即將到來的挑戰，開創屬於自己的嶄新的世代，
也期望能讓優秀的青年朋友更了解扶輪、進而參與扶輪。

',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
Project::create([
				'name' => '【青年返鄉投票專車計畫】青年投票、翻轉政治',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '自己的未來自己投，自己的家鄉自己救！',
				'start_date' => date("Y-m-d", strtotime($today."-46 day")),
				'end_date'=>date("Y-m-d", strtotime($today."-9 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/bfbe0dc743b72d8cc97a1f275bd61a29.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/UzGmbsWpz0E',
				'content' => '緣起

有什麼方法可以不用像太陽花學運當時那樣餐風露宿睡柏油路，卻還是可以匯集人民的力量發揮影響力，改變台灣的未來？有的！今年的 11 月 29 日就有這樣的機會。你只要帶著身分證和印章到戶籍所在地的投票所，領取從村里長到縣市首長的各個選票，就可以換下或繼續支持代表你的聲音、為你做許多重大決定，影響你未來生活的民意代表與各級行政首長。 

但這個看起來很簡單的方法，對許多遠在他鄉就學或工作的年輕人而言，卻是一個困難的決定，特別是對經濟狀況不是很好的人而言。兩年前的影片裡，這群返鄉青年的憂愁，至今仍懸而未決。以時薪 115 元，家住高雄、人卻在台北半工半讀的大學生為例，如果要返鄉投票，他必須請至少一天的假，而這正代表著他將失去一天最高 8 小時的工資 920 元，如果再加上往返北高的自強號火車票（單程 843 元，來回 1518 元），他的投票成本將高達 2438 元，約是半個月的伙食費。而這正是許多人猶豫著是否要放棄手上寶貴的一票的原因之一。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);





Project::create([
				'name' => '白色的力量：自己的牛奶自己救',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '我們不是胡亂成立的賣場，是想要用消費力量推動鮮乳革命的公平交易鮮乳平台
除了市售牛奶，其實你有更好的選擇',
				'start_date' => date("Y-m-d", strtotime($today."+109 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+169 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/2cdaa113d4b67ddb3db4c03f894cf716.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/RDaGxjohZS8',
				'content' => '往下看之前，先問一個問題：你受夠層出不窮的食安問題了嗎？
準備好了嗎，往下看，我們要展開一場革命了！

我叫做阿嘉，台大獸醫研究所畢業，一位全台灣趴趴走的大動物獸醫師，每天在全台10個不同縣市的牧場出診，守護著30個牧場，超過6000頭乳牛的健康！ 

每位酪農是如何飼養牛隻、對待牛隻，我都看在眼裡。因此我在今年成立鮮乳坊，希望能作為消費者和酪農的橋樑，協助小農成立自有品牌，將成分無調整、高品質的鮮乳透過網路販售的方式，交到顧客的手中。

',
				'status' => '0',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
Project::create([
				'name' => '草地上的微旅行-台北親子野餐會',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '是否已經膩了，假日吃飯總是要排隊？
有多久沒有出去玩了？',
				'start_date' => date("Y-m-d", strtotime($today."+106 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+195 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/5dbcb399284aaa5736c0f813f775b187.jpg' ,
				'video_link' => 'https://ksr-ugc.imgix.net/projects/2137303/photo-original.png?v=1447748515&w=1024&h=768&fit=crop&auto=format&q=92&s=b54c2b63bc6b221f1120a7f62b51e650',
				'content' => '藍天草地白雲陽光，好靠近卻總是好遙遠。
常常經過大安森林公園，除了遛狗和孩子們的盪鞦韆，你還想到什麼呢？
那一大片綠色的草地和藍天白雲是不是總吸引著你的心，
想要跟著風箏飛翔一下呢？


或許，假日可不要再電視洋芋片，電影爆米花了。
草地上可以奔跑和坐著的不會再只有拉布拉多或黃金獵犬。
或許，還有，你和我們。
這是一個城市生活的新選擇，
走，我們到公園野餐去。',
				'status' => '0',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);



Project::create([
				'name' => '「為什麼我結婚要經過2300萬人同意，核四不用?」--支持婚姻平權 LEGALIZE GAY MARRIAGE',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '「為什麼我結婚要經過2300萬人同意，核四不用?」
            --支持婚姻平權 LEGALIZE GAY MARRIAGE',
				'start_date' => date("Y-m-d", strtotime($today."+45 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+89 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/921039b9f0598b55026173a2b901ae56.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/W-xYY6HI9g8',
				'content' => '我們是誰?

我們不屬於任何一個民間團體，我們是迷你小團隊，兩個女生，一個讀生物，一個讀機械。我們關注婚姻平權的議題，身旁也有許多LGBT族群的朋友，我們認為這些朋友善良，沒有什麼不同或奇怪的地方。我們支持台灣伴侶權益推動聯盟(伴侶盟)提出的婚姻平權草案，我們是小人物，但我們想盡一份心力，為LGBT族群發聲，表達我們的支持，我們要我們的LGBT朋友都可以成家!

註: LGBT為女同性戀者（Lesbians）、男同性戀者（Gays）、雙性戀者（Bisexuals）與跨性別者（Transgender）


‧ 婚姻平權是什麼?

伴侶盟在2013年提出多元成家草案，包含婚姻平權、伴侶制度、多人家屬，三項獨立但平行的草案。其中僅有婚姻平權草案獲得立委支持，得以提案，目前已通過一讀。


關於婚姻平權草案，伴侶盟在網頁中寫道:
同性婚姻主要是將民法中婚姻與家庭的性別要件中立化（例如：將「夫妻」改為「配偶」、「父母」改為「雙親」），狹義觀之，此舉似乎僅為了讓同性婚姻合法化，但更積極的意義，則是去除婚姻中的性別要件，使多元性別者可以自由進入婚姻，不需要受限於生理、心理、社會的性別規範，比如：一個正在進行變性手術的人，其所締結的婚姻應該稱之為「同性婚姻」或「異性婚姻」？恐怕對當事人而言都不自在。因此徹底去除性別二元對立的概念才有可能解決跨性者所遭遇的壓迫處境。



註: 同性婚姻已改成婚姻平權。詳細草案內容請看 這裡




這樣的內容，我們認為合理且友善LGBT族群，所以我們支持，我們相信愛與婚姻可以容納異性戀以外的可能。然而卻有特定基督教派，抹黑且扭曲草案內容，發佈抹黑影片，污名化LGBT族群，要求教徒簽署內容不合事實的反對連署書，並煽動人民加入仇恨的行列，甚至在1130那天發動一場大集會，事實上，許多人並不知道自己為什麼而去，反對什麼，那一天的集會究竟在做什麼。支持婚姻平權的民眾，還被他們所謂的「糾察隊」圍圈圈限制人身自由。而這隻仇恨的手甚至伸向了部份立委。話說到這裡，不再細數他們的作為了。


同一天伴侶盟也有一場小集會，在立法院前，以人力排成婚姻平權四個大字，希望讓政府看見LGBT成家的心願。這些人當中，除了同志與跨性別，也包含了直同志(挺同志的異性戀)，一同表達他們的支持。我們希望你加入正義的一方，和我們一同為人權努力，力抗仇恨。',
				'status' => '1',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => '1', 
				]);
Project::create([
				'name' => 'Chic Bicycle® Playing Cards Deck',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '【 ARMOUR Cardholder 多功能卡套 】',
				'start_date' => date("Y-m-d", strtotime($today."+49 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+95 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/a569f125a7df0c0f784634a05dbc67a7.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/y0l2LHXMI6E',
				'content' => '   頂級手染軟皮 

Armour Cardholder 使用頂級的義大利手染軟皮，極佳的軟質手感加上手工染色氣質，讓您的卡夾外型優雅經典。拉條式的卡插設計，保留卡夾輕薄的美感外同時方便卡片抽取使用，前袋上方為名片插槽加上後袋卡片插槽，更能輕鬆分類使用。
 
      不鏽鋼工具卡設計 

特殊的不鏽鋼卡設計可以保護卡片不受損外並且可保持卡片直接感應，讓您輕鬆刷著走。

多功能工具設計結合了啤酒開瓶器、工具尺、多尺寸的六角螺絲把手及手機架等功能，輕鬆解決日常遇到的問題，讓生活更加便利 。
 
上方的三角形掛孔可以方便鑰匙圈結合或掛繩安裝，依您的攜帶習慣做調整。

優雅的牛皮卡插結合俐落的不鏽鋼工具組，在在彰顯不凡的品味，簡潔的設計無疑是低調精品最好的隨身配件。




【 日常生活使用 】

Armour cardholder 適合每個日常生活場景。


不論是搭乘巴士刷卡感應，超商買東西付款，繪畫時的隨身工具，

吃飯缺少的手機架，修理時的六角板手，拜訪客戶所需的名片夾，

或下班開趴的開瓶器，提供您最適當的工具解決生活上的問題。


精巧的設計讓多種功能合而為一，加上意大利手染軟皮夾，讓外觀提升到極致。',
				'status' => '0',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => '1', 
				]);
Project::create([
				'name' => '【新尺碼增加】denward ─ 極致舒適的台灣製牛仔褲',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '我們是兩個商學院的學生，為了共同的理念，建立了denward這個品牌，命名是結合丹寧布的denim，以及象徵著前進的forward兩個字而組合成的，代表著我們的產品會從丹寧相關產品出發，並且逐漸延伸和進步。',
				'start_date' => date("Y-m-d", strtotime($today."+39 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+75 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/93e07c25eb231a1abb1a7fa1cd56e8db.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/_GI4tWNqClk',
				'content' => '我們的理念


我們常在想，為什麼台灣的產業總是只能外流到國外，逐水草而居般的往人工便宜的地方去；為什麼全世界最大的牛仔褲代工廠是台灣公司，但卻無法幫台灣製造多少工作機會？而最後我們買到的褲子，掛的也不是Made in Taiwan？
很希望創造些有價值的東西，讓我們在昂貴品牌或低價卻品質不穩的商品以外，能有來自台灣的好選擇。
經過半年的籌劃，我們想透過我們的品牌denward，來改變現況。

台灣的紡織業雖然已不像70年代那樣的興盛，但仍舊具有很高的製造水準，我們想要發揮在地師傅的技術，台灣設計，並且台灣製造。',
				'status' => '0',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => '1', 
				]);





Project::create([
				'name' => '臺灣特有種 - 動物親子桌上遊戲',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '透過遊戲讓孩子認識台灣',
				'start_date' => date("Y-m-d", strtotime($today."+16 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+55 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/416fde48803a4920934ad8fd55966b80.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/ym6aztVznpg',
				'content' => '曾經獲得 美國玩具界奧斯卡 ParentsChoice Awards 銀獎、以及 2014 年美國百大玩具獎 的設計團隊 綿羊犬，秉持著遊戲與教育結合的精神，開發出全國第一套以台灣生態、動物為主題的兒童桌上遊戲《臺灣特有種》。



我們認為，對於孩子而言最有效的學習方式是透過遊戲。為了引起孩子對於台灣這塊土地的學習熱忱，我們設計了全國第一套以台灣特有物種、生態棲地為主要內容的兒童桌上遊戲，並於其中加入創新的玩法與立體結構的物件，讓家長與老師能帶著 3 歲以上的孩子以遊戲的方式認識本國的自然資產。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
	

			


			Project::create([
				'name' => 'BASEQI：鋁合金神隱轉卡 Macbook Air / Retina 13吋 專用',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '神隱轉卡是專為 MacBook Pro Retina / Air 13" 所設計的MicroSD/TF卡套，體積精巧外觀精細，緊密的融為一體。',
				'start_date' => date("Y-m-d", strtotime($today."+18 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+60 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/7bf4e0582f7846fb19aa924041cc7fbf.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/I20xUlTKT7U',
				'content' => 'iSDA 103A : Apple Macbook Air 13"
適用 : MacBookAir3.2 (Late 2010) 
           MacBookAir4.2 (Mid 2011) 
           MacBookAir5.2 (Mid 2012) 
           MacBookAir6.2 (Mid 2013) 
           MacBookAir6.2 (Early 2014)

iSDA 303A : Apple Macbook Pro Retina 13"
適用 : MacBookPro10,2 (Early 2013) 
           MacBookPro10,2 (Late 2012)

iSDA 303A : Apple Macbook Pro Retina 13"
適用 : MacBookPro11,1 (Late 2013)

PS : 如何辨識機型
選擇螢幕左上角 Apple（）選單中的關於這台 Mac。
按一下「更多資訊」。
找出「硬體」區域下「硬體概覽」中列出的機型識別碼。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
			
			Project::create([
				'name' => '原創遊戲社團NARRATOR新作-伴星～Companion～-實體化募款',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '伴星~Companion~是我們Narrator所製作的第五款遊戲。',
				'start_date' => date("Y-m-d", strtotime($today."+25 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+70 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/b11a6417b2b43615cd17dfd48891f33a.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/QIWeXc469q0',
				'content' => '首先來介紹一下我們Narrator吧。

我們是一群由各領域不同年紀的人，因為對遊戲的熱情而聚集在一起的人。

雖然基本上沒有什麼獲益

但我們憑藉著自己的熱血跟想要把心中美好的事物(不論是文字、圖片、或是影音)呈現出來的心

製作出了一款又一款的遊戲

希望讓大家在玩完我們的遊戲後可以在心中留下美好的回憶跟那股被感動後留下的悸動。

我們是Narrator，我們是將美好的故事帶給大家的說書人。

伴星~Companion~是我們Narrator所製作的第五款遊戲。

這是一款以電子小說方式表現文字遊戲

內容是在描述地球面臨了「伴星」這顆星體的撞擊，幾乎已經確定會造成地球上大多數的人類死亡。

主角是因為是發現這件事的科學家，因此獲得了進入各國為了延續人類存在而建造的避難所。

雖然可以保住性命，卻失去了對這個注定滅亡的世界的熱情，眼睛睜開就只能默默等待明天的到來。

就在此時，他在街上遇到了一名讓他對於明天多了幾分期待的少女......

整體遊玩時間大約3~4小時',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);

			
			Project::create([
				'name' => 'Fotock | 你的互動留聲相框',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '為什麼要讓照片說話？
為了保留完整的回憶
為了傳達真實的心意，',
				'start_date' => date("Y-m-d", strtotime($today."+14 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+48 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/7848/c42896ba29ea3dc22afbb087e486a113.png' ,
				'video_link' => 'https://www.youtube.com/embed/Jxxxx5KHLkU',
				'content' => '我到過很多地方，拍下很多照片做成相框放在桌上或牆上，常常有人看著照片問我說：『你何時去的？』『這是那裡？』『去玩了什麼？』一開始都還記得，但隨著時間的久遠，慢慢很多細節都模糊了，

我常常看著照片努力回想那生命中的美好，但我發現常常再怎麼想也想不起來，因此我想設計個東西，可以把畫面，跟回憶連結在一起。

生命是由回憶所累積起來的，回憶包含了畫面，文字及聲音，我於是設計了Fotock，我利用一個金屬標籤，嵌在原木的相框上，標籤上面紀錄了照片的標題，跟副標題。這看起來很像一個資料夾，回憶的資料夾。當你想要再打開這個回憶時，你只要拉起標籤，你就可以看到內文，跟聽到聲音。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);

Project::create([
				'name' => '《歲末祈願，心溫暖─創世公益桌曆》碳布x玄風聯名出版',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '我是一個希望自己作品可以被應用在公益商品上的插畫家碳布；

我是一個興趣手工書、熱愛文字，希望回報創世恩情的植物人家屬玄風。

因緣際會下，我們開始攜手合作一圓彼此的公益夢。',
				'start_date' => date("Y-m-d", strtotime($today."+22 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+64 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/859acbe5470ad461026e1e078308fdb6.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/hSxEaj5vs8I',
				'content' => '創作緣起
植物人家屬的自白
        身為植物人家屬，我最能明白那心中的痛與對社工們的無限感激。
       我曾經受過創世基金會的幫助，因為年邁的爺爺在一次心臟手術失敗而成了植物人。當時經濟狀況並不寬裕的我們，只能勉強吃力的照顧爺爺，能申請的補助都申請了卻只能應急。我們需要特殊的充氣床墊、餵食需要氣切後透過鼻胃管一點一滴的注入營養牛奶，我們要定時為他翻身，以免肌肉持續硬化。然而這都是只是基本的照護，隨著時間流逝家人們開始疲憊，望著睜著雙眼卻無意識的爺爺，我們除了心疼還有埋怨，為什麼當初要執意開刀導致現在的結果?
        剎那我們忘了爺爺一輩子的辛勞付出，只是考慮著該輪到誰照顧他；我們忽略了爺爺為了家庭而失去健康，只是責備著彼此。
       日子依然在走，對於植物人，時間不曾憐憫過，他們的時間一樣跳動。
      然而在我們灰心喪志之際，創世基金會向我們伸出了援手。在正式入院前，仍因種種嚴苛的條件我們無法順利，但創世的志工們都熱心的協助我們，也時常來家裡幫忙與探望爺爺。這時我才知道，原來世界上需要幫助的人是那樣的多，比我們家條件要差的人多的是。
        至今我能由衷感謝老天給我爺爺一個機會，剛好有一個床位入住，可以接受創世的照顧。在創世四年多，他一樣和健康的時候般是個難搞的爺爺，時而半夜發燒搞的護士忙碌奔走，儘管如此白衣天使們仍是細心的呵護他，讓他最後能安詳的離開。
唯有親身經歷過，才能明白那無能為力的痛。
只有真正看到，碰觸到，才知曉地獄是怎般場景。

關於植物人
　　植物人是一種腦死狀態，無法言語與自理，是否有意識與能否清醒，至今依舊沒有答案。造成的原因多半是因為意外事件，手術失敗，我也曾看過一個例子是因為被蚊子盯咬，而感染日本腦膜炎成為植物人，那是個正值青年的大學生...。
植物人V.S.漸凍人
　植物人其實和漸凍人一樣，他們都失去了自主性，但植物人更少了那病症發作的緩衝時間。一旦被宣判腦死便無法在和心愛的家人告別，無法在有限的時間內做完想做事，受傷了只能任由傷口潰爛......。而基於人權道德觀念，家屬無法決定安樂死，但照顧植物人需要龐大的費用，加上心理衝擊，很多家庭和諧的家庭因此破碎。

植物人照護問題
        植物人多半會需要氣切手術，而這個手術也常影響著許多安養院是否收留的決定關鍵。答案很遺憾，氣切後的病患需要特殊儀器供應氧氣，加上植物人需要透過鼻胃管餵食，大大增加照護的困難度，因此安養院是無法收留植物人的。
        敞若是失去經濟支柱的家庭而言，這不免是二度打擊，家屬無法24小時照護且安置在家裡需要添購許多特殊設備，例如：氣墊床。奶粉和尿布長期累積下來也是一筆令人擔憂的金額。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);

Project::create([
				'name' => '黑色箱子裡的4am',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '概念說明

此次計畫的設計重點主要專注於在整個學運的起因與過程中，

政府所回應給人民的一切黑箱作爲，

其中就屬324凌晨開始以強力水柱與流血的鎮壓驅離，

之後卻以拍背說簡單帶過最爲可恥，

因此圖像中以簡潔的黑色箱子與4am做爲結合，

提醒自己對於政府慣性回應給人民的黑箱作為，',
				'start_date' => date("Y-m-d", strtotime($today."+17 day")),
				'end_date'=> date("Y-m-d", strtotime($today."+53 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/357c1f3a57bc3c7812c43859aef56e4f.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/rb6JYT77LrQ',
				'content' => '概念說明

此次計畫的設計重點主要專注於在整個學運的起因與過程中，

政府所回應給人民的一切黑箱作爲，

其中就屬324凌晨開始以強力水柱與流血的鎮壓驅離，

之後卻以拍背說簡單帶過最爲可恥，

因此圖像中以簡潔的黑色箱子與4am做爲結合，

提醒自己對於政府慣性回應給人民的黑箱作為，',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);



Project::create([
				'name' => 'Lomography Petzval 人像鏡頭',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => 'Lomography Petzval人像鏡頭

 一顆源自於 19世紀的傳奇鏡頭，適合所有 Nikon F接環與 Canon EF接環的底片與數位相機。
',
				'start_date' => date("Y-m-d", strtotime($today."+12 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+50 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/9b9091df93f9ab947a99400ec3e075ca.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/XvwWaGVnFZI',
				'content' => '使用 19世紀的 Petzval鏡頭拍攝
 
在 19世紀初，絕大多數的照片是由這顆極受歡迎的鏡頭所拍攝，由維也納的 Joseph Petzval教授於 1840年所設計，而這個天才發明對攝影的發展也產生了巨大的影響。這顆 Petzval鏡頭的最大特徵就是它的中央影像超級銳利，而四周有著漸暈的散景效果。這樣特殊的 Petzval效果，很難使用 Photoshop或任何濾片辦到。


在這個集資計畫中，為了 21世紀的攝影師們，我們改造了這顆 Petzval鏡頭，不管你喜歡用數位或是底片相機拍照，全新的 Lomography Petzval人像鏡頭專為 Canon EF與 Nikon F接環的相機所設計，你可以把它裝上你的 35mm 底片單眼相機，或是數位單眼相機，拍攝迷人 Petzval效果的照片，甚至是影片。


我們預計鏡頭寄出的時間為 2014年 2月，不過我們希望能夠於 2013 年 12月便能完成首批鏡頭製作並寄送。預計上市的正式售價為 NT 17,490 ，參加此集資計畫，除了支持這顆鏡頭的誕生之外，你還可率先以優惠的價格擁有這顆美妙的鏡頭（之後不用補任何差價），甚至是個人專屬的名字雕刻。Petzval人像鏡頭具有高品質的光學鏡頭，這樣一個獨特的鏡頭，將為你增加攝影的無窮樂趣，甚至用它來拍攝一個永恆的藝術作品。


 

請注意：網站中展示的 Petzval鏡頭商品照，為舊式的 Petzval鏡頭或是第一批樣品。然而我們還會繼續修改一些細節，特別是散景的效果，鏡頭外觀上也將會有一些設計上的更動。因此，請期待一顆完美且不平凡鏡頭的到來吧！',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);

Project::create([
				'name' => '瘋狂泡泡足球 Bubble Ball Taiwan',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '開了口 故事就從這個夏天開始SONY質感新男聲 Eric周興哲 第一首發表夏悸好評抒情曲  以後別做朋友 ',
				'start_date' => date("Y-m-d", strtotime($today."+20 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+69 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/72bb350e3185a9038bd162838bd6b618.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/ObOd96kAZbw',
				'content' => '2014世界盃足球賽6月14日就要在巴西開踢了，雖然足球不是台灣的強項，但是不代表我們在台灣不能發揮創意玩一玩另類足球賽！瘋狂泡泡足球Bubble Football，紅遍足球大本營歐洲，現在只要到Flying V贊助我們，你也能“參一腳”跟親朋好友一起組隊PK！6月看完世足賽，馬上報名來踢球！瘋狂泡泡足球邀你一起瘋足球！


泡泡足球(bubble football)是一種刺激好玩的新遊戲型態，參加者把自己套進大氣球裡，整場比賽每個­人在場上連滾帶摔也不用擔心受傷，這項風­靡歐洲、日本等地的活動，現在我們想將這個運動和娛樂效果兼具的有趣活動，帶給台灣的民眾！

官網連結：http://www.bubbleball.com.tw/  

English booking and details for Bubble Football soccer in Taiwan see English website: http://www.bubbleball.com.tw/en/


泡泡足球不是專業比賽，不分男女老少*、台灣人歪國人都可以玩! 可以自己來(單人體驗票)、糾團來PK：5人一隊和別隊PK或自己組兩隊(10人)一起來玩!',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);
Project::create([
				'name' => '打造你專屬的超能心臟',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '從小我們總希望自己能像漫畫中的超級英雄一樣與眾不同，懷著滿腔熱血想告訴大家：「我也可以捍衛這個世界的和平！！」超級英雄以往都是基因超乎常人，不然就是身負神秘血統，再不然就是飛簷走壁來去自如，直到有一天我們發現，原來人類也可以利用高科技，為自己打造最適合的裝備，成為捍衛世界的英雄！',
				'start_date' => date("Y-m-d", strtotime($today."+12 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+40 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/e9815a00ead7869cafbde035aedaf7a7.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/L2Bgca1Q5j4',
				'content' => '大家好，我是Tony，我相當喜歡超級英雄的系列，更是電影的頭號影迷，也曾經和喜好這些題材的人一樣，購買漫畫、DVD、和其他零零總總的週邊。在一次偶然的機會下，參考國外的手製影片，加上一整夜的趕工，我用鋁罐、漆包線、觸摸燈和濾水器等家用五金和材料打造出了這個專屬於我的原創配件，一圓成為超級英雄的低調奢華夢想。

後來，我將整理的照片分享到網路上，得到的迴響竟然還不錯，許多影迷和朋友便開始詢問我是如何製作的。其實這不是一個很容易的過程。根據自己的喜好，會有不同的造型。而不論想呈現怎樣的風貌，料件都相當繁複、而且要把這些四處張羅的材料完好的組裝在一起、加工零件的過程也相當繁複，於是我開始思索「簡單化」這個過程的可能性。

經過幾天的構圖、四處尋問材料行和切割店後，我終於得到一些有用的答案，也能夠將這個讓大家能簡單完成自行設計的配件逸品的夢想可以實現，甚至一起揪團以英雄的身分暢覽電影。最重要的是還是「自行打造」，透過簡單的整理，由自己的雙手完成專屬於自己的專屬配件。

我很希望能跟大家一起分享這種喜悅，也希望大家能節省蒐羅材料、設計圖面的時間，因此我將這個想法分享到 flyingV上面，希望能讓透過教學的方式，讓同好一起動手製作心目中的超能心臟。

 設計圖

在本活動中，我將提供以兩種材料組合進行的製作演示：

原始版本，根據我第一次嘗試製作的材料組合進行，如果很想體驗我篳路藍縷、割傷手指、挫傷挫折的過程，可以嘗試以這種組合製作。內容包含了背蓋、觸控燈、水龍頭過濾器、特殊口徑的寶特瓶、透明水管、遮光用的裝飾部件和組裝過程中的所有耗材如鞋用膠、訂書針等。水管、外框等加工需要極高的耐心和時間，如果不考慮製作過程中的意外損傷，組裝時間大約需要半天。

訂做版本，重新整理設計後，為了降低組裝的難度和時間並提升美觀。除了原始的發光元件外，另外加上配合所有物料尺寸的訂做不鏽鋼外框和內裡透光支架，除了外型可以更緊密的結合外，料件透光度也比原始版本高很多。由於核心零件都計算過尺寸，組裝時間可以壓縮到一個半小時（已含等待膠乾的時間），不論開關燈都可以有不錯的效果。此版本會附上我製作前擬定的仿真設計草稿。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1322055681,1358057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);


			Project::create([
				'name' => '核電員工的最後遺言蔓延計畫',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '親愛的朋友，您關心核電嗎？

除了參加遊行、掛上氣勢磅礡的反核旗、貼上搖滾炫亮的貼紙、穿著口號響亮的T-shirt外，我們對核電了解多少？

我是一個已婚、尚未懷孕生子的女性，每日工作與孩童接觸，核電議題紛紛擾擾謠言滿天飛，人云亦云，我開始閱讀正負兩面相關知識。',
				'start_date' => date("Y-m-d", strtotime($today."+7 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+37 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/94025b79cf81793198f7f6f84cacec1f.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/4Mr-8tZrnAs',
				'content' => '※計劃緣起：多數民眾沒有足夠的核電知識
選擇此書是因為由已逝的核電工程師與駐日記者、前任奇異公司原子爐設計師等親述核電廠施工、運轉、內部工作弊病、歷史核電廠事故、核輻射對健康影響、以及台灣核電廠勘查分析。

文字平易近人，內容不艱澀難懂，一般民眾皆可接受。

※行動初始：讓書擴散
2013年6月26日我在個人臉書建立《核電員工的最後遺言》索書活動 ，徵求各單位、機構、教室、營業場所向我索取此書，並在醒目場合公開擺放供民眾翻閱了解相關知識。

此活動尚在進行當中，截至今日索書單位有：

(私人)國中自然科教室、瑜珈館、義守大學推廣部、巧手作坊、嘉南藥理科技大學系會、鐵花村、魚蹦興業、藍月電影、紡織公司、禾果製作公司、Sababa中東料理、古名伸舞團、磐石室內裝修工程、松盈傳奇冰淇淋店、文化大學、高師大環境教育研究所、惠安醫療用品、Hi-Organic、姆姆咖啡、The Wall、賣捌所、中南海餐廳、大名物理治療所、草祭二手書店、台大資訊工程系 生物資訊實驗室、慕哲咖啡、彰化某OK便利商店、北市聯醫松德院區護理站、雲門教室南京館、春日館、安平館、靜宜大學、台南應用科大、台中安妮婚紗、白雨‧閑原工作室、中台灣不要核四五六、璽喜設計、小點心手繪工作室、(彭先生)早餐店、諸位個人教師等已回覆願意配合行動，截至今日已107本索書量，由我個人每月固定樂捐已寄出20本。

託羅景壬導演、余彥芳老師、中台灣不要核四五六志工的福分享索書消息，也感謝眾多支持活動而把索書機會出讓的個人戶，小女子希望更多人挽起袖子加入這項活動。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1372055681,1398057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);		

				Project::create([
				'name' => '南希/嘉義：視覺藝術作品製作募資計劃',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '各位親愛的朋友，我是ㄧ個獨立運作的藝術創作者，我的創作方式主要為攝影/ 錄像/ 裝置藝術。

我近期的作品有

Joachim女士的行李箱

一路-(招待所/游泳池)

南夜計劃

祝您中獎

更多關於我的作品以及資料，歡迎大家參觀我的作品集網站。

www.tsaochun.com



今年有幸通過藝術銀行徵件的初審，

希望能夠有更好的作品製作品質參加複審，

因此透過募資平台尋求各位朋友的贊助。',
				'start_date' => date("Y-m-d", strtotime($today."+27 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+67 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/a86a01d6b275cb563d8e7760e2ca40cf.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/oW6EAsDCxi8',
				'content' => '南希/ 嘉義

本計劃主要關於兩個城市的地景。一個位於法國東邊的南希與位於台灣的嘉義，

兩個相距一萬公里的城市，卻出現了似曾相似的情景。

南希，是我在法國念書時居住了好長一陣子的城市；而嘉義，卻是在某次返台時首次前往的城市。

兩個城市對我來說有不同的意義：

一個就任何定義來說，都應該離我很遠，只是在其中生活過，因此感覺熟悉。

而另一個離我很近，卻不知何故，拍下照片時是我與它的第一次見面。



本計劃的成果為四張分別於南希與嘉義所拍攝的攝影作品。

左邊是在南希拍攝的照片，右邊是在嘉義所拍攝的照片。

有些情景在不同的城市重複出現，

就像相互重疊的記憶。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1372055681,1398057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);	

					Project::create([
				'name' => '稻田裡的餐桌計劃 Season2',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '『稻田裡的餐桌計劃』第一季共有265人跟著幸福果食團隊在台灣各地的鄉間擺下餐桌用餐。來賓們的寬容與愛護讓我們順利執行了第一季的計劃與回饋。

除了各界優質的支持者外，同時也吸引了商周、壹週刊、財訊、看雜誌、蘋果日報、鄉間小路、旅人誌、ＧＱ、大愛電視台、公共電視、中視等各大媒體的採訪與報導，而台灣最大飲食集團的董座與《跟著董事長遊台灣》的作者兩兄弟也帶著家人前來參與，並成為幸福果食的第四位Co-Founder。',
				'start_date' => date("Y-m-d", strtotime($today."+28 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+59 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/4b47066cc4e7169da6f1787efd7ab9b3.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/mQRyHUKVz0k',
				'content' => '15個農夫

快樂農夫有機農場-江漢錡、行健有機村-張美、好蝦囧男社-李正富、胭脂鰻-嚴竹英、竹山茶園製茶師-古亦茶、黃金山藥-簡秀忠、警政薯長、信義葡萄園-吳良乾、雙連埤紅鳳菜農、十分箭筍農、大溪稻農、虎尾棉花農、池上稻農、竹南有機草莓農-謝文崇等。

11場餐會

三星米其鄰、崎頂種幸福、幸福十分餐旅、竹山茶香香、菜園裡的麻辣鍋以及另外七場私人包場的餐會，其中包括生日派對、企業團體包場。

6種創新的農產加工品

米布丁、洛神花果醬、珠蔥Pizza Bread、山藥起司炸飯糰、鳴門金石芋泥麵包、茶香比司考提手工餅乾，當然還有等待來賓已於10/28日種下的草莓苗開花結果後之草莓加工品。',
				'status' => '2',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1372055681,1398057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => rand(1,30), 
				]);	


				Project::create([
				'name' => '《老鷹想飛》院線上映 Ｘ 教育推廣計劃',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '你一定玩過「老鷹抓小雞」的遊戲。
可是除了人類張牙舞爪地扮演老鷹之外，你見過真的老鷹嗎？',
				'start_date' => date("Y-m-d", strtotime($today."+19 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+50 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/9c13245be24d778db1cf89b52ab20d22.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/O4ddZoRGFRk',
				'content' => '但我發現常常再怎麼想也想不起來，因此我想設計個東西，可以把畫面，跟回憶連結在一起。

生命是由回憶所累積起來的，回憶包含了畫面，文字及聲音，我於是設計了Fotock，我利用一個金屬標籤，嵌在原木的相框上，標籤上面紀錄了照片的標題，跟副標題。這看起來很像一個資料夾，回憶的資料夾。當你想要再打開這個回憶時，你只要拉起標籤，你就可以看到內文，跟聽到聲音。',
				'status' => '1',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1372055681,1398057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => '1', 
				]);	

				Project::create([
				'name' => '婚姻平權貼紙計畫',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '開了口 故事就從這個夏天開始
				SONY質感新男聲 Eric周興哲 
				第一首發表夏悸好評抒情曲  以後別做朋友 ',
				'start_date' => date("Y-m-d", strtotime($today."+19 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+50 day")),
				'cover_img_path' => 'https://d15ds55abggjxg.cloudfront.net/project/6beb8753c6c6d24ff5320f8275975f46.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/sk_EXNNFTKM',
				'content' => '二十年了，看著老鷹的生存困境，我們不禁要想：                    「今日鳥類，明日人類？」
你曾經為了什麼事情守護整整二十年？
是與青梅竹馬的友誼，一段刻骨銘心的愛情，還是傾注無盡的愛的親情？
沈振中老師的答案是－他對黑鳶的愛，已經整整歷經二十年的時光了。
從基隆到屏東，沈老師在黑鳶可能出沒的山林蹲點，只為了觀察屬於天空的他們。
沒想到這一觀察竟是延續了整整二十年，跨越了時間，也跨出台灣，到香港、印度、尼泊爾與日本進行海外的探訪，電影中完整的記錄了黑鳶的生態變化，以及這群與沈老師「鷹緣際會」下一起觀察黑鳶的志工們的身影。

看著許多老鷹遭遇到的環境傷害，我們不免想著這些環境變遷是否也對人類有所影響。
老鷹是生態系統健全與否的重要指標，身為生物鏈的頂端掠食者，若老鷹的數量開始下降，被掠食者的壓力解除，便會大大影響生態系的平衡。
也許我們一時間看不出生態系受到破壞的影響，但認識並了解老鷹消失的原因，讓我們意識到一件事：不論是老鷹還是人類，還是所有與我們共享這片土地與天空的朋友們，都暴露在亟需改變的惡劣環境之下。

我們透過影像說故事，希望全台灣能有更多個像你一樣關心動物與環境的人，能有機會一起深入認識猛禽物種，感受猛禽和人類的相依性，感受我們共同和這片土地與天空的緊密連結。',
				'status' => '0',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1372055681,1398057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => '1', 
				]);	

				Project::create([
				'name' => '顛覆你的旅行方式──滾出趣任務手札',
				'class' => rand(1,7),
				'pre_amount' => rand(5000,50000),
				'outline' => '
● 名人推薦

● 為什麼要顛覆以往的旅行方式？ (滾出趣初衷動畫)

● 如何顛覆旅行方式

● 用任務改變旅行行為

● 手札內容介紹

● 為什麼任務手札值得你贊助

● 經費如何運用

● 滾後三部曲：除了手札，更多有趣的後續活動

● 回饋方式

● 關於滾出趣',
				'start_date' => date("Y-m-d", strtotime($today."+19 day")),
				'end_date'=>date("Y-m-d", strtotime($today."+50 day")),
				'cover_img_path' => 'https://d29twh0lc6f62l.cloudfront.net/project/f895cbec4ccef0163736a6d57cd4115e.jpg' ,
				'video_link' => 'https://www.youtube.com/embed/4zIqvXEGvQQ',
				'content' => '大學四年級，我獨自前往歐洲旅行，一個人，接觸了許多歐洲的年輕人，自己打理生活，自己搭乘交通工具在完全陌生的國家遊走。

 

跟一群歐洲青年討論事情時，我發現亞洲人的害羞和默默不語；

看到許多新朋友都在做著很酷的夢想事業，我發現勇敢追求夢想的美麗；

跟德國女生交談時，我很驚訝她能與我侃侃而談台灣的歷史和政治；

仔細看著路上的街景、交通工具上的人們時，我才明白許多以往的刻板印象事實上都不是那樣；

靠自己找到正確的列車搭往下一個城市時，我開始不再那麼害怕陌生的環境。

 

每一個經驗，都讓我重新發現旅行另一個意義：出國旅行除了觀光休閒之外，它其實也可以是「衝擊與改變一個人的過程」，它可以顛覆你以往的思想，重新讓你認識世界和自己，看到許多以往都不知道的事。 

 

前提是你要真的「走進」世界。',
				'status' => '0',
				'hitpoint'=>rand(0,1000),
				'created_at'=>date('Y-m-d',mt_rand(1372055681,1398057681)),
				'updated_at'=>date('Y-m-d',mt_rand(1402055681,1418057681)),
				'starter_id' => '1', 
				]);	
	}

}