<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogoMoto;

class LogoMotoController extends Controller
{
    public function index()
    {
    	$images = LogoMoto::get();
    	return view('logo-moto',compact('images'));
    }

    public function upload(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
            'logo' => 'required',
        ]);


        $input['logo'] = time().'.'.$request->logo->getClientOriginalExtension();
        $request->logo->move(public_path('/images'), $input['logo']);


        $input['title'] = $request->title;
        LogoMoto::create($input);


    	return back()
    		->with('success','Image Uploaded successfully.');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	LogoMoto::find($id)->delete();
    	return back()
    		->with('success','Image removed successfully.');
    }
}
