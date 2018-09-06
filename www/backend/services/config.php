<?
    $link = mysqli_connect("localhost","root","","savetrans");

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>
