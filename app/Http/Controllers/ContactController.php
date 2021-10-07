<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

public function confirm(ContactRequest $request)
{

    $inputs = $request->all();
    $gender = ["男性","女性"];

    return view('confirm', [
            'inputs' => $inputs,
            'gender' => $gender,
        ]);

}

public function thanks(ContactRequest $request)
{


    // return view('thanks');


    $action = $request->get('action', 'return');
        $input  = $request->except('action');


        if($action === 'return'){
            return redirect()->route('index')->withInput($input);
        }else{
            $contact = new Contact();
            $form = $request->all();
            unset($form['_token_']);
            $contact->fill($form)->save();
            return view('thanks');
        }

}

public function search()
{
    return view('search');
}

    public function find()
    {
        return view('find', ['input' => '']);
    }

    // public function search(Request $request)
    // {
    //     $item = Author::find($request->input);
    //     $param = [
    //         'input' => $request->input,
    //         'item' => $item
    //     ];
    //     return view('find', $param);
    // }

}
