<?php require_once("../includes/dbconnection.php");?>
<?php require_once("../includes/session.php");?>

<?php require_once("../includes/functions.php");?>
<?php confirm_logged_in();?>

<?php 
$admin_set = find_all_admins();
?>

<?php $layout_context = "admin" ;?>
<?php include("../includes/layout/header.php"); ?>

<div id = "main">
<div id = "navigation">
&nbsp;
</div>
<div  id = "page">
<?php echo message(); ?>
<h2> Manage Admins </h2>
<table>
<tr>
<th style = "text-align : left; width : 200px;"> Username </th>
<th colspan = "2" style = "text-align : left; "> Actions </th>
</tr>
<?php while($admin = mysqli_fetch_assoc($admin_set)) {?>
<tr>
<td> <?php echo htmlentities($admin["username"]);?> </td>
<td> <a href = "edit_admins.php?id=<?php echo urldecode($admin["id"]);?>">EDIT</a></td>
<td> <a href = "delete_admins.php?id=<?php echo urldecode($admin["id"]);?>" onlick = "return confirm('Are you sure');">DELETE</a></td>
</tr>
<?php }?>
</table>
<br/>
<a href = "new_admins.php">Add new admin </a>
<hr/>
</div>
</div>
<?php include("../includes/layout/footer.php");?>
