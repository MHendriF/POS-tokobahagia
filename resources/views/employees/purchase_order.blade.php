@extends('layouts.blank')

@section('title')
    Toko Bahagia | Purchase Order
@endsection

@push('stylesheets')
    <!-- Include SmartWizard CSS -->
    <link href="{{ asset("css/smartWizard/smart_wizard.css")}}" rel="stylesheet" type="text/css" />
    
    <!-- Optional SmartWizard theme -->
    <link href="{{ asset("css/smartWizard/smart_wizard_theme_dots.css")}}" rel="stylesheet" type="text/css" />

    <!-- Custom Theme Style -->
    <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet"> 
@endpush

@section('main_container')
    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Wizards</h3>
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
                    <h2>Form Wizards <small>Sessions</small></h2>
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

                     <form action="{{ url('/purchase_order') }}" id="myForm" class="form-horizontal form-label-left" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                        {!! csrf_field() !!}
                        <!-- SmartWizard html -->
                        <div id="smartwizard">
                            <ul>
                                <li><a href="#step-1"><small>Purchase Order</small></a></li>
                                <li><a href="#step-2"><small>Purchase Order Detail</small></a></li>
                                <li><a href="#step-3"><small>Terms and Conditions</small></a></li>
                            </ul>
                            
                            <div>
                                <div id="step-1">
                                    <h2>Purchase Order</h2>
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="supplier_id">Select Supplier <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <select id="supplier_id" required="required" name="supplier_id" class="select2_single form-control" tabindex="-1">
                                                <option></option>
                                                @foreach($data as $supplier)
                                                    <option value='{{ $supplier->id}}'> {{ $supplier->supplier_name }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Shipping Method <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select id="shipping_id" required="required" name="shipping_id" class="select2_single form-control" tabindex="-1">
                                                <option></option>
                                                @foreach($data2 as $shipping)
                                                    <option value='{{ $shipping->id}}'> {{ $shipping->method }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="po_number">Po Number <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="po_number" name="po_number" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="po_description">Po Description <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="text" id="po_description" name="po_description" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Order Date <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                                <input type="text" required="required" name="order_date" class="form-control" id="single_cal1" placeholder="Date" aria-describedby="inputSuccess2Status3">
                                                <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Order Required <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                                <input type="text" required="required" name="order_required" class="form-control" id="single_cal2" placeholder="Date" aria-describedby="inputSuccess2Status3">
                                                <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Order Promised <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                                <input type="text" required="required" name="order_promised" class="form-control" id="single_cal3" placeholder="Date" aria-describedby="inputSuccess2Status3">
                                                <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ship Date <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                                <input type="text" required="required" name="ship_date" class="form-control" id="single_cal4" placeholder="Date" aria-describedby="inputSuccess2Status3">
                                                <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="freight_charge">Freight Charge <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="freight_charge" name="freight_charge" required="required" placeholder="Rp" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                       
                                    </div>  
                                </div>

                                <div id="step-2">
                                    <h2>Purchase Order Detail</h2>
                                    <div id="form-step-1" role="form" data-toggle="validator">
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_id">Select Product <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <select id="product_id" required="required" name="product_id" class="select2_single form-control" tabindex="-1">
                                                <option></option>
                                                @foreach($data3 as $product)
                                                    <option value='{{ $product->id}}'> {{ $product->product_name }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="po_item_number">Po Item Number <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="po_item_number" name="po_item_number" required="required"  class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantity_in">Quantity In <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="quantity_in" name="quantity_in" required="required" placeholder="Pieces" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantity_out">Quantity Out <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="quantity_out" name="quantity_out" required="required" placeholder="Pieces" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="unit_cost">Unit Cost <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="unit_cost" name="unit_cost" required="required" placeholder="Rp" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="line_total">Line Total <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="line_total" name="line_total" required="required" placeholder="Rp" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="discount">Discount <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="discount" name="discount" required="required" placeholder="Rp" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div id="step-3" class="">
                                    <h2>Terms and Conditions</h2>
                                    <p>
                                        Terms and conditions: Keep your smile :) 
                                    </p>
                                    <div id="form-step-3" role="form" data-toggle="validator">
                                        <div class="form-group">
                                            <label for="terms">I agree with the T&C</label>
                                            <input type="checkbox" id="terms" data-error="Please accept the Terms and Conditions" required>  
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
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

    <!-- Select2 -->
    <script src="{{ asset("vendors/select2/dist/js/select2.full.min.js")}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset("vendors/moment/min/moment.min.js") }}"></script>
    <script src="{{ asset("js/daterangepicker.js") }}"></script>

    <!-- Include jQuery Validator plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="{{ asset("js/smartWizard/jquery.smartWizard.min.js") }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min.js") }}"></script>


    <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a state",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->

    <!-- /Datepicker -->
    <script>
      $(document).ready(function() {
        $('#single_cal1').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_1"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_2"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
    <!-- /Datepicker -->

     <script type="text/javascript">
        $(document).ready(function(){
            
            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                                             .addClass('btn btn-info')
                                             .on('click', function(){ 
                                                    if( !$(this).hasClass('disabled')){ 
                                                        var elmForm = $("#myForm");
                                                        if(elmForm){
                                                            elmForm.validator('validate'); 
                                                            var elmErr = elmForm.find('.has-error');
                                                            if(elmErr && elmErr.length > 0){
                                                                alert('Oops we still have error in the form');
                                                                return false;    
                                                            }else{
                                                                alert('Great! we are ready to submit form');
                                                                elmForm.submit();
                                                                return false;
                                                            }
                                                        }
                                                    }
                                                });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){ 
                                                    $('#smartwizard').smartWizard("reset"); 
                                                    $('#myForm').find("input, textarea").val(""); 
                                                });                         
            
            
            
            // Smart Wizard
            $('#smartwizard').smartWizard({ 
                    selected: 0, 
                    theme: 'dots',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    },
                    anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                            }
                 });
            
            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                var elmForm = $("#form-step-" + stepNumber);
                // stepDirection === 'forward' :- this condition allows to do the form validation 
                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                if(stepDirection === 'forward' && elmForm){
                    elmForm.validator('validate'); 
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        // Form validation failed
                        return false;    
                    }
                }
                return true;
            });
            
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                // Enable finish button only on last step
                if(stepNumber == 3){ 
                    $('.btn-finish').removeClass('disabled');  
                }else{
                    $('.btn-finish').addClass('disabled');
                }
            });                               
            
        });   
    </script>  


    @endpush
@endsection