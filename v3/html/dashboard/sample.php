<?php
    if (isset($_POST['button']))
    {
        shell_exec("/bin/bash /var/www/html/test.sh");
    }
?>
<html>
<body>
    <form method="post">
    <p>
        <button name="button">Run Perl</button>
    </p>
    </form>
</body>
 
