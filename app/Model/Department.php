<?php

App::uses('AppModel', 'Model');

class Department extends AppModel {
    public $hasMany = 'Ticket';
}