<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>

    <title>QuickHelp - <?php echo $title_for_layout; ?></title>

    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('login');

    echo $this->Html->script('jquery-1.11.1.min');
    echo $this->Html->script('bootstrap.min');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
    <div class="container">
        <?php
            $msg = $this->Session->flash('auth');
            if(!empty($msg)) {
                echo '<div class="alert alert-warning">' . $msg . '</div>';
            }
    
            $msg = $this->Session->flash();
            if(!empty($msg)) {
                echo '<div class="alert alert-warning">' . $msg . '</div>';
            }
        ?>
    
        <div id="login-wrapper">
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
</body>
</html>