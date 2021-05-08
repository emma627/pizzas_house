<head>
  <title>Pizza House</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
    .brand {
      background: rgb(61, 149, 117) !important;
    }

    .brand-text {
      color: rgb(61, 149, 117) !important;
    }

    form {
      max-width: 460px;
      margin: 20px auto;
      padding: 20px;
    }

    .pizza {
      width: 100px;
      margin: 40px auto -50px;
      display: block;
      position: relative;
      top: -40px;
    }

    .pizzaHouse {
      width: 50px;
      display: inline;
      position: relative;
      bottom: -10px;
      left: -10px;
    }

    .details {
      background-color: wheat !important;
      margin-top: 80px;
      color: darkolivegreen;
    }

    .slice {
      width: 120px;
      display: block;
      position: relative;
      margin: 40px auto -50px;
      top: -50px;

    }

    .ingredients {
      width: 35px;
      display: inline;
      position: relative;
      right: 7px;
    }

    .ingredientDetails {
      font-size: 35px;
    }
  </style>

</head>

<body class="grey lighten-4">
  <nav class="white z-depth-0 nav">
    <div class="container">
      <a href="index.php" class="brand-logo brand-text"><img src="img/pizza-house.png" class="pizzaHouse" />Pizza House</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
      </ul>
    </div>
  </nav>