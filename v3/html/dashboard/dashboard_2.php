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
    .green{ background: #228B22; }
    .blue{ background: #0000ff; }
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
<body>
    <div>
        <label><input type="radio" name="colorRadio" value="red"> Player 1</label>
        <label><input type="radio" name="colorRadio" value="green"> Player 2</label>
        <label><input type="radio" name="colorRadio" value="blue"> Player 3</label>
      <label><input type="radio" name="colorRadio" value="all"> All Players</label>
    </div>
    <div class="red box">You have selected <strong>Player 1</strong> so i am here
    <button name="button">Reboot Player</button>
    </div>
    <div class="green box">You have selected <strong>Player 2</strong> so i am here
    <button name="button">Reboot Player</button>
    </div>
    <div class="blue box">You have selected <strong>Player 3</strong> so i am here
    <button name="button">Reboot Player</button>
    </div>
      <div class="blue box">You have selected <strong>All Players</strong> so i am here
          <button name="button">Reboot Players</button>
          <button name="button">Set Emergency Message Players</button>
    </div>
</body>
</html>
