<h3><?php echo __('Ticket list'); ?></h3>

<?php
    $msg = $this->Session->flash('good');
    if(!empty($msg)) {
        echo '<div class="alert alert-success">' . $msg . '</div>';
    }

    echo $this->Html->link(
        'Create Ticket',
        array(
            'controller' => 'tickets',
            'action' => 'add',
        ),
        array('class' => 'btn btn-warning')
    );
?>

<table class="table table-responsive table-hover">
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('title', 'Title'); ?></th>
            <th><?php echo $this->Paginator->sort('customer', 'Customer'); ?></th>
            <th><?php echo $this->Paginator->sort('assignee', 'Assignee'); ?></th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
        if(count($tickets) == 0):
            echo '<tr><td colspan="5">No open tickets available</a></td></tr>';
        else:
            foreach($tickets as $ticket):
    ?>
            <tr>
                <td><?php echo $this->Html->link($ticket['Ticket']['title'], array('controller' => 'tickets', 'ticket' => $ticket['Ticket']['id'], 'action' => 'view')); ?></td>
                <td><?php echo $this->Html->link($ticket['Customer']['firstname'].' '.$ticket['Customer']['lastname'], array('controller' => 'users', 'user' => $ticket['Customer']['id'], 'action' => 'view')); ?></td>
                <td>
                    <?php
                        if(empty($ticket['Assignee']['id'])):
                            echo '<i>Unassigned</i>';
                        else:
                            echo $this->Html->link($ticket['Assignee']['firstname'].' '.$ticket['Assignee']['lastname'], array('controller' => 'users', 'user' => $ticket['Assignee']['id'], 'action' => 'view'));
                        endif;
                    ?>
                </td>
                <td><span class="label <?php echo $ticket['Status']['class']; ?>"><?php echo $ticket['Status']['title']; ?></span></td>
                <td>
                    <?php
                        echo $this->Html->link(
                            __('View'),
                            array(
                                'controller' => 'tickets',
                                'action' => 'add',
                            ),
                            array('class' => 'btn btn-info action')
                        );
                        
                        echo $this->Html->link(
                            __('Assign to you'),
                            array(
                                'controller' => 'tickets',
                                'action' => 'assign',
                                'ticket' => $ticket['Ticket']['id']
                            ),
                            array('class' => 'btn btn-warning action')
                        );
                    ?>
                </td>
            </tr>
    <?php
            endforeach;
        endif;
    ?>
    </tbody>
</table>

<?php
    echo $this->Paginator->numbers(array(
        'before' => '<ul class="pagination">',
        'separator' => '',
        'currentClass' => 'active',
        'tag' => 'li',
        'after' => '</ul>'
    ));
?>