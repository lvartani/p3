<!doctype html>
<html>
<head>
    <title>
        @yield('title','TEXT')
    </title>

    <meta charset='utf-8'>
    <!-- Stylesheet -->
    <link href="/css/master.css" type='text/css' rel='stylesheet'>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/blitzer/jquery-ui.css" />
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
        @yield('head')

    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">DWA 2016</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="http://p1.loosine.com" class= "external">Home</a></li>
                    <li><a href="http://p2.loosine.com" class= "external">Project 2</a></li>
                    <li class="active"><a href="#">Project 3</a></li>
                    <li><a href="#">Project 4</a></li>
                </ul>
            </div>
        </nav>


        <img id="logo"
        src='/images/bubbles3.png'
        alt='Logo'></img>

        <div class ="description">
            <h3> What is Lorem Ipsum?</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <a href="http://www.lipsum.com/">Read more here.</a></p>

        </div>

        <section id= "content">
            {{-- Main page content will be yielded here: Form to get data --}}
            @yield('content')
        </section>

        <section id ="bubbles">
            @yield('userResults')
        </section>
        <br>
        <section id ="Loremtext">
            @yield('textResults')
        </section>
        <br>




        <footer id = "footer">
            <h2 id ="title">Bubble Generator</h2>
            <a class="btn btn-default" href="https://github.com/lvartani/p3" role="button">Github</a>

            <p class= "date">&copy; {{ date('Y') }}<p>

            </footer>

            <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
            <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
            <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}


        </body>
        </html>
