<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
      $tz= 'America/Kentucky/Louisville';

      $year = $request->input('date_year');
      $month = $request->input('date_month');
      $day = $request->input('date_day');
      $dt = Carbon::createFromDate($year, $month, $day);


      $starthour = $request->input('start_hour');
      $startminute = $request->input('start_minute');
      $startseconds = "00";
      $startam = $request->input('start_am_or_pm');
      $starttime = Carbon::createFromTime($starthour, $startminute, $startseconds, $tz, $startam);


      $endhour = $request->input('end_hour');
      $endminute = $request->input('end_minute');
      $endseconds = "00";
      $endam = $request->input('end_am_or_pm');
      $endtime = Carbon::createFromTime($endhour, $endminute, $endseconds, $tz, $endam);

        $contact = new \App\Contact;
        $contact->name = $request->input('name');
        $contact->client_id = $request->input('client_id');
        $contact->user_id = \Auth::id();
        $contact->type = $request->input('type');
        $contact->date = $dt;
        $contact->start = $starttime;
        $contact->end = $endtime;
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
