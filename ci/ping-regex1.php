<?php
    if(!preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/m', $_GET['ip'])){
        header('Location: /ci/403.php');
    }
?>
<pre>
<?php
    system("ping -c 4 ". $_GET['ip']);
?>
</pre>