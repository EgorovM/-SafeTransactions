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

                    json_encode(mysqli_fetch_all($result));

                }

            }

        } else
        if($_POST['type'] == 'got'){

            if ($result = mysqli_query($link, "SELECT * FROM `orders` WHERE got = '{$_SESSION['login']}'")) {

                $row = mysqli_fetch_assoc($result);

                if(empty($row)){

                    exit('У вас нет сделок!');

                } else {

                    json_encode(mysqli_fetch_all($result));

                }

            }

        }

    }

?>
