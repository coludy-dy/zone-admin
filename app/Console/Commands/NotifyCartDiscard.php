<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Notification;
use Illuminate\Console\Command;

class NotifyCartDiscard extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:notify-cart-discard';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $carts = Cart::whereDate('created_at','<',Carbon::now())->get();
        
        foreach($carts as $cart) {
            
            Notification::create([
                'user_id' => $cart->user_id,
                'order_id' => 0,
                'condition' => 'unseen',
                'title' => 'သင်၏ '. Carbon::parse($cart->created_at)->format('d-m-Y') . 
                ' ရက် ‌နေ့တွင် သိမ်းဆည်းခဲ့‌သော အမှာပစ္စည်းအား ပယ်ဖျက်ပြီးဖြစ်ပါသည်'
            ]);

            $cart->delete();

        }
    }
}
