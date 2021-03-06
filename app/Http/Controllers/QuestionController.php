<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request,  Quiz $quiz)
    {

        $data = $request->validated();
        DB::transaction( function () use ($data,$quiz) {
            $question = Question::create([
                'text' => $data['text'],
                'quizId' => $quiz->id
            ]);
            foreach ($data['answer'] as $item){
                if(isset($item['0'])){
                    $question->answers()->create([
                        'text' => $item['0'],
                        'isCorrect' => isset($item['1'])
                    ]);
                }

            }

        });



        return redirect()->route('quiz.show',$quiz->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Quiz $quiz, Question $question)
    {
        return view('dashboard.quiz.question.edit')
            ->with([
                'question' => $question
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
            'text' => 'required | min:3 | max:100',
            'answers' => 'required'
        ]);
        $question->text = $request->input('text');
        $question->save();
        $answers = $request->input('answers');

        foreach ($answers as $key=>$value){
            $answer = Answer::find($key);
            $answer->text = $value[0];
            $answer->isCorrect = isset($value[1]) ? 1 : 0;
            $answer->save();
        }

        return redirect()->route('quiz.show',$question->quiz->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
