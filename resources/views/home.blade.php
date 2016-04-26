@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if (!$emails->isEmpty())
                        @foreach ($emails as $email)
                            <tr>
                                <td>{{ $email->correo }}</td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td class="text-center">No hay registros que mostrar</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
