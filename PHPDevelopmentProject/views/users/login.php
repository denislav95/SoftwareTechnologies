<?php $this->title = 'Login'; ?>

<div class="container login">
    <h1 class="blog-title"><?= htmlspecialchars($this->title) ?></h1>

    <div class="user-login-block">
        <form method="post">
            <div>
                <label for="username">Username:</label>
            </div>
            <input id="username" type="text" name="username">
            <div>
                <label for="password">Password:</label>
            </div>
            <input id="password" type="password" name="password">
            <div class="loginBtn">
                <input type="submit" value="Login">
            </div>
            <div>
                <a id="toRegister" href="<?= APP_ROOT ?>/users/register">[Go to Register]</a>
            </div>
        </form>
    </div>

</div>

