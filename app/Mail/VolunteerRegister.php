<?php

namespace App\Mail;
use App\Volunteer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VolunteerRegister extends Mailable
{
    use Queueable, SerializesModels;

    protected $volunteer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Volunteer $volunteer)
    {
        $this->volunteer = $volunteer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->volunteer->email)
                ->view('Emails/VolunteerRegisterMail')
                ->with([
                        'volunteerName' => $this->volunteer->name
                       
                    ])
                ->attach(storage_path($this->volunteer->cv),[

                        'as'    =>  'International Volunteer Application.doc',
                        'mime' => 'application/msword',


                    ]);
    }
}
