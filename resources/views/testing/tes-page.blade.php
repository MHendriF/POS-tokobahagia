@extends('layouts.blank')

@section('title')
	Toko Bahagia | Home
@endsection
@section('contentheader_title')
  	Test
@endsection
@section('contentheader_description')
  	Dasboard
@endsection


@push('stylesheets')

     <!-- PNotify -->
    <link href="{{asset("vendors/pnotify/dist/pnotify.css")}}" rel="stylesheet">
    <link href="{{asset("vendors/pnotify/dist/pnotify.buttons.css")}}" rel="stylesheet">
    <link href="{{asset("vendors/pnotify/dist/pnotify.nonblock.css")}}" rel="stylesheet">

    <link href="{{ asset("build/datetimepicker/css/bootstrap-datetimepicker.min.css") }}" rel="stylesheet"/>
    <!-- Select2 -->
    <link href="{{ asset("assets/select2/dist/css/select2.min.css") }}" rel="stylesheet">

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
                <h3>Tes Page</h3> 
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Select Date : </h2>
                    <form method="post" action="{{ url('find') }}">
                        {!! csrf_field() !!} 
                        {{-- <div id="reportrange_right" class="pull-left" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; margin-left: 13px;">
                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                          <span></span> <b class="caret"></b>
                        </div> --}}
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker10'>
                                    <input type='text' name="reportdate" class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar">
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                          <button type="submit" class="btn btn-success">Submit</button>
                    </form>

                    
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
                    
                    {{-- <div id="box">
                      <form method="post" action="{{ url('tes') }}" class="form-horizontal form-label-left" data-parsley-validate>
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Location <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="location" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                  <button id="add" class="btn btn-primary">Add Fiels</button>
                                  <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div> --}}


                      <div class="form-group">  
                           <form  method="post" action="{{ url('tes') }}" name="add_name" id="add_name" class="calculate">  
                           {!! csrf_field() !!}
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
                                            <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>  
                                            <td><input type="text" name="no[]" placeholder="No" value="1" class="form-control name_list" style="width: 60px;"/></td>
                                            <td>
                                              <select id="product_id" required name="product_id[]" class="select form-control" tabindex="-1" style="width: 147px;">
                                                <option></option>
                                                @foreach($data as $product)
                                                    <option value='{{ $product->id}}'> {{ $product->product_name }}</option>
                                                @endforeach
                                              </select>
                                            </td>
                                            <td><input type="number" name="quantity[]" data-cell="A1" placeholder="Piece" class="form-control name_list" /></td>
                                            <td><input type="number" name="price_per_unit[]" data-cell="A2" placeholder="Rp" class="form-control name_list" /></td>
                                            <td><input type="number" name="discount[]" data-cell="A3" value="0" placeholder="Rp" class="form-control name_list" /></td>
                                            <td><input type="number" name="price_total[]" data-cell="A4" data-formula="(A1*A2)-A3" placeholder="Rp" class="form-control name_list" /></td>
                                            <td><button type="button" name="add" id="add" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button></td> 
                                          </tr>

                                          <tr>  
                                            <td><input type="text" name="no[]" placeholder="No" value="1" class="form-control name_list" style="width: 60px;"/></td>
                                            <td>
                                              <select id="product_id" required name="product_id[]" class="select form-control" tabindex="-1" style="width: 147px;">
                                                <option></option>
                                                @foreach($data as $product)
                                                    <option value='{{ $product->id}}'> {{ $product->product_name }}</option>
                                                @endforeach
                                              </select>
                                            </td>
                                            <td><input type="number" name="quantity[]" data-cell="B1" placeholder="Piece" class="form-control name_list" /></td>
                                            <td><input type="number" name="price_per_unit[]" data-cell="B2" placeholder="Rp" class="form-control name_list" /></td>
                                            <td><input type="number" name="discount[]" data-cell="B3" value="0" placeholder="Rp" class="form-control name_list" /></td>
                                            <td><input type="number" name="price_total[]" data-cell="B4" data-formula="(B1*B2)-B3" placeholder="Rp" class="form-control name_list" /></td>
                                            <td><button type="button" name="add" id="add" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button></td> 
                                          </tr>
                                        </tbody>  
                                     </table>  
                                     {{-- <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  --}}
                                     <button id="send" type="submit" class="btn btn-success">Submit</button> 
                                </div>  
                           </form>  
                      </div>  
                    
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

	    <!-- PNotify -->
	    <script src="{{asset("vendors/pnotify/dist/pnotify.js")}}"></script>
	    <script src="{{asset("vendors/pnotify/dist/pnotify.buttons.js")}}"></script>
	    <script src="{{asset("vendors/pnotify/dist/pnotify.nonblock.js")}}"></script>
        <!-- Custom Theme Scripts -->

      <script src="{{ asset("js/newdaterangepicker/moment.min.js") }}"></script>
      <script src=" {{ asset("build/datetimepicker/js/bootstrap-datetimepicker.min.js") }}"></script>
        
      <script src="{{ asset("build/js/custom.min2.js") }}"></script>


      @include('javascript.select2')

      <script type="text/javascript">
	    $(function(){
	        new PNotify({
	            title: 'Regular Notice',
	            text: 'Check me out! I\'m a notice.',
	            delay: "2500",
	            nonblock: {
	                nonblock: true,
	                nonblock_opacity: .2
	            },
	            animate: {
	                animate: true,
	                in_class: 'bounceIn',
	                out_class: 'bounceOut'
	            }
	        });
	    });
	    </script>

        <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({
                viewMode: 'years',
                format: 'MM/YYYY'
            });
        });
    </script>

    
    <script>  
       $(document).ready(function(){  
            var i=1;
            var o=1;  
            $('#add').click(function(){  
                 i++;
                 o++;

                $('#dynamic_field').append('<tr class="calculate" id="row'+i+'"><td><input type="text" name="no[]" value="'+i+'" class="form-control name_list" style="width: 60px;"/></td><td><select id="product_id" required name="product_id[]" class="select form-control" tabindex="-1" style="width: 147px;"><option>1</option><option>2</option></select></td><td><input type="number" name="quantity[]" data-cell="B1" placeholder="Piece" class="form-control name_list" /></td><td><input type="number" name="price_per_unit[]" data-cell="B2" placeholder="Rp" class="form-control name_list" /></td><td><input type="number" name="discount[]" data-cell="B3" value="0" placeholder="Rp" class="form-control name_list" /></td><td><input type="number" name="price_total[]" data-cell="B4" data-formula="(B1*B2)-B3" placeholder="Rp" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="glyphicon glyphicon-remove"></i></button></td></tr>');  

                 // $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="No" class="form-control name_list" style="width: 60px;"/></td><td><select id="product_id" required name="product_id[]" class="select form-control" tabindex="-1" style="width: 147px;"><option>1</option></select></td><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="glyphicon glyphicon-remove"></i></button></td></tr>');

                 // $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="number" name="maksimal[]" placeholder="Maks...." class="form-control name_list" /></td><td><input type="text" name="message[]" placeholder="Pesan..." class="form-control name_list"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="glyphicon glyphicon-remove"></i></button></td></tr>');

                  // $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="no[]" placeholder="No" class="form-control name_list" style="width: 60px;"/></td><td><select id="product_id" required name="product_id[]" class="select form-control" tabindex="-1" style="width: 147px;"><option></option>@foreach($data as $product) <option value='{{ $product->id}}'> {{ $product->product_name }}</option>@endforeach</select></td><td><input type="number" name="quantity[]" data-cell="A1" placeholder="Piece" class="form-control name_list" /></td><td><input type="number" name="price_per_unit[]" data-cell="A2" placeholder="Rp" class="form-control name_list" /></td><td><input type="number" name="discount[]" data-cell="A3" value="0" placeholder="Rp" class="form-control name_list" /></td><td><input type="number" name="price_total[]" data-cell="A4" data-formula="(A1*A2)-A3" placeholder="Rp" class="form-control name_list" /></td><td><button type="button" name="add" id="add" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="glyphicon glyphicon-remove"></i></button></td></tr>');  
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

    <script>
        $('.calculate').calx();
    </script>

    @endpush

@endsection