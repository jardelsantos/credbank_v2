@extends('credbank')

@section('content')
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
                <textarea class="form-control" id="campo-detalhes" style="height:150px" name="detail" placeholder="Detalhes"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>

</form>
@endsection
