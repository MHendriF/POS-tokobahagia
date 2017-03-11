@extends('layouts.blank')

@section('title')
	Toko Bahagia | Home
@endsection

@push('stylesheets')
        <!-- Custom Theme Style -->
        <link href="{{ asset("build/css/action-icon.css") }}" rel="stylesheet"> 
        <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet">
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
      
            <section class="page-title">
                <div class="title_left">
                  <h3>Home Dasboard</h3>
                </div>
                <div class="title_right">
                  <div class="pull-right">
                    <section class="content-header">
                      <ol class="breadcrumb">
                      <li class="active"><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
                    </ol>  
                    </section>
                  </div>
                </div>
          </section>

            <div class="x_content">
                <div class="row">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon">
                                <a href=""><i class="fa fa-caret-square-o-right"></i></a>
                            </div>
                            <div class="count">179</div>

                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-comments-o"></i>
                            </div>
                            <div class="count">179</div>

                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                            </div>
                            <div class="count">179</div>

                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-check-square-o"></i>
                            </div>
                            <div class="count">179</div>

                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
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
    
        <!-- Custom Theme Scripts -->
        <script src="{{ asset("build/js/custom.min.js") }}"></script>
    @endpush

@endsection