<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tiendapp</title>
    <script src="/res/components/webcomponentsjs/webcomponents.js"></script>

    <link rel="import" href="/res/components/map-stores-mexico/map-stores-mexico.html">
    <link rel="import" href="/res/components/font-roboto/roboto.html">
    <link rel="import" href="/res/components/core-icons/core-icons.html">
    <link rel="import" href="/res/components/core-toolbar/core-toolbar.html">
    <link rel="import" href="/res/components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="/res/components/paper-input/paper-input-decorator.html">
    <link rel="import" href="/res/components/paper-input/paper-input.html">
    <link rel="import" href="/res/components/grid-cards-animated/grid-cards-animated.html">

    <link rel="stylesheet" type="text/css" href="/res/styles.css">
</head>
<body unresolved>
    {{Form::text('name',null,array('id' => 'product-name'))}}
    {{Form::textarea('desc',null,array('id' => 'product-desc'))}}
    {{Form::text('price',null,array('id' => 'product-price'))}}
    <button id="addproduct">Agregar</button>
    {{Form::file('barcode',null,array('class' => 'product-barcode'))}}
    <button id="addbarcode">Agregar identificador</button>
    <h1 class="adding" style="display:none;">Agregando</h1>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#addproduct').click(function(){
            console.log('entro');
            formData = "name=" + $('#product-name').val()+"&description="+$('#product-desc').val()+"&price="+parseFloat($('#product-price').val());


            console.log(formData);


            $.ajax({
                url : "http://query.dev:8000/productAdd",
                type: "POST",
                data : formData,
                success: function(data, textStatus, jqXHR)
                {
                    console.log(data.exito);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    console.log(errorThrown);
                }
            });
        });

        $('#addbarcode').click(function(){
            console.log('entrobar');
            $('.adding').show();
            $.ajax({
                url : "http://query.dev:8000/addBarcode",
                type: "GET",
                success: function(data, textStatus, jqXHR)
                {
                    $('.adding').text(data.codigo);
                    console.log(data.codigo);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    console.log(errorThrown);
                }
            });
        });
    });
</script>
</body>
</html>