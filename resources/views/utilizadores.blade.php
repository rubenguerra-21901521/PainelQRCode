@section('title', 'Utilizadores')
@extends('layouts.app')
@php
use App\User;
$data = User::all();
$data_count = User::all()->count();
@endphp
@section('content')
  <div class="container-fluid">
    <div class="page-title-box">
      <div class="row align-items-center">

        <div class="col-sm-6">
          <h4 class="page-title">Gestão de utilizadores</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Gerir utilizadores e adição de novos.</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4 class="mt-0 header-title">Todos os Utilizadores</h4>
            <p class="text-muted m-b-30">
              Confira todos os utilizadores já registrados no banco de dados. Para adicionar ou alterar utilizadores use as opções e/ou ferramentas de introdução de dados.
            </p>
            @if (Auth::user()->id == 1 || Auth::user()->id == 2)
            <p><button type="button" class="btn btn-info waves-effect waves-light abrir" data-toggle="modal" data-target=".criar-modal">Adicionar</button></p>
            @endif
            <div class="table-responsive">
              <table class="table mb-0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    @if (Auth::user()->id == 1 || Auth::user()->id == 2)
                      <th>Opções</th>
                    @endif
                  </tr>
                </thead>
                @if ($data_count == 0)
                  <thead>
                    <tr>
                      <th>-</th>
                      <th>-</th>
                      <th>-</th>
                      <th>-</th>
                    </tr>
                  </thead>
                @endif
                @foreach ($data as $key)
                  <tbody>
                    <tr>
                      <th scope="row">{{$key->id}}</th>
                      <td>{{$key->name}}</td>
                      <td>{{$key->email}}</td>
                      @if (Auth::user()->id == 1 || Auth::user()->id == 2)
                      <td><button type="button" class="btn btn-info waves-effect waves-light abrir2" data-toggle="modal" data-target="#editar-modal" data-id="{{ $key->id }}" data-filtre="{{$key->name}}" data-dir="{{$key->email}}">Editar</button></td>
                      @endif
                    </tr>
                  @endforeach
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
@endsection
@section('modals')

        <div class="modal fade editar-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editar-modal" name="editar-modal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title mt-0">Editar Utilizador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <p class="text-muted m-b-30" id="data">Está a editar o Utilizador </p>
                <form class="" action="{{ route('utilizadores.update','editar') }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="put">
                  <input type="hidden" value="-1" name="id" id="id" />
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-8">
                      <input name="name" id="name" class="form-control" type="text" value="????">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input name="email" id="email" class="form-control" type="text" value="????">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Alterar password</label>
                    <div class="col-sm-8">
                      <input name="password" id="password" class="form-control" type="password" placeholder="Nova password do utilizador">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info waves-effect">Salvar</button>
                  <button type="button" class="btn btn-danger waves-effect waves-light" onclick="var result = confirm('Tem a certeza que pretende eliminar este cliente?');if (result){event.preventDefault();document.getElementById('delete-form').submit();}">Apagar</button>
                </div>
              </form>
              <form id="delete-form" name="delete-form" action="{{route('utilizadores.destroy',['apagar'])}}" method="post" style="display: none;">
                <input type="hidden" value="-1" name="id" />
                <input type="hidden" name="_method" value="delete">
                {{ csrf_field() }}
              </form>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade criar-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="criar-modal" name="criar-modal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title mt-0">Criar Utilizador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <p class="text-muted m-b-30" id="data">Está a criar um novo cliente, para tal deve preencher todos os campos desta janela!</p>
                <form class="" action="{{ route('utilizadores.store') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-8">
                      <input name="name" id="name" class="form-control" type="text" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input name="email" id="email" class="form-control" type="text" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-8">
                      <input name="password" id="password" class="form-control" type="password" required>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info waves-effect">Salvar</button>
                </div>
              </form>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

      </div>
@endsection
