<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\SendMailFriday;
use Mail;

class JobSendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $mail;
    public $name;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mail, $name)
    {
        $this->mail = $mail;
        $this->name = $name;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mail = $this->mail;
        $name = $this->name;
        Mail::to($mail)->send(new SendMailFriday($name));
    }
}
