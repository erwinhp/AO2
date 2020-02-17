<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic">
<link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/stylesheets/ionicons.css">
<link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/stylesheets/font-awesome.css">

<!-- Theme-->
<link id="mainstyle" rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/stylesheets/skin.css">
<link id="mainstyle" rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/stylesheets/demo.css">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries--><!--[if lt IE 9]>
<script src="assets/scripts/html5shiv.js"></script>
<script src="assets/scripts/respond.js"></script><![endif]-->
<!-- <script src="assets/scripts/modernizr-custom.js"></script>
<script src="assets/scripts/respond.js"></script> -->
<body class="f-dark login login-side" style="background:url(../assets/images/bg2.jpg);background-size:cover;">
  <form class="login-form" id="userlogin" autocomplete="off" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
<div class="p-a-3 text-xs-center"><img src="<?php echo e(URL::to('/')); ?>/img/logopln.png"></a></div>
<div class="form-group">
  <label class="sr-only" for="formBasicEmail">Email Address</label>
  <input class="form-control" id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
  <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
      <span class="invalid-feedback" role="alert">
          <strong><?php echo e($message); ?></strong>
      </span>
  <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</div>
<div class="form-group">
  <label class="sr-only" for="formBasicPassword">Password</label>
  <input class="form-control" id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">
</div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div> -->
<br>

 <div class="form-group row">
          <div class="col-md-4 pull-xs-right">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <?php echo e(__('Login')); ?>

                                </button>

                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH D:\git\AO2\resources\views/auth/login.blade.php ENDPATH**/ ?>