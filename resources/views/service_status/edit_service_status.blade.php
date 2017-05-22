@extends('layouts.blank')

@section('title')
    Gentellela Alela! | Edit Service Status
@endsection

@push('stylesheets')
    <!-- PNotify -->
    <link href="{{ asset("css/pnotify/pnotify.css") }}" rel="stylesheet">
    <link href="{{ asset("css/pnotify/pnotify.buttons.css") }}" rel="stylesheet">
    <link href="{{ asset("css/pnotify/pnotify.nonblock.css") }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet"> 
@endpush

@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            
            <section class="page-title">
                <div class="title_left">
                  <h3>Edit Service Status</h3>
                </div>
                <div class="title_right">
                  <div class="pull-right">
                    <section class="content-header">
                      <ol class="breadcrumb">
                      <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a></li>
                      <li><a href="{{ url('service_status') }}">Service Status</a></li>
                      <li class="active">Edit</li>
                    </ol>  
                    </section>
                  </div>
                </div>
            </section>

        </div class="clearfix">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Form Edit Location</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form method="post" action="{{ url('service_status/'.$data->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <input type="hidden" name="_methode" value="PUT">
                            {!! csrf_field() !!}
                            
                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Service Status<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="status" value="{{$data->status}}" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>
                              
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    @include('includes.footer')
    <!-- /footer content -->

    @push('scripts')

    <!-- Parsley -->
    <script src="{{ asset("vendors/parsleyjs/dist/parsley.min2.js") }}"></script>
    <!-- PNotify -->
    <script src="{{ asset("js/pnotify/pnotify.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.nonblock.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min.js") }}"></script>

    <!-- Include Scripts -->
    @include('javascript.pnotify')
    @include('javascript.validator')

    @endpush
@endsection