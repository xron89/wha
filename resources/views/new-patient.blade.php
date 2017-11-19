@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <h2><i class="fa fa-heartbeat" aria-hidden="true"></i> Register a new patient</h2>
                      <hr>
                    </div>
                  </div>
                  <div class="row">
                    <form class="reg-form" action="{{ url('/new-patient') }}" method="POST">
                      {!! csrf_field() !!}
                      <div class="col-md-6">
                        <h3>Personal Information</h3>
                        <div class="field-wrp">
                          <label>Full name</label>
                          <input type="text" name="full-name" value="" placeholder="John Doe" />
                        </div>
                        <div class="field-wrp">
                          <label>Address</label>
                          <input type="text" name="address" value="" placeholder="13 Fox Lane, Bristol, BR13 2ND" />
                        </div>
                        <div class="field-wrp">
                          <label>Date of birth</label>
                          <input type="date" name="dob" value="">
                        </div>
                        <div class="field-wrp">
                          <label>Weight</label>
                          <input type="text" name="weight" value="" placeholder="78Kg" />
                        </div>
                        <div class="field-wrp">
                          <label>Height</label>
                          <input type="text" name="height" value="" placeholder="6ft 2" />
                        </div>                        
                        <div class="field-wrp">
                          <label>Gender</label>
                          <select name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                          </select>
                        </div>
                        <div class="field-wrp">
                          <label>Marital status</label>
                          <input type="text" name="marital-status" value="" placeholder="Single">
                        </div>      
                        <div class="field-group">
                          <label for="">Family History</label> <br>
                          <textarea name="family-history" id="" cols="50" rows="4" placeholder="Enter any notes regarding family history here"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h3>Medical</h3>
                        <div class="field-wrp">
                          <label>Doctor name</label>
                          <input type="text" name="doctor-name" value="" placeholder="Dr Farhan">
                        </div>
                        <div class="field-wrp">
                          <label>Doctor address</label>
                          <input type="text" name="doctor-address" value="" placeholder="Bentley St, Cleethorpes, DN35 9JF">
                        </div>
                        <div class="field-wrp">
                          <label>Doctor contact number</label>
                          <input type="text" name="doctor-number" value="" placeholder="01290 34487">
                        </div>
                        <div class="field-group">
                          <label for="">Prescribed Medication</label> <br>
                          <textarea name="medication" id="" cols="50" rows="4" placeholder="Enter any prescribed medication here"></textarea>
                        </div>
                        <div class="field-wrp">
                          <label>Smoker</label>
                          <input type="text" name="smoker" value="" placeholder="Never">
                        </div>
                        <div class="field-wrp">
                          <label>Drinker</label>
                          <input type="text" name="drinker" value="" placeholder="Occasionally">
                        </div>                        
                        <div class="field-group">
                          <label for="">Medical History</label> <br>
                          <textarea name="medical-history" id="" cols="50" rows="4" placeholder="Enter the patients medical history here"></textarea>
                        </div>                        
                      </div>
                      <div class="col-md-12">
                        <input type="submit" name="submit" value="Register Patient" class="pink-btn">
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
