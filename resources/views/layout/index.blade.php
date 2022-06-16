<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Jquery -->
    <script src='js/jquery-3.6.0.js'></script>

    {{-- Livewire styles --}}
    @livewireStyles

    <!--Font Awesome Cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- bootstrap  -->
    <link rel="stylesheet" href='/js/bootstrap.min.css'>
    <script src='/js/bootstrap.bundle.min.js'></script>

    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=Lobster&family=Nunito+Sans:wght@900&family=Poppins:ital,wght@0,100;0,400;0,600;0,700;1,700;1,800&family=Ubuntu&display=swap" rel="stylesheet">

    {{-- Cdk editor cdn --}}
    @yield('cdkeditor')

    <title>The Christians</title>
</head>
<body>
    @yield('content')

    @yield('script')
</body>

@livewireScripts
</html>
