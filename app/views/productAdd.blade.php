{{ Form::open(array('url' => '/barcodeAdd')) }}
    {{Form::text('title',null,array('class' => 'product-input'))}}
    {{Form::textarea('desc',null,array('class' => 'product-input'))}}
    {{Form::number('price',null,array('class' => 'product-input'))}}
    {{Form::file('barcode',null,array('class' => 'product-input'))}}
{{Form::close()}}