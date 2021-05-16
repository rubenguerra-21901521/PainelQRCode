<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\clientes;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function index()
  {
    return view('home');
  }

  public function search(Request $request)
  {
      $cities = clientes::where('name', 'LIKE', '%'.$request->input('name', '').'%')
          ->get(['id', 'name as text']);
      return ['results' => $cities];
  }

  function fetch(Request $request)
  {
    $this->validate($request,[
      'opcao'=> 'required',
    ],[
      'opcao.required' => ' Não foi selecionado um cliente válido!',
    ]);
    $data2 = clientes::where('id','=',$request->input('opcao'));
    $data = ['name' => $data2->value('name'),
    'morada' => $data2->value('morada'),
    'codpostal' => $data2->value('codpostal'),
    'local' => $data2->value('local')];
    $pdf = PDF::loadView('pdf-model',$data);
    return $pdf->download('guia.pdf');
  }
}
