      <script>
        $(document).on('click', '#delete', function (e) {
        e.preventDefault();
        var form = $(this).parents('form');

        // swal({   
        //   title: "Are you sure?",
        //   text: "You will not be able to recover this data!",
        //   type: "warning",   
        //   showCancelButton: true,   
        //   confirmButtonColor: "#DD6B55",
        //   confirmButtonText: "Yes, delete it!", 
        //   closeOnConfirm: false

        // }, 
        // function(isConfirm){
        //   if (isConfirm) form.submit();
        //   swal(
        //     'Deleted!',
        //     'Your file has been deleted.',
        //     'success'
        //   )
        // });

        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then(function () {
          // swal(
          //   'Deleted!',
          //   'Your selected data has been deleted.',
          //   'success'
          // )
          form.submit();
        });

      })
    </script>