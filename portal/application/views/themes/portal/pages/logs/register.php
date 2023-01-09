<h1 class="auth-title">Sign Up</h1>
<p class="auth-subtitle mb-5">Enter your info to register.</p>

<?= (!is_null($notify) && !empty($notify)) ? $notify : ''; ?>
<form action="<?= site_url($form_register) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" autocomplete="off">
    <!-- Check if field and fieldqn are not null -->
    <?php if (!is_null($field) && !is_null($fieldqn)) : ?>
        <!-- Field and Qn | hidden input -->
        <input type="hidden" name="field" value="<?= $field ?>">
        <input type="hidden" name="fieldqn" value="<?= $fieldqn ?>">
        <!-- End Field and Qn -->
    <?php endif; ?>

    <div class="form-group position-relative has-icon-left mb-4">
        <input type="text" class="form-control form-control-xl" placeholder="Your Full Name" name="user_name" value="<?= set_value('user_name'); ?>">
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
        <span class="error"><?= form_error('user_name'); ?></span>
    </div>
    <div class="form-group position-relative has-icon-left mb-4">
        <input type="email" class="form-control form-control-xl" placeholder="Your Email" name="user_email" value="<?= set_value('user_email'); ?>">
        <div class="form-control-icon">
            <i class="bi bi-envelope"></i>
        </div>
        <span class="error"><?= form_error('user_email'); ?></span>
    </div>

    <div class="form-group position-relative has-icon-left mb-4">
        <input type="password" class="form-control form-control-xl" placeholder="Password" name="user_password">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
        <span class="error"><?= form_error('user_password'); ?></span>
    </div>
    <div class="form-group position-relative has-icon-left mb-4">
        <input type="password" class="form-control form-control-xl" placeholder="Confirm Password" name="confirm_password">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
        <span class="error"><?= form_error('confirm_password'); ?></span>
    </div>
    <div class="form-check form-check-lg d-flex align-items-end">
        <?php (!is_null(set_value('terms') && set_value('terms') == 'agreed')) ? $terms = 'checked' : $terms = ''; ?>
        <input class="form-check-input me-2" type="checkbox" value="agreed" id="flexCheckDefault" name="terms" <?= $terms; ?>>
        <label class="form-check-label text-gray-600" for="flexCheckDefault">
            I agree with <a href="">terms and conditions</a>.
        </label>
    </div>
    <span class="error"><?= form_error('terms') ?></span>


    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Sign Up</button>
</form>
<div class="text-center mt-5 text-lg fs-4">
    <p class='text-gray-600'>Already have an account?
        <a href="<?= site_url('login'); ?>" class="font-bold">Log in</a>.
    </p>
</div>