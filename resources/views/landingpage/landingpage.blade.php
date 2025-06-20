<link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

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

    <section class="section">
        <div class="container1" style="background-image: url('{{ asset('images/booksbg.png') }}');">
            <div class="first-form">
                <h3>HASIUJDHAshdsadnasdaskadsakl</h3>

                <h2>Welcome to<br>MOBILE LEGENESS</h2>

                <div class="button-group">
                    <a href="{{ route('admin.login') }}" class="first-form-btn first-form-btn1">I AM ADMIN</a>
                    <a href="{{ route('student.qrcode') }}" class="first-form-btn first-form-btn2">I AM STUDENT</a>
                </div>
            </div>
        </div>

        <div class="container2">
            <div class="child-container1">
                <div class="container2-img1">
                    <img src="images/faces.png" alt="faces" style="width:100px">
                </div>
            </div>
            <div class="container2-img2">
                <img src="images/magnifyface.png" alt="" style="width:100px">
            </div>
        </div>

        <div class="container3" style="background-image: url('{{ asset('images/bg4.jpg') }}');">
            Section 3
        </div>

        <div class="container4" style="background-image: url('{{ asset('images/bg5.jpg') }}');">
            Section 4
        </div>
    </section>


@endsection
