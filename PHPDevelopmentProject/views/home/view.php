<?php $this->title = $this->post['title']; ?>

<div class="container">
    <h1><?=htmlspecialchars($this->title)?></h1>

    <main id="posts">
        <article>
            <div class="date">
                <i>Posted on</i>
                <?= (new DateTime($this->post['date']))->format('d-M-Y') ?>
                <i>By</i>
                <?= htmlentities($this->post['full_name']) ?>
            </div>
            <p class="content">
                <?= $this->post['content'] ?>
            </p>
        </article>
    </main>
</div>

