<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name;
    public string $email;
    public string $message;

    protected array $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:5',
    ];

    public function submit(): void
    {
        $this->validate();

        // Send email
        Mail::to($this->email)->send(new ContactFormMail($this->name, $this->email, $this->message));

        session()->flash('success', 'Your message has been sent successfully.');

        // Clear the form
        $this->reset();
    }

    public function render(): View
    {
        return view('livewire.contact-form')->layout('layouts.app');
    }
}
