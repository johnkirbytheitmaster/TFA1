<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="hero">
    <div class="hero-copy">
        <div class="eyebrow">CodeIgniter 4 · MVC foundation</div>
        <h1><?= esc($heading) ?> <span>with less noise.</span></h1>
        <p class="lead">A compact point-of-sale workspace where routes, controllers, and views stay easy to follow while the data layer is still taking shape.</p>
        <a class="button" href="/customers">Open customer accounts</a>
        <a class="button secondary" href="/about">See the structure</a>
    </div>
    <aside class="hero-panel" aria-label="System snapshot">
        <div class="hero-panel-top"><span>SYS / 01</span><span>READY</span></div>
        <h2>Clarity is a feature.</h2>
        <p class="panel-note">The first release uses static PHP arrays so the page flow can be understood before a database is introduced.</p>
    </aside>
</section>
<section class="metric-row" aria-label="System summary">
    <div class="metric"><div class="metric-label">Routes</div><div class="metric-value">04 pages</div></div>
    <div class="metric"><div class="metric-label">Profiles</div><div class="metric-value">10 records</div></div>
    <div class="metric"><div class="metric-label">Pattern</div><div class="metric-value">MVC first</div></div>
</section>
<section class="module-grid" aria-label="POS modules">
    <a class="module" href="/customers"><div class="module-number">01 / CUSTOMERS</div><h3>Customer Accounts</h3><p>Names, email addresses, and contact numbers prepared by the Customers controller.</p></a>
    <a class="module" href="/users"><div class="module-number">02 / USERS</div><h3>User Accounts</h3><p>Staff usernames, names, and roles rendered from a second temporary array.</p></a>
    <a class="module" href="/about"><div class="module-number">03 / METHOD</div><h3>About the Lab</h3><p>A quick read on how the routes, controllers, and views connect.</p></a>
</section>
<?= $this->endSection() ?>
