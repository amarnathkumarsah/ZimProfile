<DOCTYPE HTML>
<?php
 include"head.php";
 include"header.php";
  ?>
 
 <head>
 
<style>
@import url('https://fonts.googleapis.com/css?family=Indie+Flower|Kurale|Pacifico');

 
*, *:before, *:after {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  margin: 0;
  padding: 0;
}


.envelope-wrapper {
  background: #ba1c61;
  height: 140px;
  top: 200px;
  position: relative;
  left: 40%;
  width: 206px;
}

.envelope-bottom1{
   width: 198px;
   height: 80px;
   background: #a41956;
   -webkit-transform: scaleY(1.3) perspective(3px) rotateX(2deg);
           transform: scaleY(1.3) perspective(3px) rotateX(2deg);
  -webkit-transform-origin: bottom;
      -ms-transform-origin: bottom;
          transform-origin: bottom;
   border-radius: 5px;
   border-top-right-radius: 16px 10px;
   border-top-left-radius: 16px 10px;
   margin-left: 4px;
  bottom: 26px;
  position: absolute;
  border: 4px solid #ba1c61;
  border-top-width: 8px;
}

.envelope-bottom2 {
   position: absolute;
   bottom: 0;
   width: 206px;
   height: 26px;
   background: #a41956;
   -webkit-transform: scaleY(1.3) perspective(10px) rotateX(2deg);
           transform: scaleY(1.3) perspective(10px) rotateX(2deg);
   -webkit-transform-origin: bottom;
  -ms-transform-origin: bottom;
      transform-origin: bottom; 
  border: 4px solid #ba1c61;
  border-top: 0;
  border-bottom: 0;
}


.envelope-top {  
  position: absolute;
  top: 6px;
  left: 58px;
  width: 154px;
  padding-bottom:100%;
  border-radius: 10px;
  overflow: hidden;
  -webkit-transform-origin:100% 0;
      -ms-transform-origin:100% 0;
          transform-origin:100% 0;
  -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
          transform: rotate(45deg);
}
.envelope-top.closed {  
  top: -3px;
  left: -154px;
  width: 150px;
  overflow: hidden;
  -webkit-transform: rotate(-135deg);
      -ms-transform: rotate(-135deg);
          transform: rotate(-135deg);
  z-index: 1;
  border-top: 2px solid darkred;
}
.envelope-top.closed:after {
  background: #ba1c61;
}
.envelope-top:after {
  content: "";
  position: absolute;
  top: 0; right:8px;
  width: 0px;
  height:206px;
  -webkit-transform-origin:inherit;
      -ms-transform-origin:inherit;
          transform-origin:inherit;
  -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
          transform: rotate(45deg);
  background: #ba1c61;
  border: 1px solid #a41a55;
  animation:  width 0.4s 0.5s ease forwards;
}


.envelope-left,
.envelope-right {
    width: 0;
    height: 0;
    border-top: 90px solid transparent;
    border-left: 102px solid #a41956;
    border-bottom: 50px solid transparent;
    position: absolute;
    left: 0;
}

.envelope-right {
    border-right: 103px solid #a41956;
    right: 0;
}


.envelope-letter {
    width: 90%;
    height: 100%;
    position: absolute;
    left: 5%;
    -webkit-perspective: 1000px;
            perspective: 1000px;
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
    -webkit-animation: letterTakeOut 1.5s 1s forwards ease-out;
           animation: letterTakeOut 1.5s 1s forwards ease-out;
}

.envelope-letter-content {
    position: relative;
    height: 100%;
    width: 100%;
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
    -webkit-perspective: 1000px;
            perspective: 1000px;
  
}

.letter-front, .letter-back{
    color: white;
    text-align: center;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    background: rgba(0, 0, 0, 0);
}

.envelope-letter .letter-front {
      animation: letterShow 0.1s 0.5s ease forwards, FlipFront 1.5s 1s ease forwards;
}
.envelope-letter .letter-back {
  background: rgba(0,0,0,1);
    -webkit-transform: rotateX(180deg);
            transform: rotateX(180deg); 
            animation: FlipBack 1.5s 1s ease forwards;
}

.envelope-letter .letter-back h2{
  font-family: 'Pacifico', cursive;
  padding-top: 40px;
}



@-webkit-keyframes letterTakeOut {
  0% {
    -webkit-transform: translateY(0%);
            transform: translateY(0%);
  }
  50% {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
    100% {
    -webkit-transform: translateY(-5%);
            transform: translateY(-5%);
    z-index: 9;
  }
}



@keyframes letterTakeOut {
  0% {
    -webkit-transform: translateY(0%);
            transform: translateY(0%);
  }
  50% {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
    100% {
    -webkit-transform: translateY(-5%);
            transform: translateY(-5%);
    z-index: 9;
  }
}

@-webkit-keyframes FlipFront {
  100% {
    -webkit-transform: rotateX(-180deg);
            transform: rotateX(-180deg);
  }
}

@keyframes FlipFront {
  100% {
    -webkit-transform: rotateX(-180deg);
            transform: rotateX(-180deg);
  }
}

@-webkit-keyframes FlipBack {
  100% {
    -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
  }
}

@keyframes FlipBack {
  100% {
    -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
  }
}


@keyframes top {
  100% {
    border-width: 100px;
  }
}

@keyframes width {
  100% {
     width: 200px;
  }
}

@keyframes letterShow {
  100% {
    background: rgba(0, 0, 0, 1)
  }
}

</style>
</head>
    
  <body>
  <div class="container">
  <h1>Thank You! for Contacting Us.<br><p> We Will respond to you   within 48 hrs. </p></h1>
 <div class="envelope-wrapper" style="margin-bottom: 200px;">
<div class="envelope-top"></div>
  <div class="envelope-letter">
    <div class="envelope-letter-content">
      <div class="letter-front">
        </div>
      <div class="letter-back">
       <h2 ><font color="green">Thank You!!!</font></h2>
      </div>
    </div>
  </div>
  <div class="envelope-left"></div>
  <div class="envelope-right"></div>
  <div class="envelope-bottom1">
</div>
  <div class="envelope-bottom2">
  </div>
</div>
</div>
</div>
   
  </body>
  
  
  
  
  <?php
 include"footer.php"; 
 include"script.php";
  ?>