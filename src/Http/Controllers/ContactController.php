<?php

namespace Trado006\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Trado006\Contact\Mail\ContactMailable;
use Trado006\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index () {
        return view("contact::ContactForm");
    }

    public function send (Request $request) {
        Contact::create($request->input());
        Mail::to(config("contact.admin_address_send_to"))->send(new ContactMailable($request->input()));
        return back();
    }
}
