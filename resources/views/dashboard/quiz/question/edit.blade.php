<x-dashboardLayout>
    <div class="card">
        <div class="card-header">
            <h3>{{$question->text}}</h3>
        </div>
    </div>
    @foreach($question->answers)
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
    @endforeach
</x-dashboardLayout>

