<?php

namespace App\Http\Controllers;
use App\Http\Controllers\bx\Crest;

use Illuminate\Http\Request;

class UserChooseController extends Controller
{
    public function getUsers(){
        $user_searchs=Crest::call('user.search');
        foreach ($user_searchs['result'] as $user_search) {
            $arrayUsers[] = [
                'ID' => $user_search['ID'],
                'NAME_LASTNAME' => $user_search['NAME'] . ' ' . $user_search['LAST_NAME']
            ];
        }



//        return  view::make('getUsers')->with('arrayUsers');
        return view('welcome',compact('arrayUsers'));
    }

    public function sendMessage(Request $request){

//        dd($request->all());
     $send=Crest::call('im.notify',[
        'to'=>$request->all()['name_of_user'],
        'message'=>$request->all()['massage']
     ]);
     dd($send);

    }


}
