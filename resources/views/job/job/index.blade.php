@extends('layout.dashboard')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
<link rel="stylesheet" href="{{ asset('css/btn.css') }}">

@section('content')
    <h1>Job Index</h1>
    <p>Welcome to the Job Index page!</p>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>
                        Driver ID
                    </th>
                    <th>
                        Vehicle ID
                    </th>
                    <th>
                        Package Description
                    </th>
                    <th>
                        Pickup Address
                    </th>
                    <th>
                        Dropoff Address
                    </th>
                    <th>
                        Scheduled Pickup Time
                    </th>
                    <th>
                        Scheduled Dropoff Time
                    </th>
                    <th>
                        Status
                    </th>
                    <th>
                        Client Name
                    </th>
                    <th>
                        Client Contact
                    </th>
                    <th>
                        Distance
                    </th>
                    <th>
                        Duration
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        asdsadasd
                    </td>
                    <td>
                        asdasdsa
                    </td>
                    <td>
                        sdaasdasd
                    </td>
                    <td>
                        sdadsadsa
                    </td>
                    <td>
                        sadasdsadsadsadasdsa Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga aspernatur a rem
                        quae corrupti distinctio maiores deserunt ullam saepe eos vitae voluptatibus ratione labore
                        dignissimos, expedita recusandae praesentium esse ad!
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
