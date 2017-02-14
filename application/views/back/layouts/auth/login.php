<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <title>Masuk &bull; Website Tuberculosis</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Halaman Login"/>

</head>
<body class="bg-black">
<script>
    window.onload = function() {
        document.getElementById("identity").focus();
    };
</script>

<div class="form-box" id="login-box">
    <div class="header"><?php echo lang('login_heading');?></div>
    <?php echo form_open("auth/login");?>
    <div class="body bg-gray">
        <div class="form-group">
            <!-- notif -->
            <div class="alert alert-danger alert-dismissable col-centered" <?php if(is_string($message)){echo 'style="display:block; margin-bottom:7px;"';}else{echo 'style="display:none;"';}?> >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $message;?>
            </div>
            <?php echo form_input($identity);?>
        </div>
        <div class="form-group">
            <?php echo form_input($password);?>
        </div>
        <div class="form-group">
            <div class="checkbox checkbox-primary">
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> <label for="remember" style="font-weight:normal">Ingat Saya</label>
            </div>
        </div>
    </div>
    <div class="footer">
        <input type="submit" value="Masuk" class="btn btn-success btn-block btn-flat">

        <p><a href="<?php echo site_url('forgot')?>"><?php echo lang('login_forgot_password');?></a></p>

    </div>
    <?php echo form_close();?>
</div>


</body>
</html>