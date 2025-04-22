<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'custom')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<style>
    .bg{
        background-color: rgb(115, 114, 163);
        border: 2px solid black;
        border-radius: 10px;
        padding: 5px;
    }

    .bg-main{
        background-color: rgb(0, 0, 0);
        border: 2px solid black;
        border-radius: 10px;
        padding: 5px;
    }

    .bg-sec{
        background-color: rgb(138, 137, 167);
        border: 2px solid black;
        border-radius: 10px;
        padding: 5px;
        color: white;
    }
</style>
<body>
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-7">
                <div class="card shadow">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>