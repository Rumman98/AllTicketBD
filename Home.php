<!DOCTYPE html>
<html>
<style>
.mySlides {display: none;}
img {vertical-align: middle;}

*{
    margin:0;
    padding:0;
    font-family:'Josefin Sans' , sans-serif;
}
.slideshow-container {
  max-width: 2000px;
  position: relative;
  margin: auto;
}
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:     #2f2626;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover {
  background-color:   #2f2626;
}
.active {
  background-color:   #2f2626;
}
.footer{
    bottom:0px;
    width:100vw;
    height:30vh;
    padding-top:10%;
}

.footer .outer{
    background-color: #2f2626;
    width:100vw;
    height:40vh;
    display:flex;
    align-items:center;
}

.footer .inner{
    width:30%;
    height:50%;
    margin-left:15%;
    border-right:4px solid #AAF7B5;
}

h4{
	 margin-left:8%;
}

.footer a{
    display:block;
    padding:2%;
    color:#FFFFFF;
}
.fa:hover {
    opacity: 0.7;
}




h4{
  color: white;
}
p{
  color: white;
}

</style>
<header>

<ul>
  <li><a class="active" href="Home.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="#about">Contact</a></li>
  <li><a href="admin_login.php">Admin panel</a></li>
</ul>


<div class="slideshow-container">

<div class="mySlides fade">
  <img src="content/all ticket.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="content/bus ticket.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="content/train ticket.jpg" style="width:100%">
    </div>

<div class="mySlides fade">
  <img src="content/movie ticket.jpg" style="width:100%">

</div>
  <div class="mySlides fade">
  <img src="content/plane ticket.jpg" style="width:100%">

</div>
<div class="mySlides fade">
  <img src="content/launch ticket.jpg" style="width:100%">

</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
<br>
</header>
<body>
  
<a href="plane.php"><img src="content/plane.png" style="width:323px;height:323px;"></a>
<a href="train.php"><img src="content/train.png" style="width:323px;height:323px;"></a>
<a href="bus.php"><img src="content/bus.png" style="width:323px;height:323px;"></a>
<a href="movie.php"><img src="content/movie.png" style="width:323px;height:323px;"></a>
<a href="launch.php"><img src="content/launch.png" style="width:323px;height:323px;"></a>
</body>

<footer>
<div class="footer">

        <div class="outer">
            <div class="inner">
                <center><h4>About us</h4></center>
                <p>All Ticket BD is a premium online booking portal which allows you to purchase tickets for various bus services, launch services, movies and events across the country. It also lets you purchase travel tickets in the simplest, easiest, smartest and most convenient way.</p>
            </div>

            
                <h4>Follow Us:</h4>
                <a href="#" class="fa-facebook"><img src="facebook.png" style="width:30px;height:30px;"></a>
                <a href="#" class="fa-twitter"><img src="twitter.png" style="width:30px;height:30px;"></a>
                <a href="#" class="fa-google"><img src="google.png" style="width:30px;height:30px;"></a>
                <a href="#" class="fa-reddit"><img src="reddit.png" style="width:30px;height:30px;"></a>
           
        </div>


    </div>
  </footer>
    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>

</html>
