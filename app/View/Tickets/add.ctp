<h3><?php echo __('Create Ticket'); ?></h3>

<?php 
    echo $this->Form->create('Ticket', array(
        'class' => 'form-horizontal', 
        'role' => 'form',
        'inputDefaults' => array(
            'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
            'div' => array('class' => 'form-group'),
            'class' => array('form-control'),
            'label' => array('class' => 'col-lg-2 control-label'),
            'between' => '<div class="col-lg-3">',
            'after' => '</div>',
            'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
        )
    ));
    
    echo $this->Form->input('Ticket.customer_id');
    
    echo $this->Form->input('Ticket.title');
    
    echo $this->Ck->textarea('Ticket.issue');
    
    echo $this->Form->input('Ticket.ticket_status_id');
    
    echo $this->Form->end(__('Create Ticket')); 
?>