<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use Illuminate\Support\Facades\Mail;

class formController extends Controller
{
   
    public function index()
    {
        return view('create');
        
    }

    public function create()
    {

    }
    
    public function store(Request $request)
    {

        $request-> validate([
            'FullName' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'UserName' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/', 'unique:forms'],
            'Address' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'Email' => ['required','email'],
            'Password' => ['required' , 'min:8','regex:/[a-zA-z]/','regex:/[0-9]/','regex:/[@$!%*#?&]/','required_with:RePassword','same:RePassword'],
        ]);

        $form = new form();
        $form->FullName = $request->input('FullName'); 
        $form->UserName = $request->input('UserName'); 
        $form->Address = $request->input('Address'); 
        $form->Email = $request->input('Email'); 
        $form->Password = $request->input('Password'); 
        $form->DOB = $request->input('DOB'); 

        $form->save();

        $mail_data = ['body' => "A new user $form->UserName is registered to the system"];  
        Mail::send('email', $mail_data, function($message)
        {
            $message->to('yaramuhammad762@gmail.com')->subject("New registered user");

        });
        

    return redirect()->route('success');

    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }
}
