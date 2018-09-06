<?

    $type = htmlspecialchars($_SESSION['type']);
    $id = htmlspecialchars($_SESSION['id']);
    $sUser = htmlspecialchars($_SESSION['sUser']);
    $prod = htmlspecialchars($_SESSION['prod']);
    $contacts = htmlspecialchars($_SESSION['contacts']);
    $text = htmlspecialchars($_SESSION['text']);
    $price = htmlspecialchars($_SESSION['price']);
    $status = htmlspecialchars($_SESSION['status']);
    $payStatus = htmlspecialchars($_SESSION['payStatus']);

    include('services/config.php');

    session_start();

    if(!empty($_SESSION['login'])){

        if($_POST['type'] == 'make'){

            if ($result = mysqli_query($link, "SELECT * FROM `orders` WHERE got = '{$sUser}' AND id = '{$id}' AND made = '{$_SESSION['login']}'")) {

                $row = mysqli_fetch_assoc($result);

                if(empty($row)){

                    exit('У вас нет такой сделки!');

                } else {

                    $result = mysqli_query($link, "UPDATE `orders` SET `statusM`='{$status}',`payStatusM`='{$payStatus}' WHERE  got = '{$_SESSION['login']}' AND id = '{$id}' AND made = '{$sUser}'");

                }

            }

        } else
        if($_POST['type'] == 'get'){

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
