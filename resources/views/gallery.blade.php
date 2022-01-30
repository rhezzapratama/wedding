<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/bootstrap@4/dist/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('template/gallery/dist/viewer.css')}}">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

</style>
</head>
<body>

<!-- Header -->
<!-- <div class="header" id="myHeader">
  <h1>Image Grid</h1>
  <p>Click on the buttons to change the grid view.</p>
  <button class="btn" onclick="one()">1</button>
  <button class="btn active" onclick="two()">2</button>
  <button class="btn" onclick="four()">4</button>
</div> -->

<!-- Photo Grid -->
<div class="container">
<div class="row" id="galley">
  <div class="column">
    <img data-original="https://www.w3schools.com/w3images/wedding.jpg" src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/rocks.jpg" src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/falls2.jpg" src="https://www.w3schools.com/w3images/falls2.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/paris.jpg" src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/nature.jpg" src="https://www.w3schools.com/w3images/nature.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/mist.jpg" src="https://www.w3schools.com/w3images/mist.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/paris.jpg" src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
  </div>
  <div class="column">
    <img data-original="https://www.w3schools.com/w3images/underwater.jpg" src="https://www.w3schools.com/w3images/underwater.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/ocean.jpg" src="https://www.w3schools.com/w3images/ocean.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/wedding.jpg" src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/mountainskies.jpg" src="https://www.w3schools.com/w3images/mountainskies.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/rocks.jpg" src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/underwater.jpg" src="https://www.w3schools.com/w3images/underwater.jpg" style="width:100%">
  </div>  
  <div class="column">
  <img data-original="https://www.w3schools.com/w3images/wedding.jpg" src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/rocks.jpg" src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/falls2.jpg" src="https://www.w3schools.com/w3images/falls2.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/paris.jpg" src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/nature.jpg" src="https://www.w3schools.com/w3images/nature.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/mist.jpg" src="https://www.w3schools.com/w3images/mist.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/paris.jpg" src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
  </div>
  <div class="column">
  <img data-original="https://www.w3schools.com/w3images/underwater.jpg" src="https://www.w3schools.com/w3images/underwater.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/ocean.jpg" src="https://www.w3schools.com/w3images/ocean.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/wedding.jpg" src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/mountainskies.jpg" src="https://www.w3schools.com/w3images/mountainskies.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/rocks.jpg" src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
    <img data-original="https://www.w3schools.com/w3images/underwater.jpg" src="https://www.w3schools.com/w3images/underwater.jpg" style="width:100%">
  </div>
</div>
</div>

<script src="https://unpkg.com/jquery@3/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap@4/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('template/gallery/dist/viewer.js') }}"></script>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
// function one() {
//     for (i = 0; i < elements.length; i++) {
//     elements[i].style.msFlex = "100%";  // IE10
//     elements[i].style.flex = "100%";
//   }
// }

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
// function four() {
//   for (i = 0; i < elements.length; i++) {
//     elements[i].style.msFlex = "25%";  // IE10
//     elements[i].style.flex = "25%";
//   }
// }

// Add active class to the current button (highlight it)
// var header = document.getElementById("myHeader");
// var btns = header.getElementsByClassName("btn");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//     var current = document.getElementsByClassName("active");
//     current[0].className = current[0].className.replace(" active", "");
//     this.className += " active";
//   });
// }

</script>
<script>
    window.addEventListener('DOMContentLoaded', function () {
      var galley = document.getElementById('galley');
      var viewer = new Viewer(galley, {
        url: 'data-original',
        title: function (image) {
          return image.alt + ' (' + (this.index + 1) + '/' + this.length + ')';
        },
      });
    });
  </script>


</body>
</html>
