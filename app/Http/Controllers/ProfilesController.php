<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $posts = $user->userPosts();
        return view('profiles.index',
        compact('user'), [
            'posts' => $posts,
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }


    public function update(User $user)
    {
        $this->authorize('update',$user->profile);
        $data = request()->validate([
            'title'=> 'required',
            'description'=> 'required',
            'url' => 'url',
            'image' => '',
        ]);
        //$imagePath = request('image')->store('profile', 'public');
        // dd($imagePath);
        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            // dd(storage_path('app\public\\'.$imagePath));
            $image = Image::make(storage_path('app\public\\'.$imagePath))->fit(1000, 1000);
            $image->save();
            auth()->user()->profile->update(array_merge(
                $data,
                ['image'=> $imagePath],
            ));
        } else {
            auth()->user()->profile->update($data);
        }

        return redirect("/profile/{$user->id}");
    }
}
