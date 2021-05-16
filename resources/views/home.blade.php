<!DOCTYPE html>
@extends('layouts.app')
@section('title', 'Visão Geral')
@php
use App\clientes;
$data = clientes::all();
$data_count = clientes::all()->count();
@endphp
@section('content')
  <div class="alert alert-soft-success d-flex  align-items-center" role="alert">
    <i class="material-icons mr-3">edit</i>
    <div class="text-body"><strong>Versão Estável:</strong> Foram feitas melhorias no servidor web, agora todos os pedidos serão executados mais rápidamente pelo servidor.<br>Caso tenha algum problema de visualização entre em contacto <a href="mailto:ruben.silva.guerra@gmail.com?Subject=PainelQR">por email</a>.</div>
</div>


  @php
  use App\User;
  $userCount = User::count();
  @endphp
  <div class="row card-group-row">
    <div class="col-lg-6 col-md-6 card-group-row__col">
      <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
        <div class="flex">
          <div class="card-header__title text-muted mb-2">Clientes</div>
          <div class="text-amount">{{$data_count}}</div>
          <div class="text-stats text-success">Ultima atualização em: {{ User::orderby('created_at','DESC')->value('created_at')}}</div>
        </div>
        <div><i class="material-icons icon-muted icon-40pt ml-3">perm_identity</i></div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 card-group-row__col">
      <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
        <div class="flex">
          <div class="card-header__title text-muted mb-2">Utilizadores</div>
          <div class="text-amount">{{$userCount}}</div>
          <div class="text-stats text-success">Ultima atualização em: {{ clientes::orderby('created_at','DESC')->value('created_at')}}</div>
        </div>
        <div><i class="material-icons icon-muted icon-40pt ml-3">assignment_ind</i></div>
      </div>
    </div>
  </div>
  <div class="card card-form">
    <div class="row no-gutters">
      <div class="col-lg-4 card-body">
        <p><strong class="headings-color">Gerar um novo QRCode</strong></p>
        <p class="text-muted">Escolha o cliente e gere um novo código QR com as informações de morada e nome de cliente do destinatário.</p>
      </div>
      <div class="col-lg-8 card-form__body card-body">
        <div class="form-group">
          <form method="post" id="form-horizontal" action="{{ url('/painel/fetch') }}" class="form-horizontal form-wizard-wrapper">
            {{csrf_field()}}
            <label for="select01">Cliente:</label>
            <select name="opcao" id="opcao" data-toggle="select" class="form-control">
              @foreach($data as $id => $field_name)
                <option value = "{{ $field_name->id }}" >{{ $field_name->name }} {{ $field_name->morada }}  {{ $field_name->codpostal }}-{{ $field_name->local }}</option>
              @endforeach
            </select>
            <label></label>
            <br>
            <button type="submit" class="btn btn-warning">
              <i class="material-icons mr-1">launch</i>Gerar
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
