<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Corsi;
use App\Http\Requests\StoreCorsiRequest;
use App\Http\Requests\UpdateCorsiRequest;
use Illuminate\Http\Request;

class CorsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $corsi = DB::table('corsis')->get();
            return view('corsi', ['corsi' => $corsi], ['user' => Auth::user()]);
        } else {
            return redirect()->route('login');
        }
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCorsiRequest $request)
    {
     
    }

    /**
     * Display the specified resource.
     */
    public function show(Corsi $corsi)
    {
        return view('dettagliocorso', ['corsi' => $corsi], ['user' => Auth::user()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Corsi $corsi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCorsiRequest $request, Corsi $corsi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $corso = Corsi::findOrFail($id); 
        $corso->delete();
    
        return redirect()->back()->with('success', 'Course deleted successfully.');
    }

    public function subscribe(Request $request)
    {
        $userId = auth()->id(); 
        $courseId = $request->input('course_id'); 

        
        $existingSubscription = \App\Models\Prenotazioni::where('users_id', $userId)
                                ->where('corsis_id', $courseId)
                                ->first();

        if ($existingSubscription) {
            return back()->with('error', 'You are already subscribed to this course.');
        }

        
        $subscription = new \App\Models\Prenotazioni;
        $subscription->users_id = $userId;
        $subscription->corsis_id = $courseId;
        $subscription->save();

        return redirect()->route('prenotazioni.index')->with('success', 'Subscription successful.');
    }

}
