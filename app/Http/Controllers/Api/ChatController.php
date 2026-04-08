<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\ChatbotActions;
use App\Models\ChatbotQuery;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function index()
    {
        $data = ChatbotActions::all();
        return response()->json($data);
    }

    public function data(Request $request)
    {
        dd($request);
        $data = ChatbotActions::all();
        return response()->json($data);
    }
}
