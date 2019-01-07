<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;

class ClientController extends Controller
{
   
    public function index()
    {
        $clients = Client::get();
        return view('clients.index', compact('clients'));
    }

    
    public function create()
    {
        return view('clients.create');
    }

   
    public function store(Request $request)
    {
        $client = new Client;

        if($request->hasFile('photo')) {
            $client->photo = $request->photo->store('public');
        }

        
        $client->name = $request->name;
        $client->email = $request->email;
        $client->age = $request->age;
        $client->save();

        return redirect()->route('clients.index');
    }

   
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.show', compact('client'));
    }

   
    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

   
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        if($request->hasFile('photo')) {
            $client->photo = $request->photo->store('public');
        }

        $client->name = $request->name;
        $client->email = $request->email;
        $client->age = $request->age;
        $client->save();

        return redirect()->route('clients.index');
        
    }

   
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index');
    }
}
