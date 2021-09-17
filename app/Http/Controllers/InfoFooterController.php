<?php

namespace App\Http\Controllers;

use App\Models\InfoFooter;
use Illuminate\Http\Request;

class InfoFooterController extends Controller
{
    public function index (){
        $footer = InfoFooter::all();
        return view('dashboard.pages.footer.footer', compact('footer'));
    }

    public function edit ($id){
        $footer = InfoFooter::find($id);
        return view('dashboard.pages.footer.footerEdit', compact('footer'));
    }

    public function update (InfoFooter $id, Request $request){

        $request->validate([
            "street" => "required",
            "city" => "required",
            "info" => "required",
            "link_url" => 'required',
            "link" => 'required',
        ]);

        $footer = $id;
        $footer->street = $request->street;
        $footer->city = $request->city;
        $footer->info = $request->info;
        $footer->link_url = $request->link_url;
        $footer->link = $request->link;
        $footer->save();

        return redirect()->route('ftr')->with('message', 'Informations modifiées avec succès');
    }
}
