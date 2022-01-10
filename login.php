<?php 

session_start(); 

include "db_connect.php";

    $usernin = $_POST['nin'];

    if (empty($usernin)) {

        header("Location: login.html?error=User nin is required");
        echo "<h4 style'color:red;'>NIN doesn't exist</h4>";
        exit();

    }else{

        $sql = "SELECT * FROM voters WHERE nin='$usernin'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['nin'] === $usernin) {

                echo "Logged in!";

                $_SESSION['username'] = $row['firstname'];

                $_SESSION['pollstation'] = $row['pollstation'];

                $_SESSION['yob'] = $row['yob'];

                header("Location: index.php");

                exit();

            }else{

                header("Location: login.html?error=Incorect User name or password");
                echo "<h4 style'color:red;'>NIN doesn't exist</h4>";

                exit();

            }

        }else{

            header("Location: login.html?error=Incorect User name or password");

            exit();

        }

    }

