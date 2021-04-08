<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        
        $clients = Client::all();
        return view('client.index') -> with(['clients' => $clients]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('photo', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $client = new Client([
                "name" => $request->get('name'),
                "surname" => $request->get('surname'),
                "email" => $request->get('email'),
                "profile_photo" => $request->file->hashName()
            ]);
            $client->save(); // Finally, save the record.
        }
        return view('client.create');  
    }
}
