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

.column-2 {
  -ms-flex: 100%; /* IE 10 */
  flex: 100%;
  padding: 0 4px;
}

.column, img {
  margin-top: 8px;
  vertical-align: middle;
}

</style>
</head>
<body>

<!-- Photo Grid -->
<div class="container">
<div class="row" id="galley">
  <div class="column">
    <img alt='1.jpg' data-original="{{url('/template/assets/img/gallery/1.jpg')}}" src="{{url('/template/assets/img/gallery/1.jpg')}}" style="width:100%">
    <img alt='2.jpg' data-original="{{url('/template/assets/img/gallery/2.jpg')}}" src="{{url('/template/assets/img/gallery/2.jpg')}}" style="width:100%">
    <img alt='23.jpg' data-original="{{url('/template/assets/img/gallery/25.jpg')}}" src="{{url('/template/assets/img/gallery/25.jpg')}}" style="width:100%">
    <img alt='33.jpg' data-original="{{url('/template/assets/img/gallery/33.jpg')}}" src="{{url('/template/assets/img/gallery/33.jpg')}}" style="width:100%">
    <img alt='5.jpg' data-original="{{url('/template/assets/img/gallery/5.jpg')}}" src="{{url('/template/assets/img/gallery/5.jpg')}}" style="width:100%">
    <img alt='24.jpg' data-original="{{url('/template/assets/img/gallery/24.jpg')}}" src="{{url('/template/assets/img/gallery/24.jpg')}}" style="width:100%">
  </div>
  <div class="column">
    <img alt='3.jpg' data-original="{{url('/template/assets/img/gallery/3.jpg')}}" src="{{url('/template/assets/img/gallery/3.jpg')}}" style="width:100%">
    <img alt='10.jpg' data-original="{{url('/template/assets/img/gallery/10.jpg')}}" src="{{url('/template/assets/img/gallery/10.jpg')}}" style="width:100%">
    <img alt='29.jpg' data-original="{{url('/template/assets/img/gallery/29.jpg')}}" src="{{url('/template/assets/img/gallery/29.jpg')}}" style="width:100%">
    <img alt='26.jpg' data-original="{{url('/template/assets/img/gallery/26.jpg')}}" src="{{url('/template/assets/img/gallery/26.jpg')}}" style="width:100%">
    <img alt='13.jpg' data-original="{{url('/template/assets/img/gallery/13.jpg')}}" src="{{url('/template/assets/img/gallery/13.jpg')}}" style="width:100%">
    <img alt='6.jpg' data-original="{{url('/template/assets/img/gallery/6.jpg')}}" src="{{url('/template/assets/img/gallery/6.jpg')}}" style="width:100%">
  </div>  
  <div class="column-2">
    <img alt='37.jpg' data-original="{{url('/template/assets/img/gallery/37.jpg')}}" src="{{url('/template/assets/img/gallery/37.jpg')}}" style="width:100%">
  </div>  
  <div class="column">
    <img alt='30.jpg' data-original="{{url('/template/assets/img/gallery/30.jpg')}}" src="{{url('/template/assets/img/gallery/30.jpg')}}" style="width:100%; margin-top:0;">
    <img alt='34.jpg' data-original="{{url('/template/assets/img/gallery/34.jpg')}}" src="{{url('/template/assets/img/gallery/34.jpg')}}" style="width:100%">
    <img alt='7.jpg' data-original="{{url('/template/assets/img/gallery/7.jpg')}}" src="{{url('/template/assets/img/gallery/7.jpg')}}" style="width:100%">
    <img alt='21.jpg' data-original="{{url('/template/assets/img/gallery/21.jpg')}}" src="{{url('/template/assets/img/gallery/21.jpg')}}" style="width:100%">
    <img alt='32.jpg' data-original="{{url('/template/assets/img/gallery/32.jpg')}}" src="{{url('/template/assets/img/gallery/32.jpg')}}" style="width:100%">
    <img alt='35.jpg' data-original="{{url('/template/assets/img/gallery/35.jpg')}}" src="{{url('/template/assets/img/gallery/35.jpg')}}" style="width:100%">
  </div>
  <div class="column">
    <img alt='28.jpg' data-original="{{url('/template/assets/img/gallery/28.jpg')}}" src="{{url('/template/assets/img/gallery/28.jpg')}}" style="width:100%; margin-top:0;">
    <img alt='31.jpg' data-original="{{url('/template/assets/img/gallery/31.jpg')}}" src="{{url('/template/assets/img/gallery/31.jpg')}}" style="width:100%">
    <img alt='8.jpg' data-original="{{url('/template/assets/img/gallery/8.jpg')}}" src="{{url('/template/assets/img/gallery/8.jpg')}}" style="width:100%">
    <img alt='16.jpg' data-original="{{url('/template/assets/img/gallery/16.jpg')}}" src="{{url('/template/assets/img/gallery/16.jpg')}}" style="width:100%">
    <img alt='27.jpg' data-original="{{url('/template/assets/img/gallery/27.jpg')}}" src="{{url('/template/assets/img/gallery/27.jpg')}}" style="width:100%">
    <img alt='36.jpg' data-original="{{url('/template/assets/img/gallery/36.jpg')}}" src="{{url('/template/assets/img/gallery/36.jpg')}}" style="width:100%">
  </div>
  <div class="column-2">
    <img alt='38.jpg' data-original="{{url('/template/assets/img/gallery/38.jpg')}}" src="{{url('/template/assets/img/gallery/38.jpg')}}" style="width:100%">
  </div>  
  <div class="column">
    <img alt='9.jpg' data-original="{{url('/template/assets/img/gallery/9.jpg')}}" src="{{url('/template/assets/img/gallery/9.jpg')}}" style="width:100%; margin-top:0;">
    <img alt='17.jpg' data-original="{{url('/template/assets/img/gallery/17.jpg')}}" src="{{url('/template/assets/img/gallery/17.jpg')}}" style="width:100%">
  </div>
  <div class="column">
    <img alt='12.jpg' data-original="{{url('/template/assets/img/gallery/12.jpg')}}" src="{{url('/template/assets/img/gallery/12.jpg')}}" style="width:100%; margin-top:0;">
    <img alt='22.jpg' data-original="{{url('/template/assets/img/gallery/22.jpg')}}" src="{{url('/template/assets/img/gallery/22.jpg')}}" style="width:100%">
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
