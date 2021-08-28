<html>
    <header>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    </header>


    <body>
        <div class="container-fluid ">
            <div class="row">
                <div class="header">
                <h2>Admin</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3 sidebar">
                    <ul>
                    <li><a href='{{route('createuser')}}'>add user</a></li>
                    <li><a href='{{route('listuser')}}'>List user</a></li>
                    </ul>

                </div>
                <div class="col-md-9 maincontent">
                    <h4>@yield('title')</h4>
                    <hr>
                    <div class="main-content">
                        @yield('change-content')
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>