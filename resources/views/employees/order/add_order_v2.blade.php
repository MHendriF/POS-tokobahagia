@extends('layouts.blank')

@section('title')
    Toko Bahagia | Add Order
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
    <!-- Sweetalert -->
    <link href="{{ asset("js/sweetalert2/sweetalert2.min.css") }}" rel="stylesheet">
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
                <h3>Add Order</h3> 
              </div>

              <div class="title_right">
                <div class="pull-right">
                    <section class="content-header">
                      <ol class="breadcrumb">
                      <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a></li>
                      <li><a href="{{ url('order') }}">Order</a></li>
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
                    <h2>Order </h2>
                    
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
                    
                    <form  method="post" action="{{ url('order') }}" data-parsley-validate name="add_name" id="add_name" class="form-horizontal form-label-left">  
                      {!! csrf_field() !!}

                        <input type="hidden" name="user_id" class="form-control" value='{{ Sentinel::getUser()->id }}'>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Order Code <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="order_code" value="{{$codes}}{{$inc}}" class="form-control col-md-7 col-xs-12" readonly/>
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Customer <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="gyr_ind" name="customer_id" class="select2_single form-control" required data-parsley-required-message="You must select at least one customer.">
                                <option></option>
                                @foreach($data as $customer)
                                    <option value='{{ $customer->id }}'> {{ $customer->contact_name }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Shipping Methode <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select name="shipping_id" class="select2_single form-control" required data-parsley-required-message="You must select at least one shipping methode.">
                                <option></option>
                                @foreach($data2 as $shipping)
                                    <option value='{{ $shipping->id }}'> {{ $shipping->method }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Shipping Date <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx">
                            <input type="text" name="shipping_date" class="form-control" id="single_cal1" placeholder="Date" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">No Po Customer <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="number" name="no_po_customer" class="form-control col-md-7 col-xs-12" required/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Order Description</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                             <textarea rows="4" class="form-control" name="description" data-parsley-trigger="keyup" data-parsley-maxlength="1500" ></textarea>
                          </div>
                        </div>

                        <h2>Order Details</h2>
                        <div class="ln_solid"></div>
                      
                        <div class="form-group">
                          <div class="table-responsive">  
                            <table class="table table-bordered" id="dynamic_field">
                                <thead>  
                                  <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price Per Unit</th>
                                    <th>Discount</th>
                                    <th>Amount</th>
                                    <th>Stock Available</th>
                                    <th>Price Reference</th>
                                    <th style="text-align: center;background: #eee"><a href="javascript:void(0);" class="btn btn-primary btn-xs addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <select name="product_id[]" class="select product_id form-control" style="width: 147px;" required>
                                        <option value="0" selected="true" disabled="true">Pilih Produk</option>
                                        @foreach($data3 as $key => $product)
                                            <option value='{{ $product->id}}'> {{ $product->product_name }}</option>
                                         @endforeach
                                      </select>
                                    </td>
                                    <td><input type="number" name="quantity[]" placeholder="Piece" class="form-control quantity" data-parsley-type="number" required/></td>
                                    <td><input type="number" name="price_per_unit[]" placeholder="Rp" class="form-control price_per_unit" data-parsley-type="number" required/></td>
                                    <td><input data-parsley-type="number" type="number" name="discount[]" placeholder="Rp" class="form-control discount" required/></td>
                                    <td><input data-parsley-type="number" type="number" name="price[]" placeholder="Rp" class="form-control amount" required/></td>
                                    <td><input type="number" id="find_stock" class="form-control stock" readonly /></td>
                                    <td><input type="number" id="find_price" class="form-control price_ref" readonly /></td>
                                    <td style="text-align: center;background: #eee" >
                                      <a href="javascript:void(0);" class="btn btn-danger btn-sm removeRow"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                  </tr>
                                </tbody>  
                                <tfoot>
                                  <tr>
                                       <td style="border: none;text-align: center;background: #eee"></td>
                                       <td style="border: none;text-align: center;background: #eee"></td>
                                       <td style="border: none;text-align: center;background: #eee"></td>
                                       <td style="border: none;text-align: center;background: #eee"></td>                                       
                                       <td style="border: none;text-align: center;background: #eee"></td>
                                       <td style="background: #eee"><b>Total Keseluruhan</b></td>
                                       <td style="background: #eee"><b class="total"></b></td>
                                       <td style="border: none;text-align: center;background: #eee"><input type="hidden" id="total_keseluruhan" name="price_total" class="form-control"/></td>
                                  </tr>
                                </tfoot>  
                            </table>
                          </div>
                            <button id="send" type="submit" class="pull-right btn btn-success">Submit</button> 
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

    <!-- Money -->
    <script src="{{ asset("js/accounting.js") }}"></script>
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
    </script>
  
    <script type="text/javascript">
        $('tbody').delegate('.product_id','change',function(){
            var tr = $(this).parent().parent();
            var id = tr.find('.product_id').val();
            var dataId = {'id':id};
            $.ajax({
                type : 'GET',
                url : '{!!URL::to('findPrice')!!}',
                dataType : 'json',
                data : dataId,
                success:function(data){
                    tr.find('.price_ref').val(data.cost_min);
                    tr.find('.stock').val(data.stock);
                    // console.log(data.cost_min);
                    //console.log("cost_min");
                    //console.log(data.stock)
                }
            });
        });
        $('tbody').delegate('.product_id','change',function(){
            var tr=$(this).parent().parent();
            tr.find('.quantity').focus().val(0);
            tr.find('.price_per_unit').val(0);
            tr.find('.discount').val(0);
            tr.find('.amount').val(0);
            total();
            total_keseluruhan();
        });
        $('tbody').delegate('.quantity,.price_per_unit,.discount,.amount','keyup',function(){
            var tr =$(this).parent().parent();
            var quantity = tr.find('.quantity').val();
            var price_per_unit = tr.find('.price_per_unit').val();
            var discount = tr.find('.discount').val();
            var amount = (quantity*price_per_unit)-discount;
            tr.find('.amount').val(amount);
            total();
            total_keseluruhan();
        });

        $('.addRow').on('click',function(){
            addRow();
        });
        // ---- Harga Total yang akan diinputkan----//
        function total_keseluruhan(){
            var total_keseluruhan = 0;
            $('.amount').each(function(i,e){
                var amount =  $(this).val()-0;
                total_keseluruhan +=amount;
            })
            $('#total_keseluruhan').val(total_keseluruhan);
        }
        // ---- Harga Total yang di tampilkan ----//
        function total(){
            var total = 0;
            $('.amount').each(function(i,e){
                var amount =  $(this).val()-0;
                total +=amount;
            })
            $('.total').html(accounting.formatMoney(total, "Rp ", 2, ".", ","));
        }
        // ---- Add Row----//
        function addRow(){
            var tr='<tr>'+ 
                      '<td>'+ 
                        '<select name="product_id[]" class="select product_id form-control" style="width: 147px;" required>'+ 
                          '<option value="0" selected="true" disabled="true">Pilih Produk</option>'+ 
                          '@foreach($data3 as $key => $product)'+ 
                              '<option value="{{ $product->id}}"> {{ $product->product_name }}</option>'+ 
                           '@endforeach'+ 
                        '</select>'+ 
                      '</td>'+ 
                      '<td><input type="number" name="quantity[]" placeholder="Piece" class="form-control quantity" data-parsley-type="number" required/></td>'+
                      '<td><input type="number" name="price_per_unit[]" placeholder="Rp" class="form-control price_per_unit" data-parsley-type="number" required/></td>'+ 
                      '<td><input data-parsley-type="number" type="number" name="discount[]" placeholder="Rp" class="form-control discount" required/></td>'+ 
                      '<td><input data-parsley-type="number" type="number" placeholder="Rp" name="price[]" class="form-control amount" required/></td>'+ 
                      '<td><input type="number" id="find_stock" class="form-control stock" readonly /></td>'+ 
                      '<td><input type="number" id="find_price" class="form-control price_ref" readonly /></td>'+ 
                      '<td style="text-align: center;background: #eee" >'+ 
                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm removeRow"><i class="glyphicon glyphicon-remove"></i></a>'+
                      '</td>'+ 
                    '</tr>';
            $('tbody').append(tr);
        };
        // ---- Remove Row----//
        $('body').delegate('.removeRow','click',function(){
            var l=$('tbody tr').length;
            if(l==1){
                //alert('You can not remove last one')
                swal(
                  'Warning',
                  'You can not remove last one <strong>!</strong>',
                  'info'
                );
            }else{
                $(this).parent().parent().remove();
                total();
                total_keseluruhan();
            }
        });
    </script>
  
    @endpush

@endsection