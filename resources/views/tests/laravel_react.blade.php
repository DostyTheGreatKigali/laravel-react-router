@php
$url = url('/');
@endphp

<!-- https://stackoverflow.com/questions/40764596/using-react-router-with-cdn-and-without-webpack-or-browserify -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>React | Laravel</title>

    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300;1,400;1,500;1,700;1,800&display=swap" rel="stylesheet"> -->

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{$url}}/assets/css/bootstrap.min.css">

<!-- Custom CSS -->
  <link rel="stylesheet" href="{{$url}}/assets/css/style.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{$url}}/assets/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="{{$url}}/assets/fontawesome/css/brands.min.css">
  <link rel="stylesheet" href="{{$url}}/assets/fontawesome/css/regular.min.css">
  <link rel="stylesheet" href="{{$url}}/assets/fontawesome/css/solid.min.css">

    <script src='https://unpkg.com/react@16.3.1/umd/react.production.min.js'></script>
    <script src='https://unpkg.com/react-dom@16.3.1/umd/react-dom.production.min.js'></script>
    <script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
    <script src='https://unpkg.com/babel-standalone@6.26.0/babel.js'></script>
  </head>
  <body>

    <div id='root'></div>

    <script src="{{$url}}/assets/js/jquery.min.js"></script>
	<script src="{{$url}}/assets/js/popper.min.js"></script>
	<script src="{{$url}}/assets/js/bootstrap.min.js"></script>

    <script type='text/babel'>
      const Link = ReactRouterDOM.Link;
      const Route = ReactRouterDOM.Route;

      const App = props => (
        <ReactRouterDOM.HashRouter>
          <ul className="d-flex flex-row justify-content-around">
            <div>
            <a href="{{ url('/') }}">
              <img src="" alt="Logo"/>
            </a>
            </div>

            <div className="d-flex flex-row justify-content-around">
            <li className="mx-2"><Link className="list_styles" to="/">TO HOME</Link></li>
            <li className="mx-2"><Link className="list_styles" to="/a">TO A</Link></li>
            <li className="mx-2"><Link className="list_styles" to="/b">TO B</Link></li>
            </div>
          </ul>

          <Route path="/" exact component={Home} />
          <Route path="/a" component={A} />
          <Route path="/b" component={B} />
        </ReactRouterDOM.HashRouter>
      )

      const Home = props => <h1 className="text-center">HOME</h1>
      const A = props => <h1 className="text-center">A</h1>
      const B = props => <h1 className="text-center">B</h1>

      ReactDOM.render(<App />, document.querySelector('#root'));
    </script>
  </body>
</html>
