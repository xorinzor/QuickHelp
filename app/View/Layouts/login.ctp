<?php
$title = __d('QuickHelp');

$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());

?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>

    <title><?php echo $title . ' - ' . $title_for_layout; ?></title>

    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('login');

    echo $this->Html->script('bootstrap.min');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
    <?php
        echo $this->fetch('content');
    ?>
</body>
</html>
