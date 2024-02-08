<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function create()
    {
        return Inertia('Create'); 
    }


    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $user = new User();
        $user->title = $validatedData['title'];
        $user->description = $validatedData['description'];
        $user->save();

    
        return redirect()->route('Home'); 
    }



    public function update(Request $request, User $user)
{
 
    $validatedData = $request->validate([
        'title' => 'required|string',
        'description' => 'nullable|string',
    ]);

   
    $user->update($validatedData);

    return redirect()->route('Home');
}

}
