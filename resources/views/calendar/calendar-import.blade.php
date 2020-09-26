@extends('layouts.master')
@section('title')
@lang('translation.Calendar')
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
    <style>
      .add-calendar-button{
        float:right;
      }
    </style>
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Apps @endslot
    @slot('title') Calendar Import @endslot
@endcomponent
    <div class="row">
      <div class="col-lg-12">
      
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Calendar Import Table<button class="btn font-16 btn-primary add-calendar-button" data-toggle="modal" data-target="#importModal">Add</button></h4>
            
            <div class="table-responsive">
              <table class="table mb-0">

                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>URL</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($calendars as $calendar)
                  <tr>
                    <td>{{$index++}}</td>
                    <td>{{$calendar->name}}</td>
                    <td>{{$calendar->url}}</td>
                    <td><form method="post" action="{{ route('calendars.destroy', $calendar->id) }}">
                        <a class="btn btn-info btn-fab btn-fab-mini btn-round" data-toggle="tooltip" href="{{ route('calendars.edit', $calendar->id)}}" data-placement="top" title="edit">
                          <i class="mdi mdi-square-edit-outline"></i>
                        </a> 
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-danger btn-fab btn-fab-mini btn-round"  onclick="confirm('{{ __(' Are you sure you want to delete?') }}') ? this.parentElement.submit() : ''">
                          <i class="mdi mdi-cart-remove"></i>
                        </a>
                        </form> </td>
                  <tr>
                @endforeach
                  
              </table>
            </div>

          </div>
        </div>
      </div>
      
      <!-- Add New Event MODAL -->
      <div class="modal fade" id="importModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">&times;</button>
                <h5 class="modal-title" id="modal-title">Calendar Import</h5>
            </div>
            <div class="modal-body p-4">
                <form class="needs-validation" name="event-form" id="form-event" action="{{ route('calendars.store') }}" method = "POST" novalidate>
                @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input class="form-control" placeholder="Insert Name"
                                    type="text" name="name" id="event-title" required value="" />
                                <div class="invalid-feedback">Please provide a valid Name</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">URL</label>
                                <input class="form-control" placeholder="Insert URL"
                                    type="text" name="url" id="event-title" required value="" />
                                <div class="invalid-feedback">Please provide a valid URL</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 text-right">
                            <button type="button" class="btn btn-light mr-1" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                        </div>
                    </div>
                </form>
            </div>
          </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
      </div>
      <!-- end modal-->
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