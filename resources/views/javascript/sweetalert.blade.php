      <script>
        $(document).on('click', '#delete', function (e) {
        e.preventDefault();
        var form = $(this).parents('form');

        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then(function () {
         
          form.submit();
        });

      })
    </script>