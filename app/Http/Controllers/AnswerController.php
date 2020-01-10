<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function create()
    {
        return view ('answers.create');
    }
    public function store(Request $request)
    {
        Answer::create($request->all());
        return redirect(route('offer.show',$request->offer_id));
    }
    public function edit(Answer $answer)
    {   
        if ($this->authorize('edit',$answer))
        {
            return view('Answers.edit',['answer'=>$answer]); 
        }
    }
    public function update(Request $request, Answer $answer)
    {
        $answer->update($request->all());
        return redirect(route('offer.show',$request->offer_id));
    }
    public function destroy(Request $request, Answer $answer)
    {
        if ($this->authorize('delete', $answer)) {
            $answer->delete();
            return redirect(route('offer.show',$request->offer_id));
        }
    }
}
