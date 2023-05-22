<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header class="text-center my-5 bg-dark text-light">
        <nav>
            <ul>
                <li>
                    <a href="/">home</a>
                </li>
                <li>
                    <a href="{{('contact')}}">contact</a>
                </li>

            </ul>
        </nav>
    </header>

    <main>
        <div class="container text-center">
            <div class="card-header">
                <h2>{{$assistenza}}</h2>
            </div>
            <div class="card-body">
                <span>{{$numero}}</span>
                <span>{{$sitoweb}}</span>
            </div>
        </div>
    </main>

    <footer>
        <div class="container text-center mt-5">
            <span class="">Copy by &copy; Alexandro Fioretti</span>
        </div>
    </footer>

</body>

</html>