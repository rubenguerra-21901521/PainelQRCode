@section('title', 'Clientes')
@extends('layouts.app')
@php
use App\clientes;
$data = clientes::all();
$data_count = clientes::all()->count();
@endphp
@section('content')

  <div class="card">
    <!---<div class="card-header">
      <p class="text-muted m-b-30">Listagem de todos os clientes inseridos no sistema.<br>Para adicionar clique no botão a baixo.</p> <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#criar-modal">Adicionar</button>
    </div>--->
    <div class="card-body">
      <div class="table-responsive border-bottom" data-toggle="lists">
        <table class="table mb-0 thead-border-top-0">
          <thead>
            <tr>

              <th>Cliente</th>
              <th>Morada</th>
              <th style="width: 120px;">Codigo Postal</th>
              <th style="width: 51px;">Local</th>
            </tr>
          </thead>
          <tbody class="list" id="staff">
            @foreach ($data as $key)
              <tr class="selected">
                <th scope="row">{{$key->id}}</th>
                <td>{{$key->name}}</td>
                <td>{{$key->morada}}</td>
                <td>{{$key->codpostal}}</td>
                <td>{{$key->local}}</td>
                <td><button type="button" class="btn btn-info waves-effect waves-light abrir" data-toggle="modal" data-target="#editar-modal" data-id="{{ $key->id }}" data-filtre="{{$key->name}}" data-dir="{{$key->morada}}" data-draggable="{{$key->codpostal}}" data-dropzone="{{$key->local}}">Editar</button></td>
              </tr>
            @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
@section('modals')
  <div id="editar-modal" name="editar-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-standard-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-standard-title">Edição de cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> <!-- // END .modal-header -->
        <div class="modal-body">
          <p class="text-muted m-b-30" id="data">Está a editar o cliente </p>
          <form class="" action="{{ route('clientes.update','editar') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <input type="hidden" value="-1" name="id" id="id" />
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Cliente</label>
              <div class="col-sm-8">
                <input name="cliente" id="cliente" class="form-control" type="text" value="????">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Morada</label>
              <div class="col-sm-8">
                <input name="morada" id="morada" class="form-control" type="text" value="????">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Código Postal</label>
              <div class="col-sm-8">
                <input name="codpostal" id="codpostal" class="form-control" type="text" value="????">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Local</label>
              <div class="col-sm-8">
                <input name="local" id="local" class="form-control" type="text" value="????">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info waves-effect">Salvar</button>
            <button type="button" class="btn btn-danger waves-effect waves-light" onclick="var result = confirm('Tem a certeza que pretende eliminar este cliente?');if (result){event.preventDefault();document.getElementById('delete-form').submit();}">Apagar</button>
          </div>
        </form>
        <form id="delete-form" name="delete-form" action="{{route('clientes.destroy',['apagar'])}}" method="post" style="display: none;">
          <input type="hidden" value="-1" name="id" />
          <input type="hidden" name="_method" value="delete">
          {{ csrf_field() }}
        </form>
      </div> <!-- // END .modal-content -->
    </div> <!-- // END .modal-dialog -->
  </div> <!-- // END .modal -->
  <div class="modal fade criar-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="criar-modal" name="criar-modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title mt-0">Criar Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <p class="text-muted m-b-30" id="data">Está a criar um novo cliente, para tal deve preencher todos os campos desta janela!</p>
          <form class="" action="{{ route('clientes.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Cliente</label>
              <div class="col-sm-8">
                <input name="cliente" id="cliente" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Morada</label>
              <div class="col-sm-8">
                <input name="morada" id="morada" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Código Postal</label>
              <div class="col-sm-8">
                <input name="codpostal" id="codpostal" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Local</label>
              <div class="col-sm-8">
                <input name="local" id="local" class="form-control" type="text" required>
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
@endsection
