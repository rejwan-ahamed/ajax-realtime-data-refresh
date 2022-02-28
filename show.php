<?php

include('connection.php');

$sql = "SELECT * FROM `namet`";

$query = mysqli_query($con, $sql);

// $fetch = mysqli_fetch_assoc($query);

$nr = mysqli_num_rows($query);

if ($nr > 0) {
    while ($fetch = mysqli_fetch_assoc($query)) {
?>
        <h3><?php echo $fetch['name']; ?></h3>
<?php
    }
}

?>