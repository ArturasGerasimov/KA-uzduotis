<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container box">
            <h1>login page</h1>
{{--            @if($message = Session::get('error'))--}}
{{--                {{ $message }}--}}
{{--            @if (count($errors) > 0)--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    {{ $error }}--}}
{{--                @endforeach--}}
{{--            @endif--}}
            <form method="POST" action="{{url('/checkLogin')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Enter User</label>
                    <input type="email"  name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password"  name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="login" value="Login" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>

