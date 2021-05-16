<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //

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
      return view('utilizadores');
    }

    public function store(Request $request)
    {
      $update = User::create([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'password'=>bcrypt($request->input('password')),
      ]);
      if ($update) {
        return back();
      }
      return back()->with('error', 'Erro ao criar dados de utilizadores!');
    }

    public function update(Request $request)
    {
      $id = $request->input('id');
      $update = User::where('id',$id)-> update([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'password'=>bcrypt($request->input('password')),
      ]);
      if ($update) {
        return back();
      }
      return back()->with('error', 'Erro ao atualizar dados de utilizadores!');
    }

    public function destroy(Request $request)
    {
      $id = $request->input('id');
      $finder = User::find($id);
      $finder->delete();
      return back();
    }
}
