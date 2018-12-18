<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passports=\App\Passport::latest()->paginate(8);
        return view('index',compact('passports'))
        ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
        $passport= new \App\Passport;
        $passport->marque=$request->get('marque');
        $passport->cylindree=$request->get('cylindree');
        $passport->modele=$request->get('modele');
        $passport->annee=$request->get('annee');
        $passport->categorie=$request->get('categorie');
        $passport->filename=$name;
        $passport->save();

        return redirect('passports')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $passport = \App\Passport::find($id);
        return view('show',compact('passport','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $passport = \App\Passport::find($id);
        return view('edit',compact('passport','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $passport= \App\Passport::find($id);
        $passport->marque=$request->get('marque');
        $passport->cylindree=$request->get('cylindree');
        $passport->modele=$request->get('modele');
        $passport->annee=$request->get('annee');
        $passport->categorie=$request->get('categorie');
        $passport->filename=$request->get('filename');
        $passport->save();
        return redirect('passports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passport = \App\Passport::find($id);
        $passport->delete();
        return redirect('passports')->with('success','Information has been  deleted');
    }
}
