<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Clara</title>
</head>
<body>
<?php
echo "<h3>Eh o grêmio!</h3>";
?>
<center>
<input id="msgBtn" type="submit" class="btn" onclick="showMessage()" value="Clique aqui!">
<p id="message" style="display:none">Parabéns Clara, tudo de bom! Até mais :)</p>
</center>

<script type="text/javascript">

function showMessage(){
    var message = document.getElementById("message");
    var msgBtn = document.getElementById("msgBtn");
    message.style.display = "block";
    msgBtn.style.display = "none";
}

</script>
</body>
</html>
