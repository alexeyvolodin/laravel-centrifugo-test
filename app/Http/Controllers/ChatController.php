<?php

namespace App\Http\Controllers;

use App\Models\Chat\Room;

class ChatController extends Controller
{
    public function index()
    {
        $rooms = Room::with('user')->whereNot('user_id', auth()->id())->get();
        return view('chat.index', [
            'rooms' => $rooms
        ]);
    }
}
