@extends('credbank')

@section('content')

@if (Session::has('success'))
<div class="alert alert-primary" role="alert">
    <h1>{{Session::get('success')}}</h1>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Detalhes</th>
        <th width="280px">Ações</th>
    </tr>

    @foreach ($contas as $conta)
        <tr>
            <td>{{ $conta->id }}</td>
            <td>{{ $conta->name }}</td>
            <td>{{ $conta->email }}</td>
            <td>{{ $conta->password }}</td>
        </tr>
    @endforeach
</table>
@endsection
