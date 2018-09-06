<?

    $passport = htmlspecialchars($_POST['$passport']);

    include('services/config.php');

    session_start();

    if ($result = mysqli_query($link, "SELECT `id` FROM `users` WHERE login = '{$_SESSION['login']}'")) {
        $row = mysqli_fetch_row($result);
        if(!empty($row)){

            if(!empty($passport)){

                $result = mysqli_query($link, "UPDATE `users` SET `passport`='{$passport}' WHERE login = '{$_SESSION['login']}'");

            }

        } else {

            exit('Войдите в сеть!');

        }
    }

?>
