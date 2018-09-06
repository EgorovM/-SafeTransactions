<?

    $type = htmlspecialchars($_SESSION['type']);

    include('services/config.php');

    session_start();

    if(!empty($_SESSION['login'])){

        if($_POST['type'] == 'made'){

            if ($result = mysqli_query($link, "SELECT * FROM `orders` WHERE made = '{$_SESSION['login']}'")) {

                $row = mysqli_fetch_assoc($result);

                if(empty($row)){

                    exit('У вас нет сделок!');

                } else {



                }

            }

        } else
        if($_POST['type'] == 'got'){

            if ($result = mysqli_query($link, "SELECT * FROM `orders` WHERE got = '{$_SESSION['login']}' AND id = '{$id}' AND made = '{$sUser}'")) {

                $row = mysqli_fetch_assoc($result);

                if(empty($row)){

                    exit('У вас нет такой сделки!');

                } else {

                    $result = mysqli_query($link, "UPDATE `orders` SET `statusG`='{$status}',`payStatusG`='{$payStatus}' WHERE  got = '{$_SESSION['login']}' AND id = '{$id}' AND made = '{$sUser}'");

                }

            }

        } else
        if($_POST['type'] == 'do'){

            $result = mysqli_query($link, "INSERT INTO `orders`(`made`, `got`, `text`, `contacts`) VALUES ('{$_SESSION['login']}','{$sUser}','{$text}','{$contacts}')");

        }

    }

?>
