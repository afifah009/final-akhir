<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Like;

class LikeController extends Controller
{
    public function like(Forum $forum)
    {
        $user = auth()->user();

        $existingLike = $forum->likes()->where('user_id', $user->id)->first();

        if ($existingLike) {
            $existingLike->delete();
            return redirect()->back();
        }

        $like = new Like();
        $like->user_id = $user->id;
        $forum->likes()->save($like);

        return redirect()->back();
    }
}

