<?php include ("layout/css.php"); ?>
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">The Admin Template For Perfectionist</div>

        <div class="form-group">
          <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
          <a href="#" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        <button type="button" id="submit" class="btn btn-info btn-block">Sign In</button>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    <script src="<?php echo base_url()?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    // $(document).ready(function(){
    //   $("#submit").click(function(){
    //      var name = $("#username").val();
    //      var pass = $("#password").val();
    //     var result = {'name':name,'password':pass,'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'}
    //     $.ajax({
    //       url: "<?php// echo base_url("home/finduser") ?>",
    //       type: "POST",
    //       data: result,
    //       success: function (data) {
    //         alert(data);
    //       }
    //     });

    //   });

    // });
    </script>
  </body>
</html>
