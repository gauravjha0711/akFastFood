<!DOCTYPE html>
<html>
<head>
    <title>Login - AK Fast Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('/images/login.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }

        .login-container {
            margin-top: 80px;
            padding: 50px 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(12px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
            color: #fff;
            width: 100%;
            max-width: 550px;
        }

        .brand-header {
            font-family: 'Pacifico', cursive;
            font-size: 36px;
            color: #ff4d4d;
            text-align: center;
            margin-bottom: 10px;
        }

        .tagline {
            text-align: center;
            font-size: 16px;
            color: #ffe066;
            margin-bottom: 25px;
        }

        h3 {
            font-weight: 600;
            color: #000;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.4);
        }

        label {
            font-weight: 500;
            color: #000;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.8);
            color: #000;
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(255, 77, 77, 0.7);
        }

        .btn-primary {
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            background: linear-gradient(to right, #ff4d4d, #ff9900);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #ff9900, #ff4d4d);
        }

        .register-link {
            font-size: 14px;
            color: #000;
        }

        .register-link a {
            color: #ffc107;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .alert {
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 d-flex justify-content-center">
                <div class="login-container">
                    <div class="brand-header">AK Fast Food</div>
                    <div class="tagline">Deliciousness at Your Fingertips</div>

                    <h3 class="text-center mb-4">Login</h3>

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>

                    <p class="text-center mt-3 register-link">
                        Don't have an account? <a href="{{ route('register') }}">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
