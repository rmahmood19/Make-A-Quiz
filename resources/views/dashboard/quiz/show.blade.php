<x-dashboardLayout>
   <div class="card">
       <div class="card-header">
           <h3>{{$quiz->name}}</h3>
       </div>

   </div>
    <div class="d-flex justify-content-end">
        <button class="btn btn-outline-success rounded-pill mt-2"
                type="button"
                data-toggle="modal" data-target="#addQuestionModal">Add question to this quiz
        </button>
    </div>
    <x-modal
        :modalHeading="'Add new question'"
        :id="'addQuestionModal'"
    >
        <div class="modal-body">
            <form method="POST" action="{{route('question.store', $quiz->id)}}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control"
                           name="text"
                           id="exampleFormControlInput1" placeholder="Enter Question text.."
                    >
                    @if($errors->has('text'))
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th colspan="3">Answer Options</th>
                        <th>Is this correct answer?</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td colspan="3">
                            <input class="form-control" name="answer[1][]" placeholder="Option 1" type="text">
                        </td>
                        <td>
                            <input class="form-control" name=answer[1][]  type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td colspan="3">
                            <input class="form-control" name="answer[2][]" placeholder="Option 2" type="text">
                        </td>
                        <td>
                            <input class="form-control" name=answer[2][]  type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td colspan="3">
                            <input class="form-control" name="answer[3][]" placeholder="Option 3" type="text">
                        </td>
                        <td>
                            <input class="form-control" name=answer[3][]  type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td colspan="3">
                            <input class="form-control" name="answer[4][]" placeholder="Option 4" type="text">
                        </td>
                        <td>
                            <input class="form-control" name=answer[4][]  type="checkbox">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <div class="d-flex justify-content-center">

                        <button type="submit" class="btn btn-outline-success rounded-pill">
                            Save Question
                        </button>

                    </div>

                </div>
            </form>
        </div>
    </x-modal>
   @foreach($quiz->questions as $question)
        <div class="card mt-2 mb-3">
            <div class="card-header d-flex justify-content-between">
                <H4>{{$question->text}}</H4>
                <button class="btn btn-outline-success rounded-pill"
                        type="button">
                    <a href="{{route('question.edit',[$quiz->id,$question->id])}}"><i class="fa fa-edit" aria-hidden="true"></i></a>

                </button>
            </div>
            <div class="card-body">
                <h5>Possible Answers</h5>
                <div class="d-flex flex-column ">
                    @foreach($question->answers as $answer)
                    <div class="ml-2
                    @if($answer->isCorrect)
                        correct-answer
                        @endif
                        ">
                        <i class="fa fa-bullseye" aria-hidden="true"></i>
                        {{$answer->text}}
                    </div>
                    @endforeach

                </div>
            </div>


        </div>
   @endforeach
</x-dashboardLayout>
