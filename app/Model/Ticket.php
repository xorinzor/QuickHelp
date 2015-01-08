<?php

App::uses('AppModel', 'Model');

class Ticket extends AppModel {
    public $hasOne = array(
        'Assignee' => array(
            'className' => 'User'
        ),
        'Customer' => array(
            'className' => 'User'
        )
    );
    
    public $hasMany = array(
        'Messages' => array(
            'className' => 'TicketMessage'
        )
    );
    
    public $hasAndBelongsToMany = array(
        'User' => array(
            'className' => 'User',
        )
    );
    
    public $validate = array(
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'email' => 'email',
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
}