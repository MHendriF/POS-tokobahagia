@extends('layouts.blank')

@section('title')
    Toko Bahagia | Edit Supplier
@endsection

@push('stylesheets')
        <!-- Animate -->
        <link href="{{ asset("assets/animate.css/animate.min.css")}}" rel="stylesheet" type="text/css"/>
        <!-- PNotify -->
        <link href="{{ asset("assets/pnotify/dist/pnotify.css") }}" rel="stylesheet">
        <link href="{{ asset("assets/pnotify/dist/pnotify.buttons.css") }}" rel="stylesheet">
        <link href="{{ asset("assets/pnotify/dist/pnotify.nonblock.css") }}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset("build/css/action-icon.css") }}" rel="stylesheet"> 
        <link href="{{ asset("build/css/custom.min2.css") }}" rel="stylesheet"> 
@endpush

@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
        
        <section class="page-title">
            <div class="title_left">
              <h3>Edit Supplier</h3>
            </div>
            <div class="title_right">
              <div class="pull-right">
                <section class="content-header">
                  <ol class="breadcrumb">
                  <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
                  <li><a href="{{ url('supplier') }}">Supplier</a></li>
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
                      <h2>Form Edit Supplier</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form method="post" action="{{ url('supplier/'.$data->id) }}" class="form-horizontal form-label-left" data-parsley-validate>
                            <input type="hidden" name="_methode" value="PUT">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Supplier name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="supplier_name" value="{{$data->supplier_name}}" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Contact title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="contact_title" value="{{$data->contact_title}}" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Contact name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="contact_name" value="{{$data->contact_name}}" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Phone <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="phone" value="{{$data->phone}}" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Fax <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="fax" value="{{$data->fax}}" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Email <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="email" name="email" value="{{$data->email}}" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Address <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                   <textarea class="form-control" name="address" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 caracters long comment.."
                                    data-parsley-validation-threshold="10" required>{{$data->address}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Postal code <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="postal_code" value="{{$data->postal_code}}" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >City <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="city" value="{{$data->city}}" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Province/State <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="province" value="{{$data->province}}" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Country <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="country" value="{{$data->country}}" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                  <button type="reset" class="btn btn-primary">Cancel</button>
                                  <button id="send" type="submit" class="btn btn-success">Submit</button>
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
    <script src="{{ asset("assets/parsleyjs/dist/parsley.min.js")}}"></script>
    <!-- PNotify -->
    <script src="{{ asset("assets/pnotify/dist/pnotify.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.animate.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.nonblock.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min2.js") }}"></script>

    <!-- Include Scripts -->
    @include('javascript.pnotify')

    @endpush
@endsection