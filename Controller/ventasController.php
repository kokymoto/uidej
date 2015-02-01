<?php
App::uses('AppController', 'Controller');
/**
 * Ventas Controller
 *
 * @property Venta $Venta
 * @property PaginatorComponent $Paginator
 */
class VentasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Venta->recursive = 0;
		$this->set('ventas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Venta->exists($id)) {
			throw new NotFoundException(__('Invalid venta'));
		}
		$options = array('conditions' => array('Venta.' . $this->Venta->primaryKey => $id));
		$this->set('venta', $this->Venta->find('first', $options));


	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Venta->create();
			if ($this->Venta->save($this->request->data)) {
				$this->Session->setFlash(__('La venta se almacenó correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La venta no se almacenó correctamente. Por favor, Intente de nuevo.'));
			}
		}
		$carteleras = $this->Venta->Cartelera->find('list',array('fields'=>'pelicula'));// se llama a la tabla carteleras y al campo pelicula para que el formulario despliegue no por id sino por su nombre
		$this->set(compact('carteleras'));
		$combos = $this->Venta->Combo->find('list',array('fields'=>'nombre'));// se llama a la tabla combo y al campo nombre para que el formulario despliegue no por id sino por su nombre
		$this->set(compact('combos'));
	}

	public function vent() {
		if ($this->request->is('post')) {
			$this->Venta->create();

           
           
			$this->request->data['Venta']['total'] =  ($this->request->data['Venta']['cant_adulto'] * 7.5) +  ($this->request->data['Venta']['cant_niño'] * 5.5) +  ($this->request->data['Venta']['cant_discapacitado'] * 4.9)+  ($this->request->data['Venta']['numcombo'] * 12.9) ;
			
			

			if ($this->Venta->save($this->request->data)) {

				$this->Session->setFlash(__('La venta se almacenó correctamente.'));
				$inserted_id=$this->Venta->id;//definimos variable con el id del ultimo registro
				return $this->redirect(array('action' => 'view', $inserted_id));//redireccionamos a una vista ejecutando la variable en donde esta nuestro ultimo registro
			} else {
				$this->Session->setFlash(__('La venta no se almacenó correctamente. Por favor, Intente de nuevo.'));
			}
		}
		$carteleras = $this->Venta->Cartelera->find('list',array('fields'=>'pelicula'));// se llama a la tabla carteleras y al campo pelicula para que el formulario despliegue no por id sino por su nombre
		$this->set(compact('carteleras'));
		$combos = $this->Venta->Combo->find('list',array('fields'=>'nombre'));// se llama a la tabla combo y al campo nombre para que el formulario despliegue no por id sino por su nombre
		$this->set(compact('combos'));

			}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Venta->exists($id)) {
			throw new NotFoundException(__('Invalid venta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Venta->save($this->request->data)) {
				$this->Session->setFlash(__('La venta se almacenó correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La venta no se almacenó correctamente. Por favor, Intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Venta.' . $this->Venta->primaryKey => $id));
			$this->request->data = $this->Venta->find('first', $options);
		}
		$carteleras = $this->Venta->Cartelera->find('list');
		$this->set(compact('carteleras'));
		$combos = $this->Venta->Combo->find('list');
		$this->set(compact('combos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Venta->id = $id;
		if (!$this->Venta->exists()) {
			throw new NotFoundException(__('Invalid venta'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Venta->delete()) {
			$this->Session->setFlash(__('La venta se eliminó correctamente.'));
		} else {
			$this->Session->setFlash(__('La venta no se eliminó correctamente. Por favor, Intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


 // public function beforeSaved(){
 // 	$valor1=7,50;
	// $valor2=5,50;
	// $valor3=4,90;
	// $valor4*12,90;
 // 	$this->data['venta']['total']{
 // 		$this->data->(['cant_adulto']*$valor1)+(['cant_niño']*$valor2)+(['cant_discapacitado']*$valor3)+
 // 		(['numcombo']*$valor4)

 // 	}
 // 	return true;
 // 	#########
	// // $suma= $suma['total'];
	// // // $sum=0;
	// // // $this->data['cant_adulto']['cant_niño'][cant_discapacitado]
	// // $valor1=['data[Venta][cant_adulto]'];
	// // $valor2=['data[Venta][cant_niño]'];
	// // $valor3=['data[Venta][cant_discapacitado]'];
	// // $valor4=['data[Venta][numcombo]'];
	// // $total=($valor1*7,50)+($valor2*5,50)+($valor3*4,90)+($valor4*12,90);

public function prueba(){
		$this->Venta->recursive = 0;
		$this->set('ventas', $this->Paginator->paginate());
		
	}
	
	public function insertar(){
		$this->Venta->recursive = 0;
		$this->set('ventas', $this->Paginator->paginate());
		
	}
	public function conexion(){
		$this->Venta->recursive = 0;
		$this->set('ventas', $this->Paginator->paginate());
		
	}

}

