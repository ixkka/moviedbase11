<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function show($id)
    {
        $actor = Actor::find($id);
        if ($actor) {
            return $actor->load('mov_title', 'role');
        } else {
            return response()->json(['error' => 'Actor not found'], 404);
        }
    }
}
