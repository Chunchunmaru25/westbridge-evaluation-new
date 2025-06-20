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

            <form action="{{ route('admin.store') }}" method="post">
                @csrf

                <div class="create-new">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="create-input" required>
                </div>

                <div class="create-new">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="create-input" required>
                </div>

                <div class="create-new">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" style="text-transform: capitalize" required class="create-input">
                </div>

                <div class="create-new">
                    <label for="middlename">Middlename</label>
                    <input type="text" name="middlename" style="text-transform: capitalize" required
                        class="create-input">
                </div>

                <div class="create-new">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" style="text-transform: capitalize" required class="create-input">
                </div>

                <div class="create-new">
                    <label for="department">Department</label>
                    <input type="text" name="department" style="text-transform: capitalize" required
                        class="create-input">
                </div>


                <div>
                    <button type="submit" class="create-inputbtn">Create</button>
                </div>
            </form>

        </div>
    </section>

    <style>
        form {
            max-width: 480px;
            margin: 30px auto;
            padding: 28px 32px;
            background-color: #fafafa;
            border-radius: 14px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
            font-family: 'Arial', sans-serif;
        }

        .create-new {
            margin-bottom: 18px;
            display: flex;
            flex-direction: column;
        }

        .create-new label {
            font-weight: 600;
            font-size: 15px;
            color: #333;
            margin-bottom: 7px;
        }

        .create-input {
            padding: 10px 14px;
            font-size: 15px;
            border: 1.5px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.25s ease, box-shadow 0.25s ease;
            outline: none;
            box-sizing: border-box;
        }

        .create-input:focus {
            border-color: #337ab7;
            box-shadow: 0 0 8px rgba(51, 122, 183, 0.35);
            background-color: #fff;
        }

        .create-inputbtn {
            background-color: #337ab7;
            color: white;
            font-weight: 700;
            padding: 12px 0;
            width: 100%;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 17px;
            transition: background-color 0.3s ease;
        }

        .create-inputbtn:hover {
            background-color: #255a96;
        }
    </style>
@endsection
