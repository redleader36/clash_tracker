<?php
App::uses('AppController', 'Controller');
/**
 * Wars Controller
 *
 * @property War $War
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class WarsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->War->recursive = 0;
		$this->set('wars', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->War->exists($id)) {
			throw new NotFoundException(__('Invalid war'));
		}
		$options = array('conditions' => array('War.' . $this->War->primaryKey => $id));
		$this->set('war', $this->War->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//
			$this->War->create();
			//$this->request->data is the array from the post
			if ($this->War->save($this->request->data)) {
				$this->Session->setFlash(__('The war has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The war could not be saved. Please, try again.'));
			}
		}
		$awayClans = $this->War->AwayClan->find('list');
		$homeClans = $this->War->HomeClan->find('list');
		$this->set(compact('awayClans', 'homeClans'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->War->exists($id)) {
			throw new NotFoundException(__('Invalid war'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->War->save($this->request->data)) {
				$this->Session->setFlash(__('The war has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The war could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('War.' . $this->War->primaryKey => $id));
			$this->request->data = $this->War->find('first', $options);
		}
		$awayClans = $this->War->AwayClan->find('list');
		$homeClans = $this->War->HomeClan->find('list');
		$this->set(compact('awayClans', 'homeClans'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->War->id = $id;
		if (!$this->War->exists()) {
			throw new NotFoundException(__('Invalid war'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->War->delete()) {
			$this->Session->setFlash(__('The war has been deleted.'));
		} else {
			$this->Session->setFlash(__('The war could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
