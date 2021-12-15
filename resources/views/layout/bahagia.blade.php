<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    <style>

.sidenav {
  height: 40%;
  width: 160px;
  position: fixed;
  z-index: 1;
  left: 0;

  background-color: #eee;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #2196F3;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 12px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

a{
    text-decoration: none;
}
    </style>
</head>
<body>

          <div class="page-header" style="text-align: center">
            <img class="img img-circle responsive" width="125px" src="https://media-exp1.licdn.com/dms/image/C5603AQFcDo0e2KWz6A/profile-displayphoto-shrink_800_800/0/1606474809702?e=1644451200&v=beta&t=qYmpNUbBWi04EISCB6b7Uf1tCcFqpBvTnR6OlFDU1SA" alt="">
            <h1> Baharian Diko</h1>
            <h4> 5026201108</h4>
        </div>

        <div class="sidenav">
            <a href="/pegawai">Pegawai</a>
            <a href="/absen">Absen</a>
            <a href="/tugas">Tugas</a>
            <a href="/sepatu">Sepatu</a>
            <a href="/keranjang">Keranjang</a>
        </div>

        <!-- Page content -->
        <div class="main">
            <h2>@yield('judulhalaman')</h2>
            @section('konten')

            @show
        </div>
        <hr>
        <div style="text-align: center;">
            <p>  Hak Cipta Oleh Baharian Diko - 5026201108 </p>
        </div>


</body>

</html>
