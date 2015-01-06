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
    <?php
        echo $this->fetch('content');
    ?>
</body>
</html>