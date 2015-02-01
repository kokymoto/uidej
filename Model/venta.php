<?php
	class Venta extends AppModel{
		var $name='Venta';
		//var $belongsTo = array('Cliente');
		
		var $belongsTo = array( 
							  'Combo'  => array( 
							    'className' => 'Combo' 
							  ), 
							  'Cartelera'  => array( 
							    'className' => 'Cartelera' 
							  ) 
							); 

		var $validate = array(
    				'nombre' => array(
    									'normaltext' => array( // define validacion para q el formulario acepte solo letras 
															'rule' => array('custom','/^[[:alpha:]](\s*[[:alpha:]]*)*$/i'),
															'message' => 'El nombre debería contener sólo letras y espacios.'
					    								)
    					),
    				'apellido' => array(
    									'normaltext' => array( // define validacion para q el formulario acepte solo letras 
															'rule' => array('custom','/^[[:alpha:]](\s*[[:alpha:]]*)*$/i'),
															'message' => 'El apellido debería contener sólo letras y espacios.'
					    								)
    					
    					),
    				
    				'cedula' => array(
    					'minLength'=> array( 
    							'rule' => array('minLength','10'),
    							'message' => 'Su cedula es incorrecta, debe tener 10 números'
    						),
    					'maxLength'=> array( 
    							'rule' => array('maxLength','10'),
    							'message' => 'Su cedula es incorrecta, no debe tener mas de 10 números'
    						),

    					
    					
    					),

    				'direccion' => array(
    					'rule' => 'notEmpty',
    					'message' => 'Este campo no puede quedar vacío',
			    					
    					),

    				// 'mail' => array(
    				// 		'email' => array( //valida que el email este biene scrito
        // 				         'rule' => array('email', true),
       	//  			         'message' => 'Por favor indique una dirección de correo electrónico válida.')
    					
    				// ),

    				'telefono' => array(
    					'numeric'=> array( 
    							'rule' => array('numeric'),
    							'message' => 'Solo se permiten numeros'
    						),

    					'minLength'=> array( 
    							'rule' => array('minLength','7'),
    							'message' => 'Su número de telefono, debe tener 7 números'
    						),
    					'maxLength'=> array( 
    							'rule' => array('maxLength','7'),
    							'message' => 'Su número de telefono, no debe tener mas 7 números'
    						),

    					
    					),

    				'tarjeta' => array(
    					'normaltext' => array( // define validacion para q el formulario acepte solo letras 
								'rule' => array('custom','/^[[:alpha:]](\s*[[:alpha:]]*)*$/i'),
								'message' => 'El nombre debería contener sólo letras y espacios.'
					    									
					    		),
    					'notEmpty'=> array( 
    							'rule' => array('notEmpty'),
    							'message' => 'Este campo no puede estar vacio'
    						)

    					
    					),

    				'numtarjeta' => array(
    					'numeric'=> array( 
    							'rule' => array('numeric'),
    							'message' => 'Solo se permiten numeros'
    						),
    					'minLength'=> array( 
    							'rule' => array('minLength','16'),
    							'message' => 'Su número de tarjeta de credito, debe tener 16 números'
    						),
    					'maxLength'=> array( 
    							'rule' => array('maxLength','16'),
    							'message' => 'Su número de tarjeta de credito, no debe tener 16 números'
    						),
    					'notEmpty'=> array( 
    							'rule' => array('notEmpty'),
    							'message' => 'Este campo no puede estar vacio'
    						),

    					
    					),

    				'cant_adulto' => array(
    					'notEmpty'=> array( 
    							'rule' => array('notEmpty'),
    							'message' => 'Este campo no puede estar vacio'
    						),
    					'numeric'=> array( 
    							'rule' => array('numeric'),
    							'message' => 'Solo se permiten numeros'
    						),
    					),

    				'cant_niño' => array(
    					'notEmpty'=> array( 
    							'rule' => array('notEmpty'),
    							'message' => 'Este campo no puede estar vacio'
    						),
    					'numeric'=> array( 
    							'rule' => array('numeric'),
    							'message' => 'Solo se permiten numeros'
    						),
    					),

    				'cant_discapacitado' => array(
    					'notEmpty'=> array( 
    							'rule' => array('notEmpty'),
    							'message' => 'Este campo no puede estar vacio'
    						),
    					'numeric'=> array( 
    							'rule' => array('numeric'),
    							'message' => 'Solo se permiten numeros'
    						),
    					),
    				'numcombo' => array(
    					'notEmpty'=> array( 
    							'rule' => array('notEmpty'),
    							'message' => 'Este campo no puede estar vacio'
    						),
    					'numeric'=> array( 
    							'rule' => array('numeric'),
    							'message' => 'Solo se permiten numeros'
    						),
    					),

    				);
		/*var $hasMany = array( 
							  'Combo'  => array( 
							    'className' => 'Combo' 
							  ), 
							  'Cartelera'  => array( 
							    'className' => 'Cartelera' 
							  ) 
							); */

 // public function beforeSave($options = array()) {
 //     if (!empty($this->data['venta']['total']) )
 //      {

 //         $this->data['venta']['total'] = $this->data['venta']['cant_niño']
 //         );
       
 //     return true;
 // }

// public function suma($number) {
//     return $number(['venta']['cant_adulto']+2);
// }
	
	}
?>

