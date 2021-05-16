<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;
use Excel;
use App\Imports\ClientesImport;

class GestaoController extends Controller
{
  public function index()
  {
    return view('gestao');
  }

  public function store(Request $request)
  {
    $update = clientes::create([
      'name'=>$request->input('cliente'),
      'morada'=>$request->input('morada'),
      'codpostal'=>$request->input('codpostal'),
      'local'=>$request->input('local'),
    ]);
    if ($update) {
      return back();
    }
    return back()->with('error', 'Erro ao criar dados de clientes!');
  }

  public function update(Request $request)
  {
    $id = $request->input('id');
    $update = clientes::where('id',$id)-> update([
      'name'=>$request->input('cliente'),
      'morada'=>$request->input('morada'),
      'codpostal'=>$request->input('codpostal'),
      'local'=>$request->input('local'),
    ]);
    if ($update) {
      return back();
    }
    return back()->with('error', 'Erro ao atualizar dados de clientes!');
  }

  public function destroy(Request $request)
  {
    $id = $request->input('id');
    $finder = clientes::find($id);
    $finder->delete();
    return back();
  }

  function import(Request $request)
  {
    $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
    ]);

    $path = $request->file('select_file')->getRealPath();

    $data = Excel::import(new ClientesImport, $path);
    if(!empty($data))
    {
      DB::table('Clientes')->insert($insert_data);
    }
    return back()->with('success', 'Excel Data Imported successfully.');
  }
}
