<?php

App::uses('AppModel', 'Model');

class TicketMessage extends AppModel {
    public $belongsTo = 'Ticket';
}