<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">  
    </script>

    <title>Awalan</title>
  </head>

  <body>
      <style>
    .mode {
      float:right;
      margin: 6px;
    }
    .change {
      cursor: pointer;
      border: 1px solid #555;
      border-radius: 40%;
      width: 20px;
      text-align: center;
      padding: 5px;
      margin-left: 8px;
    }
    .dark{
      background-color: #222;
      color: #e6e6e6;
    }
  </style>

<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand fs-4 text-light ms-2 p-2" href="#">TabunganQ</a>
      <form class="d-flex">
          <div class="mode" style="color: white;">      
            <span class="change">OFF</span>
          </div>
          <script>
                $( ".change" ).on("click", function() {
                if( $( "body" ).hasClass( "dark" )) {
                  $( "body" ).removeClass( "dark" );
                  $( ".change" ).text( "OFF" );
                } else {
                  $( "body" ).addClass( "dark" );
                  $( ".change" ).text( "ON" );
                }
              });

          </script>

        <button class="btn btn-outline-light" type="submit" style="margin-right: 10px;">Login</button>
        <button class="btn btn-outline-light" type="submit">Register</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-6 mt-5">
      <b style="font-size: 75px; margin-left: 20px; margin-top: 50px;">YUK NABUNG!</b>
      <p style="font-size: 30px; margin-left: 20px;">Mau nabung hanya lewat sentuhan jari. Lewat <b>TabunganQ</b> kamu bisa menabung dengan praktis dan anti ribet.</p>
    </div>
    <div class="col-6 mt-5">
      <img src="../../tabung.png" style="margin-top: 30px; height: 430px; margin-left: 100px;">
    </div>
  </div>
</div>


<div>
  <div class="container absolute">
    <footer class="py-3 my-3">
      <ul class="nav justify-content-center border-buttom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
      </ul>
      <p class="text-center text-muted">@2021 Company,Inc</p>
    </footer>
  </div>
</div>

  </body>

</html>