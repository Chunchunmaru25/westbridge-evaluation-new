@extends('layout.dashboard')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
<link rel="stylesheet" href="{{ asset('css/btn.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('content')
    <div class="table-container">
        <table class="addadmin-tbl">
            <thead class="addadmin-thead">
                <tr>
                    <th>ADMIN ID</th>
                    <th>FIRSTNAME</th>
                    <th>MIDDLENAME</th>
                    <th>LASTNAME</th>
                    <th>ROLE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody class="addadmin-tbody">
                @forelse($alladmin as $alladmins)
                    <tr>
                        {{-- <td>{{ $admininfo->firstname }}</td> --}}
                        <td>{{ $alladmins->admin_id }}</td>
                        <td>{{ $alladmins->firstname }}</td>
                        <td>{{ $alladmins->middlename }}</td>
                        <td>{{ $alladmins->lastname }}</td>
                        <td>{{ $alladmins->role }}</td>
                        <td>
                            {{-- include a parameter in routing --}}
                            <form action="{{ route('admin.deleteadmin', $alladmins->admin_id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                {{-- change method to delete since delete can be pass in form --}}
                                @method('DELETE')
                                {{-- using form for delete since delete method cant be pass --}}
                                <button type="submit" class="btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this admin?')">
                                    <i class="fa-solid fa-trash"></i></button>


                                <a href="{{ route('admin.showadmin', $alladmins->admin_id) }}" class="btn-primary"><i
                                        class="fa-solid fa-pen"></i></a>
                            </form>

                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>

    </div>
@endsection
