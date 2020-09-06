<x-frontend>
    <br>
    <br>
    <br>
      
    </section>
 <div class="login-form" >
        <form action="{{route('login')}}" method="POST">
            @csrf
            <h2 class="text-center">Log in</h2>       
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email Address" required="required">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            <div class="clearfix">
                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                <a href="#" class="float-right">Forgot Password?</a>
            </div>        
        </form>
        <p class="text-center"><a href="{{route('register')}}">Create an Account</a></p>
    </div>

</x-frontend>