@extends('layouts.master')
@section('title')
@lang('translation.Basic_Elements')
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Forms @endslot
    @slot('title') Basic Elements @endslot
@endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Textual inputs</h4>
                    <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to each
                        textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Text</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Search</label>
                        <div class="col-md-10">
                            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
                        <div class="col-md-10">
                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                        <div class="col-md-10">
                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" value="hunter2" id="example-password-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="42" id="example-number-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and time</label>
                        <div class="col-md-10">
                            <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00" id="example-datetime-local-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-month-input" class="col-md-2 col-form-label">Month</label>
                        <div class="col-md-10">
                            <input class="form-control" type="month" value="2019-08" id="example-month-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-week-input" class="col-md-2 col-form-label">Week</label>
                        <div class="col-md-10">
                            <input class="form-control" type="week" value="2019-W33" id="example-week-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-time-input" class="col-md-2 col-form-label">Time</label>
                        <div class="col-md-10">
                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-color-input" class="col-md-2 col-form-label">Color</label>
                        <div class="col-md-10">
                            <input class="form-control" type="color" value="#5b8ce8" id="example-color-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Select</label>
                        <div class="col-md-10">
                            <select class="form-control">
                                <option>Select</option>
                                <option>Large select</option>
                                <option>Small select</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Custom Select</label>
                        <div class="col-md-10">
                            <select class="custom-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label for="formControlRange" class="col-md-2 col-form-label">Range Inputs</label>
                        <div class="col-md-10 align-self-center">
                            <input type="range" class="form-control-range" id="formControlRange">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form layouts</h4>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary mr-1"></i> Form groups</h5>
                                <form>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="formrow-firstname-input">First name</label>
                                            <input type="text" class="form-control" id="formrow-firstname-input">
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="formrow-firstname-input">Last name</label>
                                            <input type="text" class="form-control" id="formrow-firstname-input">
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group col-md-6">
                                                <label for="formrow-email-input">Email</label>
                                                <input type="email" class="form-control" id="formrow-email-input" value="{{$user->email}}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="formrow-password-input">Old Password</label>
                                            <input type="password" class="form-control" id="formrow-password-input">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="formrow-password-input">New Password</label>
                                            <input type="password" class="form-control" id="formrow-password-input">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="formrow-password-input">Confirm Password</label>
                                            <input type="password" class="form-control" id="formrow-password-input">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="formrow-customCheck">
                                            <label class="custom-control-label" for="formrow-customCheck">Check me out</label>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Form Layout -->

    
    
@endsection