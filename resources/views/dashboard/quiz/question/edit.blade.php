<x-dashboardLayout>
    <div class="card">
        <div class="card-header">
            <h3>Edit Question</h3>
        </div>
    </div>

        <form method="POST" class="mt-3" action="{{route('question.update', $question->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
                <input type="text" class="form-control"
                       name="text"
                       id="exampleFormControlInput1"
                       value="{{$question->text}}"
                >
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
                @foreach($question->answers as $answer)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td colspan="3">
                        <input class="form-control" name="answers[{{$answer->id}}][]" placeholder="Option 1" type="text"
                        value="{{$answer->text}}">
                    </td>
                    <td>
                        <input class="form-control" name="answers[{{$answer->id}}][]" type="checkbox"
                               @if($answer->isCorrect) checked @endif
                        >
                    </td>
                </tr>
                @endforeach
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

</x-dashboardLayout>

