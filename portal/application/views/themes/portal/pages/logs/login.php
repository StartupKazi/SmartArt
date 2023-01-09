<h1 class="auth-title">Log in.</h1>
<p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

<?= (!is_null($notify) && !empty($notify)) ? $notify : ''; ?>
<form action="<?= site_url($form_login) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" autocomplete="off">
    <div class="form-group position-relative has-icon-left mb-4">
        <input type="email" class="form-control form-control-xl" placeholder="Your Email" required name="user_logname" value="<?= set_value('user_logname'); ?>">
        <div class="form-control-icon">
            <i class="bi bi-envelope"></i>
        </div>
        <span class="error"><?= form_error('user_logname') ?></span>
    </div>
    <div class="form-group position-relative has-icon-left mb-4">
        <input type="password" class="form-control form-control-xl" placeholder="Password" required name="user_password">
        <div class="form-control-icon icon-2">
            <i class="bi bi-lock"></i>
        </div>
        <span class="error"><?= form_error('user_password') ?></span>
    </div>
    <div class="form-check form-check-lg d-flex align-items-end">
        <?php (!is_null(set_value('remember') && set_value('remember') == 'yes')) ? $remember = 'checked' : $remember = ''; ?>
        <input class="form-check-input me-2" type="checkbox" value="yes" id="flexCheckDefault" name="remember" <?= $remember; ?>>
        <label class="form-check-label text-gray-600" for="flexCheckDefault">
            Keep me logged in
        </label>
    </div>

    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Log in</button>
</form>
<div class="text-center mt-5 text-lg fs-4">
    <p class="text-gray-600">
        Don't have an account? <a href="<?= site_url('register'); ?>" class="font-bold">Sign up</a>.
    </p>
    <p>
        <a class="font-bold" href="<?= site_url('reset'); ?>">Forgot password?</a>.
    </p>
</div>