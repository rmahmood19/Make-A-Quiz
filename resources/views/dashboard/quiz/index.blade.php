<x-dashboardLayout>
   <h2 class="text-green-800 w-full text-center text-2xl">Your Quiz</h2>

<add-quiz></add-quiz>
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
