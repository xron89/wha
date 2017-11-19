<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Patients;
use App\Notes;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

      $patients = Patients::orderBy('name')->get();

      return view('home')->with('patients', $patients);

    }

    public function search()
    {
        return view('search');
    }

    public function patient($id)
    {

      $patientInfo = Patients::where('id', $id)->firstOrFail();

      $notes = Notes::where('patients_id', $id)->get();

      return view('patient')
      ->with('patientInfo', $patientInfo)
      ->with('notes', $notes);
    }

    public function postSearch(Request $request)
    {

      $search = $request->input('search');

      $searchResults = Patients::where('name', 'LIKE', '%'.$search.'%')->get();

      return view('search')->with('searchResults', $searchResults);
    }

    public function postNote(Request $request)
    {

      $id = $request->input('patient_id');
      $newNote = $request->input('note');
      $pharmacist = Auth::user()->id;

      $note = new Notes;

      $note->note = $newNote;
      $note->user_id = $pharmacist;
      $note->patients_id = $id;

      $note->save();


      return redirect()->route('patient', ['id' => $id]);
    }


    public function registerPatient(){

      return view('new-patient');
    }

    public function postPatient(Request $request){

      $patients = Patients::orderBy('name')->get();


      $patient = new Patients;

      $patient->name = $request->input('full-name');
      $patient->address = $request->input('address');
      $patient->dob = $request->input('dob');
      $patient->weight = $request->input('weight');
      $patient->height = $request->input('height');
      $patient->gender = $request->input('gender');
      $patient->marital_status = $request->input('marital-status');
      $patient->family_history = $request->input('family-history');
      $patient->doctor_name = $request->input('doctor-name');
      $patient->doctor_address = $request->input('doctor-address');
      $patient->doctor_number = $request->input('doctor-number');
      $patient->medication = $request->input('medication');
      $patient->smoker = $request->input('smoker');
      $patient->drinker = $request->input('drinker');
      $patient->medical_history = $request->input('medical-history');

      $patient->save();

      return redirect()->route('home');

    }    

}
