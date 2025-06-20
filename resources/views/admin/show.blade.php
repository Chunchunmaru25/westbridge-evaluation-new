@extends('layout.dashboard')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @elseif(Session::has('success'))
        {{ Session::get('success') }}
    @endif
    {{-- route to the update after user hit the submit --}}
    {{-- with admin_id value as parameter --}}
    <form action="{{ route('admin.updateadmin', $admin->admin_id) }}" method="POST">
        @csrf
        @method('put')
        <div class="show-input">
            <label>ID</label>
            <input type="text" name="admin_id" class="input-form" readonly value="{{ $admin->admin_id }}">
        </div>

        <div class="show-input">
            <label>Firstname</label>
            <input type="text" name="firstname" class="input-form" value="{{ $admin->firstname }}">
        </div>

        <div class="show-input">
            <label>Middlename</label>
            <input type="text" name="middlename" class="input-form" value="{{ $admin->middlename }}">
        </div>

        <div class="show-input">
            <label>Lastname</label>
            <input type="text" name="lastname" class="input-form" value="{{ $admin->lastname }}">
        </div>

        <div class="show-input">
            <label>Role</label>
            <input type="text" name="role" class="input-form" value="{{ $admin->role }}">
        </div>

        <button type="submit" name="btn btn-primary" class="btn btn-primary">UPDATE</button>
    </form>

    <style>
        .show-input {
            margin-bottom: 18px;
            display: flex;
            flex-direction: column;
        }

        .show-input label {
            margin-bottom: 6px;
            font-weight: 600;
            color: #222;
            font-size: 15px;
        }

        .input-form {
            padding: 10px 14px;
            font-size: 15px;
            border: 1.8px solid #bbb;
            border-radius: 8px;
            transition: border-color 0.3s ease;
            outline: none;
            box-sizing: border-box;
        }

        .input-form:focus {
            border-color: #2c7be5;
            box-shadow: 0 0 8px rgba(44, 123, 229, 0.4);
            background-color: #fff;
        }

        .input-form[readonly] {
            background-color: #e6e6e6;
            color: #666;
            cursor: not-allowed;
        }

        .btn.btn-primary {
            background-color: #2c7be5;
            color: white;
            font-weight: 700;
            padding: 12px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        .btn.btn-primary:hover {
            background-color: #1a5bb8;
        }
    </style>
@endsection
