<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\UserAlert;
use App\Models\Product;
// use App\Mail\SendEmail;
use Mail;
class SendSms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:sms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test sending sms';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Mail::to("fiyinfholuwa@gmail.com")->send(new UserAlert());
        $product = Product::where('stock', '<=', '10')->get();

        $to_email = "fiyinfholuwa@gmail.com";

        Mail::to($to_email)->send(new UserAlert($product));

        $this->info('Daily report has been sent successfully!');
        return 'Daily report has been sent successfully!';
        return Command::SUCCESS;
    }
}
