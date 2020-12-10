<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JoinRoomRequest;
use App\Models\JoinerModel;
class JoinRoomController extends Controller
{
    private $domainRedirect = 'https://meet.videokonferenz-unterfoehring.de/';
    public function index() {
        return view('index');
    }
    public function JoinToRoom(JoinRoomRequest $request){
        $roomId = rand(1000,5000);
        $dataValidated = $request->validated();
        $addJoiner = JoinerModel::create(array_merge($dataValidated,['room_id'=>$roomId]));
        return response()->json([
            'room' => $roomId,
            'invite'=>$this->domainRedirect.$roomId
        ], 200);
    }
}
