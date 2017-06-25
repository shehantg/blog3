@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
           
               <h1>Create New Dontion</h1>

                <div>
                    <form novalidate="novalidate" class="form-horizontal" method="POST"  action="/campaign/{{$campaign->id}}/cpcreatedonation">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">amount Title</label>

                            <div class="col-md-12">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount-d" class="col-md-4 control-label">Amount</label>

                            <div class="col-md-12">
                                <input id="rank-section" type="text" class="form-control" name="amount" value="{{ old('amount') }}" required autofocus>

                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('program_scheme') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Program Scheme</label>

                            <div class="col-md-12">
                            <select class="form-control" id="type" name="program_scheme"  value="{{ old('program_scheme') }}" required>
                            


                           
    <option value="">-- select program --</option>
    <option value="deep_griha_academy">Deep Griha Academy</option>
    <option value="child_care">Child Care</option>
    <option value="other_educational_programs">Other Educational Programs</option>
    <option value="medical_care">Medical Care</option>
    <option value="hiv_aids">HIV/AIDS</option>
    <option value="social_economic_status_of_women">Social &amp; Economic Status of Women</option>
    <option value="city_of_child">City of Child</option>
    <option value="sponsor_a_child">Sponsor a Child</option>
    <option value="area_of_greatest_need">Area of Greatest Need</option>
    <option value="other_sponsorship_support">Other Sponsorship Support</option>
    <option value="neela_s_retirement">Neela's Retirement</option>



                            
                           
                          </select>

                               
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary" id="createAdventureButton">
                                    Create
                                </button>

                                 
                            </div>
                        </div>

                        </form>

                       

@endsection