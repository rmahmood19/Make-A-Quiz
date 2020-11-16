<x-dashboardLayout>
    <x-slot name="pageHeading">
        <h1 class="page-heading">Quiz Created by You</h1>

    </x-slot>
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-outline-success mb-2 rounded-pill"
                data-toggle="modal" data-target="#addQuizModal">
            Add new
        </button>
    </div>
<x-modal
    :modalHeading="'Add new quiz'"
    :id="'addQuizModal'"
    >
    <div class="modal-body">
        <form method="POST" action="{{route('quiz.store')}}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control"
                       name="name"
                       id="exampleFormControlInput1" placeholder="Enter Quiz Name"
                >
                @if($errors->has('name'))
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <div class="d-flex justify-content-center">

                    <button type="submit" class="btn btn-outline-success rounded-pill">
                        Save Quiz
                    </button>

                </div>

            </div>
        </form>
    </div>
</x-modal>
        <div class="accordion">
            @foreach($quizzes as $quiz)
            <div class="accordion__item">
                <div class="accordion__item__header">
                    {{$quiz->name}}
                </div>

                <div class="accordion__item__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit esse voluptatem reprehenderit nisi, eos nostrum eius commodi vel illo. Omnis dicta commodi laudantium qui debitis rerum aliquam voluptatibus quisquam fuga!</p>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-outline-success rounded-pill mt-2"
                        href="{{route('quiz.show', $quiz->id)}}">See in Detail</a>
                    </div>
                </div>

            </div>
            @endforeach

        </div> <!-- id accordion end -->
    </div>
    @if (count($errors) > 0)
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#addQuizModal').modal('show');
            });
        </script>
    @endif



</x-dashboardLayout>
