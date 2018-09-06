<?

    $type = htmlspecialchars($_POST['type']);
    $id = htmlspecialchars($_POST['id']);
    $sUser = htmlspecialchars($_POST['sUser']);
    $prod = htmlspecialchars($_POST['prod']);
    $contacts = htmlspecialchars($_POST['contacts']);
    $text = htmlspecialchars($_POST['text']);
    $price = htmlspecialchars($_POST['price']);
    $status = htmlspecialchars($_POST['status']);
    $payStatus = htmlspecialchars($_POST['payStatus']);

    include('services/config.php');

    session_start();

    if(!empty($_SESSION['login'])){

        if($type == 'make'){

            if ($result = mysqli_query($link, "SELECT * FROM `orders` WHERE got = '{$sUser}' AND id = '{$id}' AND made = '{$_SESSION['login']}'")) {

                $row = mysqli_fetch_assoc($result);

                if(empty($row)){

                    exit('У вас нет такой сделки!');

                } else {

                    $result = mysqli_query($link, "UPDATE `orders` SET `statusM`='{$status}',`payStatusM`='{$payStatus}' WHERE  got = '{$_SESSION['login']}' AND id = '{$id}' AND made = '{$sUser}'");

                }

            }

        } else
        if($type == 'get'){

            if ($result = mysqli_query($link, "SELECT * FROM `orders` WHERE got = '{$_SESSION['login']}' AND id = '{$id}' AND made = '{$sUser}'")) {

                $row = mysqli_fetch_assoc($result);

                if(empty($row)){

                    exit('У вас нет такой сделки!');

                } else {

                    $result = mysqli_query($link, "UPDATE `orders` SET `statusG`='{$status}',`payStatusG`='{$payStatus}' WHERE  got = '{$_SESSION['login']}' AND made = '{$sUser}'");
                    $result = mysqli_query($link, "UPDATE `orders` SET `statusG`='{$status}',`payStatusG`='{$payStatus}' WHERE  made = '{$_SESSION['login']}' AND got = '{$sUser}'");

                }

            }

        } else
        if($type == 'do'){

            $result = mysqli_query($link, "INSERT INTO `orders`(`made`, `got`, `text`, `prod`, `contacts`) VALUES ('{$_SESSION['login']}','{$sUser}','{$text}','{$prod}','{$contacts}')");

        } else
        if($type == 'no'){

            $result = mysqli_query($link, "DELETE FROM `orders` WHERE got = '{$_SESSION['login']}' AND made = '{$sUser}'");
            $result = mysqli_query($link, "DELETE FROM `orders` WHERE made = '{$_SESSION['login']}' AND got = '{$sUser}'");


        } else
        if($type == 'yes'){

            $result = mysqli_query($link, "DELETE FROM `orders` WHERE got = '{$_SESSION['login']}' AND made = '{$sUser}'");
            $result = mysqli_query($link, "DELETE FROM `orders` WHERE made = '{$_SESSION['login']}' AND got = '{$sUser}'");

        }

    } else {

        echo 'Войдите в аккаунт!';

    }

?>
