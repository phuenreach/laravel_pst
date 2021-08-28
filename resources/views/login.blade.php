<html>

    <header>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    </header>
    <body>
        <div class="container-fliud ">
            <div class=" col-md-4 wrap-log">
                <form action="{{url("login")}}" method="POST">
                @csrf
                    <h1>Login</h1>
                    <p>please enter your login and password</p>
                   
                    <input required type="email" name='email' class="change-position" placeholder="email">
                    <input required type="password" name="password" class="change-position" placeholder="password">
                    <a class="forgotpas">forgot password?</a>
                    <button class="btn-login">Login</button>
                    <div class="register"><p>are you new member? <a href="{{route('register')}}">Register now</a></p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>