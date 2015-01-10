<?php

App::uses('AppController', 'Controller');

class TicketsController extends AppController {
    public $helpers = array('Wysiwyg.Ck' => array('editor' => 'Ck'));
    
    public function index() {
        $this->Ticket->recursive = 0;
		$this->set('tickets', $this->paginate());
    }
    
    public function add() {
        if ($this->request->is('post')) {
            $this->Ticket->create();
            
			if ($this->Ticket->save($this->request->data)) {
			    $this->Session->setFlash(__('The ticket has been created'));
				return $this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
		}
		
		$this->set('customers', $this->Ticket->Customer->find('list'));
		$this->set('ticketStatuses', $this->Ticket->Status->find('list'));
    }
    
    public function view() {
        
    }
}