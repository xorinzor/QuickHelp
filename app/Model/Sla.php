<?php

/**
 * SLA = Service Level Agreement
 */
 
App::uses('AppModel', 'Model');

class Sla extends AppModel {
    public $hasMany = 'Ticket';
}