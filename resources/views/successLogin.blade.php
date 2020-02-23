<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container box">
            <h1>Successfully logged in to page as
                @if(isset(Auth::user()->email) && (Auth::user()->email == 'admin@admin.com'))
                    Admin
                @endif

                @if(isset(Auth::user()->email) && (Auth::user()->email == 'user@user.com'))
                    User
                @endif

            </h1>

            @if(isset(Auth::user()->email))
                <a href="{{ url('logout') }}">Logout</a>
            @endif

        </div>
    </body>
</html>

