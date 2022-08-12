<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {



        return "Your message was sent successfully.";
//        Mail::to('ahmedelmaalawi@gmail.com')
//            ->send(new ContactMail($validated['name'],$validated['email'],$validated['phone'],$validated['subject'],$validated['message']));
//        return ['success' => true];
    }
}
