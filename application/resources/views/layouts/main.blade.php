<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="container">
                    <ul class="list-group" style="margin: 20px -15px">
                        <li class="list-group-item">
                            <a href="{{route('companies.index')}}"> companies </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('employers.index')}}"> employers </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                @yield('content')
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
    </body>
</html>
