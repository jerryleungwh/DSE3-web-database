    <?php
    mysql_connect('localhost', 'admin', 'passw0rd') or die(mysql_error());
    mysql_select_db("students") or die(mysql_error());

    $ud_ID = (int)$_POST["ID"];

    $ud_firstname = mysql_real_escape_string($_POST["ud_firstname"]);
    $ud_surname = mysql_real_escape_string($_POST["ud_surname"]);
    $ud_FBID = mysql_real_escape_string($_POST["ud_FBID"]);
    $ud_IMG = mysql_real_escape_string($_POST["ud_IMG"]);


    $query="UPDATE stokesley_students
            SET firstname = '$ud_firstname', surname = '$ud_surname', FBID = '$ud_FBID' 
            WHERE ID='$ud_ID'";


mysql_query($query)or die(mysql_error());
if(mysql_affected_rows()>=1){
    echo "<p>($ud_ID) Record Updated<p>";
}else{
    echo "<p>($ud_ID) Not Updated<p>";
}
?>