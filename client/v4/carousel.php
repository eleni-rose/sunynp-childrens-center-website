<html>
  <head>
    
    <style>
   *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #ffffff;
}
.container{
    width: 85vmin;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    overflow: hidden;
   
}
.wrapper{
    width: 100%;
    display: flex;
    animation: slide 16s infinite;
}
@keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);
    }
    55%{
        transform: translateX(-200%);
    }
    75%{
        transform: translateX(-200%);
    }
    80%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-300%);
    }
}
img{
    width: 100%;
}

    </style>
  </head>

<body>
    <div class="container">
        <div class="wrapper">
          <img src="../img/banner.jpg">
          <img src="../img/banner2.jpg">
          <img src="../img/banner3.jpg">
          <img src="../img/banner4.jpg">
          <img src="../img/banner5.jpg">
        </div>
    </div>
</body>
</html>
  </body>
</html>
