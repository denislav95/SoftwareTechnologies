<?php $this->title = 'Register New User'; ?>

<div class="container register">
    <h1 class="blog-title"><?= htmlspecialchars($this->title) ?></h1>

    <div class="user-register-block">
        <form method="post">
            <div>
                <label for="username">Username:</label>
            </div>
            <input id="username" type="text" name="username">
            <div>
                <label for="password">Password:</label>
            </div>
            <input id="password" type="password" name="password">
            <div>
                <label for="username">Full name:</label>
            </div>
            <input id="full_name" type="text" name="full_name">
            <div class="registerBtn">
                <input type="submit" value="Register">
            </div>
            <div>
                <a id="toLogin" href="<?= APP_ROOT ?>/users/login">[Go to Login]</a>
            </div>
        </form>
    </div>

</div>

