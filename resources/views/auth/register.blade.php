@php
if(Auth::check()) {
    return redirect('/painel');
} else {
    return view('auth.login');
}
@endphp
