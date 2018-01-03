<?php
mysql_connect('localhost', 'root', 'root') or die(mysql_error());
mysql_select_db("test") or die(mysql_error());

$is = (int)$_GET['id'];
$query = mysql_query("SELECT * FROM pois WHERE id = '$is'") or die(mysql_error());

if(mysql_num_rows($query)>=1){
    while($row = mysql_fetch_array($query)) {
        $firstname = $row['firstname'];
        $surname = $row['surname'];
        $FBID = $row['FBID'];
        $IMGNU = $row['IMGNU'];
    }
?>
<form action="update.php" method="post">
<input type="hidden" name="ID" value="<?=$id;?>">
IMGNU: <input type="text" name="ud_img" value="<?=$IMGNU;?>"><br>
First Name: <input type="text" name="ud_firstname" value="<?=$firstname?>"><br>
Last Name: <input type="text" name="ud_surname" value="<?=$surname?>"><br>
FB: <input type="text" name="ud_FBID" value="<?=$FBID?>"><br>
<input type="Submit">
</form>
<?php
}else{
    echo 'No entry found. <a href="javascript:history.back()">Go back</a>';
}
?>