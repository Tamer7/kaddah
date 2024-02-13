<?php

namespace App\Jobs;

use App\Mail\SendMail;
use App\Mail\QuoteUserMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $details = [];
    public function __construct($details)
    {
        //
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new SendMail($this->details);
        $userMail = new QuoteUserMail($this->details);

        Mail::to('contact@kaddahcleaning.com')
        ->cc(['info@kicuae.com'])
        ->send($email);

        if($this->details['user'] && $this->details['user']['email'])
            Mail::to($this->details['user']['email'])
            ->cc(['contact@kaddahcleaning.com'])
            ->send($userMail);
    }
}
