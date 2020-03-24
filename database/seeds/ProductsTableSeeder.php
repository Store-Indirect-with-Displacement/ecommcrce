<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class ProductsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $category = new Category;
        $category->translateOrNew('en')->name = "Computers";
        $category->translateOrNew('ar')->name = "كمبيوترات";
        $category->is_navbar = 0;
        $category->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Apple Watch series 4 GPS";
        $product->translateOrNew('ar')->name = "ساعة ابل لتحديد الموقع  ";
        $product->image = 'images/imageProuduct/01.png';
        $product->price = 69.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 97;
        $product->translateOrNew('en')->order_status = "on hold";
        $product->translateOrNew('en')->order_status = "في الانتظار";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();




        $product = new Product;
        $product->translateOrNew('en')->name = "Beats HeadPhones";
        $product->translateOrNew('ar')->name = " سماعات الرأس";
        $product->image = 'images/imageProuduct/02.png';
        $product->price = 69.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 83;
        $product->translateOrNew('en')->order_status = "delivered";
        $product->translateOrNew('en')->order_status = "تم التوصيل";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();


        $product = new Product;
        $product->translateOrNew('en')->name = "Antec - Nano Diamond Thermal Compound";
        $product->translateOrNew('ar')->name = "مجمع أنتيك - نانو دايموند الحراري";
        $product->image = 'images/imageProuduct/07.png';
        $product->price = 14.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 65;
        $product->translateOrNew('en')->order_status = "pending";
        $product->translateOrNew('en')->order_status = "قيد  الانتظار";
        $product->is_New = 1;
        $product->is_Discount = 1;
        $product->Discount = 35;
        $product->Category()->associate($category);
        $product->save();



        $category = new Category;
        $category->translateOrNew('en')->name = "Fitness";
        $category->translateOrNew('ar')->name = "اللياقه البدنيه";
        $category->is_navbar = 0;
        $category->save();




        $product = new Product;
        $product->translateOrNew('en')->name = "Basis - Peak Fitness and Sleep Tracker";
        $product->translateOrNew('ar')->name = "الأساس - ذروة اللياقة البدنية والنوم المقتفي";
        $product->image = 'images/imageProuduct/09.png';
        $product->price = 199.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 72;
        $product->translateOrNew('en')->order_status = "on hold";
        $product->translateOrNew('en')->order_status = "في الانتظار";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Charge HR Activity Tracker + Heart Rate (Large)";
        $product->translateOrNew('ar')->name = "جهاز تعقب نشاطك + قياس معدل ضربات القلب";
        $product->image = 'images/imageProuduct/03.png';
        $product->price = 149.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 66;
        $product->translateOrNew('en')->order_status = "pending";
        $product->translateOrNew('en')->order_status = "قيد الانتظار";
        $product->is_New = 0;
        $product->is_Discount = 1;
        $product->Discount = 30;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Charge HR Activity Tracker + Heart Rate (Small)";
        $product->translateOrNew('ar')->name = "جهاز تعقب نشاط صغير+ قياس معدل ضربات القلب";
        $product->image = 'images/imageProuduct/01.png';
        $product->price = 149.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 92;
        $product->translateOrNew('en')->order_status = "on hold";
        $product->translateOrNew('en')->order_status = "في الانتظار";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Activity Tracker + Sleep Wristband";
        $product->translateOrNew('ar')->name = "تعقب النشاط + سوار النوم";
        $product->image = 'images/imageProuduct/02.png';
        $product->price = 149.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 100;
        $product->translateOrNew('en')->order_status = "delivered";
        $product->translateOrNew('en')->order_status = "تم التوصيل";
        $product->is_New = 1;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Activity Tracker (Large)";
        $product->translateOrNew('ar')->name = "فيتبيت - تعقب نشاط (كبير)";
        $product->image = 'images/imageProuduct/02.png';
        $product->price = 129.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 52;
        $product->translateOrNew('en')->order_status = "pending";
        $product->translateOrNew('en')->order_status = "قيد الانتظار";
        $product->is_New = 1;
        $product->is_Discount = 1;
        $product->Discount = 50;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Charge Wireless Activity Tracker (Large)";
        $product->translateOrNew('ar')->name = "جهاز تعقب نشاط الشحن اللاسلكي (كبير)";
        $product->image = 'images/imageProuduct/05.png';
        $product->price = 129.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 51;
        $product->translateOrNew('en')->order_status = "on hold";
        $product->translateOrNew('en')->order_status = "في الانتظار";
        $product->is_New = 1;
        $product->is_Discount = 1;
        $product->Discount = 40;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Charge Wireless Activity Tracker (Small)";
        $product->translateOrNew('ar')->name = "جهاز تعقب نشاط الشحن اللاسلكي (صغير)";
        $product->image = 'images/imageProuduct/02.png';
        $product->price = 129.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 99;
        $product->translateOrNew('en')->order_status = "on hold";
        $product->translateOrNew('en')->order_status = "في الانتظار";
        $product->is_New = 1;
        $product->is_Discount = 1;
        $product->Discount = 10;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Activity Tracker (Small)";
        $product->translateOrNew('ar')->name = "فيتبيت - تعقب نشاط (صغير)";
        $product->image = 'images/imageProuduct/07.png';
        $product->price = 129.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 75;
        $product->translateOrNew('en')->order_status = "on hold";
        $product->translateOrNew('en')->order_status = "في الانتظار";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();



        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Charging Cable for Activity Trackers";
        $product->translateOrNew('ar')->name = " كابل شحن لتتبع النشاط";
        $product->image = 'images/imageProuduct/07.png';
        $product->price = 17.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 50;
        $product->translateOrNew('en')->order_status = "delivered";
        $product->translateOrNew('en')->order_status = "تم التوصيل";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Clip for Activity and Sleep Trackers ";
        $product->translateOrNew('ar')->name = "مقطع لتتبع النشاط والنوم";
        $product->image = 'images/imageProuduct/09.png';
        $product->price = 14.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 57;
        $product->translateOrNew('en')->order_status = "delivered";
        $product->translateOrNew('en')->order_status = "تم التوصيل";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Clip for Wireless Activity and Sleep Trackers";
        $product->translateOrNew('ar')->name = " مقطع للنشاط اللاسلكي وتتبع النوم";
        $product->image = 'images/imageProuduct/05.png';
        $product->price = 14.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 80;
        $product->translateOrNew('en')->order_status = "on hold";
        $product->translateOrNew('en')->order_status = "في الانتظار";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Beats HeadPhones";
        $product->translateOrNew('ar')->name = " مقطع لتتبع نشاط  Zip اللاسلكي";
        $product->image = 'images/imageProuduct/02.png';
        $product->price = 14.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 78;
        $product->translateOrNew('en')->order_status = "canceled";
        $product->translateOrNew('en')->order_status = "الغيت";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Flex 1\" USB Charging Cable";
        $product->translateOrNew('ar')->name = "فليكس 1 كابل شحن USB";
        $product->image = 'images/imageProuduct/02.png';
        $product->price = 14.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 51;
        $product->translateOrNew('en')->order_status = "canceled";
        $product->translateOrNew('en')->order_status = "الغيت";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Flex Clasp for Activity Trackers";
        $product->translateOrNew('ar')->name = " المشبك المرن لتتبع النشاط";
        $product->image = 'images/imageProuduct/03.png';
        $product->price = 4.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 56;
        $product->translateOrNew('en')->order_status = "canceled";
        $product->translateOrNew('en')->order_status = "الغيت";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Fitbit - Flex Wireless Activity + Sleep Tracker Wristband ";
        $product->translateOrNew('ar')->name = "فليكس نشاط لاسلكي + سوار تعقب النوم";
        $product->image = 'images/imageProuduct/07.png';
        $product->price = 99.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 95;
        $product->translateOrNew('en')->order_status = "on hold";
        $product->translateOrNew('en')->order_status = "في الانتظار";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();



        $category = new Category;
        $category->translateOrNew('en')->name = "Audio";
        $category->translateOrNew('ar')->name = "صوتيات";
        $category->is_navbar = 0;
        $category->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Altec Lansing - Bluetooth Speaker ";
        $product->translateOrNew('ar')->name = "Altec Lansing - مكبر صوت بلوتوث";
        $product->image = 'images/imageProuduct/06.png';
        $product->price = 199.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 57;
        $product->translateOrNew('en')->order_status = "canceled";
        $product->translateOrNew('en')->order_status = "الغيت";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();

        $product = new Product;
        $product->translateOrNew('en')->name = "Altec Lansing -Portable  Bluetooth Speaker ";
        $product->translateOrNew('ar')->name = "Altec Lansing -  مكبر صوت بلوتوث محمول";
        $product->image = 'images/imageProuduct/06.png';
        $product->price = 199.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 87;
        $product->translateOrNew('en')->order_status = "canceled";
        $product->translateOrNew('en')->order_status = "الغيت";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();



        $product = new Product;
        $product->translateOrNew('en')->name = "Altec Lansing - Mini H2O Bluetooth Speaker ";
        $product->translateOrNew('ar')->name = "Altec Lansing - مكبر صوت بلوتوث H2O صغير";
        $product->image = 'images/imageProuduct/06.png';
        $product->price = 39.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 99;
        $product->translateOrNew('en')->order_status = "on hold";
        $product->translateOrNew('en')->order_status = "في الانتظار";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();


        $product = new Product;
        $product->translateOrNew('en')->name = "Aluratek - Bluetooth Audio Transmitter ";
        $product->translateOrNew('ar')->name = "Aluratek - مرسل صوتي بلوتوث";
        $product->image = 'images/imageProuduct/04.png';
        $product->price = 29.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 51;
        $product->translateOrNew('en')->order_status = "canceled";
        $product->translateOrNew('en')->order_status = "الغيت";
        $product->is_New = 0;
        $product->is_Discount = 0;
        $product->Category()->associate($category);
        $product->save();


        $product = new Product;
        $product->translateOrNew('en')->name = "Aluratek - iStream Bluetooth Audio Receiver";
        $product->translateOrNew('ar')->name = "Aluratek - استقبال الصوت بلوتوث iStream";
        $product->image = 'images/imageProuduct/07.png';
        $product->price = 29.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 51;
        $product->translateOrNew('en')->order_status = "pending";
        $product->translateOrNew('en')->order_status = "قيد  الانتظار";
        $product->is_New = 1;
        $product->is_Discount = 1;
        $product->Discount = 20;
        $product->Category()->associate($category);
        $product->save();


        $product = new Product;
        $product->translateOrNew('en')->name = "Antec - SmartBean Bluetooth Adapter";
        $product->translateOrNew('ar')->name = "انتيك - محول بلوتوث سمارت بين";
        $product->image = 'images/imageProuduct/07.png';
        $product->price = 39.99;
        $product->translateOrNew('en')->Details = "Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V 24-70mm lens kit.";
        $product->translateOrNew('ar')->Details = "التقط صورًا ومقاطع فيديو احترافية باستخدام مجموعة عدسات Canon EOS 5D Mk V 24-70mm هذه. يوفر مستشعر كامل الإطار بدقة 30.4 ميجابكسل وضوحًا رائعًا للصور ، ويمكن الحصول على فيديو 4K من كاميرا DSLR هذه للحصول على أفلام قوية. يمنحك التركيز البؤري التلقائي فائق الدقة ونطاقات ISO الضخمة الصور التي تريدها من مجموعة العدسات Canon EOS 5D Mk V 24-70mm هذه.";
        $product->popularity = 63;
        $product->translateOrNew('en')->order_status = "pending";
        $product->translateOrNew('en')->order_status = "قيد  الانتظار";
        $product->is_New = 1;
        $product->is_Discount = 1;
        $product->Discount = 35;
        $product->Category()->associate($category);
        $product->save();
    }

}
