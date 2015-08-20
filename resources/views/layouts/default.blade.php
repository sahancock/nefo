<!DOCTYPE html>
<html>
    <head>
        @include('...includes.head')
    </head>

    <body>
        <div class="container"style="width:100%;height:100%;">
            <div class="container-fluid" style="background-color: white;width:80%;height:100%;>
                @include('...includes.navbar')
                <div id="main class="row"style="margin-top:10px;height:auto;text-align:center;">
                    @yield('content')
                    @include('...includes.footer')
                </div>
            </div>
        </div>
    </body>

</html>
