<?php

App::uses('AppModel', 'Model');

class TicketStatus extends AppModel {
    public $belongsTo = 'Ticket';
}