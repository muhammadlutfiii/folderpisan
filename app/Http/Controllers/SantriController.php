<?php

namespace App\Http\Controllers;

use App\Models\santri;
use Illuminate\Http\Request;
use Laravel\Sanctum\SanctumServiceProvider;

class SantriController extends Controller
{
    public function index(){
        $santri = santri::all();
        return view('santri.index',compact(['santri']));
}

    public function create()
    {
        return view('santri.create');
    }

    public function store(Request $request)
    {
        //dd($request->except('_token', 'submit'));
        santri::create($request->except(['_token', 'submit']));;
        return redirect('/santri');
    }

    public function edit($id)
    {
        $santri = santri::find($id);
        return view('santri.edit',compact(['santri']));
    }
    
    public function update($id, Request $request)
    {
        $santri = santri::find($id);
        $santri->update($request->except(['_token', 'submit']));
        return redirect('/santri');
    }

    public function destroy($id)
    {
        $santri = santri::find($id);
        $santri->delete();
        return redirect('/santri');
    }
}