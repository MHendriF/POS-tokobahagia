@extends('layouts.blank')

@section('title')
    Gentellela Alela! | Add Transaction
@endsection

@push('stylesheets')
    <!-- Select2 -->
    <link href="{{ asset("assets/select2/dist/css/select2.min.css") }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset("assets/bootstrap-daterangepicker/daterangepicker.css") }}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{ asset("assets/pnotify/dist/pnotify.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/pnotify/dist/pnotify.buttons.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/pnotify/dist/pnotify.nonblock.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet">  
@endpush

@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Transaction</h3>
                </div>

                <div class="title_right">
                   
                </div>
            </div>
        </div class="clearfix">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Form Add Transaction <small>sub title</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form method="post" action="{{ url('transaction') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            {!! csrf_field() !!}

                            <input type="hidden" name="user_id" class="form-control" value='{{ Sentinel::getUser()->id }}'>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Transaction Code <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select id="product_id" required="required" name="trans_desc_id" class="select2_single form-control" tabindex="-1">
                                      <option></option>
                                      @foreach($data2 as $code)
                                          <option value='{{ $code->id}}'> {{ $code->code }}</option>
                                      @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Product <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select id="product_id" required="required" name="product_id" class="priceproduct select2_single form-control" tabindex="-1">
                                      <option></option>
                                      @foreach($data as $product)
                                          <option value='{{ $product->id}}'> {{ $product->product_name }}</option>
                                      @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                   <textarea required="required" class="form-control" name="description" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                    data-parsley-validation-threshold="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Date <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="single_cal3" type="text" name="transaction_date" required="required" class="form-control col-md-7 col-xs-12" placeholder="Date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Unit Order <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="number" name="unit_order" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Quantity Out <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="number" name="quantity_out" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Note <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <textarea id="product_desc" required="required" class="form-control" name="note" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                    data-parsley-validation-threshold="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Price <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="number" name="cost_price" required="required" class="form-control col-md-7 col-xs-12" placeholder="Rp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Price Reference <span class="required">*</span>
                                </label>
                                <div class="prod_price col-md-6 col-sm-6 col-xs-12">
                                  <input id="tes_price" type="text" readonly="readonly" class="form-control col-md-7 col-xs-12" placeholder="Read only input">
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

    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset("assets/moment/min/moment.min.js") }}"></script>
    <script src="{{ asset("assets/bootstrap-daterangepicker/daterangepicker.js") }}"></script>
    <!-- Switchery -->
    <script src="{{ asset("assets/switchery/dist/switchery.min.js") }}"></script>
    <!-- Select2 -->
    <script src="{{ asset("assets/select2/dist/js/select2.full.min.js") }}"></script>
    <!-- Parsley -->
    <script src="{{ asset("assets/parsleyjs/dist/parsley.min.js") }}"></script>
    <script src="{{ asset("js/jquery.upload_preview.min.js") }}"></script>
     <!-- PNotify -->
    <script src="{{ asset("assets/pnotify/dist/pnotify.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.nonblock.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <link href="{{ asset("build/css/action-icon.css") }}" rel="stylesheet"> 
    <script src="{{ asset("build/js/custom.min.js") }}"></script>

    <!-- Include Scripts -->
    @include('javascript.select2')
    @include('javascript.pnotify')
    @include('javascript.datepicker')

    <script>
        $(document).ready(function(){

            $(document).on('change','.priceproduct',function () {
                var prod_id=$(this).val();

                var a=$(this).parent();
                console.log(prod_id);
                var op="";
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findPrice')!!}',
                    data:{'id':prod_id},
                    dataType:'json',//return data will be json
                    success:function(data){
                        console.log("unit_price");
                        console.log(data.unit_price);
                        $("#tes_price").val(data.unit_price); //parsing price to view

                    },
                    error:function(){

                    }
                });
            });

        });
    </script>
    
    @endpush
@endsection