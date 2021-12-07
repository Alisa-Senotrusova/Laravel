<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\problemRequest;
use App\Models\laravelForm;

class formController extends Controller
{

    public function submit(problemRequest $request)
    {
        $form = new laravelForm();

        $form->firstname = $request->input('firstName');
        $form->lastname = $request->input('lastName');
        $form->nickname = $request->input('nickName');
        $form->email = $request->input('email');
        $form->topic = $request->input('topic');
        $form->message = $request->input('message');

        $form->save();

        $request->session()->put('nickname', $form->nickname);

        return redirect()->route('form')->with('success', 'Your problem has been submitted and will be resolved soon!');
    }

    public function allData()
    {
        return view('messages', ['data' => laravelForm::all()]);
    }
}
