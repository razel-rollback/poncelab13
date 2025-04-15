<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col col-10 col-md-9 col-lg-8 col-xl-6 col-xxl-5">
                <div class="card p-4">
                    <div class="card-title">
                        <h2 class="text-center">Register</h2>
                    </div>
                    <div class="card-body p-4">
                        @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form method="POST" action="/register">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="idname" class="form-label">Name: </label>
                                <input id="idname" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="idemail" class="form-label">Email: </label>
                                <input id="idemail" name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="idpassord" class="form-label">Password: </label>
                                <input id="idpassord" name="password" type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="idcpassword" class="form-label">Confirm Password: </label>
                                <input id="idcpassword" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-3">Register</button>
                        </form>
                        <div class="text-center align-items-center justify-content-center">
                            <p>Already have an account? <a href="{{ route('login') }}">Log in here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>