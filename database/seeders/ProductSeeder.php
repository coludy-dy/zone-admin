<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            //Apple
            [
                'name' => 'iPhone 13 (128GB, eSIM)',
                'img_path' => 'img/default.jpg',
                'img_name' => 'iphone_13_main.png',
                'description' => 'iPhone 13 သည် screen size 6.1 inchesရှိပြီး Super Retina XDR OLED display ကိုအသုံးပြုထား သောကြောင့် ပြီးပြည့်စုံသောမျက်နှာပြင် ရုပ်ထွက်များကို
                                ရရှိနိုင်မည်ဖြစ်သည်။ 5G network ကိုလည်းထည့်သွင်း ထားပြီး Apple A15 Bionic (5 nm) chipsetဖြစ်သောကြောင့် ကောင်းမွန်သော hardware ပိုင်းဖြစ်ပါသည်။ 
                                main camera and selfie cameraကို dual 12MPဖြစ်သောကြောင့်ကြည်လင်ပြတ်သားသောရုပ်ပုံများကိုဖန်တီး နိုင် ပါသည်။ (*** 
                                6.1 inch Super Retina XDR OLED, A15 Bionic, dual 12 MP cameras ***)',
                'brand_id' => 1,
                'color' => 'Default',
                'price' =>'2200000',
                'ram' => null,
                'storage' => '128GB',
                'camera' => 'Dual 12 MP (main & selfie)',
                'battery' => '4005mAh',
                'screen_size' => '6.1"',
                'stock' => 100,
                'status' => 'available',
            ],

            [
                'name' => 'iPhone 16 (128GB, eSIM)',
                'img_path' => 'img/default.jpg',
                'img_name' => 'iphone_16_main.png',
                'description' => 'iPhone 16 သည် မျက်နှာပြင် 6.1inch Size ရှိပြီး Super Retina XDR display ကိုသုံးပေးထားပါသည်။ 2,000 nits အထိထုတ်ပေးပြီး 
                                အမှောင်ဆုံးအချိန်မှာ 1 nit အထိချပေးပါတယ်။ နောက်ဆုံးပေါ် A18 Chip ကို အသုံးပြုထားပြီး 6 core CPU ကိုသုံးပေးထားပါသည်။ 48MP Fusion Camera နဲ့ အမိုက်စား
                                Camera Control ပါဝင်တဲ့ Camera လုပ်ဆောင်ချက်တွေက အမှတ်တရတွေကို အကောင်းဆုံး သိမ်းဆည်းဖို့ဖြစ်စေ ၊ လုပ်ငန်းကိစ္စတွေကို Pro ဆန်ဆန်ရိုက်ကူးနိုင်မှာဖြစ်ပါသည်။ 
                                Battery Life ကတော့ 3561mAh ပါဝင်မှာဖြစ်ပါသည်။',
                'brand_id' => 1,
                'color' => 'Default',
                'price' => '3560000',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48 MP Fusion',
                'battery' => '3561mah',
                'screen_size' => '6.1"',
                'stock' => 100,
                'status' => 'available',
            ],

            [
                'name' => 'iPhone 16e (128GB, eSIM)',
                'img_name' => 'iphone_16e_main.png',
                'img_path' => 'img/default.jpg',
                'description' => 'iPhone 16e သည် screen size 6.1 inches ရှိပြီး Super Retina XDR display ဖြင့် အသုံးပြုနိုင်မှာဖြစ်ပါသည်။ 
                                Chip အနေနဲ့ နောက်ဆုံးပေါ် A18 chip နဲ့အတူ New 6‑core CPU / New 4‑core GPU ကို တွဲဖက်အသုံးပြုပေးထားပါသည်။ 
                                48MP Fusion Camera နဲ့ ရိုက်သမျှပုံရိပ်တိုင်းက ရုပ်ထွက်လှနေမှာဖြစ်ပြီး လုပ်ငန်းကိစ္စတွေကို Pro ဆန်ဆန်ရိုက်ကူးနိုင်မှာဖြစ်ပါသည်။
                                Battery Life ကတော့ 4005mAh ပါဝင်မှာဖြစ်ပါသည်။ Sensors အနေနဲ့ Face ID, accelerometer, gyro, proximity, 
                                compass, barometer Emergency SOS, Messages and Find My via satellite များပါဝင်ပါသည်။ ',
                'brand_id' => 1,
                'color' => 'Default',
                'price' => '2920000',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP Fusion',
                'battery' => '4005mah',
                'screen_size' => '6.1"',
                'stock' => 55,
                'status' => 'available',
            ],

            [
                'name' => 'iPhone 16 Plus (128GB, eSIM)',
                'img_name' => 'iphone_16_plus_main.png',

                'description' => 'iPhone 16 Plus သည် မျက်နှာပြင် 6.7 inch Size ရှိပြီး Super Retina XDR display ကိုသုံးပေးထားပါသည်။2,000 nits အထိထုတ်ပေးပြီး 
                                အမှောင်ဆုံးအချိန်မှာ 1 nit အထိချပေးပါတယ်။ နောက်ဆုံးပေါ် A18 Chip ကို အသုံးပြုထားပြီး ဖြင့် 6 core CPU အသုံးပြုထားပါသည်။48MP Fusion Camera နဲ့ အမိုက်စား
                                Camera Control ပါဝင်တဲ့ Camera လုပ်ဆောင်ချက်တွေက အမှတ်တရတွေကို အကောင်းဆုံး သိမ်းဆည်းဖို့ဖြစ်စေ ၊ လုပ်ငန်းကိစ္စတွေကို Pro ဆန်ဆန်ရိုက်ကူးနိုင်မှာဖြစ်ပါသည်။
                                Battery Life ကတော့ 4006mAh ပါဝင်မှာဖြစ်ပါသည်။',

                'img_path' => 'img/default.jpg',
                'brand_id' => 1,
                'color' => 'Default',
                'price' => '4080000',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP Fusion',
                'battery' => '4006mah',
                'screen_size' => '6.7"',
                'stock' => 40,
                'status' => 'available',
            ],

            [
                'name' => 'iPhone 16 Pro (1TB, eSIM)',
                'img_path' => 'img/default.jpg',
                'img_name' => 'iphone_16_pro_main.png',
                'description' => 'iPhone 16 Pro သည် မျက်နှာပြင် 6.3-inch  ရှိပြီး  Super Retina XDR OLED Display ကိုသုံးပေးထားပါသည်။ Camera အနေနဲ့ကတော့ 
                                48MP Main Camera, 48MP Ultra-Wide Camera, 12MP 5x Tele Lens တို့သုံးထားပြီး 16 Pro မှာပါ 5x ရလာပါတယ်။ Camera Control Button အသစ် ပါဝင်လာပြီး
                                Video အပိုင်းမှာတော့ 4K 120fps HDR, Dolby Vision support ဖြစ်တာမို့ Video အပိုင်း အတွက်အဆင်ပြေစေမယ့်ဖုန်းတလုံးဖြစ်ပါတယ်။Noise Cancellation 
                                ပိုကောင်းလာပြီး Mic 4 လုံးပါဝင်လာပါတယ်။ Spatial Audio Recording ကို video recording မှာလဲ ရလာမှာဖြစ်တဲ့အပြင် Audio Mix ဆိုတဲ့ feature 
                                ပါဝင်လာမှာဖြစ်ပါတယ်။Battery Li-Ion 3582mAh ဖြစ်ပြီး Charging Port ကိုတော့ USB C အသုံးပြုပေးထားတာဖြစ်ပါသည်။ ',
                'brand_id' => 1,
                'color' => 'Default',
                'price' => '6860000',
                'ram' => null,
                'storage' => '1TB',
                'camera' => '48MP + 48MP + 12MP tele 5',
                'battery' => '3582mah',
                'screen_size' => '6.3"',
                'stock' => 25,
                'status' => 'available',
            ],

            [
                'name' => 'iPhone 16 ProMax (256GB, eSIM)',
                'img_name' => 'iphone_16_pro_max_main.png',
                'img_path' => 'img/default.jpg',
                'description' => 'iPhone 16 Pro Max သည် မျက်နှာပြင် 6.9-inch  ရှိပြီး  Super Retina XDR OLED Display ကိုသုံးပေးထားပါသည်။ Camera အနေနဲ့ကတော့ 
                                48MP Main Camera, 48MP Ultra-Wide Camera, 12MP 5x Tele Lens တို့သုံးထား ပါတယ်။ Camera Control Button အသစ် ပါဝင်လာပြီး Video 
                                အပိုင်းမှာတော့ 4K 120fps HDR, Dolby Vision support ဖြစ်တာမို့ Video အပိုင်း အတွက်အဆင်ပြေစေမယ့်ဖုန်းတလုံးဖြစ်ပါတယ်။Noise Cancellation ပိုကောင်းလာပြီး
                                Mic 4 လုံးပါဝင်လာပါတယ်။ Spatial Audio Recording ကို video recording မှာလဲ ရလာမှာဖြစ်တဲ့အပြင် Audio Mix ဆိုတဲ့ feature ပါဝင်လာမှာဖြစ်ပါတယ်။Battery 
                                Li-Ion 4676mAh ဖြစ်ပြီး Charging Port ကိုတော့ USB C အသုံးပြုပေးထားတာဖြစ်ပါသည်။ ',
                'brand_id' => 1,
                'color' => 'Default',
                'price' => '5290000',
                'ram' => null,
                'storage' => '256GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '4676mah',
                'screen_size' => '6.9"',
                'stock' => 30,
                'status' => 'available',
            ],

            // Samsaung
            [
                'name' => 'Samsaung S24 FE',
                'img_name' => 'sblack.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Samsung S24 FE လေးကတော့ မျက်နှာပြင် 6.7 inches ရှိပြီး Dynamic AMOLED 2X Display အသုံးပြုပေးထားပြီးတော့ 120Hz နဲ့ဖြစ်တာကြောင့် အသုံးပြုရာမှာ သွက်လက်နေမှာဖြစ်ပါသည်။ Exynos 2400e (4 nm)ကို အသုံးပြုထားပြီး Android  Version 14 နဲ့အသုံးပြုနိုင်မှာပါ။ Main Camera 50MP နဲ့ Selfie Camera 10MP ဖြစ်ပါသည်။ ဘက်ထရီပိုင်းမှာဆိုရင်လည်း Li-Ion 4700 mAh, 
                                    non-removable ပါဝင်ပြီး Charging 25W ဖြစ်တာကြောင့်အားသွင်းမြန်ဆန်စေမှာဖြစ်ပါသည်။',
                'brand_id' => 2,
                'color' => 'Default',
                'price' => '2699000',
                'ram' => null,
                'storage' => '512GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 5,
                'status' => 'available',
            ],

            [
                'name' => 'Samsaung A06 5G',
                'img_name' => 'sblue.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Samsung Galaxy A06 လေးကတော့ မျက်နှာပြင်6.7 inches ရှိပြီး PLS LCD အသုံးပြုပေးထားပါသည်။Dimensity 6300 Chipset နဲ့ဖြစ်တာကြောင့် အသုံးပြုရာမှာ သွက်လက်နေမှာဖြစ်ပါသည်။ Main Camera 50MP ၊ Front Camera 8MP ပါဝင်မှာဖြစ်ပါသည်။ ဘက်ထရီပိုင်းမှာဆိုရင်လည်း 
                                Li-Ion 5000mAh, non-removable ပါဝင်ပြီး Charging 25W ဖြစ်တာကြောင့်အားသွင်းမြန်ဆန်စေမှာ ဖြစ်ပါသည်။',
                'brand_id' => 2,
                'color' => 'Default',
                'price' => '525000',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 5,
                'status' => 'available',
            ],

            [
                'name' => 'Samsaung S25 Plus',
                'img_name' => 'sgary.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Samsung S25 Plus သည် မျက်နှာပြင် 6.7 inches ရှိပြီး Dynamic LTPO AMOLED 2X, HDR10+ Display အသုံးပြုပေးထားပြီးတော့ 120Hz နဲ့ဖြစ်တာကြောင့် အသုံးပြုရာမှာ သွက်လက်နေမှာဖြစ်ပါသည်။ Main Camera 50MP နဲ့ Selfie Camera 12MP ဖြစ်ပါသည်။ Qualcomm SM8750-AB Snapdragon 8 Elite (3 nm) Chipset ကိုသုံးပေးထားပြီး ဘက်ထရီပိုင်းမှာဆိုရင်လည်း Li-Ion 4900 mAh,
                                 non-removable ပါဝင်ပြီး Charging 45W ဖြစ်တာကြောင့်အားသွင်းမြန်ဆန်စေမှာဖြစ်ပါသည်။',
                'brand_id' => 2,
                'color' => 'Default',
                'price' => '5655000',
                'ram' => null,
                'storage' => '256GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 10,
                'status' => 'available',
            ],

            [
                'name' => 'Samsaung A50S',
                'img_name' => 'sblack.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Samsung Galaxy A05s လေးကတော့ မျက်နှာပြင် ၆.၇ လက်မရှိပြီး PLS LCD, 90Hz အသုံးပြုပေးထားပြီးတော့ Qualcomm SM6225 Snapdragon 680 4G (6 nm) နဲ့ဖြစ်တာကြောင့် အသုံးပြုရာမှာ သွက်လက်နေမှာဖြစ်ပါသည်။ Main Camera 50MP ပါဝင်မှာဖြစ်ပါသည်။ ဘက်ထရီပိုင်းမှာဆိုရင်လည်း 
                                Li-Ion 5000 mAh, non-removable ပါဝင်ပြီး Charging 25W ဖြစ်တာကြောင့်အားသွင်းမြန်ဆန်စေမှာဖြစ် ပါသည်။',
                'brand_id' => 2,
                'color' => 'Default',
                'price' => '779500',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 15,
                'status' => 'available',
            ],

            //Huawei
            [
                'name' => 'Huawei Nova 30 Pro',
                'img_name' => 'blue.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Huawei Nova 13 Pro သည် screen size 6.76 inches ရှိပြီး LTPO OLED, 1B colors, HDR, 120Hz Display ကိုအသုံးပြုထားပါသည်။ 1224 x 2776 pixels ကြောင့် ကောင်းမွန်သော ရုပ်ထွက်ကို ရရှိစေမှာဖြစ်ပါသည်။ 50MP Camera ပါဝင်တာမို့ ရုပ်ထွက်အမိုက်စားပုံတွေကို ဖမ်းယူနိုင်မှာပါ။
                                ဘက်ထရီ 5000mAh ပါဝင်ပြီး အားသွင်းစနစ်က 100W Fast Charger ဖြစ်တာကြောင့် အားသွင်းရာမှာလည်းမြန်ဆန်စေမှာဖြစ်ပါသည်။',
                'brand_id' => 3,
                'color' => 'Default',
                'price' => '1959000',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 20,
                'status' => 'available',
            ],

            [
                'name' => 'Huawei Pura 70',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Huawei Pura 70 လေးသည် 6.6 inches ရှိပြီး LTPO OLED, 1B colors, HDR, 120Hz refresh rate တို့ပေါင်းစပ်ထားသောကြောင့် ကြည်လင်ပြတ်သားသောရုပ်ထွက်ကို ပိုင်ဆိုင်နိုင်စေပါသည်။ ကင်မရာပိုင်းမှာဆိုရင်လည်း Main Camera 50MP နဲ့ Selfie Camera 13MP ပါဝင်မှာဖြစ်ပါသည်။ Li-Po 4900mAh non-removable battery ကြောင့်တစ်နေ့တာအတွက် သင့်ဘေးနားမှာ အကောင်းမွန်ဆုံး ဆောင်ရွက်ပေးမှာပါ။
                                 Charging 66W wired ဖြစ်တာကြောင့် အားသွင်းရာမှာလည်း မြန်ဆန်စေမှာဖြစ်ပါတယ်။',
                'brand_id' => 3,
                'color' => 'Default',
                'price' => '2149000',
                'ram' => null,
                'storage' => '256GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 25,
                'status' => 'available',
            ],

            [
                'name' => 'Huawei Nova 13',
                'img_name' => 'black.png','img_path' => 'img/default.jpg',
                'description' => 'Huawei Nova 13 သည် screen size 6.7 inches ရှိပြီး OLED, 1B colors, HDR, 120Hz Display ကိုအသုံးပြုထားပါသည်။ 1084 x 2412 Pixels ကြောင့် ကောင်းမွန်သော ရုပ်ထွက်ကို ရရှိစေမှာဖြစ်ပါသည်။ 50MP Camera ပါဝင်တာမို့ ရုပ်ထွက်အမိုက်စားပုံတွေကို ဖမ်းယူနိုင်မှာပါ။ 
                                ဘက်ထရီ 5000mAh ပါဝင်ပြီး အားသွင်းစနစ်က 100W Fast Charger ဖြစ်တာကြောင့် အားသွင်းရာမှာလည်းမြန်ဆန်စေမှာဖြစ်ပါသည်။',
                'brand_id' => 3,
                'color' => 'Default',
                'price' => '1429000',
                'ram' => null,
                'storage' => '512GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 30,
                'status' => 'available',
            ],

            //Xiaomi

            [
                'name' => 'Redmi Note 13 Pro',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Redmi Note 14 Pro 5G လေးသည် Screen Size 6.67inch ရှိပြီး AMOLED, 1B colors, 120Hz Display ကိုအသုံးပြုပေးထားပါသည်။ 1220 x 2712 pixels Resolution ဖြစ်တာကြောင့် ကြည်လင်ပြတ်သားသောရုပ်ထွက်များကို ခံစားကြည့်ရှု့နိုင်ပါသည်။ Main Camera 200MP ဖြစ်ပြီး Selfie Camera 20 MP ဖြစ်ပါသည်။ 
                                Battery 5110mAh ဖြစ်တာကြောင့် အချိန်ကြာမြင့်စွာအသုံးပြုနိုင်ပြီး Charging 45W wired နဲ့မို့ အားသွင်းမြန်ဆန်စေပါသည်။',
                'brand_id' => 4,
                'color' => 'Default',
                'price' => '1219000',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 30,
                'status' => 'available',
            ],

            [
                'name' => 'Redmi Note 14',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Redmi Note 14 ကတော့ 6.67 inches ရှိပြီး AMOLED, 120Hz refresh rate တို့ပေါင်းစပ်ထားသောကြောင့် ကြည်လင်ပြတ်သားသောရုပ်ထွက်ကို ပိုင်ဆိုင်နိုင်မှာဖြစ်ပါသည်။ ကင်မရာပိုင်းမှာဆိုရင်လည်း Main Camera 108MP နဲ့ Selfie Camera 20MP ပါဝင်မှာဖြစ်ပါသည်။ Mediatek Dimensity 7025 Ultra (6 nm) Chipset က သွက်လက်မြန်ဆန်စေမှာဖြစ်သလို Advanced AI ပါဝင်တဲ့ Xiaomi HyperOS နဲ့ run ပေးထားပြီး Li-Po 5110mAh non-removable battery ကြောင့်တစ်နေ့တာအတွက် 
                                သင့်ဘေးနားမှာ အကောင်းမွန်ဆုံး ဆောင်ရွက်ပေးမှာပါ။ Charging 33W wired ဖြစ်တာကြောင့် အားသွင်းရာမှာလည်း မြန်ဆန်စေမှာဖြစ်ပါတယ်။',
                'brand_id' => 4,
                'color' => 'Default',
                'price' => '669000',
                'ram' => null,
                'storage' => '512GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 30,
                'status' => 'available',
            ],
             //OPPO

            [
                'name' => 'OPPO Reno 14',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Oppo Reno 14 5G သည် မျက်နှာပြင်အရွယ်အစား 6.59 လက်မ ရှိပြီး AMOLED, 1B colors, 120Hz, 1200 nits (peak) ကိုသုံးပေးထားပါသည်။Android 15, Color OS 15 ကိုသုံးထားပြီး 1256 x 2760 pixels Resolution ကိုသုံးပေးထားတာကြောင့် ကောင်းမွန်သောရုပ်ထွက်ကိုမြင်တွေ့ရမှာဖြစ်ပါတယ်။ Main Camera 50 MP နှင့် Selfie 50 MP ကိုသုံးပေးထားတာကြောင့် လှပသောပုံရိပ်များကိုရရှိနိုင်မှာဖြစ်ပါသည်။Mediatek Dimensity 8350 (4 nm) 
                                Chipset ကိုသုံးပေးထားပြီး 6000 mAh ဘက်ထရီ ၊80W Super VOOC အမြန်အားသွင်းစနစ် ဖြစ်တာကြောင့် အားသွင်းရမှာလည်းမြန်ဆန်စေမှာဖြစ်ပါသည်။',
                'brand_id' => 5,
                'color' => 'Default',
                'price' => '2339900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 31,
                'status' => 'available',
            ],

            [
                'name' => 'OPPO A5 Pro',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Oppo A5 Pro သည် မျက်နှာပြင်အရွယ်အစား ၆.၆၇ လက်မရှိပြီး မျက်နှာပြင် screen ကို IPS LCD 90Hz display , Resolution 720 x 1604 pixels ဖြစ် သောကြောင့် ကောင်းမွန်သောရုပ်ထွက်ကို ရရှိစေပါသည်။ main camera 50MP ဖြစ်ပြီး selfile camera အနေဖြင့် 8MP ပါဝင်မှာဖြစ်ပါသည်။Snapdragon 6s 4G Gen1 (11nm) နှင့် Android 15 ကိုသုံးပေးထားပါသည်။
                                 ကြီးမားတဲ့ 5800mAh ဘက်ထရီနဲ့ လျင်မြန်တဲ့ 45W ပါဝင်တာကြောင့်အားသွင်းမြန်ဆန်စေမှာဖြစ်ပါသည်။',
                'brand_id' => 5,
                'color' => 'Default',
                'price' => '899900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 27,
                'status' => 'available',
            ],

            //vivo
            [
                'name' => 'Vivo Y29 (6/128GB)',
                'img_name' => 'vivoblack.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Vivo Y29 သည် screen size 6.68 inches ရှိပြီး IPS LCD, 120Hz display ကိုအသုံးပြုထားပါသည်။
                                    720 x 1608 pixels resolutions ဖြစ်သောကြောင့် ကောင်းမွန်သော ပုံရိပ်များကို မြင်ရမှာဖြစ်ပါသည်။ Main camera 50  MP Camera သည် ပုံရိပ်များကိုရှင်းလင်းစွာဖမ်းယူနိုင်ပြီး 
                                    selfie camera 8MP ဖြစ်ပါသည်။ Battery 6500mAh ဖြစ်ပြီးတော့ charging 44W wired ပါဝင်မှာ ဖြစ်ပါသည်။',
                'brand_id' => 6,
                'color' => 'Default',
                'price' => '720000',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 30,
                'status' => 'available',
            ],

            [
                'name' => 'Vivo V50 lite',
                'img_name' => 'vivoblue.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Vivo V50 Lite လေးသည် Screen Size 6.77inches ရှိပြီး AMOLED, 120Hz Display ကိုအသုံးပြုပေးထားပါသည်။ 1080 x 2392 pixels Resolution ဖြစ်တာကြောင့် ကြည်လင်ပြတ်သားသောရုပ်ထွက်များကို ခံစားကြည့်ရှု့နိုင်မှာဖြစ်ပါသည်။ 50MP Main Camera ၊ အမှုန်အမွှား၊ ရေစိုခံနိုင်မှုရှိတဲ့ IP65 Dust and Water Resistance ပါဝင်မှာဖြစ်ပါတယ်။ဘက်ထရီကြီးကြီး
                                  ခပ်ပါးပါး 6500mAh Li-Ion Battery ဖြစ်တာကြောင့် အချိန်ကြာမြင့်စွာအသုံးပြုနိုင်ပြီး Fast Charging 90W နဲ့မို့ အားသွင်းမြန်ဆန်စေပါသည်။','brand_id' => 6,
                'color' => 'Default',
                'price' => '1290000',
                'ram' => null,
                'storage' => '256GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 70,
                'status' => 'available',
            ],

            [
                'name' => 'Vivo Y04',
                'img_name' => 'vivopink.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Vivo Y04 သည် screen size 6.74 inches ရှိပြီး IPS LCD, 90Hz display ကိုအသုံးပြုထားပါသည်။720 x 1600 pixels resolutions ဖြစ်သောကြောင့် ကောင်းမွန်သော ပုံရိပ်များကို မြင်ရမှာဖြစ်ပါသည်။ Main camera 13 MP ဖြစ်ပြီး selfie camera 5MP ဖြစ်ပါသည်။ Unisoc T7225 (12 nm) ကိုအသုံးပြုထားပြီး
                                    Android Version14နဲ့အသုံးပြုနိုင်မှာပါ။ Battery Li-Po 5500 mAh ဖြစ်ပြီးတော့ charging 15W wired ပါဝင်မှာ ဖြစ်ပါသည်။',
                'brand_id' => 6,
                'color' => 'Default',
                'price' => '419800',
                'ram' => null,
                'storage' => '512GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 10,
                'status' => 'available',
            ],

            [
                'name' => 'Vivo V50 5G',
                'img_name' => 'vivopink.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Vivo V50 5G လေးသည် Screen Size 6.77inches ရှိပြီး AMOLED, HDR10+, 120Hz Display ကိုအသုံးပြုပေးထားပါသည်။ 1080 x 2392 pixels Resolution ဖြစ်တာကြောင့် ကြည်လင်ပြတ်သားသောရုပ်ထွက်များကို ခံစားကြည့်ရှု့နိုင်မှာဖြစ်ပါသည်။ 50MP ZEISS All Main Camera ၊ ရေအောက်ထဲမှာပါ ဓာတ်ပုံရိုက်ကူးနိုင်မယ့် IP68 & IP69 Dust and Water Resistance ပါဝင်မှာဖြစ်ပါတယ်။ဘက်ထရီကြီးကြီး ခပ်ပါးပါး
                                6000mAh BlueVolt Battery ဖြစ်တာကြောင့် အချိန်ကြာမြင့်စွာအသုံးပြုနိုင်ပြီး Fast Charging 90W နဲ့မို့ အားသွင်းမြန်ဆန်စေပါသည်။',
                'brand_id' => 6,
                'color' => 'Default',
                'price' => '2199800',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 5,
                'status' => 'available',
            ],

            [
                'name' => 'Vivo Y19S',
                'img_name' => 'vivoblack.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Vivo Y19s သည် screen size 6.68 inches ရှိပြီး IPS LCD, 90Hz display ကိုအသုံးပြုထားပါသည်။720 x 1608 pixels resolutions ဖြစ်သောကြောင့် ကောင်းမွန်သော ပုံရိပ်များကို မြင်ရမှာဖြစ်ပါသည်။ Main camera 50  MP 
                                ဖြစ်ပြီး selfie camera 5MP ဖြစ်ပါသည်။ Battery Li-Po 5500 mAh ဖြစ်ပြီးတော့ charging 15W wired ပါဝင်မှာ ဖြစ်ပါသည်။',
                'brand_id' => 6,
                'color' => 'Default',
                'price' => '549800',
                'ram' => null,
                'storage' => '512GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 5,
                'status' => 'available',
            ],

            //Honor

            [
                'name' => 'Honor 400 5G',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'HONOR 400 5G  လေးသည် Display size 6.55 inches ရှိပြီး Display Type ကိုတော့ AMOLED, 1B colors, 120Hz ဖြင့်ပြုလုပ်ပေးထားပါသည်။ Resolution ပိုင်းအနေနဲ့ 1264 x 2736 pixels ပါဝင်ပြီးတော့ Storage ပိုင်းအနေနဲ့ 12/256GB လာပေးထားပါသည်။ Main Camera ပိုင်းအ‌နေနဲ့ 200 MP ပါဝင်ပြီး Selfie Camera ပိုင်းမှာလဲ 50 MP ပါဝင်ပါသည်။ 
                                Battery ကတော့ Si/C Li-Ion 6000 mAh ပါဝင်ပြီး Charging 80W ဖြစ်တာကြောင့် အားသွင်းရာမှာလည်းမြန်ဆန်စေမှာ ဖြစ်ပါသည်။',
                'brand_id' => 7,
                'color' => 'Default',
                'price' => '1699000',
                'ram' => null,
                'storage' => '512GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 44,
                'status' => 'available',
            ],

            [
                'name' => 'Honor 400 Pro 5G',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'HONOR 400 Pro 5G Screen Size 6.7inches ရှိပြီး AMOLED, 1B colors, 120Hz Display ကိုအသုံးပြုပေးထားပါသည်။ 1280 x 2800 pixels Resolution ဖြစ်တာကြောင့် ကြည်လင်ပြတ်သားသောရုပ်ထွက်များကို ခံစားကြည့်ရှု့နိုင်ပါသည်။ Main Camera 200MP ဖြစ်ပြီး Selfie Camera 50 MPဖြစ်ပါသည်။
                                Battery 6000mAh အချိန်ကြာကြာပြန်အသုံပြုနိုင်မှာဖြစ်ပြီး Type-C 100W ဖြင့် အားဝင်မြန်စေမှာဖြစ်ပါသည်။ ',
                'brand_id' => 7,
                'color' => 'Default',
                'price' => '249900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 27,
                'status' => 'available',
            ],

            //Realme

            [
                'name' => 'Realme 14 Pro',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Realme 14 Pro လေးကတော့ 6.77-inch မျက်နှာပြင်ကိုမှ Curved OLE display နဲ့ အထာကျကျ အသုံးပြုနိုင်မှာဖြစ်ပါသည်။ 1080 x 2392 pixels Resolution, 120Hz Screen Refresh Rate ကိုပါထောက်ပံ့ပေးထားလို့ သွက်လက်တဲ့မျက်နှာပြင်ထိတွေ့မှုကို ရရှိစေမှာဖြစ်ပါတယ်။ Main camera အနေဖြင့် 50 MP ကိုသုံးပေးထားပြီး Selfie camera 16MP ပါဝင်ပါသည်။Battery Capacity Li-Ion 6000 mAh ကိုမှ 45W Fast Charging ဖြင့်အားဝင်မြန်စေမှာဖြစ်ပါသည်။ IP69ရေစိုခံစံနှုန်းနှင့် Android 15 အခြေခံထားသော Realme UI 6.0 ကို အသုံးပြုထားသည်။
                                 Chipset Mediatek Dimensity 7300 Energy (4 nm) ကြောင့် အသုံးပြုရအဆင်ပြေစေမယ့် smart phone လေးတစ်လုံးဖြစ်ပါသည်။  ',
                'brand_id' => 8,
                'color' => 'Default',
                'price' => '1999900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 14,
                'status' => 'available',
            ],

            [
                'name' => 'Realme 14 Pro',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Realme 14T 6.67-inch AMOLED display, နဲ့အတူ 120Hz Screen Refresh Rate ကိုပါထောက်ပံ့ပေးထားလို့ သွက်လက်တဲ့မျက်နှာပြင်ထိတွေ့မှုကို ရရှိစေမှာဖြစ်ပါတယ်။ Main camera အနေဖြင့် 50 MP ကိုသုံးပေးထားပြီး Selfie camera 16MP ပါဝင်ပါသည်။MediaTek Dimensity 6300 chipset ကိုသုံးပေးထားပါသည်။ 6000mAh battery, နှင့် 45W SuperVOOC charging ပါဝင်သည့် mid-range smartphone တစ်လုံးဖြစ်ပါသည်။ 
                                    IP69K ရေစိုခံစံနှုန်းနှင့် Android 15 အခြေခံထားသော Realme UI 6.0 ကို အသုံးပြုထားသည်။',
                'brand_id' => 8,
                'color' => 'Default',
                'price' => '1099900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 21,
                'status' => 'available',
            ],

            //Itel

            [
                'name' => 'Itel A80',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Itel A80 မှာတော့  screen size 6.7 inches ရှိပြီး IPS LCD display ကိုအသုံးပြုထားပါသည်။ 120Hz နဲ့မို့ အသုံးပြုရာမှာ လျင်မြန်သွက်လပ်နေမှာပဲဖြစ်ပါသည်။ 720×1600 pixels resolutions ဖြစ်သောကြောင့် ကောင်းမွန်သော ပုံရိပ်များကို မြင်ရမှာဖြစ်ပါသည်။
                                 Main camera 50MP ဖြစ်ပြီး selfie camera 8MP ဖြစ်ပါသည်။ Battery Li-Po 5000 mAh ပါဝင်မှာဖြစ်ပါသည်။',
                'brand_id' => 9,
                'color' => 'Default',
                'price' => '339900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 11,
                'status' => 'available',
            ],

            [
                'name' => 'Itel A70',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'tel A70 မှာတော့  screen size 6.6 inches ရှိပြီး IPS LCD display ကိုအသုံးပြုထားပါသည်။ 720×1612 pixels resolutions ဖြစ်သောကြောင့် ကောင်းမွန်သော ပုံရိပ်များကို မြင်ရမှာဖြစ်ပါသည်။ 
                                    Main camera 13MP ဖြစ်ပြီး selfie camera 8MP ဖြစ်ပါသည်။ Battery Li-Po 5000 mAh ပါဝင်မှာဖြစ်ပါသည်။',
                'brand_id' => 9,
                'color' => 'Default',
                'price' => '349900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 4,
                'status' => 'available',
            ],

            //Tecno

            [
                'name' => 'Tecno Spark Go 2KM4',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Tecno Spark Go 2 KM4 လေးကတော့ မျက်နှာပြင် 6.67 inches ရှိပြီး IPS LCD, 120Hz အသုံးပြုပေးထားတာကြောင့် အသုံးပြုရာမှာသွက်လက်နေစေမှာဖြစ်ပါသည်။Android 15, HIOS 15 ကိုသုံးထားပြီး Main Camera 13MP နဲ့ Selfie Camera 8MP ပါဝင်မှာဖြစ်ပါသည်။ ဘက်ထရီပိုင်းမှာဆိုရင်လည်း
                                 Li-Ion 5000mAh, non-removable ပါဝင်ပြီး Charging 15W ဖြစ်တာကြောင့်အားသွင်းမြန်ဆန်စေမှာ ဖြစ်ပါသည်။',
                'brand_id' => 10,
                'color' => 'Default',
                'price' => '279900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 4,
                'status' => 'available',
            ],

            [
                'name' => 'Tecno Camon 40 Pro 5G',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Tecno Camon 40 Pro 5G သည် Screen Size 6.78inches ရှိပြီး AMOLED, 144Hz display ကိုအသုံးပြုထားပါသည်။ 1080 x 2436 pixels resolutions ဖြစ်သောကြောင့် ကောင်းမွန်သော ပုံရိပ်များကို မြင်ရမှာဖြစ်ပါသည်။ Sony Flagship Camera ရဲ့ LYT-700C Sensor ကိုမှ 50MP Main Camera နဲ့မို့ Social Media တွေပေါ် ကြည်လင်ပြတ်သားဆုံးပုံရိပ်တွေကို ကာလာစိုစိုနဲ့အလှပုံတွေတင်ချင်သူတွေအတွက် အဆင်ပြေစေမှာဖြစ်ပါသည်။Mediatek Dimensity 7300 (4 nm) သုံးပေးထားပြီး သာမန်ရေစိုခံတာမျိူးမဟုတ်ဘဲ ရေစိမ်ပါခံတဲ့ IP68 & IP69 Water Resistance ပါဝင်ပါတယ်။ 
                                Battery Li-Po 5200 mAh ဖြစ်ပြီးတော့ charging 45W wired ပါဝင်မှာ ဖြစ်ပါသည်။',
                'brand_id' => 10,
                'color' => 'Default',
                'price' => '1249900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 4,
                'status' => 'available',
            ],

            //Infinix

            [
                'name' => 'Infinix Smart 10',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Infinix Smart 10 သည် Screen Size 6.67 inches ရှိပြီး IPS LCD, 120Hz Display ဖြင့်ပြုလုပ်ထားပါသည်။ Resolution 720x1600 pixels ဖြစ်တာကြောင့် ကောင်းမွန်သောပုံရိပ်များကိုကြည့်ရှု့ခံစားနိုင်မှာပဲဖြစ်ပါသည်။ Main Camera 8 MP ဖြစ်ပြီး Selfie Camera 8 MP ဖြစ်ပါသည်။
                                 5000mAh Battery ပါဝင်ပြီး 15W wired charging နဲ့အသုံးပြုနိုင်မှာပဲဖြစ်ပါသည်။',
                'brand_id' => 11,
                'color' => 'Default',
                'price' => '379900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 4,
                'status' => 'available',
            ],

            [
                'name' => 'Infinix Hot 50',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Infinix Hot 50 လေးကတော့ Screen Size 6.78 inches ရှိပြီး IPS LCD, 120Hz Display ကိုအသုံးပြုပေးထားပါသည်။ Resolution 1080 x 2460 pixels ဖြစ်သောကြောင့် ကောင်းမွန်သောပုံရိပ်များကို ခံစားနိုင်မှာပဲဖြစ်ပါသည်။ Main Camera 50 MP ဖြစ်ပြီး Selfie Camera 8MP နဲ့ဖြစ်ပါသည်။
                                 Battery Capacity 5000mAh ပါဝင်ပြီး Charging 18W wired နဲ့အသုံးပြုနိုင်မှာပဲဖြစ်ပါသည်။',
                'brand_id' => 11,
                'color' => 'Default',
                'price' => '529900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 7,
                'status' => 'available',
            ],

            //ZTE

            [
                'name' => 'ZTE Blade A55',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg','description' => 'ZTE Blade A55 သည် မျက်နှာပြင် 6.75 inches ရှိပြီး IPS LCD Display အသုံးပြုပေးထားပြီးတော့ 90Hz နဲ့ဖြစ်တာကြောင့် အသုံးပြုရာမှာ သွက်လက်နေမှာဖြစ်ပါသည်။  Main Camera အနေနဲ့ 13MP Camera ကိုသုံးပေးထားပြီး ရှေ့ကင်မရာကိုတော့ 8MP သုံးပေးထားပါတယ်။ Li-Po 5000mAh 
                                ဖြစ်သောကြောင့်အချိန်ကြာမြင့်စွာအသုံးပြုနိုင်မည်ဖြစ်ပါသည်။ Unisoc SC9863A ကိုသုံးထားပြီး Android Version 14 နဲ့လာပေးထားပါသည်။',
                'brand_id' => 12,
                'color' => 'Default',
                'price' => '279900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 3,
                'status' => 'available',
            ],

            [
                'name' => 'ZTE BLade A35',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'ZTE Blade A35  သည် မျက်နှာပြင် 6.75 inches ရှိပြီး IPS LCD, 16M Colors Display အသုံးပြုပေးထားပြီးတော့ 90Hz နဲ့ဖြစ်တာကြောင့် အသုံးပြုရာမှာ သွက်လက်နေမှာဖြစ်ပါသည်။  Main Camera အနေနဲ့ 13MP Camera ကိုသုံးပေးထားပြီး 
                                ရှေ့ကင်မရာကိုတော့ 8MP သုံးပေးထားပါတယ်။ Li-Po 5000mAh ဖြစ်သောကြောင့်အချိန်ကြာမြင့်စွာအသုံးပြုနိုင်မည်ဖြစ်ပါသည်။ ',
                'brand_id' => 12,
                'color' => 'Default',
                'price' => '279900',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 7,
                'status' => 'available',
            ],

            //Meizu

            [
                'name' => 'Meizu Note 21',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Meizu Note 21 Pro သည် screen size 6.78 inches ရှိပြီး FHD+, 120Hz, IPS LCD display ကိုအသုံးပြုထားပါသည်။ 1080 x 2460 pixels resolutions ဖြစ်သောကြောင့် ကောင်းမွန်သော ပုံရိပ်များကို မြင်ရမှာဖြစ်ပါသည်။ Main camera 64MP ဖြစ်ပြီး selfie camera 13MP ဖြစ်ပါသည်။ 
                                Battery Li-Po 5000 mAh ဖြစ်ပြီးတော့ Fast charging 30W ပါဝင်တာကြောင့်အားသွင်းရာမှာလည်းမြန်ဆန်စေမှာ ဖြစ်ပါသည်။',
                'brand_id' => 13,
                'color' => 'Default',
                'price' => '699000',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 8,
                'status' => 'available',
            ],  

            [
                'name' => 'Meizu Note 21 Pro',
                'img_name' => 'black.png',
                'img_path' => 'img/default.jpg',
                'description' => 'Meizu Note 21 သည် screen size 6.74 inches ရှိပြီးHD+, 90Hz, IPS LCD display ကိုအသုံးပြုထားပါသည်။ 1080 x 2400 pixels resolutions ဖြစ်သောကြောင့် ကောင်းမွန်သော ပုံရိပ်များကို မြင်ရမှာဖြစ်ပါသည်။ Main camera 50MP ဖြစ်ပြီး selfie camera 8MP ဖြစ်ပါသည်။
                                 Battery Li-Po 6000 mAh ဖြစ်ပြီးတော့ charging 18W wired ပါဝင်မှာ ဖြစ်ပါသည်။',
                'brand_id' => 13,
                'color' => 'Default',
                'price' => '435000',
                'ram' => null,
                'storage' => '128GB',
                'camera' => '48MP + 48MP + 12MP tele',
                'battery' => '5000mah',
                'screen_size' => '6.9"',
                'stock' => 6,
                'status' => 'available',
            ],

        ];

        foreach ($products as $product) {
            Product::create($product);
        }

    }
}