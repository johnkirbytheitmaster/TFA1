<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="about-layout">
    <div class="about-copy">
        <div class="eyebrow">About the project</div>
        <h1><?= esc($heading) ?></h1>
        <p>This first POS release keeps the page flow visible. A request arrives at a route, a controller prepares the response, and a view turns that response into the interface in your browser.</p>
        <p>The customer and user records intentionally live in static PHP arrays. That temporary source behaves like a small in-memory table and keeps the activity focused on the MVC foundation.</p>
        <div class="callout"><p>Next module: replace the temporary arrays with database-backed models while keeping the same page structure.</p></div>
    </div>
    <div class="principles" aria-label="MVC layers">
        <article class="principle"><div class="principle-number">01</div><div><h3>Route</h3><p>Matches a URL such as <code>/customers</code> to the right controller method.</p></div></article>
        <article class="principle"><div class="principle-number">02</div><div><h3>Controller</h3><p>Holds the temporary record array and passes data into the view.</p></div></article>
        <article class="principle"><div class="principle-number">03</div><div><h3>View</h3><p>Loops through the records and renders the page a customer sees.</p></div></article>
    </div>
</section>
<?= $this->endSection() ?>
