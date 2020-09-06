<x-frontend>
<br>
<br>
  
<div class="signup-form">
    <form action="{{route('register')}}" method="POST">
        @csrf
        <h2>Sign Up</h2>
        
         <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
             @error('name')
            <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        </div>
         <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col"> <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong >{{$message}}</strong>
            </span>
            @enderror</div>
                <div class="col"> <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="required"></div>
               
            </div>          
        </div>
        
       
        
        <div class="form-group">
            <div class="row">
                <div class="col"><input type="phone" class="form-control" name="phone" placeholder="Phone" required="required">
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong >{{$message}}</strong>
            </span>
            @enderror</div>
                <div class="col">  <input type="address" class="form-control" name="address" placeholder="Address" required="required">
            @error('address')
            <span class="invalid-feedback" role="alert">
                <strong >{{$message}}</strong>
            </span>
            @enderror</div>
               
            </div>          
        </div>      
        <div class="form-group">
            <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
    <div class="hint-text">Already have an account? <a href="{{route('login')}}" class="text-dark">Login</a></div>
</div>


</x-frontend>
