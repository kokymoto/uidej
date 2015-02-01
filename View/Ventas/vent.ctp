<script>
// function sumar() {
// var n1 = parseInt(document.insertar.data[Venta][cant_adulto].value);
// var n2 = parseInt(document.insertar.data[Venta][cant_niño].value);
// var n3 = parseInt(document.insertar.data[Venta][cant_di].value);
// var n4 = parseInt(document.insertar.data[Venta][numcombo].value);
// document.data[Venta][total].value=(n1*7.50)+(n2*5.50)+(n3*4.90)+(n4*12.90);
// document. getElementById
// }
function check_cedula()
{
  var cedula = document.getElementById('VentaCedula').value;
  array = cedula.split( "" );
  num = array.length;
  if ( num == 10 )
  {
    total = 0;
    digito = (array[9]*1);
    for( i=0; i < (num-1); i++ )
    {
      mult = 0;
      if ( ( i%2 ) != 0 ) {
        total = total + ( array[i] * 1 );
      }
      else
      {
        mult = array[i] * 2;
        if ( mult > 9 )
          total = total + ( mult - 9 );
        else
          total = total + mult;
      }
    }
    decena = total / 10;
    decena = Math.floor( decena );
    decena = ( decena + 1 ) * 10;
    final = ( decena - total );
    if ( ( final == 10 && digito == 0 ) || ( final == digito ) ) {
      alert( "La c\xe9dula ES v\xe1lida!!!" );
      return true;
    }
    else
    {
      alert( "La c\xe9dula NO es v\xe1lida!!!" );
      return false;
    }
  }
  else
  {
    alert("La c\xe9dula no puede tener menos de 10 d\xedgitos");
    return false;
  }
}
</script>
<div class="ventas form">
<?php echo $this->Form->create('Venta'); ?>
	<fieldset>
		<div class = 'grupoform'>
		<legend><?php echo __('PROCESO DE COMPRA'); ?></legend>

	<?php
	echo ('<br>');
		echo $this->Form->input('nombre',array('label'=>'Nombre:','class'=>'form-control input-sm'));
		echo $this->Form->input('apellido',array('label'=>'Apellido:','class'=>'form-control input-sm'));
		echo $this->Form->input('cedula',array('label'=>'Cédula:','class'=>'form-control input-sm'));
		echo $this->Form->input('direccion',array('label'=>'Dirección:','class'=>'form-control input-sm'));
		echo $this->Form->input('mail',array('label'=>'Mail:','class'=>'form-control input-sm'));
		echo $this->Form->input('telefono',array('label'=>'Teléfono:','class'=>'form-control input-sm'));
		echo $this->Form->input('tarjeta',array('label'=>'Tipo de Tarjeta:','class'=>'form-control input-sm'));
		echo $this->Form->input('numtarjeta',array('label'=>'Número de Tarjeta:','class'=>'form-control input-sm'));
		// echo $this->Form->input('nombre');
		// echo $this->Form->input('apellido');
		// echo $this->Form->input('cedula');
		// echo $this->Form->input('direccion');
		// echo $this->Form->input('mail');
		// echo $this->Form->input('telefono');
		// echo $this->Form->input('tarjeta');
		// echo $this->Form->input('numtarjeta');
		echo ('<br>');
		echo __('<legend>SELECCIONE SU PELÍCULA</legend>');
		echo ('<br>');
		echo ('<br>');
		

	  	echo $this->Form->input('cartelera_id',array('label'=>'Seleccione su Pelicula:','class'=>'form-control input-sm'));
		//echo $this->Form->input('cartelera_id',array('label' => 'Seleccione su pelicula'));//el array permite modificar los atributos del formulario en este caso el label para modificar el nombre del campo que bake arroja de forma magica
		// echo $this->Form->input('cartelera',array('options'=>$carteleras,'multiple'=>'ckeckbox','type'=>'radio'));
		echo $this->Form->input('cant_adulto',array('label'=>'Cantidad de boletos - Precio normal $ 7,50:','class'=>'form-control input-sm'));
		echo $this->Form->input('cant_niño',array('label'=>'Cantidad de boletos - Precio niños/ancianos $ 5,50:','class'=>'form-control input-sm'));
		echo $this->Form->input('cant_discapacitado',array('label'=>'Cantidad de boletos - Precio discapacitados $ 4,90:','class'=>'form-control input-sm'));
		// echo $this->Form->input('cant_adulto', array('label' => 'Cantidad de boletos - Precio normal $ 7,50'));
		// echo $this->Form->input('cant_niño', array('label' => 'Cantidad de boletos - Precio niños/ancianos $ 5,50'));
		// echo $this->Form->input('cant_discapacitado', array('label' => 'Cantidad de boletos - Precio discapacitados $ 4,90'));
		
		echo ('<br>');
		echo __('<legend>SELECCIONE SU COMBO</legend>'); 
		echo ('<br>');
		echo ('<br>');
		echo $this->Form->input('combo_id',array('label'=>'Seleccione el combo de su preferencia:','class'=>'form-control input-sm'));
		echo $this->Form->input('numcombo',array('label'=>'Cantidad de combos - Precio discapacitados $ 12,90:','class'=>'form-control input-sm'));
		// echo $this->Form->input('combo_id');
		// echo $this->Form->input('numcombo', array('label' => 'Cantidad de combos - Precio discapacitados $ 12,90'));




	?>
</div>
	<fieldset>
	
<?php echo $this->Form->end(__('Guardar')); ?>
</div>

