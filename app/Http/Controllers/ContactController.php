<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $feedbacks = Contact::paginate(10)->withQueryString();
        return view('contacts.index',compact('feedbacks'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'Feedback deleted successfully!');
    }
}
