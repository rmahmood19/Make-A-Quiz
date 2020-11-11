<x-layout>
    <div class="col-md-3 auth-left">
        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
        <h3>Welcome</h3>
        <p>You are 30 seconds away from earning your own money!</p>
    </div>
    <div class="col-md-9 auth-right">
        <div class="tab-content" id="myTabContent">
                <h3 class="auth-heading">Register</h3>
            <form action="{{route('register')}}" method="POST">
                @csrf

                <div class="row auth-form">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" />
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btnAuth"  value="Register">Register</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
