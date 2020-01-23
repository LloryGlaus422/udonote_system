<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<body>
    @yield('header')
    <h1 class="subject">Subjects</h1>
    @yield('sidebar')
    <div class="sidenav">
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>
    </div> 
    @yield('content')

</body>