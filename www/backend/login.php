<?

    $login = htmlspecialchars($_POST['login']);
    $password = md5(htmlspecialchars($_POST['password']));

    include('services/config.php');

    if ($result = mysqli_query($link, "SELECT `id` FROM `users` WHERE login = '{$login}'")) {
        $row = mysqli_fetch_row($result);
        if(!empty($row)){

            if($result = mysqli_query($link, "SELECT `password` FROM `users` WHERE login = '{$login}'")){

                $row = mysqli_fetch_assoc($result);
                if($row['password'] == $password){
                    session_start();
                    $_SESSION['login'] = $login;
                    echo 'Вы залогинились!';
                } else {
                    echo 'Неверные данные!';
                }

            } else {

                exit('Ошибка. Попробуйте позже!');

            }

        } else {

            exit('Неверные данные');

        }
    }

?>
