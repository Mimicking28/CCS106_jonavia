<!-- Albert Mick Estillore - Jonavia Mahumas -->
<html lang="en">
<head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="img/favicon.ico" rel="icon">

      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        <style>
    .nav-link {
            color: #711DB0;
            }
    .nav-link:hover {
            color: #430A5D;
            }

    .nav-link:active {
            color: #430A5D;
            }
    </style>

</head> 
@include('dashboard.header')
<body>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            @include('dashboard.sidebar')
            <!-- Sidebar -->

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @if (auth()->check())
                <h1>Welcome <span style="text-transform: uppercase;">{{ auth()->user()->name }}</span></h1>
                @endif
                <br>
                @if (\Request::is('*/home'))
                    @include('dashboard.carts')
                @endif
                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>
<!-- Albert Mick Estillore - Jonavia Mahumas -->