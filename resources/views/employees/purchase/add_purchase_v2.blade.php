@extends('layouts.blank')

@section('title')
    Toko Bahagia | Add Purchase
@endsection


@push('stylesheets')
    <!-- Select2 -->
    <link href="{{ asset("assets/select2/dist/css/select2.min.css") }}" rel="stylesheet">
    <!-- Animate -->
    <link href="{{ asset("assets/animate.css/animate.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- Pnotify -->
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
            <div class="page-title">
              <div class="title_left">
                <h3>Add Purchase</h3> 
              </div>

              <div class="title_right">
                <div class="pull-right">
                    <section class="content-header">
                      <ol class="breadcrumb">
                      <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
                      <li><a href="{{ url('purchase') }}">Purchase</a></li>
                      <li class="active">Add</li>
                    </ol>  
                    </section>
                  </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Purchase </h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
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
                    
                    <form  method="post" action="{{ url('purchase') }}" data-parsley-validate name="add_name" id="add_name" class="form-horizontal form-label-left calculate">  
                    {!! csrf_field() !!}

                      
                        <input type="hidden" name="user_id" class="form-control" value='{{ Sentinel::getUser()->id }}'>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Purchase Code <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="purchase_no" class="form-control col-md-7 col-xs-12" required/>
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Supplier <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select name="supplier_id" class="select2_single form-control" tabindex="-1" required>
                                <option></option>
                                @foreach($data as $supplier)
                                    <option value='{{ $supplier->id }}'> {{ $supplier->supplier_name }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Shipping Methode <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select name="shipping_id" class="select2_single form-control" tabindex="-1" required>
                                <option></option>
                                @foreach($data2 as $shipping)
                                    <option value='{{ $shipping->id }}'> {{ $shipping->method }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Purchase Date <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx">
                            <input type="text" name="purchase_date" class="form-control" id="single_cal1" placeholder="Date" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Promised Date <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx">
                            <input type="text" name="promised_date" class="form-control" id="single_cal3" placeholder="Date" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Shipping Date <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx">
                            <input type="text" name="shipping_date" class="form-control" id="single_cal4" placeholder="Date" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Freight Charge <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="number" name="freight_charge" data-cell="A5" value="0" class="form-control col-md-7 col-xs-12" required/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Purchase Description <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                             <textarea required class="form-control" name="po_description" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                          </div>
                        </div>

                        <h2>Purchase Details</h2>
                        <div class="ln_solid"></div>
                     
                      
                      <div class="form-group">
                        <div class="table-responsive">  
                          <table class="table table-bordered" id="dynamic_field">
                              <thead>  
                                <tr>
                                  <th>No</th>
                                  <th>Product</th>
                                  <th>Quantity</th>
                                  <th>Price Per Unit</th>
                                  <th>Discount</th>
                                  <th>Price Total</th>
                                  {{-- <th>Action</th> --}}
                                </tr>
                              </thead>
                              <tbody>
                                <tr>  
                                  <td><input type="text" name="number[]" placeholder="No" value="1" class="form-control name_list" style="width: 60px;" required/></td>
                                  <td>
                                    <select id="product_id" name="product_id[]" class="select form-control" tabindex="-1" style="width: 147px;" required>
                                      <option></option>
                                      @foreach($data3 as $product)
                                          <option value='{{ $product->id}}'> {{ $product->product_name }}</option>
                                       @endforeach
                                    </select>
                                  </td>
                                  <td><input type="number" name="quantity[]" data-cell="A1" placeholder="Piece" class="form-control name_list" required/></td>
                                  <td><input type="number" name="price_per_unit[]" data-cell="A2" placeholder="Rp" class="form-control name_list" required/></td>
                                  <td><input type="number" name="discount[]" data-cell="A3" value="0" placeholder="Rp" class="form-control name_list" required/></td>
                                  <td><input type="number" name="price[]" data-cell="A4" data-formula="(A1*A2)-A3" placeholder="Rp" class="form-control name_list" required/></td>
                                  {{-- <td><button type="button" name="add" id="add" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button></td> --}} 
                                </tr>

                                <tr>  
                                  <td><input type="text" name="number[]" placeholder="No" class="form-control name_list" style="width: 60px;"/></td>
                                  <td>
                                    <select id="product_id" name="product_id[]" class="select form-control" tabindex="-1" style="width: 147px;">
                                      <option></option>
                                      @foreach($data3 as $product)
                                          <option value='{{ $product->id}}'> {{ $product->product_name }}</option>
                                      @endforeach
                                    </select>
                                  </td>
                                  <td><input type="number" name="quantity[]" data-cell="B1" placeholder="Piece" class="form-control name_list" /></td>
                                  <td><input type="number" name="price_per_unit[]" data-cell="B2" placeholder="Rp" class="form-control name_list" /></td>
                                  <td><input type="number" name="discount[]" data-cell="B3" value="0" placeholder="Rp" class="form-control name_list" /></td>
                                  <td><input type="number" name="price[]" data-cell="B4" data-formula="(B1*B2)-B3" placeholder="Rp" class="form-control name_list" /></td>
                                </tr>

                                <tr>  
                                  <td><input type="text" name="number[]" placeholder="No" class="form-control name_list" style="width: 60px;"/></td>
                                  <td>
                                    <select id="product_id" name="product_id[]" class="select form-control" tabindex="-1" style="width: 147px;">
                                      <option></option>
                                      @foreach($data3 as $product)
                                          <option value='{{ $product->id}}'> {{ $product->product_name }}</option>
                                      @endforeach
                                    </select>
                                  </td>
                                  <td><input type="number" name="quantity[]" data-cell="C1" placeholder="Piece" class="form-control name_list" /></td>
                                  <td><input type="number" name="price_per_unit[]" data-cell="C2" placeholder="Rp" class="form-control name_list" /></td>
                                  <td><input type="number" name="discount[]" data-cell="C3" value="0" placeholder="Rp" class="form-control name_list" /></td>
                                  <td><input type="number" name="price[]" data-cell="C4" data-formula="(C1*C2)-C3" placeholder="Rp" class="form-control name_list" /></td>
                                </tr>

                                <tr>  
                                  <td><input type="text" name="number[]" placeholder="No" class="form-control name_list" style="width: 60px;"/></td>
                                  <td>
                                    <select id="product_id" name="product_id[]" class="select form-control" tabindex="-1" style="width: 147px;">
                                      <option></option>
                                      @foreach($data3 as $product)
                                          <option value='{{ $product->id}}'> {{ $product->product_name }}</option>
                                      @endforeach
                                    </select>
                                  </td>
                                  <td><input type="number" name="quantity[]" data-cell="D1" placeholder="Piece" class="form-control name_list" /></td>
                                  <td><input type="number" name="price_per_unit[]" data-cell="D2" placeholder="Rp" class="form-control name_list" /></td>
                                  <td><input type="number" name="discount[]" data-cell="D3" value="0" placeholder="Rp" class="form-control name_list" /></td>
                                  <td><input type="number" name="price[]" data-cell="D4" data-formula="(D1*D2)-D3" placeholder="Rp" class="form-control name_list" /></td>
                                </tr>

                                <tr>  
                                  <td><input type="text" name="number[]" placeholder="No" class="form-control name_list" style="width: 60px;"/></td>
                                  <td>
                                    <select id="product_id" name="product_id[]" class="select form-control" tabindex="-1" style="width: 147px;">
                                      <option></option>
                                      @foreach($data3 as $product)
                                          <option value='{{ $product->id}}'> {{ $product->product_name }}</option>
                                      @endforeach
                                    </select>
                                  </td>
                                  <td><input type="number" name="quantity[]" data-cell="E1" placeholder="Piece" class="form-control name_list" /></td>
                                  <td><input type="number" name="price_per_unit[]" data-cell="E2" placeholder="Rp" class="form-control name_list" /></td>
                                  <td><input type="number" name="discount[]" data-cell="E3" value="0" placeholder="Rp" class="form-control name_list" /></td>
                                  <td><input type="number" name="price[]" data-cell="E4" data-formula="(E1*E2)-E3" placeholder="Rp" class="form-control name_list" /></td>
                                </tr>
                              </tbody>  
                          </table>  

                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Freight Charge <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" data-cell="A10" data-formula="A5" class="form-control col-md-7 col-xs-12" readonly />
                              </div>
                            </div>    
                          </div>  
                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Keseluruhan <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="price_total" data-cell="F4" data-formula="(A4+B4+C4+D4+E4)+A10" class="form-control col-md-7 col-xs-12" readonly />
                              </div>
                            </div>    
                          </div>  

                          <button id="send" type="submit" class="pull-right btn btn-success">Submit</button> 
                        </div>  
                          
                      </div>

                        
                     </form>  
                  </div>

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

    <!-- Calculator -->
    <script src="{{ asset("assets/calculator/jquery-calx-2.2.7.min.js") }}"></script>

    <!-- Select2 -->
    <script src="{{ asset("assets/select2/dist/js/select2.full.min.js") }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset("assets/moment/min/moment.min.js") }}"></script>
    <script src="{{ asset("assets/bootstrap-daterangepicker/daterangepicker.js") }}"></script>

    <!-- Parsley -->
    <script src="{{ asset("assets/parsleyjs/dist/parsley.min.js")}}"></script>
    <!-- PNotify -->
    <script src="{{ asset("assets/pnotify/dist/pnotify.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.animate.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.nonblock.js") }}"></script>
    <!-- Sweetalert -->
    <script src="{{ asset("js/sweetalert2/sweetalert2.min.js") }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min2.js") }}"></script>

    <!-- Include Scripts -->
    @include('javascript.pnotify')
    @include('javascript.validator')
    @include('javascript.select2')

     <script type="text/javascript">
     $('#single_cal1').daterangepicker({
          singleDatePicker: true,
          locale: {
            format: 'DD/MM/YYYY'
          }
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
      });
     $('#single_cal2').daterangepicker({
          singleDatePicker: true,
          locale: {
            format: 'DD/MM/YYYY'
          }
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
      });
     $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          locale: {
            format: 'DD/MM/YYYY'
          }
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
      });
     $('#single_cal4').daterangepicker({
          singleDatePicker: true,
          locale: {
            format: 'DD/MM/YYYY'
          }
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
      });
    </script>

    <script>
        $('.calculate').calx();
    </script>
    
    <script>  
       $(document).ready(function(){  
            var i=1;
            var o=1;  
            $('#add').click(function(){  
                 i++;
                 o++;

                $('#dynamic_field').append('<tr class="calculate" id="row'+i+'"><td><input type="text" name="no[]" value="'+i+'" class="form-control name_list" style="width: 60px;"/></td><td><select id="product_id" required name="product_id[]" class="select form-control" tabindex="-1" style="width: 147px;"><option>1</option><option>2</option></select></td><td><input type="number" name="quantity[]" data-cell="B1" placeholder="Piece" class="form-control name_list" /></td><td><input type="number" name="price_per_unit[]" data-cell="B2" placeholder="Rp" class="form-control name_list" /></td><td><input type="number" name="discount[]" data-cell="B3" value="0" placeholder="Rp" class="form-control name_list" /></td><td><input type="number" name="price_total[]" data-cell="B4" data-formula="(B1*B2)-B3" placeholder="Rp" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="glyphicon glyphicon-remove"></i></button></td></tr>');  

 
            });  
            $(document).on('click', '.btn_remove', function(){  
                 var button_id = $(this).attr("id");   
                 $('#row'+button_id+'').remove();  
            });  
            // $('#submit').click(function(){            
            //      $.ajax({  
            //           url:"tes",  
            //           method:"POST",  
            //           data:$('#add_name').serialize(),  
            //           success:function(data)  
            //           {  
            //                alert(data);  
            //                $('#add_name')[0].reset();  
            //           }  
            //      });  
            // });  
       });  
    </script>

    @endpush

@endsection