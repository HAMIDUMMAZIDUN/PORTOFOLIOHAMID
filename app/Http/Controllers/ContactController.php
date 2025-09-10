<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    /**
     * Mengirim email dari contact form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'nullable|string|max:20',
            'service' => 'required|string',
            'message' => 'required|string|max:5000',
        ]);

        if ($validator->fails()) {
            return redirect('/#contact') 
                ->withErrors($validator)
                ->withInput();
        }

        $formData = $validator->validated();

        try {
            Mail::to('hamidabdulaziz36@gmail.com')->send(new ContactFormMail($formData));
            return redirect('/#contact')->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {
            return redirect('/#contact')
                ->with('error', 'Sorry, there was an error sending your message. Please try again later.')
                ->withInput();
        }
    }
}