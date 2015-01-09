<?php

App::uses('AppController', 'Controller');

class TicketsController extends AppController {
    public function index() {
        $this->Ticket->recursive = 0;
		$this->set('tickets', $this->paginate());
    }
    
    public function add() {
        
    }
}