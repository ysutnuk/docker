<html lang="en" >
    <head>
        <title>Login form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <h2>Login</h2>
            <form method="post" action="/auth">
                {{ csrf_field() }}
                <div>
                    @if($errors->has('message'))
                        <span style="color: red"> Error: {{$errors->first('message')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
                {{--<table>--}}
                    {{--@if($errors->has('message'))--}}
                        {{--<tr>--}}
                            {{--<span style="color: red"> Error: {{$errors->first('message')}}</span>--}}
                        {{--</tr>--}}
                    {{--@endif--}}
                    {{--<tr>--}}
                        {{--<td>Email: </td>--}}
                        {{--<td>--}}
                            {{--<input type="text" name="email" placeholder="email">--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>Password: </td>--}}
                        {{--<td> <input type="password" name="password" placeholder="password"> </td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>--}}
                            {{--<button type="submit"> Login </button>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                {{--</table>--}}
            </form>
        </div>
    </body>

</html>
