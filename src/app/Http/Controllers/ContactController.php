<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $tests = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', ['group' => $tests]);
    }

    public function store(COntactRequest $request)
    {
        $tests = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($tests);
        return view('thanks');
    }
}