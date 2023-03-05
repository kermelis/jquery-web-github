<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>JQUERY- AJAX</title>
</head>
<body> 
    <div>
        <h1>eXtreme Meta Corporation</h1>
        <span>Product Category :</span>
        <select name="" id="prod_cat_id" class="productcategory">
            <option value="0" disabled="true" selected="true">Select</option>
            @foreach ($prod as $cat)
                <option value="{{$cat->id}}">{{$cat->product_cat_name}}</option>
            @endforeach
        </select>

        <span>Product Name :</span>
        <select name="" class="productname">
            <option value="0" disabled="true" selected="true">Product Name</option>
        </select>

        <span>Product price :</span>
        <input type="text" class="prod_price">
    </div>

    <script src="{{ asset('js/jquery-3.6.0.js' )}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $(document).on('change','.productcategory',function(){
                //console.log("change my");

                var cat_id=$(this).val();
                //console.log(cat_id);
                var div = $(this).parent();

                var op = " ";

                $.ajax({
                    type:'get',
                    url:'/findProductName',
                    data:{'id':cat_id},
                    success:function(data){
                        /*console.log('success');
                        console.log(data);
                        console.log(data.length);*/
                        op+='<option value="0" selected disabled>chose product</option>';
                        for (var i = 0; i < data.length; i++) {
                            op+='<option value="'+data[i].id+'">'+data[i].productname+'</option>';  
                        }
                        div.find('.productname').html(" ");
                        div.find('.productname').append(op);
                    },
                    error:function(){

                    }
                }); 
            });
            $(document).on('change','.productname',function(){
                var prod_id =$(this).val();
                var a=$(this).parent();
                console.log(prod_id);
                console.log(a);
                var op = "";

                $.ajax({
                    type:'get',
                    url:'/findPrice',
                    data:{'id':prod_id},
                    dataType:'json',
                    success:function(data){
                        console.log('price');
                        console.log(data.price);

                        a.find('.prod_price').val(data.price);
                    },
                    error:function(){

                    }
                });

            });
        });
    </script>
</body>
</html>