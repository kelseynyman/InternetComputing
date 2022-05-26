
<?php
if(isset($_POST['submit'])) {
    echo "Thank you ".$_POST['username']."your password is ".$_POST['password'];
    echo "<br>";
    echo "Your membership length is ".$_POST['duration']."months.";
    echo "<br>";
    echo "Total charge is $".((int) $_POST['duration'])*30;
}
?>