 <!-- PNotify -->
    <script>
      $(document).ready(function() {
          @if(Session::has('new'))
            new PNotify({
              title: "Create",
              type: "success",
              text: "{{ Session::get('new') }}",
              delay: "2500",
              nonblock: {
                  nonblock: true
              },
              styling: 'bootstrap3',
              hide: true,
            });
          @elseif(Session::has('update'))
            new PNotify({
              title: "Update",
              type: "success",
              text: "{{ Session::get('update') }}",
              delay: "2500",
              nonblock: {
                  nonblock: true
              },
              styling: 'bootstrap3',
              hide: true,
              shadow: true,
            });
          @elseif(Session::has('delete'))
            new PNotify({
              title: "Delete",
              type: "success",
              text: "{{ Session::get('delete') }}",
              delay: "2500",
              nonblock: {
                  nonblock: true
              },
              styling: 'bootstrap3',
              hide: true,
              shadow: true,
            });
          @elseif(Session::has('error'))
            new PNotify({
              title: "Error",
              type: "error",
              text: "{{ Session::get('error') }}",
              delay: "2500",
              nonblock: {
                  nonblock: true
              },
              styling: 'bootstrap3',
              hide: true,
              shadow: true,
            });
          @endif
        });
    </script>
    <!-- /PNotify -->