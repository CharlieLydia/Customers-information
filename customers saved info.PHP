
//form.php
<form action="save.php" method="post">
<input type="submit" value="save">
</form>
//save.php
<?php
$firstname = $_POST['firstname'];
$surname=$_POST['surname'];
$emailaddress=$_POST['emailaddress'];
$number=$_POST['number'];
$file=fopen('customers information.txt, 'a');
$data = "$firstname,$surname,$emailaddress,$number\n";
fwrite($file, $data);
fclose($file,);
header('Location: display.php);
?>
