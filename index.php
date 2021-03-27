<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Practice</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <style>
      body{
         background-image: url('/Images/bgr.jpg');
         background-repeat: no-repeat;
         background-size: cover;
      
      }
      @media screen and (max-width: 1230px)
      {
         .social{
            font-size: 20%;
         }
         .body{
            background-size: 30%;
         }
      }
      @font-face {
         
         src: url(/Fonts/Montserrat-Bold.ttf);
         font-family: Montserrat-Bold;
      }
      @font-face {
         font-family: Great Wishes;
         src: url(/Fonts/GreatWishes.otf);
      }
      h1{   
         margin-top: 46px;
         margin-left: 120px;
         color: rgb(255, 255, 255);
         font-size: 30px;
         font-family: Montserrat-Bold;
      }
      h2{
         
         color: aliceblue;
         font-size: 125px;
         text-align: center;
         font-family: Great Wishes;
         margin-bottom: 112px;
      }
      
      .numone{
         font-size: 60px;
         color: white;
         display: inline-block;
         font-weight: 800;
         font-family: Montserrat-Bold;
         margin: 0 0 -20px 120px;
      }
      span{
         font-size: 30px;
         color: thistle;
      }
      
      .social{
         color: white;
         margin-left: 60%;
         margin-top: 6%;
      }
      .end{
         color: white;
         display: flex;
         
      }
      .icon{
         font-size: 25px;
         padding: 12px;
      }
      .signup{
         background-color: rgb(59, 209, 209);
         padding: 10px 25px 10px 25px;
         border: none;
         border-radius: 20px;
         margin-left: 65%;
         color: rgba(255, 254, 254, 0.973);
         margin-top: 6px;
      }
      .triangle{
         width: 20px;
         padding-left: 10px;
      }
   </style>
</head>
<body>
   <div class="head">
      <h1>Travel & Co<img class="triangle" src="/Images/tg.png"><button class="signup">Sign Up</button></h1>
      
   </div>
   
   <h2>Travel</h2>
   <div class="end">
      <div class="numone">
         <p>03<span>/07</span></p>
      </div>
      <div class="social">
         <i class="fab fa-youtube icon"></i>
         <i class="fab fa-instagram icon"></i>
         <i class="fab fa-snapchat-ghost icon"></i>
      </div>
   </div>
   
</body>

</html>