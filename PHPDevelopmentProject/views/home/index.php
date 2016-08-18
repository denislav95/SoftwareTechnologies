<?php $this->title = 'Welcome to My Blog'; ?>
<div class="container main-articles">

    <h1><?=htmlspecialchars($this->title)?></h1>

    <main id="posts">

        <div class="col-lg-9">
            <?php foreach ($this->posts as $post): ?>
            <h2 class="title"><?= htmlentities($post['title'])?></h2>
            <div class="date">
                <i>Posted on</i>
                <?= (new DateTime($post['date']))->format('d-M-Y') ?>
                <i>By</i>
                <?= htmlentities($post['full_name']) ?>
            </div>
            <p class="content">
                <?= $post['content'] ?>
            </p>
            <?php endforeach; ?>
        </div>

        <div class="col-lg-3 aside">
            <h2>Recent Posts</h2>
            <?php foreach ($this->sidebarPosts as $post): ?>
                <a href="<?= APP_ROOT ?>/home/view/<?= $post['id'] ?>"><?= htmlentities($post['title']) ?></a>
            <?php endforeach; ?>
        </div>

    </main>

</div>