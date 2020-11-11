<x-layout>
    <div class="col-md-3 auth-left">
        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
        <h3>Welcome</h3>
        <p>You are 30 seconds away from earning your own money!</p>
    </div>
    <div class="col-md-9 auth-right">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h3 class="auth-heading">Login</h3>
                <div class="row auth-form">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" value="" />
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" value="" />
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btnAuth"  >Login</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>
