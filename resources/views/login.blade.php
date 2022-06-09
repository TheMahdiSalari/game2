
<!doctype html>
<html lang="en" class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login page</title>
</head>
<body class="h-100">
<div class="container h-100 d-flex flex-column justify-content-center">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 card bg-light text-dark">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-content-center">
                    <p class="p-1">Write your email</p>
                    <form action="{{ url('login') }}" method="POST">
                        @csrf
                        <div class="p-1">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="p-1 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary p-1">Send Code</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>
