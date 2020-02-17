<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic">
<link rel="stylesheet" href="{{URL::to('/')}}/assets/stylesheets/ionicons.css">
<link rel="stylesheet" href="{{URL::to('/')}}/assets/stylesheets/font-awesome.css">

<!-- Theme-->
<link id="mainstyle" rel="stylesheet" href="{{URL::to('/')}}/assets/stylesheets/skin.css">
<link id="mainstyle" rel="stylesheet" href="{{URL::to('/')}}/assets/stylesheets/demo.css">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries--><!--[if lt IE 9]>
<script src="assets/scripts/html5shiv.js"></script>
<script src="assets/scripts/respond.js"></script><![endif]-->
<!-- <script src="assets/scripts/modernizr-custom.js"></script>
<script src="assets/scripts/respond.js"></script> -->
<body class="f-dark login login-side" style="background:url(../assets/images/bg2.jpg);background-size:cover;">
  <form class="login-form" id="userlogin" autocomplete="off" method="POST" action="{{ route('login') }}">
                        @csrf
<div class="p-a-3 text-xs-center"><img src="{{URL::to('/')}}/img/logopln.png"></a></div>
<div class="form-group">
  <label class="sr-only" for="formBasicEmail">Email Address</label>
  <input class="form-control" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
</div>
<div class="form-group">
  <label class="sr-only" for="formBasicPassword">Password</label>
  <input class="form-control" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
</div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->
<br>

 <div class="form-group row">
          <div class="col-md-4 pull-xs-right">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
