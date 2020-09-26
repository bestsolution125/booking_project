@extends('layouts.master')
@section('title')
@lang('translation.Calendar')
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />>
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Apps @endslot
    @slot('title') Calendar Import Update @endslot
@endcomponent
    <div class="row">
      <div class="col-lg-12">
      
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Calendar Import Update</h4>
            
            <form class="needs-validation" name="event-form" id="form-event" action="{{ route('calendars.update', $calendar->id) }}" method = "POST" novalidate>
            @method('PUT') 
            @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control" placeholder="Insert Name"
                                type="text" name="name" id="event-title" required value="{{$calendar->name}}" />
                            <div class="invalid-feedback">Please provide a valid Name</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">URL</label>
                            <input class="form-control" placeholder="Insert URL"
                                type="text" name="url" id="event-title" required value="{{$calendar->url}}" />
                            <div class="invalid-feedback">Please provide a valid URL</div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 text-right">
                        <button type="button" class="btn btn-light mr-1" data-dismiss="modal"><a href="{{ route('calendars.index') }}">Back</a></button>
                        <button type="submit" class="btn btn-success" id="btn-save-event">Update</button>
                    </div>
                </div>
            </form>

          </div>
        </div>
      </div>
    </div>
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('assets/libs/moment/moment.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/jquery-ui-dist/jquery-ui-dist.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/fullcalendar/fullcalendar.min.js')}}"></script>

    <!-- Calendar init -->
    <!-- <script src="{{ URL::asset('assets/js/pages/calendar.init.js')}}"></script> -->
@endsection