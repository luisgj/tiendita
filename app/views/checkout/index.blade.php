<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>Conekta - Primero Cargo</title>
 
  <!-- Incluir Conekta.js -->
  <script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.0/js/conekta.js"></script>
 
  <!-- Incluir jQuery -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 
  <script type="text/javascript">
    var publishable_key = 'EpnQNGMghzDrytvfpqtG'; //set your publishable key here
    Conekta.setPublishableKey(publishable_key);

    jQuery(function($) {
      var conektaSuccessResponseHandler = function(response) {
        var $form = $('#payment-form');

        var charge_id = response.id;
        // Insert the charge_id into the form so it gets submitted to the server
        $form.append($('<input type="hidden" name="conektaChargeId" />').val(charge_id));
        // and submit
        $form.get(0).submit();
      };

      var conektaErrorResponseHandler = function(response) {
        var $form = $('#payment-form');

        // Show the errors on the form
        $form.find('.payment-errors').text(response.message);
        $form.find('button').prop('disabled', false);
      };

      $('#payment-form').submit(function(event) {
        var $form = $(this);

        // Disable the submit button to prevent repeated clicks
        $form.find('button').prop('disabled', true);

        Conekta.charge.create($('#payment-form'), conektaSuccessResponseHandler, conektaErrorResponseHandler);

        // Prevent the form from submitting with the default action
        return false;
      });
    });
  </script>
</head>
<body>
  <h1>Cargo de $100 MXN por Conekta</h1> 
  <form action="" method="POST" id="payment-form">
    <span class="payment-errors"></span>

    <div class="form-row hidden">
      <label>
        <span>Monto</span>
        <input type="text" size="12" data-conekta="amount" value="10000"/>
      </label>
    </div>

    <div class="form-row hidden">
      <label>
        <span>Descripción</span>
         <input type="text" size="40" data-conekta="description" value="Mi Primera Compra"/>
      </label>
    </div>

    <div class="form-row hidden">
      <label>
        <span>Moneda</span>
        <input type="text" size="3" data-conekta="currency" value="MXN"/>
      </label>
    </div>

    <div class="form-row">
      <label>
        <span>Tarjetahabiente</span>
        <input type="text" size="20" data-conekta="card[name]"/>
      </label>
    </div>

    <div class="form-row">
      <label>
        <span>Número</span>
        <input type="text" size="20" data-conekta="card[number]"/>
      </label>
    </div>

    <div class="form-row">
      <label>
        <span>CVC</span>
        <input type="text" size="4" data-conekta="card[cvc]"/>
      </label>
    </div>

    <div class="form-row">
      <label>
        <span>Expiración (MM/YYYY)</span>
        <input type="text" size="2" data-conekta="card[exp_month]"/>
      </label>
      <span> / </span>
      <input type="text" size="4" data-conekta="card[exp_year]"/>
    </div>

    <button type="submit">Completar Pago</button>
  </form>
</body>
</html>
