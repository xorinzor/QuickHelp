<h3><?php echo __('User list');?></h3>

<?php

    $msg = $this->Session->flash('good');
    if(!empty($msg)) {
        echo '<div class="alert alert-success">' . $msg . '</div>';
    }

?>

<table class="table table-responsive table-hover">
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('username', 'Username'); ?></th>
            <th><?php echo $this->Paginator->sort('role', 'Role'); ?></th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
        if(count($users) == 0) {
            echo '<tr><td colspan="5">You have no users yet, <a href="'.$this->Html->url(array('controller' => 'servers', 'action' => 'add')).'">add one here</a></td></tr>';
        } else {
            foreach($users as $user) {
                $user = reset($user);
                echo '  <tr>
                            <td><a href="'.$this->Html->url(array('controller' => 'users', 'user' => $user['id'], 'action' => 'dashboard')).'">'.$user['username'].'</a></td>
                            <td>'.$user['role'].'</td>
                            <td><span class="label label-success">Active</span></td>
                            <td>
                                <div class="btn btn-info">'.__('Modify').'</div>
                                <div class="btn btn-danger">'.__('Delete').'</div>
                            </td>
                        </tr>';
            }
        }
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