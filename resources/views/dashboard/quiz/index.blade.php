<x-dashboardLayout>
    <x-slot name="pageHeading">
        <h1 class="page-heading">Quiz Created by You</h1>

    </x-slot>
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-outline-success mb-2"
                data-toggle="modal" data-target="#addQuizModal">
            Add new
        </button>
    </div>
    <div class="modal fade " id="addQuizModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add a new Quiz</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="accordion">
            <div class="accordion__item">
                <div class="accordion__item__header">
                    Título da FAQ
                </div>

                <div class="accordion__item__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit esse voluptatem reprehenderit nisi, eos nostrum eius commodi vel illo. Omnis dicta commodi laudantium qui debitis rerum aliquam voluptatibus quisquam fuga!</p>
                </div>
            </div>

            <div class="accordion__item">
                <div class="accordion__item__header">
                    Título da FAQ
                </div>

                <div class="accordion__item__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit esse voluptatem reprehenderit nisi, eos nostrum eius commodi vel illo. Omnis dicta commodi laudantium qui debitis rerum aliquam voluptatibus quisquam fuga!</p>
                </div>
            </div>

            <div class="accordion__item">
                <div class="accordion__item__header">
                    Título da FAQ
                </div>

                <div class="accordion__item__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit esse voluptatem reprehenderit nisi, eos nostrum eius commodi vel illo. Omnis dicta commodi laudantium qui debitis rerum aliquam voluptatibus quisquam fuga!</p>
                </div>
            </div>
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
