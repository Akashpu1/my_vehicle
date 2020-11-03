
<?php include ("layout/css.php"); ?>
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your username">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your email">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your confirm password">
        </div><!-- form-group -->
        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>

        <div class="mg-t-40 tx-center">If you are a member? <a href="<?php echo base_url("home/signin")?>" class="tx-info">Sign in</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="<?php echo base_url()?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="<?php echo base_url()?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>

<!-- Mirrored from themepixels.me/demo/bracketplus1.4/app/template/signup-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 10:38:49 GMT -->
</html>
