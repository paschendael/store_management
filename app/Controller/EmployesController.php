<?php
App::uses('AppController', 'Controller');
/**
 * Employes Controller
 *
 * @property Employe $Employe
 * @property PaginatorComponent $Paginator
 */
class EmployesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
        public function beforeFilter()
	{
            if ($this->Session->check('Config.language')) {
            Configure::write('Config.language', $this->Session->read('Config.language'));
            }

	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employe->recursive = 0;
		$this->set('employes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employe->exists($id)) {
			throw new NotFoundException(__('Invalid employe'));
		}
		$options = array('conditions' => array('Employe.' . $this->Employe->primaryKey => $id));
		$this->set('employe', $this->Employe->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employe->create();
			if ($this->Employe->save($this->request->data)) {
				$this->Session->setFlash(__('The employe has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
                            // check if file has been uploaded, if so get the file path
				if (!empty($this->Employe->data['Employe']['filepath']) && is_string($this->Employe->data['Employe']['filepath'])) {
					$this->request->data['Employe']['filepath'] = $this->Employe->data['Employe']['filepath'];
                                }
				$this->Session->setFlash(__('The employe could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$schedules = $this->Employe->Schedule->find('list');
		$this->set(compact('schedules'));
	}
        
        

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Employe->exists($id)) {
			throw new NotFoundException(__('Invalid employe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Employe->save($this->request->data)) {
				$this->Session->setFlash(__('The employe has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employe could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employe.' . $this->Employe->primaryKey => $id));
			$this->request->data = $this->Employe->find('first', $options);
		}
		$schedules = $this->Employe->Schedule->find('list');
		$this->set(compact('schedules'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Employe->id = $id;
		if (!$this->Employe->exists()) {
			throw new NotFoundException(__('Invalid employe'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employe->delete()) {
			$this->Session->setFlash(__('The employe has been deleted.'));
		} else {
                    // check if file has been uploaded, if so get the file path
				if (!empty($this->Employe->data['Employe']['filepath']) && is_string($this->Employe->data['Employe']['filepath'])) {
					$this->request->data['Employe']['filepath'] = $this->Employe->data['Employe']['filepath'];
				}
			$this->Session->setFlash(__('The employe could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Employe->recursive = 0;
		$this->set('employes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Employe->exists($id)) {
			throw new NotFoundException(__('Invalid employe'));
		}
		$options = array('conditions' => array('Employe.' . $this->Employe->primaryKey => $id));
		$this->set('employe', $this->Employe->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Employe->create();
			if ($this->Employe->save($this->request->data)) {
				$this->Session->setFlash(__('The employe has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employe could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$schedules = $this->Employe->Schedule->find('list');
		$this->set(compact('schedules'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Employe->exists($id)) {
			throw new NotFoundException(__('Invalid employe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Employe->save($this->request->data)) {
				$this->Session->setFlash(__('The employe has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employe could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employe.' . $this->Employe->primaryKey => $id));
			$this->request->data = $this->Employe->find('first', $options);
		}
		$schedules = $this->Employe->Schedule->find('list');
		$this->set(compact('schedules'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Employe->id = $id;
		if (!$this->Employe->exists()) {
			throw new NotFoundException(__('Invalid employe'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employe->delete()) {
			$this->Session->setFlash(__('The employe has been deleted.'));
		} else {
			$this->Session->setFlash(__('The employe could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
