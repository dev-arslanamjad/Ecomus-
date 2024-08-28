<form action="logincode.php">
    <div class="tf-field style-1">
        <input id="email" class="tf-field-input tf-input" placeholder=" " type="email" name="email">
        <label class="tf-field-label" required>Email *</label>
    </div>
    <div class="tf-field style-1">
        <input class="tf-field-input tf-input" placeholder=" " type="password" name="password">
        <label class="tf-field-label" required>Password *</label>
    </div>
    <div>
        <a href="#forgotPassword" data-bs-toggle="modal" class="btn-link link">Forgot your password?</a>
    </div>
    <div class="bottom">
    <div class="mb_20">
        <button id="btn-login" type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Login</button>
    </div>
        <div class="w-100">
            <a href="#register" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                New customer? Create your account
                <i class="icon icon-arrow1-top-left"></i>
            </a>
        </div>
    </div>
</form>