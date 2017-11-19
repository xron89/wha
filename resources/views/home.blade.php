@extends('layouts.app')

@section('content')
<div class="container patient-list">
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
                      <div class="col-md-8">
                        <h2>Patient overview</h2>
                      </div>
                      <div class="col-md-4">
                        <a href="{{ url('register-patient') }}" class="pink-btn add-patient"><i class="fa fa-user-md" aria-hidden="true"></i> Register New Patient</a>
                      </div>
                      <div class="col-md-12">
                        <hr>
                        @foreach ($patients as $patient)
                          <p>
                            <strong>
                              <a href="{{ url('patient/'. $patient->id) }}">
                                {{ $patient->name }}
                              </a>
                            </strong>
                            <br>
                            {{ $patient->address }}
                          </p>
                          <hr>
                        @endforeach
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
