    <script>
        $(document).ready(function(){

            $(document).on('change','#priceproduct5',function () {
                var prod_id=$(this).val();

                var a=$(this).parent();
                console.log(prod_id);
                var op="";
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findProduct')!!}',
                    data:{'id':prod_id},
                    dataType:'json',//return data will be json
                    success:function(data){
                        $("#find_price5").val(data.unit_price_min); //parsing price to view
                        $("#find_stock5").val(data.stock);
                    },
                    error:function(){
                    }
                });
            });

        });
    </script>