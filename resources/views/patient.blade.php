@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                    @endif
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Patient - {{ $patientInfo->name }}</h2>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <hr/>
                          <p>
                            <strong>Address:</strong> {{ $patientInfo->address }} <br>
                            <strong>Date of birth:</strong> {{ $patientInfo->dob }} <br>
                            <strong>Gender:</strong> {{ $patientInfo->gender }} <br>
                            <strong>Weight:</strong> {{ $patientInfo->weight }} <br>
                            <strong>Height:</strong> {{ $patientInfo->height }} <br>
                            <strong>Marital Status:</strong> {{ $patientInfo->marital_status }} <br>
                            <strong>Family History:</strong> <br> {{ $patientInfo->family_history }}
                          </p>
                      </div>
                      <div class="col-md-6">
                        <hr/>
                          <p>
                            <strong>Doctors Name:</strong> {{ $patientInfo->doctor_name }} <br>
                            <strong>Doctor Address:</strong> {{ $patientInfo->doctor_address }} <br>
                            <strong>Doctor Number:</strong> {{ $patientInfo->doctor_number }} <br>
                             <strong>Smoker:</strong> {{ $patientInfo->smoker }} <br>
                            <strong>Drinker:</strong> {{ $patientInfo->drinker }} <br>
                            <strong>Medication:</strong> <br>{{ $patientInfo->medication }} <br>
                            <strong>Medical History:</strong> <br> {{ $patientInfo->medical_history }}
                          </p>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        @if(count($notes) > 0)
                        <h3>Notes</h3>
                        @else
                          
                        @endif
                        @foreach ($notes as $record)
                          <div class="note-wrp">
                            {{ $record->note }}
                            <div class="note-footer">
                              <ul>
                                <li>
                                  Added: {{ $record->created_at->format('l, j-M-Y H:i:s') }}
                                </li>
                                <li>
                                  Note added by: <span>{{ $record->user->name }}</span>
                                </li>
                              </ul>
                            </div>
                          </div>
                        @endforeach
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 new-note">
                        <h3>Create a new note</h3>
                        <div class="form-wrp">
                          <form class="add-note" action="{{ url('/new-note') }}" method="POST">
                            {!! csrf_field() !!}
                            <textarea name="note" rows="4" cols="80" class="text-area" placeholder="Write up any new notes for the patient here."></textarea> <br>
                            <input type="hidden" name="patient_id" value="{{ $patientInfo->id }}" />
                            <input type="submit" name="submit" value="Add note" class="pink-btn">
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
