<?php

namespace App\Http\Controllers;

// 🔽 追加
use App\Models\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{
  // 省略

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user)
    {
        auth()->user()->follows()->attach($user->id);
        return back();
    }

  // 省略

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        auth()->user()->follows()->detach($user->id);
        return back();
    }
}
