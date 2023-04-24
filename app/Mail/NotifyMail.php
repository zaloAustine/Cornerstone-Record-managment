<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;
    // public array $data;
protected $data = array();
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        json_decode($data);
      $this->$data = $data;
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail')->with(['data'=>$data]);
    }
}
