<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background: linear-gradient(109.6deg, rgba(0, 0, 0, 0.93) 11.2%, rgb(63, 61, 61) 78.9%);
            color: #ffffff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .login-form {
            background-color: #2d2d2d;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            max-width: 400px;
            width: 100%;
        }

        .login-form h2 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form h4 {
            color: red;
            text-align: center;
            margin: 10px
        }
    </style>
</head>

<body>

    <div class="login-form">
        <h2>LOGOWANIE</h2>
        <form method="POST" action="/loginVerification">
            @csrf
            <div class="form-group">
                <label for="username">Nazwa użytkownika:</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}"
                    required>
            </div>
            <div class="form-group">
                <label for="password">Hasło:</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}"
                    required>
                @if (Session::has('message'))
                    <h4>{{ Session::get('message') }}</h4>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-block">ZALOGUJ</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
