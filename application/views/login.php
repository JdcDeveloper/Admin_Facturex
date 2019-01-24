  <p class="bg-danger" id="msgNoUser">

    <?php if($this->session->flashdata('userNoRegister')): ?>

      <?php echo $this->session->flashdata('userNoRegister'); ?>

    <?php endif; ?>

  </p>

  
  <p class="bg-success" id="msgUserRegister">

    <?php if($this->session->flashdata('userRegister')): ?>

      <?php echo $this->session->flashdata('userRegister'); ?>

    <?php endif; ?>

  </p>

  <p class="bg-success" id="msgPassChange">

    <?php if($this->session->flashdata('passwordChange')): ?>

      <?php echo $this->session->flashdata('passwordChange'); ?>

    <?php endif; ?>

  </p>

  <p class="bg-danger" id="msgCloseSess">

    <?php if($this->session->flashdata('closeSession')): ?>

      <?php echo $this->session->flashdata('closeSession'); ?>

    <?php endif; ?>

  </p>




<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <!-- <form action="../../index2.html" method="post"> -->

      <?php echo form_open('login/signin') ?>


      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="user">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <div class="text-danger"><?php echo form_error('user');  ?></div>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <div class="text-danger"><?php echo form_error('password');  ?></div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>

      <?php echo form_close()  ?>

   <!--  </form> -->

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<!-- <script src="../../bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- Bootstrap 3.3.7 -->
<!-- <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<!-- iCheck -->
<!-- <script src="../../plugins/iCheck/icheck.min.js"></script> -->
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
