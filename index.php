<?php 

session_start();

if (isset($_SESSION['username'])) {

 ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    

</head>

<body>
 <main>
    <div class="time-box">
    <?php
          
          echo ' <h3 class="date"> Today is ' . date("d/m/Y") . "<br>";
     
     ?>
     <h4>Time remaining to DDay</h4>
       <div class="time">
       <p id="days"></p>
          <p id="hours"></p>
          <p id="mins"></p>
          <p id="secs"></p>
          <h2 id="end"></h2>
       </div>
    </div>
     
     <div class="hero">
          <div>
          <h1 id="greet">, </h1> 
          <h1><?php echo $_SESSION['username']; ?></h1>

               <?php
                    $age = 2022 -$_SESSION['yob'];
                    if($age>18) {
                         echo '<h2>You are eligible to vote, please visit your polling station on the voting day.</h2><br>';
                         echo "<h4> Your polling station is: </h4><br>";
                         echo  $_SESSION['pollstation'];

                    }else {
                         echo '<h2> You are still below 18 years, the laws of uganda dont allow you to vote </h2> <br>';
                    }
     
               ?>
          </div>
          <div>
              <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="476" height="401.80512" viewBox="0 0 476 401.80512" xmlns:xlink="http://www.w3.org/1999/xlink"><path id="ad4b1b16-27d0-4c9f-840a-ee213421f5fc-168" data-name="Path 704" d="M615.624,368.70255a10.52039,10.52039,0,0,0-1.072,1.264l-49.562-1.751-5.669-10.631-17.162,6.458,8.206,19.8a8,8,0,0,0,8.263,4.889l56.085-6.158a10.50026,10.50026,0,1,0,.911-13.866Z" transform="translate(-362 -249.09744)" fill="#a0616a"/><circle cx="158.70972" cy="39.00476" r="28.93994" fill="#2f2e41"/><ellipse cx="491.76978" cy="266.14776" rx="11.97515" ry="8.98136" transform="translate(-406.15885 176.58918) rotate(-45)" fill="#2f2e41"/><ellipse cx="539.86034" cy="258.60415" rx="8.98136" ry="11.97515" transform="translate(-272.02644 404.38286) rotate(-66.86956)" fill="#2f2e41"/><path d="M562.816,366.24378l-22.20855,9.93086a4.81687,4.81687,0,0,1-6.60409-3.09631l-6.54916-23.35316A13.37737,13.37737,0,0,1,551.91,338.87526l13.00137,20.38209a4.81688,4.81688,0,0,1-2.09545,6.98643Z" transform="translate(-362 -249.09744)" fill="#ccc"/><path d="M460.24839,463.95447a10.74273,10.74273,0,0,0,7.44458-14.69442L507.2953,359.788l-22.65457-5.706-31.80418,89.74234a10.80091,10.80091,0,0,0,7.41184,20.13012Z" transform="translate(-362 -249.09744)" fill="#a0616a"/><polygon points="87.453 377.033 98.973 381.227 120.634 338.789 103.631 332.599 87.453 377.033" fill="#a0616a"/><path d="M444.47356,628.08208h38.53073a0,0,0,0,1,0,0V642.969a0,0,0,0,1,0,0H459.36042a14.88686,14.88686,0,0,1-14.88686-14.88686v0A0,0,0,0,1,444.47356,628.08208Z" transform="translate(320.06244 1142.25962) rotate(-159.99348)" fill="#2f2e41"/><path d="M476.70164,601.70844a4.77367,4.77367,0,0,1-2.04387-.45889l-13.23927-6.2709A4.79859,4.79859,0,0,1,458.95,588.989l37.36376-103.46817a4.81657,4.81657,0,0,1,8.66077-.84149l19.76235,32.93709a4.82207,4.82207,0,0,1,.052,4.86807l-43.88711,76.802A4.84031,4.84031,0,0,1,476.70164,601.70844Z" transform="translate(-362 -249.09744)" fill="#2f2e41"/><circle cx="159.62757" cy="45.91339" r="24.56103" fill="#a0616a"/><path d="M556.3746,406.68041l-43.488-11.95954-23.12961-46.25868a14.576,14.576,0,0,1,13.03754-21.09462h34.59941a14.557,14.557,0,0,1,9.73013,3.72135c9.28142,8.3145,28.78088,32.2848,9.43874,75.17336Z" transform="translate(-362 -249.09744)" fill="#ccc"/><path d="M501.93428,375.7895l-22.03343-10.31357a4.81688,4.81688,0,0,1-1.97428-7.02164L491.317,338.2316a13.37737,13.37737,0,0,1,24.198,11.41337L508.591,372.8079a4.81687,4.81687,0,0,1-6.65667,2.9816Z" transform="translate(-362 -249.09744)" fill="#ccc"/><polygon points="166.591 388.629 178.851 388.629 184.684 341.341 166.589 341.342 166.591 388.629" fill="#a0616a"/><path d="M525.96456,634.22322h38.53073a0,0,0,0,1,0,0v14.88687a0,0,0,0,1,0,0H540.85142a14.88686,14.88686,0,0,1-14.88686-14.88686v0A0,0,0,0,1,525.96456,634.22322Z" transform="translate(728.48914 1034.21099) rotate(179.99738)" fill="#2f2e41"/><path d="M533.2207,619.70682a4.79132,4.79132,0,0,1-4.69769-3.81439c-3.524-16.60391-21.82634-101.6514-36.11121-145.4588-14.53417-44.57049,10.2183-64.87171,15.32784-68.48853a3.76282,3.76282,0,0,0,1.25282-1.51258l3.7122-8.16607a4.83434,4.83434,0,0,1,4.39715-2.82655h.03006c27.82859.16621,37.184,8.93856,39.91435,12.70277a4.761,4.761,0,0,1,.75368,3.92623l-17.60768,72.64473a3.75008,3.75008,0,0,0-.07291,1.37669l17.51831,131.89992a4.81783,4.81783,0,0,1-4.22285,5.42l-19.62855,2.26417A4.92489,4.92489,0,0,1,533.2207,619.70682Z" transform="translate(-362 -249.09744)" fill="#2f2e41"/><path d="M495.81965,279.562a33.40479,33.40479,0,0,0,19.09068,5.89985,20.4708,20.4708,0,0,1-8.11361,3.338,67.35879,67.35879,0,0,0,27.514.1546,17.80739,17.80739,0,0,0,5.75977-1.97824,7.28919,7.28919,0,0,0,3.55521-4.7547c.60365-3.44852-2.08348-6.58158-4.876-8.69308a35.96735,35.96735,0,0,0-30.22446-6.03968c-3.37627.87272-6.75853,2.34726-8.9515,5.05866s-2.84258,6.8915-.75323,9.68352Z" transform="translate(-362 -249.09744)" fill="#2f2e41"/><polygon points="422.116 307.116 422.116 400.848 397.802 400.145 273.41 400.145 273.41 323.678 309.706 307.116 422.116 307.116" fill="#ccc"/><polygon points="422.116 307.116 422.116 307.408 413.387 313.25 397.802 323.678 273.41 323.678 309.706 307.116 422.116 307.116" opacity="0.1" style="isolation:isolate"/><polygon points="422.116 307.116 422.116 400.848 397.802 400.145 397.978 323.501 413.387 313.25 421.975 307.116 422.116 307.116" opacity="0.1" style="isolation:isolate"/><polygon points="389.344 317.158 313.582 317.158 319.22 313.987 391.811 313.987 389.344 317.158" fill="#fff"/><path id="f35e270b-7f5a-4111-9d26-c6e282c8c57d-169" data-name="Path 717" d="M837,650.90256H363a1,1,0,0,1,0-2H837a1,1,0,0,1,0,2Z" transform="translate(-362 -249.09744)" fill="#e6e6e6"/><path d="M711.05932,385.72878h-82a9.01031,9.01031,0,0,1-9-9v-89a9.01031,9.01031,0,0,1,9-9h82a9.01031,9.01031,0,0,1,9,9v89A9.01031,9.01031,0,0,1,711.05932,385.72878Zm-82-105a7.00787,7.00787,0,0,0-7,7v89a7.00787,7.00787,0,0,0,7,7h82a7.00787,7.00787,0,0,0,7-7v-89a7.00787,7.00787,0,0,0-7-7Z" transform="translate(-362 -249.09744)" fill="#3f3d56"/><path d="M645.57434,315.72878h-8a4.505,4.505,0,0,1-4.5-4.5v-8a4.505,4.505,0,0,1,4.5-4.5h8a4.505,4.505,0,0,1,4.5,4.5v8A4.505,4.505,0,0,1,645.57434,315.72878Z" transform="translate(-362 -249.09744)" fill="#6c63ff"/><path d="M645.57434,340.72878h-8a4.505,4.505,0,0,1-4.5-4.5v-8a4.505,4.505,0,0,1,4.5-4.5h8a4.505,4.505,0,0,1,4.5,4.5v8A4.505,4.505,0,0,1,645.57434,340.72878Z" transform="translate(-362 -249.09744)" fill="#ccc"/><path d="M704.0443,310.86574H666.69493a3.00328,3.00328,0,0,1-3-3v-1.27392a3.00328,3.00328,0,0,1,3-3H704.0443a3.00328,3.00328,0,0,1,3,3v1.27392A3.00328,3.00328,0,0,1,704.0443,310.86574Z" transform="translate(-362 -249.09744)" fill="#6c63ff"/><path d="M704.0443,335.86574H666.69493a3.00328,3.00328,0,0,1-3-3v-1.27392a3.00328,3.00328,0,0,1,3-3H704.0443a3.00328,3.00328,0,0,1,3,3v1.27392A3.00328,3.00328,0,0,1,704.0443,335.86574Z" transform="translate(-362 -249.09744)" fill="#ccc"/><path d="M645.57434,365.72878h-8a4.505,4.505,0,0,1-4.5-4.5v-8a4.505,4.505,0,0,1,4.5-4.5h8a4.505,4.505,0,0,1,4.5,4.5v8A4.505,4.505,0,0,1,645.57434,365.72878Z" transform="translate(-362 -249.09744)" fill="#ccc"/><path d="M704.0443,360.86574H666.69493a3.00328,3.00328,0,0,1-3-3v-1.27392a3.00328,3.00328,0,0,1,3-3H704.0443a3.00328,3.00328,0,0,1,3,3v1.27392A3.00328,3.00328,0,0,1,704.0443,360.86574Z" transform="translate(-362 -249.09744)" fill="#ccc"/></svg>
          </div>
     </div>
                  <button class="btn">
                  <a href="logout.php">Logout</a>
               </button>
 </main>
  <footer>
       <span>Designed and built with &#128151; by Group B</span>
  </footer>
     <script src="index.js"></script>
</body>

</html>

<?php 

}else{

     header("Location: signup.html");

     exit();

}

 ?>