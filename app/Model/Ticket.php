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
        'Priority' => array(
            'className' => 'TicketPriority',
            'foreignKey' => 'ticket_priority_id'
        ),
        'Assignee' => array(
            'className' => 'User',
            'foreignKey' => 'assignee_id'
        ),
        'Customer' => array(
            'className' => 'User',
            'foreignKey' => 'customer_id'
        ),
        'Department' => array(
            'className' => 'Department',
            'foreignKey' => 'department_id'
        ),
        'Sla' => array(
            'className' => 'Sla',
            'foreignKey' => 'sla_id'
        )
    );
    
    public $validate = array(
        'title' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A title is required'
            )
        ),
        'issue' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please describe your issue'
            )
        ),
        'customer_id' => array(
            'required' => array(
                'rule' => array('numeric'),
                'message' => 'Please assign the customer ID'
            )
        )
    );
}