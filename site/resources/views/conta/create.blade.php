@extends('credbank')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ocorrem erros!<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('conta.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <div class="form-group">
                <label for="campo-nome" class="form-label">Nome:</label>
                <input type="text" id="campo-nome" name="name" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <div class="form-group">
                <label for="campo-email" class="form-label">E-mail:</label>
                <input type="text" id="campo-email" name="email" class="form-control" placeholder="E-mail">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <div class="form-group">
                <label for="campo-detalhes" class="form-label">Detalhes:</label>
                <input type="text" class="form-control" id="campo-detalhes" name="password" placeholder="Senha"/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>

</form>
@endsection
