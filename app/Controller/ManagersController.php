<?php
App::uses('AppController', 'Controller');
/**
 * Managers Controller
 *
 * @property Manager $Manager
 * @property PaginatorComponent $Paginator
 */
class ManagersController extends AppController {

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
		$this->Manager->recursive = 0;
		$this->set('managers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Manager->exists($id)) {
			throw new NotFoundException(__('Invalid manager'));
		}
		$options = array('conditions' => array('Manager.' . $this->Manager->primaryKey => $id));
		$this->set('manager', $this->Manager->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Manager->create();
			if ($this->Manager->save($this->request->data)) {
				$this->Session->setFlash(__('The manager has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manager could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$departments = $this->Manager->Department->find('list');
		$schedules = $this->Manager->Schedule->find('list');
		$this->set(compact('departments', 'schedules'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Manager->exists($id)) {
			throw new NotFoundException(__('Invalid manager'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Manager->save($this->request->data)) {
				$this->Session->setFlash(__('The manager has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manager could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Manager.' . $this->Manager->primaryKey => $id));
			$this->request->data = $this->Manager->find('first', $options);
		}
		$departments = $this->Manager->Department->find('list');
		$schedules = $this->Manager->Schedule->find('list');
		$this->set(compact('departments', 'schedules'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Manager->id = $id;
		if (!$this->Manager->exists()) {
			throw new NotFoundException(__('Invalid manager'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Manager->delete()) {
			$this->Session->setFlash(__('The manager has been deleted.'));
		} else {
			$this->Session->setFlash(__('The manager could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Manager->recursive = 0;
		$this->set('managers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Manager->exists($id)) {
			throw new NotFoundException(__('Invalid manager'));
		}
		$options = array('conditions' => array('Manager.' . $this->Manager->primaryKey => $id));
		$this->set('manager', $this->Manager->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Manager->create();
			if ($this->Manager->save($this->request->data)) {
				$this->Session->setFlash(__('The manager has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manager could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$departments = $this->Manager->Department->find('list');
		$schedules = $this->Manager->Schedule->find('list');
		$this->set(compact('departments', 'schedules'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Manager->exists($id)) {
			throw new NotFoundException(__('Invalid manager'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Manager->save($this->request->data)) {
				$this->Session->setFlash(__('The manager has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manager could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Manager.' . $this->Manager->primaryKey => $id));
			$this->request->data = $this->Manager->find('first', $options);
		}
		$departments = $this->Manager->Department->find('list');
		$schedules = $this->Manager->Schedule->find('list');
		$this->set(compact('departments', 'schedules'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Manager->id = $id;
		if (!$this->Manager->exists()) {
			throw new NotFoundException(__('Invalid manager'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Manager->delete()) {
			$this->Session->setFlash(__('The manager has been deleted.'));
		} else {
			$this->Session->setFlash(__('The manager could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
