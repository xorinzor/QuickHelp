<?php

App::uses('AppModel', 'Model');

class Ticket extends AppModel {
    public $hasMany = array(
        'Messages' => array(
            'className' => 'TicketMessage'
        )
    );

    public $belongsTo = array(
        'Status' => array(
            'className' => 'TicketStatus',
            'foreignKey' => 'ticket_status_id'
        ),
        'Assignee' => array(
            'className' => 'User',
            'foreignKey' => 'assignee_id'
        ),
        'Customer' => array(
            'className' => 'User',
            'foreignKey' => 'customer_id'
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