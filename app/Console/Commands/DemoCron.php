<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\TaxiBooking;
use Illuminate\Console\Command;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

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
        \Log::info("Cron is working fine!");

        $bookings = TaxiBooking::all();

        foreach($bookings as $booking){
            $pickUpTime = Carbon::parse($booking->pick_up_time);
            $customer_reminder = $pickUpTime->subHours(3);
            $admin_reminder = $pickUpTime->subHours(8);

            if (now()->gte($customer_reminder)) {
                sendCustomerSMS($booking);
            }
            
            if (now()->gte($admin_reminder)) {
                sendAdminSMS($booking);
            }
        }


    }
}
