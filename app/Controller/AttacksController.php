<?php
App::uses('AppController', 'Controller');
/**
 * Attacks Controller
 *
 * @property Attack $Attack
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AttacksController extends AppController {

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
		$this->Attack->recursive = 0;
		$this->set('attacks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Attack->exists($id)) {
			throw new NotFoundException(__('Invalid attack'));
		}
		$options = array('conditions' => array('Attack.' . $this->Attack->primaryKey => $id));
		$this->set('attack', $this->Attack->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Attack->create();
			if ($this->Attack->save($this->request->data)) {
				$this->Session->setFlash(__('The attack has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attack could not be saved. Please, try again.'));
			}
		}
		$wars = $this->Attack->War->find('list');
		$attackers = $this->Attack->Attacker->find('list');
		$defenders = $this->Attack->Defender->find('list');
		$this->set(compact('wars', 'attackers', 'defenders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Attack->exists($id)) {
			throw new NotFoundException(__('Invalid attack'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Attack->save($this->request->data)) {
				$this->Session->setFlash(__('The attack has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attack could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Attack.' . $this->Attack->primaryKey => $id));
			$this->request->data = $this->Attack->find('first', $options);
		}
		$wars = $this->Attack->War->find('list');
		$attackers = $this->Attack->Attacker->find('list');
		$defenders = $this->Attack->Defender->find('list');
		$this->set(compact('wars', 'attackers', 'defenders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Attack->id = $id;
		if (!$this->Attack->exists()) {
			throw new NotFoundException(__('Invalid attack'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Attack->delete()) {
			$this->Session->setFlash(__('The attack has been deleted.'));
		} else {
			$this->Session->setFlash(__('The attack could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
