<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Телефонный справочник</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <a class="navbar-brand" href=" {{ route('home') }} ">Телефонный справочник</a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form method="get" action="{{ route('search') }}">

                    <div class="form-row d-flex justify-content-between">
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" id="s" name="s" placeholder="Search...">
                        </div>
                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-primary btn-blok">Search</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

        <div class="row mt-3 mb-3">
            <div class="col-md-12">

                @yield('content')

            </div>
        </div>
    </div>


</body>

</html>