@extends('credbank')

@section('content')

    @if (Session::has('success'))
        <div class="alert alert-primary" role="alert">
            <h1>{{Session::get('success')}}</h1>
        </div>
    @endif

    <a href="/">Voltar para a página Inicial</a>

@endsection
