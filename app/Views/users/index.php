<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="page-head">
    <div><div class="eyebrow">Directory / staff records</div><h1><?= esc($heading) ?></h1></div>
    <p>Five sample staff records supplied by the <code>Users</code> controller and rendered with a <code>foreach</code> loop.</p>
</section>
<section class="board" aria-label="User accounts">
    <div class="board-head"><span>Username / full name</span><span>Account type</span><span>Role</span></div>
    <?php foreach ($users as $user): ?>
        <article class="record"><div><div class="record-name"><?= esc($user['username']) ?></div><div class="record-meta"><?= esc($user['full_name']) ?></div></div><div class="record-email">active staff account</div><div><span class="role"><?= esc($user['role']) ?></span></div></article>
    <?php endforeach; ?>
</section>
<?= $this->endSection() ?>
