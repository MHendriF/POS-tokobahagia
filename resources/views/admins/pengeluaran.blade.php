@extends('layouts.blank')

@section('title')
	Gentellela Alela! | Pengeluaran
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
            <div class="page-title">
                <div class="title_left">
                    <h3>Pengeluaran Dasboard</h3>
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