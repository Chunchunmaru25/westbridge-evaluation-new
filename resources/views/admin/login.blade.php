@extends('layout.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @elseif(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <section class="login-section">
        <div>
            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <form action="{{ route('admin.authenticate') }}" method="post">
                @csrf

                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" required>
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" required>
                </div>

                <div>
                    <a href="#">Forgot Password?</a>
                </div>

                <div>
                    <button type="submit">Login</button>
                </div>
            </form>

        </div>
    </section>

    <STYLE>
        .login-section {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f4f6f8;
            padding: 20px;
            box-sizing: border-box;
        }

        .login-section>div {
            background: white;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .login-section form div {
            margin-bottom: 20px;
        }

        .login-section label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
            font-size: 14px;
        }

        .login-section input[type="text"],
        .login-section input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1.5px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.3s ease;
        }

        .login-section input[type="text"]:focus,
        .login-section input[type="password"]:focus {
            border-color: #5a67d8;
            /* subtle blue focus */
            outline: none;
        }

        .login-section a {
            font-size: 14px;
            color: #5a67d8;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .login-section a:hover {
            text-decoration: underline;
            color: #434190;
        }

        .login-section button {
            width: 100%;
            background-color: #5a67d8;
            color: white;
            font-weight: 600;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-section button:hover {
            background-color: #434190;
        }

        .login-section p {
            font-size: 14px;
            margin-bottom: 15px;
        }
    </STYLE>
@endsection
