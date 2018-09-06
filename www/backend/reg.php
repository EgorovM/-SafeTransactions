<?

    $login = htmlspecialchars($_POST['login']);
    $email = htmlspecialchars($_POST['email']);
    $password = md5(htmlspecialchars($_POST['password']));
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $number = htmlspecialchars($_POST['number']);
/*
    if( !( preg_match("/^([a-z0-9]*)$/i",$_POST['username'].$_POST['login'].$_POST['email'].$_POST['name'].$_POST['surname'].$_POST['last_name'].$_POST['number']))){
        exit('Можно использовать только латинские символы и цифры!');
    }
*/
    if(strlen($password)<8){
        exit('Минимальная длина пароля - 8 символов');
    }

    include('services/config.php');

    if ($result = mysqli_query($link, "SELECT `id` FROM `users` WHERE login = '{$login}'")) {
        $row = mysqli_fetch_row($result);
        if(empty($row)){

            if($result = mysqli_query($link, "INSERT INTO `users` (`login`, `password`, `name`, `surname`, `mname`, `email`, `number`, `avatar`) VALUES ('{$login}','{$password}','{$name}','{$surname}','{$last_name}','{$email}','{$number}','media/avatars/default.png')"))
            {
                session_start();
                $_SESSION['login'] = $login;
                echo 'Готово! Ваш логин:'.$login;

            } else {

                exit('Ошибка. Попробуйте позже!');

            }

        } else {

            exit('Такой логин уже занят!');

        }
    }

?>
