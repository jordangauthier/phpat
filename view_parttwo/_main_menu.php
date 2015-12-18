<?php
    $liTab = array(
        'accueil',
        'inscription',
        'dashboard',
        'conntact'
    );
?>

<ul>
    <?php
        foreach($liTab as $element)
        {
            echo '<li>'.'<a href="">'.$element.'</a>'.'</li>';
        }
    ?>
</ul>
