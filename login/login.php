<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Login Admin</title>
    <style type="text/css">
        @keyframes bg-pan-top{
            0%{
                background-color: rgb(0, 179, 255);
                background-position: 50% 100%;
            }
            50%{
                background-color: #ffd000;
                background-position: 50% 0%;
            }
            100%{
                background-color: #ae00ff;
                background-position: 50% 100%;
            }
        }
        .bg-pan-top{
            -webkit-animation: bg-pan-top 8s infinite both;
            animation: bg-pan-top 8s infinite both;
        }
        @font-face {
            font-family: 'TiltNeon' ;
            src: url(assets/font/Tilt_Neon/static/TiltNeon-Regular.ttf);
        }
        @font-face {
            font-family: 'ClimateC';
            src: url(assets/font/Climate_Crisis/static/ClimateCrisis-Regular.ttf);
        }
        @font-face {
            font-family: 'Anton';
            src: url(assets/font/Anton/Anton-Regular.ttf);
        }
        @font-face {
            font-family: 'Kanit';
            src: url(assets/font/Kanit/Kanit-Regular.ttf);
        }
        @font-face {
            font-family: 'Lobster';
            src: url(assets/font/Lobster/Lobster-Regular.ttf);
        }
        @font-face {
            font-family: 'DancingS';
            src: url(assets/font/Dancing_Script/static/DancingScript-Regular.ttf);
        }
        @font-face {
            font-family: 'Mynerve';
            src: url(assets/font/Mynerve/Mynerve-Regular.ttf);
        }
        @font-face {
            font-family: 'Oswald';
            src: url(assets/font/Oswald/static/Oswald-Regular.ttf);
        }
        @font-face {
            font-family: 'TiltWarp';
            src: url(assets/font/Tilt_Warp/static/TiltWarp-Regular.ttf);
        }
        @font-face {
            font-family: 'Poppins';
            src: url(assets/font/font-poppins/Poppins-Regular.ttf);
        }
        form{
            border-radius: 2rem;
            font-family: 'poppins';
            /* background: url(assets/background/bg1.jpg);
            background-size: cover;
            background-attachment: scroll; */
            background-color: rgb(0, 0, 0, 50%);
            /* background-color: white; */
        }
        .footer{
            font-family: 'tiltwarp';
        }
        @media (max-width: 425px){
            .gambar{
                width: 40%;
                margin: auto;
                background-color: white;
                /* border: 2px solid; */
                border-radius: 20%;
            }
            .data{
                padding: 7%;
                font-size: 85%;
            }
        }
    </style>
</head>
<body class="bg-pan-top">
    
    <div class="container p-2 mb-auto">
        <form action="" class="m-auto mt-4 w-auto rounded-4" method="POST">
            <h3 class="text-white bg-dark  p-2 ps-3 border-bottom border-2 border-white">Login Admin</h3>
            <div class="row gap-2 p-3">
                <div class="col-md-4">
                    <div class="gambar">
                        <img src="image/logoSD.png" class="w-100 p-3 mb-2" style="border-radius: 5%;" alt="">
                    </div>
                </div>
                <div class="col ms-auto data">
                    <div class="">                        
                        <div class="mb-3">
                            <label class="form-label text-white" for="username" style="display: block;">Username :</label>
                            <input type="text" class="form-control bg-white border-1" name="username" id="username">
                        </div>
                        <div class="mb-5">
                            <label class="form-label text-white" for="password" style="display: block;">Password :</label>
                            <input type="password" class="form-control bg-white border-1" name="password" id="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary rounded-pill w-50 border-0 fw-bold mb-3" data-bs-target="" 
                            data-bs-toggle="modal" style="background: linear-gradient(120deg,#a800a8,#00c8ff);box-shadow: 3px 3px 0 white;" name="login">Login!</button>
                        </div>
                
                        <footer class="main-footer">
                            <p class="text-center text-white"><small class="footer">- Support By ZisSensei -</small></p>
                        </footer>
                    </div>
                </div>                
            </div>
        </form>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>