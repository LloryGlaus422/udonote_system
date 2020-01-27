<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <div class="header">
    <div class="header-right">
        <a class="active" href="#home">Home</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>
    </div>

    @yield('sidebar')
            <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
            <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
            <a href="{{url('/showForm')}}" class="w3-bar-item w3-button">Add Person</a>
            <a href="#" class="w3-bar-item w3-button">Log Out</a>
            
            </div>

            

            <div class="w3-teal">
            <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
            
            <div class="w3-container">
                <h1>My Page</h1>
            </div>
            </div>
    <script>
        function openLeftMenu() {
            document.getElementById("leftMenu").style.display = "block";
        }

        function closeLeftMenu() {
            document.getElementById("leftMenu").style.display = "none";
        }

        function openRightMenu() {
            document.getElementById("rightMenu").style.display = "block";
        }

         function closeRightMenu() {
            document.getElementById("rightMenu").style.display = "none";
        }
    </script>
    @yield('content')
    @yield('footer')
    <p id ="footer">Thank You So Much for Visiting! ;)</p>
</div>