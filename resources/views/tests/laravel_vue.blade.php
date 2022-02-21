
@php
$url = url('/');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue | Laravel</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300;1,400;1,500;1,700;1,800&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{$url}}/assets/css/bootstrap.min.css">

<!-- Custom CSS -->
  <link rel="stylesheet" href="{{$url}}/assets/css/style.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{$url}}/assets/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="{{$url}}/assets/fontawesome/css/brands.min.css">
  <link rel="stylesheet" href="{{$url}}/assets/fontawesome/css/regular.min.css">
  <link rel="stylesheet" href="{{$url}}/assets/fontawesome/css/solid.min.css">

  <script src="{{$url}}/assets/js/vue/ajaxlibrary_vue3+.js"></script>

</head>
<body>
  <div id="app">
  </div>
      	<!-- ALL JS FILES -->
	<script src="{{$url}}/assets/js/jquery.min.js"></script>
	<script src="{{$url}}/assets/js/popper.min.js"></script>
	<script src="{{$url}}/assets/js/bootstrap.min.js"></script>

    <script>

    var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!'
            },
            template: `<h1>Hello {{ message }}</h1>`,
        })

    </script>
</body>
</html>
