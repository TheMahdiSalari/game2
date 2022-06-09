<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body class="h-100"
      @php
          use Symfony\Component\HttpFoundation\Session\Session;
          $session  = new Session();
      @endphp
      style="background-image: url('{{$session->get('file_path')}}');
      height: 100%;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;">
<div class="container h-100 d-flex flex-column justify-content-center">
    <div class="row d-flex justify-content-center">
        @switch($session->get('option'))
            @case('left')
                <div class="row d-flex justify-content-start">
                    @break
                    @case('right')
                        <div class="row d-flex justify-content-end">
                            @break
                            @case('center')
                                <div class="row d-flex justify-content-center">
                                    @break
                                    @endswitch
                                    <div class="col-md-4 card bg-light text-dark" style="opacity: 80%;">
                                        <div class="card-body">
                                            <div class="d-flex flex-column justify-content-center align-content-center">
                                                <div
                                                    class="d-flex flex-column justify-content-center align-content-center">
                                                    <p class="p-2">Enter Verify Code</p>
                                                    <form action="{{ url('user_token') }}" method="POST">
                                                        @csrf
                                                        <div class="p-1">
                                                            <input style="display: none" type="text" name="user_id"
                                                                   class="form-control"
                                                                   value="{{$session->get('user_id')}}">
                                                            <input style="display: none" type="text" name="email"
                                                                   class="form-control"
                                                                   value="{{$session->get('email')}}">
                                                            @if ($errors->any())
                                                                <div class="alert alert-danger">
                                                                    <ul>
                                                                        @foreach($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                            <input type="text" name="token" class="form-control"
                                                                   placeholder="Code">

                                                        </div>
                                                        <div class="p-1 d-flex justify-content-center">
                                                            <button class="btn btn-primary p-1" type="submit">Verify
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script
                                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                                    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                                    crossorigin="anonymous"></script>


</body>
</html>
