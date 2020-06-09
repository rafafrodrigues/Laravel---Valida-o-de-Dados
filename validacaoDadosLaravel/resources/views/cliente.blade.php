@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Validação de dados com Laravel</div>

                <div class="card-body">
                    @if(count($errors) > 0)
                      <div class="alert alert-danger">
                          @foreach ($errors->all() as $error)
                              <li>{{$error}}</li>
                          @endforeach
                      </div>
                    @endif
                    <form action="{{route('clientes.store')}}" method="post">
                        {{csrf_field()}}

                        <input type="text" name="nome">
                        <button class="btn btn-info">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection