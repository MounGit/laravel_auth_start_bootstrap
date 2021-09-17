<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    public function index () {
        $header = Header::all();
        return view('dashboard.pages.header.header', compact('header'));
    }

    public function edit ($id) {
        $header = Header::find($id);
        return view('dashboard.pages.header.headerEdit', compact('header'));
    }

    public function update (Header $id, Request $request) {

        $request->validate([
            "img" => "required",
            "title" => "required",
            "description" => "required"
        ]);
        
        $header = $id;

        Storage::disk('public')->delete('img/' . $header->img);
        
        $header->img = $request->file('img')->hashName();
        $header->title = $request->title;
        $header->description = $request->description;
        $header->save();

        $request->file('img')->storePublicly('img', 'public');

        return redirect()->route('hdr')->with('message', 'Informations modifiées avec succès');
    }
}
