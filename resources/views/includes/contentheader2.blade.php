            <section class="page-title">
              <div class="title_left">
                <h3>@yield('contentheader_title', 'Page Header here')
                <small>@yield('contentheader_description','')</small>
                </h3>
              </div>

              <div class="title_right">
                <div class="pull-right">
                 <section class="content-header">
                    <ol class="breadcrumb">
                      <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                      <li class="active">@yield('contentheader_sub', '')</li>
                    </ol>
                  </section>
                </div> 
              </div>
            </section>

      {{-- <section class="page-title">
        <div class="title_left">
          <h3>Text Editors</h3>
        </div>
        <div class="title_right">
          <div class="pull-right">
            <section class="content-header">
              <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Forms</a></li>
              <li class="active">Editors</li>
            </ol>  
            </section>
            
          </div>
        </div>
      </section> --}}
