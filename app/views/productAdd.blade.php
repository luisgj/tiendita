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
    <div style="width:1000px; margin:0 auto;">
        <h1>Agregar Producto</h1>
        <paper-input-decorator label="Nombre">
          <input is="core-input" id="product-name">
        </paper-input-decorator>
        <paper-input-decorator label="Descripción">
          <paper-autogrow-textarea>
            <textarea id="product-desc"></textarea>
          </paper-autogrow-textarea>
        </paper-input-decorator>
        <paper-input-decorator label="Precio">
          <input is="core-input" id="product-price">
        </paper-input-decorator>
        <paper-button id="addproduct" raised class="colored">Agregar</paper-button>
        <div style="display: block; margin-top: 45px;">
            {{Form::file('barcode',null,array('class' => 'product-barcode'))}}
            <paper-button raised class="colored" style="display: block;" id="addbarcode">Agregar identificador</paper-button>
            <h4 class="adding" style="display:none; color: #844D9D;">Agregando</h4>
        </div>
    </div>
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
            $('#addbarcode').hide();
            console.log('entrobar');
            $('.adding').show();
            $.ajax({
                url : "http://query.dev:8000/addBarcode",
                type: "GET",
                success: function(data, textStatus, jqXHR)
                {
                    $('.adding').text('Tu código es '+ data.codigo);
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