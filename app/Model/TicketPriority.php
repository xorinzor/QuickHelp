<?php

App::uses('AppModel', 'Model');

class TicketPriority extends AppModel {
    public $belongsTo = 'Ticket';
}