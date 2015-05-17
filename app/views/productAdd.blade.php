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
{{ Form::open(array('url' => '/productAdd', 'id' => 'formProduct')) }}
    {{Form::text('name',null,array('id' => 'product-name'))}}
    {{Form::textarea('desc',null,array('id' => 'product-desc'))}}
    {{Form::text('price',null,array('class' => 'product-price'))}}
    <button id="addproduct">Agregar al inventario</button>
{{Form::close()}}
{{ Form::open(array('url' => '/addBarcode', 'id' => 'formBarcode')) }}
    {{Form::file('barcode',null,array('class' => 'product-barcode'))}}
    <button id="addbarcode">Agregar identificador</button>
{{Form::close()}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#addproduct').click(function(){
            formData = {
                'name': $('#product-name').val(),
                'desc': $('#product-desc').val(),
                'price': $('#product-price').val()
            }

            $.ajax({
                url : "/productAdd",
                type: "POST",
                data : formData,
                success: function(data, textStatus, jqXHR)
                {
                    console.log(data);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {

                }
            });
        });
    });
</script>
</body>
</html>