<h1>Data User</h1>
<ul>
<?php foreach($user as $u): ?>
    <li><?= $u['nama'] ?> - <?= $u['email'] ?></li>
<?php endforeach; ?>
</ul>
