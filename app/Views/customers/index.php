<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="page-head">
    <div><div class="eyebrow">Directory / customer records</div><h1><?= esc($heading) ?></h1></div>
    <p>Five sample records supplied by the <code>Customers</code> controller and rendered with a <code>foreach</code> loop.</p>
</section>
<section class="board" aria-label="Customer accounts">
    <div class="board-head"><span>Full name</span><span>Email</span><span>Phone</span></div>
    <?php foreach ($customers as $customer): ?>
        <article class="record"><div><div class="record-name"><?= esc($customer['full_name']) ?></div><div class="record-meta">customer account</div></div><div class="record-email"><?= esc($customer['email']) ?></div><div class="record-phone"><?= esc($customer['phone']) ?></div></article>
    <?php endforeach; ?>
</section>
<?= $this->endSection() ?>
