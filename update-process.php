<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE menu set id='" . $_POST['id'] . "', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', city_name='" . $_POST['city_name'] . "' ,email='" . $_POST['email'] . "' WHERE userid='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM menu WHERE id='" . $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="menu.php">Employee List</a>
</div>
<form action="update.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">

Menu: <input type="text" name="menu" value="<?php echo $menu;?>">
<br>

<input type="Submit" value="Change">
</form>

</form>
</body>
</html>