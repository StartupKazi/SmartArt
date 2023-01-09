    <h1 class="auth-title">Forgot Password</h1>
    <p class="auth-subtitle mb-5">Enter your account email and we will send new password via email.</p>

    <?= (!is_null($notify) && !empty($notify)) ? $notify : ''; ?>
    <form action="<?= site_url($form_reset) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" autocomplete="off">

        <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" class="form-control form-control-xl" placeholder="Your Account Email" name="user_logname" value="<?= set_value('user_logname'); ?>">
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
            <span class="error"><?= form_error('user_logname'); ?></span>
        </div>

        <div class="form-check form-check-lg d-flex align-items-end">
            <?php (!is_null(set_value('reset') && set_value('reset') == 'agreed')) ? $reset = 'checked' : $reset = ''; ?>
            <input class="form-check-input me-2" type="checkbox" value="agreed" id="flexCheckDefault" name="reset" <?= $reset; ?>>
            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                Yes! help me to reset my password.
            </label>
        </div>
        <span class="error"><?= form_error('reset') ?></span>

        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Reset Password</button>
    </form>
    <div class="text-center mt-5 text-lg fs-4">
        <p class='text-gray-600'>Remember your account?
            <a href="<?= site_url('login'); ?>" class="font-bold">Log in</a>.
        </p>
    </div>