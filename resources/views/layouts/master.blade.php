<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','TEXT')
    </title>

    <meta charset='utf-8'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="/css/master.css" type='text/css' rel='stylesheet'>

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>


    <header>
        <img id="logo"
        src='/images/bubbles3.png'
        alt='Logo'>

    </header>
        <section id= "content">
            {{-- Main page content will be yielded here --}}
            @yield('content')
        </section>

        <section id ="bubbles">
            @yield('userResults')
        </section>
        <br>
        <section id ="Loremtext">
            @yield('textResults')
        </section>


    <footer id = "footer">
        <h2 id ="title">Bubble Generator</h2>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}


</body>
</html>
