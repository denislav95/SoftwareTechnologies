<?php $this->title = 'Posts'; ?>

<div class="container">
    <h1><?= htmlspecialchars($this->title) ?></h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th width="150px">Date</th>
            <th>Author</th>
            <th>Action</th>
        </tr>
        <?php foreach ($this->posts as $post): ?>
            <tr>
                <td><?= $post['id'] ?></td>
                <td><?= htmlspecialchars($post['title']) ?></td>
                <td><?= cutLongText($post['content']) ?></td>
                <td><?= htmlspecialchars($post['date']) ?></td>
                <td><?= $post['user_id'] ?></td>
                <td>
                    <a id="editBtn" href="<?= APP_ROOT ?>/posts/edit/<?= $post['id'] ?>">[Edit]</a>
                    <a id="deleteBtn" href="<?= APP_ROOT ?>/posts/delete/<?= $post['id'] ?>">[Delete]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a id="createBtn" href="<?= APP_ROOT ?>/posts/create">[Create New]</a>
</div>

