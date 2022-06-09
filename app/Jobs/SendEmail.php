<?php

namespace App\Jobs;

use App\Mail\OtpMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $emailAddress = null;
    protected $token =null;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $emailAddress,int $token)
    {
        $this->emailAddress = $emailAddress;
        $this->token = $token;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        dd('here');
        Mail::to($this->emailAddress)->send(new OtpMail($this->token));
    }
}
