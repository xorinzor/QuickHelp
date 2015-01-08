<h3><?php echo __('Add User'); ?></h3>

<?php 
    echo $this->Form->create('User');

    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->input('email');
    echo $this->Form->input('role', array(
        'options' => array('admin' => 'Admin', 'agent' => 'Agent', 'customer' => 'Customer')
    ));

    echo $this->Form->end(__('Submit')); 
?>