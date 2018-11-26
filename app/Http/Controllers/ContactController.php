<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $contacts = \Auth::user()->contacts()->orderBy('updated_at', 'desc')->get();
        return view('contacts.index', compact('contacts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contact = new \App\Contact;
        $contact->name = $request->input('name');
        $contact->user_id = \Auth::id();
        $contact->type = $request->input('type');
        $contact->date = "carbon";
        // date = $request->input('date');
        $contact->start = "start";
        // $request->input('start');
        $contact->end = "end";
        // $request->input('end');
        $contact->comment = $request->input('comment');
        $contact->save();
        // $request->session()->flash('status', "A new list called <strong>{$list->name}</strong> was added!");
        return redirect('/home');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $contact = \App\Contact::find($id);
        return view('contacts.show', compact('contact'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $contact = \App\Contacts::find($id);
        return view('contacts.edit', compact('contact'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $contact = \App\Contact::find($id);
        $contact->delete();
        $contact->session()->flash('status', "The list called <strong>{$contact->date}</strong> was deleted.");
        return redirect('/contacts');
        //
    }

    public function confirmDelete($id)
    {
        $contact = \App\Contact::find($id);
        return view('contacts.confirmDelete', compact('contact'));
    }
}
