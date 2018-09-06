<?

    $login = htmlspecialchars($_POST['login']);
    $email = htmlspecialchars($_POST['email']);
    $password = md5(htmlspecialchars($_POST['password']));
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $shop = htmlspecialchars($_POST['shop']);
    $about = htmlspecialchars($_POST['about']);
    $number = htmlspecialchars($_POST['number']);
    $contacts = htmlspecialchars($_POST['contacts']);
    $newPassword = htmlspecialchars($_POST['newPassword']);

    include('services/config.php');

    session_start();

    if ($result = mysqli_query($link, "SELECT `id` FROM `users` WHERE login = '{$_SESSION['login']}'")) {
        $row = mysqli_fetch_row($result);
        if(!empty($row)){

            if(!empty($email)){

                $result = mysqli_query($link, "UPDATE `users` SET `email`='{$email}' WHERE login = '{$_SESSION['login']}'");

            }
            if(!empty($name)){

                $result = mysqli_query($link, "UPDATE `users` SET `name`='{$name}' WHERE login = '{$_SESSION['login']}'");

            }
            if(!empty($surname)){

                $result = mysqli_query($link, "UPDATE `users` SET `surname`='{$surname}' WHERE login = '{$_SESSION['login']}'");

            }
            if(!empty($last_name)){

                $result = mysqli_query($link, "UPDATE `users` SET `mname`='{$last_name}' WHERE login = '{$_SESSION['login']}'");

            }
            if(!empty($shop)){

                $result = mysqli_query($link, "UPDATE `users` SET `shop`='{$shop}' WHERE login = '{$_SESSION['login']}'");

            }
            if(!empty($about)){

                $result = mysqli_query($link, "UPDATE `users` SET `about`='{$about}' WHERE login = '{$_SESSION['login']}'");

            }
            if(!empty($number)){

                $result = mysqli_query($link, "UPDATE `users` SET `number`='{$number}' WHERE login = '{$_SESSION['login']}'");

            }
            if(!empty($contacts)){

                $result = mysqli_query($link, "UPDATE `users` SET `contacts`='{$contacts}' WHERE login = '{$_SESSION['login']}'");

            }
            if(!empty($newPassword)){
                if(strlen($newPassword)<8){
                    exit('Минимальная длина пароля - 8 символов');
                }

                $newPassword = md5($newPassword);

                if($result = mysqli_query($link, "SELECT `password` FROM `users` WHERE login = '{$login}'")){
                    $row = mysqli_fetch_assoc($result);
                    if($row['password'] == $password){
                        $result = mysqli_query($link, "UPDATE `users` SET `password`='{$newPassword}' WHERE login = '{$_SESSION['login']}'");
                    } else {
                        echo 'Неверные данные!';
                    }
                } else {

                    exit('Ошибка. Попробуйте позже!');

                }
            }

        } else {

            exit('Войдите в сеть!');

        }
    }

?>
