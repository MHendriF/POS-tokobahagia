@extends('layouts.blank')

@section('title')
    Gentellela Alela! | Pemesanan
@endsection

@push('stylesheets')
     <!-- PNotify -->
    <link href="{{ asset("css/pnotify/pnotify.css") }}" rel="stylesheet">
    <link href="{{ asset("css/pnotify/pnotify.buttons.css") }}" rel="stylesheet">
    <link href="{{ asset("css/pnotify/pnotify.nonblock.css") }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset("vendors/google-code-prettify/bin/prettify.min.css") }}" rel="stylesheet">
     <!-- Select2 -->
    <link href="{{ asset("vendors/select2/dist/css/select2.min.css") }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset("css/switchery/switchery.min.css") }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset("css/bootstrap-daterangepicker/daterangepicker.css") }}" rel="stylesheet">
     <!-- Include SmartWizard CSS -->
    <link href="{{ asset("css/smartWizard/smart_wizard.css")}}" rel="stylesheet" type="text/css" />
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

                  <form method="post" action="{{ url('#') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      {!! csrf_field() !!}

                    <!-- Smart Wizard -->
                    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Step 1 description</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Step 2 description</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Step 3 description</small>
                                          </span>
                          </a>
                        </li>
                       
                      </ul>
                      <div id="step-1">
                       
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="username"  name="username" required="required" class="form-control col-md-7 col-xs-12">
                            </div>

                            <td align="left"><span id="msg_username"></span>&nbsp;</td>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                            <td align="left"><span id="msg_password"></span>&nbsp;</td>
                          </div>

                          <div class="form-group">
                            <label for="cpassword" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="password" id="cpassword" class="form-control col-md-7 col-xs-12" name="cpassword">
                            </div>
                            <td align="left"><span id="msg_cpassword"></span>&nbsp;</td>
                          </div>

                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_no">Order No <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="order_no" name="order_no" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>


                      </div>
                      <div id="step-2">
                        <h2 class="StepTitle">Step 2 Content</h2>
                        <p>
                          do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>
                      <div id="step-3">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="email"  name="email" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                            <td align="left"><span id="msg_email"></span>&nbsp;</td>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Phone <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="phone" name="phone" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                            <td align="left"><span id="msg_address"></span>&nbsp;</td>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea id="address" name="address" required="required" class="form-control col-md-7 col-xs-12">
                              </textarea>
                            </div>
                            <td align="left"><span id="msg_address"></span>&nbsp;</td>
                          </div>

                      </div>

                    </div>
                    <!-- End SmartWizard Content -->
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

     <!-- bootstrap-daterangepicker -->
    <script src="{{ asset("js/moment/moment.min.js") }}"></script>
    <script src="{{ asset("js/daterangepicker/daterangepicker.js") }}"></script>

    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset("vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js") }}"></script>
    <script src="{{ asset("vendors/jquery.hotkeys/jquery.hotkeys.js") }}"></script>
    <script src="{{ asset("vendors/google-code-prettify/src/prettify.js") }}"></script>
    <!-- Switchery -->
    <script src="{{ asset("vendors/switchery/dist/switchery.min.js") }}"></script>
    <!-- Select2 -->
    <script src="{{ asset("vendors/select2/dist/js/select2.full.min2.js") }}"></script>
    <!-- Parsley -->
    <script src="{{ asset("vendors/parsleyjs/dist/parsley.min2.js") }}"></script>

     <!-- PNotify -->
    <script src="{{ asset("js/pnotify/pnotify.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.nonblock.js") }}"></script>

    <!-- Include jQuery Validator plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

     <!-- Include jQuery Validator plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="{{ asset("js/smartWizard/jquery.smartWizard.min.js") }}"></script>


{{--     <!-- jQuery Smart Wizard -->
    <script src="{{ asset("js/jQuery-Smart-Wizard/jquery.smartWizard.js") }}"></script>

 --}}    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min.js") }}"></script>

    <!-- Include Scripts -->
    @include('javascript.select2')
    @include('javascript.pnotify')
    @include('javascript.validator')

    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript">
      $(document).ready(function(){
          // Smart Wizard         
          $('#wizard').smartWizard({
              onLeaveStep:leaveAStepCallback,
              onFinish:onFinishCallback
          });

          function leaveAStepCallback(obj, context){
              //alert("Leaving step " + context.fromStep + " to go to step " + context.toStep);
              return validateSteps(context.fromStep); // return false to stay on step and true to continue navigation 
          }

          function onFinishCallback(objs, context){
              if(validateAllSteps()){
                  $('form').submit();
              }
          }

          // Your Step validation logic
          function validateSteps(step){
              var isStepValid = true;
              // validate step 1
              if(step == 1){
                  // Your step validation logic
                  // set isStepValid = false if has errors

                  if(validateStep1() == false ){
                    isStepValid = false; 
                    $('#wizard').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
                    $('#wizard').smartWizard('setError',{stepnum:step,iserror:true});         
                  }else{
                    $('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
                  }
              }

              //validate step3
              if(step == 3){
                if(validateStep3() == false ){
                  isStepValid = false; 
                  $('#wizard').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
                  $('#wizard').smartWizard('setError',{stepnum:step,iserror:true});         
                }else{
                  $('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
                }
              }
              
              return isStepValid;     
          }

          function validateStep1()
          {
           var isValid = true; 
           // Validate Username
           var un = $('#username').val();
           if(!un && un.length <= 0){
             isValid = false;
             $('#msg_username').html('Please fill username').show();
           }else{
             $('#msg_username').html('').hide();
           }
           
           // validate password
           var pw = $('#password').val();
           if(!pw && pw.length <= 0){
             isValid = false;
             $('#msg_password').html('Please fill password').show();         
           }else{
             $('#msg_password').html('').hide();
           }
           
           // validate confirm password
           var cpw = $('#cpassword').val();
           if(!cpw && cpw.length <= 0){
             isValid = false;
             $('#msg_cpassword').html('Please fill confirm password').show();         
           }else{
             $('#msg_cpassword').html('').hide();
           }  
           
           // validate password match
           if(pw && pw.length > 0 && cpw && cpw.length > 0){
             if(pw != cpw){
               isValid = false;
               $('#msg_cpassword').html('Password mismatch').show();            
             }else{
               $('#msg_cpassword').html('').hide();
             }
           }
           return isValid;
        }
        
        function validateStep3(){
          var isValid = true;    
          //validate email  email
          var email = $('#email').val();
           if(email && email.length > 0){
             if(!isValidEmailAddress(email)){
               isValid = false;
               $('#msg_email').html('Email is invalid').show();           
             }else{
              $('#msg_email').html('').hide();
             }
           }else{
             isValid = false;
             $('#msg_email').html('Please enter email').show();
           }       
          return isValid;
        }
        
        // Email Validation
        function isValidEmailAddress(emailAddress) {
          var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
          return pattern.test(emailAddress);
        } 

          function validateAllSteps(){
              var isStepValid = true;
              // all step validation logic     
              if(validateStep1() == false){
                 isStepValid = false;
                 $('#wizard').smartWizard('setError',{stepnum:1,iserror:true});         
               }else{
                 $('#wizard').smartWizard('setError',{stepnum:1,iserror:false});
               }
               
               if(validateStep3() == false){
                 isStepValid = false;
                 $('#wizard').smartWizard('setError',{stepnum:3,iserror:true});         
               }else{
                 $('#wizard').smartWizard('setError',{stepnum:3,iserror:false});
               }
               
               if(!isStepValid){
                  $('#wizard').smartWizard('showMessage','Please correct the errors in the steps and continue');
               }
                      
               return isStepValid;
          }

          $('#wizard_verticle').smartWizard({
            transitionEffect: 'slide'
          });

          $('.buttonNext').addClass('btn btn-success');
          $('.buttonPrevious').addClass('btn btn-primary');
          $('.buttonFinish').addClass('btn btn-default');
      });
    </script>


    @endpush
@endsection