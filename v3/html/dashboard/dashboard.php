<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Show Hide Elements Using Radio Buttons</title>
<style>
    .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    .red{ background: #ff0000; }
    .all{ background: #b0b0b0; }
    .green{ background: #228B22; }
    .blue{ background: #0000ff; }a
    label{ margin-right: 15px; }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
</head>
<?php
    if (isset($_POST['button'])) 
	{
        shell_exec("/bin/bash /var/www/html/test.sh");
    }
	 if (isset($_POST['button2'])) 
	{
        shell_exec("/bin/bash /var/www/html/test2.sh");
    }
	 if (isset($_POST['button3'])) 
	{
        shell_exec("/bin/bash /var/www/html/test3.sh");
    }
?>




<body>
    <div>
        <label><input type="radio" name="colorRadio" value="red"> Player 1</label>
        <label><input type="radio" name="colorRadio" value="green"> Player 2</label>
        <label><input type="radio" name="colorRadio" value="blue"> Player 3</label>
        <label><input type="radio" name="colorRadio" value="all"> All Players</label>
    </div>

    <div class="red box">You have selected <strong>Player 1</strong> <br>
        <br> Player 1 Is Located at Location 1 <br>
    <br><form method="post"><p><button name="button">Reboot Player 1</button></p></form><br>
        <br><br><form action="shellExecPing.php" method="post"><button name="website" value="localhost" type="submit">Player3</button></form></br>
        <br><button name="defaults1">Reset Player 1 Defaults</button><br>
    </div>

    <div class="green box">You have selected <strong>Player 2</strong>
                <br> Player 2 Is Located at Location 2 <br>
                <br><form method="post"><p><button name="button2">Reboot Player 2</button></p></form><br>
                <br><form action="shellExecPing.php" method="post"><button name="website" value="192.168.0.1" type="submit">Player3</button></form></br>
                <br><button name="defaults2">Reset Player 2 Defaults</button><br>
    </div>
    <div class="blue box">You have selected <strong>Player 3</strong>
                <br> Player 3 Is Located at Location 3 <br>
                <br><form method="post"><p><button name="button3">Reboot Player 3</button></p></form><br>
                <br><form action="shellExecPing.php" method="post"><button name="website" value="127.0.0.1" type="submit">Player3</button></form></br>
                <br><button name="defaults3">Reset Player 2 Defaults</button><br>
    </div>
      <div class="all box">You have selected <strong>All Players</strong><br>
        <br><button name="rebootall">Reboot Players</button><br>
        <br><button name="pingall">Set Emergency Message Players</button><br>
                <br><button name="defaultsall">Reset All Players to Defaults</button><br>
    </div>
</body>
</html>
