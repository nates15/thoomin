
<style>
#body {
  font-family: 'Inconsolata', monospace;
}
.boxy {
  position: absolute;
  font-family: 'Julius Sans One', sans-serif;
  font-size: 14px;
  opacity: 0.4;
  color: white;
   right: 6px;
   top:4px;
}
.bg-mango:hover {
background-color:#1B1B1D; color:#ffeaa7; border: solid 1px #ffeaa7; width:95%; width:95%; border-radius: 0px; -moz-border-radius: 0px; -webkit-border-radius: 0px;
}
.bg-mango{
color: #ffeaa7; width:95%; border-radius: 0px; -moz-border-radius: 0px; -webkit-border-radius: 0px;
  }

    #pg {
      width:100%;
      height:100%;
  	  position: fixed;
  	  z-index: -1;
  	  opacity: 0.25;
    }

    ::-webkit-scrollbar { width: 8px; height: 3px;}
    ::-webkit-scrollbar-button {  background-color: #666; }
    ::-webkit-scrollbar-track {  background-color: #646464;}
    ::-webkit-scrollbar-track-piece { background-color: #000;}
    ::-webkit-scrollbar-thumb { height: 50px; background-color: #666; border-radius: 3px;}
    ::-webkit-scrollbar-corner { background-color: #646464;}}
    ::-webkit-resizer { background-color: #666;}

    .bubbles {
    display: inline-block;
    position: relative;
    }

    .bubbles h1 {
    position: relative;
    margin: 1em 0 0;
    color: #ffeaa7;
    z-index: 2;
    }

    .individual-bubble {
    position: absolute;
    border-radius: 100%;
    bottom: 10px;
    background-color: #ffeaa7;
    z-index: 1;
    }

    .pace {
      -webkit-pointer-events: none;
      pointer-events: none;

      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    .pace-inactive {
      display: block;
    }

    .pace .pace-progress {
      background: #ffeaa7;
      position: fixed;
      z-index: 2000;
      top: 0;
      right: 100%;
      width: 100%;
      height: 2px;
    }
</style>
<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
<script src='https://boxy.design/js/pace.min.js'></script>
<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
<link href="https://boxy.design/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://boxy.design/js/jquery.js"></script>
<script src="https://boxy.design/js/partis.js"></script>
<script src="https://fanta.club/a/js/pace.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://boxy.design/css/animate.css">
<link rel="stylesheet" href="https://boxy.design/css/side.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title>
  M A N G O . F A N T A
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<meta name="robots" content="index, follow" />
<meta name="mediapartners" content="index, follow" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
<script>
$(document).ready(function(){
    var apnd = '<div class="boxy" style="display:none;">Made by <a href="https://discord.gg/QdFNRAa">Boxy</a></div>';
    $('#body').append(apnd);
        $('.boxy').slideDown(2000).fadeIn(4000);

    });
</script>
<center>
<div id="pg"></div>
<body id="body" name="body" style="background-color: #1B1B1D; ">
<div id="wrapper">

<font size="2">
<div id="sidebar-wrapper" style="overflow-x: hidden; height:100%; color: #bdc3c7;background-color:#1B1B1D; box-shadow: 0px 0px 9px 4px rgba(0,0,0,0.27);">
<ul class="sidebar-nav">
<div name="online" id="online"></div>
</ul>
</div>
</font>

<div id="page-content-wrapper">
<br>
<div class="container-fluid" style="width:90%; height:90%; color:#bdc3c7;">
<div class="row" style="top:9%; background-color:#1B1B1D; box-shadow: 0px 0px 9px 4px rgba(0,0,0,0.27);">
<div class="col-12 bg-mango">
<div class="bubbles"><br><h4> M A N G O . F A N T A </h4><br></div>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1B1B1D;">
<ul class="navbar-nav nav nav-fill" style="width:100%;">
<li class="nav-item">
<a class="nav-link" href="#" onclick="a()">Dashboard</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" onclick="e()">Support</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" onclick="f()">F.A.Q</a>
</li>
</ul>
</div>
</nav><br><br><br>
</div>
<br>
<div class="content"></div>
</div><br><br><br>
</div>
</body>
</div>
<script>
function a(){
     $('.content').load('/content/appcard.php').fadeIn(1000);
}
function b(){
     $('.content').load('/content/verification.php').fadeIn(1000);
}
function d(){
     $('.container-fluid').load('/lib/pp.php').fadeIn(1000);
}
function e(){
     $('.content').load('/content/psupport.php').fadeIn(1000);
}

function f(){
     $('.content').load('/content/faq.php').fadeIn(1000);
}

function onlinelist(){
    $("#online").load("onlinep.php");
    setTimeout(onlinelist, 30000);
}

$(document).ready(function() {
  onlinelist();
  $("#wrapper").toggleClass("toggled");
         });

$(document).ready(function() {
   $('.content').load('/content/appcard.php');
  $('#pg').particleground({
dotColor: '#ffeaa7',
lineColor: '#ffeaa7',
density: "90000"
});
});

jQuery(document).ready(function($){

    // Define a blank array for the effect positions. This will be populated based on width of the title.
    var bArray = [];
    // Define a size array, this will be used to vary bubble sizes
    var sArray = [4,6,8,10];

    // Push the header width values to bArray
    for (var i = 0; i < $('.bubbles').width(); i++) {
        bArray.push(i);
    }

    // Function to select random array element
    // Used within the setInterval a few times
    function randomValue(arr) {
        return arr[Math.floor(Math.random() * arr.length)];
    }

    // setInterval function used to create new bubble every 350 milliseconds
    setInterval(function(){

        // Get a random size, defined as variable so it can be used for both width and height
        var size = randomValue(sArray);
        // New bubble appeneded to div with it's size and left position being set inline
        // Left value is set through getting a random value from bArray
        $('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');

        // Animate each bubble to the top (bottom 100%) and reduce opacity as it moves
        // Callback function used to remove finsihed animations from the page
        $('.individual-bubble').animate({
            'bottom': '80%',
            'opacity' : '-=0.8'
        }, 3000, function(){
            $(this).remove()
        }
        );


    }, 350);

});
</script>
