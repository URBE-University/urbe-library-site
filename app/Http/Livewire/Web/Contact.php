<?php

namespace App\Http\Livewire\Web;

use App\Mail\ContactFormNotification;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact as ContactLibrary;

class Contact extends Component
{
    public $name, $email, $phone, $message;

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'integer',
            'email' => 'required|email',
            'message' => 'required|min:20'
        ]);


        try {

            $contact = ContactLibrary::create([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'message' => $this->message
            ]);

            Mail::to(env('MAIL_TO'))->send(new ContactFormNotification($contact));

        } catch (\Throwable $th) {
            Log::error($th);
        }



    }

    public function render()
    {
        return view('livewire.web.contact');
    }
}
