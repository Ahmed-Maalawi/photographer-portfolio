<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeMail as SubscribeRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribe(SubscribeRequest $request )
    {

        return "you subscribe successfully";
//        $newSubscriber = Subscriber::crete([
//            'email' => $request['email'],
//        ]);
//        $newSubscriber->save();
//
//        if( $newSubscriber ) {
//
//            return response()->json_encode([
//                'message' => 'test',
//            ], 200);
//        }
//
//        return json_encode([,], 200);
    }
}
