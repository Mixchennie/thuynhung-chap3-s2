<?php // HEADER
    include("templates/header.php");
?>
<ul class="list-group">
<?php
   $name = isset($_POST["name"]) ? $_POST["name"] : "";
   $number = isset($_POST["number"]) ? $_POST["number"] :"";
   $email = isset($_POST["email"]) ? $_POST["email"] : "";
   $password = isset($_POST["password"]) ? $_POST["password"] : "";
   $message = isset($_POST["message"]) ? $_POST["message"] : "";
?>
    <li class="list-group-item"><?php echo $name; ?></li>
    <li class="list-group-item"><?php echo $email; ?></li>
    <li class="list-group-item"><?php echo $password; ?></li>
    <li class="list-group-item"><?php echo $number; ?></li>
    <li class="list-group-item"><?php echo $message; ?></li>

</ul>
<?php // FOOTER
    include("templates/footer.php")
    
 ?>