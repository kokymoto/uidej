<?php
	class Venta extends AppModel{
		var $name='Venta';
		var $belongsTo = array('Cliente');
		var $hasMany = array( 
							  'Combo'  => array( 
							    'className' => 'Combo' 
							  ), 
							  'Cartelera'  => array( 
							    'className' => 'Cartelera' 
							  ) 
							); 
	}
?>

