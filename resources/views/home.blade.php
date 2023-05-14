@extends('layouts/main')

@section('content')
    <table class="table">
        <thead>
            <th>Company</th>
            <th>Partenza</th>
            <th>Arrivo</th>
            <th>Orario Partenza</th>
            <th>Orario Arrivo</th>
        </thead>

        <tbody>
            @foreach($trains as $singletrain)
            <tr>
                <td>
                    {{$singletrain->company}}
                </td>
                <td>
                    {{$singletrain->departure_station}}
                </td>
                <td>
                    {{$singletrain->arrival_station}}
                </td>
                <td>
                    {{$singletrain->departure_time}}
                </td>
                <td>
                    {{$singletrain->arrival_time}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection