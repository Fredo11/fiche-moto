<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function triermarque()
    {
        $passports=\App\Passport::orderBy('marque')->paginate(8);
        return view('index',compact('passports'))
        ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trierannee()
    {
        $passports=\App\Passport::orderBy('annee')->paginate(8);
        return view('index',compact('passports'))
        ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function triercategorie()
    {
        $passports=\App\Passport::orderBy('categorie')->paginate(8);
        return view('index',compact('passports'))
        ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function triercylindree()
    {
        $passports=\App\Passport::orderBy('cylindree')->paginate(8);
        return view('index',compact('passports'))
        ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trierlistemarque()
    {
        $passports=\App\Passport::orderBy('marque')->paginate(8);
        return view('listeMarque',compact('passports'))
        ->with('i', (request()->input('page', 1) - 1) * 8);
    }



}
