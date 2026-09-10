<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'POS Lab') ?></title>
    <style>
        :root { --ink: #1a2032; --text: #f6f1eb; --muted: #a5acbb; --accent: #dfa49b; --accent-soft: #efc8c0; --line: rgba(246,241,235,.14); --panel: rgba(246,241,235,.055); --mono: "Courier New", Courier, monospace; }
        * { box-sizing: border-box; }
        html { background: var(--ink); }
        body { min-height: 100vh; margin: 0; color: var(--text); background: radial-gradient(circle at 90% 0%, rgba(223,164,155,.09), transparent 32rem), var(--ink); font-family: Arial, Helvetica, sans-serif; }
        body::before { content: ""; position: fixed; inset: 0; pointer-events: none; opacity: .14; background-image: linear-gradient(rgba(246,241,235,.025) 1px, transparent 1px), linear-gradient(90deg, rgba(246,241,235,.025) 1px, transparent 1px); background-size: 52px 52px; mask-image: linear-gradient(to bottom, black, transparent 75%); }
        a { color: inherit; }
        header { position: sticky; top: 0; z-index: 10; background: rgba(26,32,50,.92); border-bottom: 1px solid var(--line); backdrop-filter: blur(18px); }
        .nav { max-width: 1180px; margin: auto; padding: 18px 26px; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .brand { color: var(--text); text-decoration: none; font-size: .92rem; font-weight: 800; letter-spacing: .1em; }
        nav { display: flex; flex-wrap: wrap; gap: 5px; }
        nav a { color: var(--muted); text-decoration: none; padding: 9px 12px; border: 1px solid transparent; font-family: var(--mono); font-size: .72rem; letter-spacing: .03em; }
        nav a:hover, nav a.active { color: var(--text); border-color: var(--line); background: var(--panel); }
        main { position: relative; max-width: 1180px; margin: 0 auto; padding: 74px 26px 100px; }
        .eyebrow, .route-tag, .metric-label { color: var(--accent-soft); font-family: var(--mono); font-size: .68rem; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; }
        h1, h2, h3, p { margin-top: 0; }
        h1 { max-width: 760px; margin-bottom: 22px; font-size: clamp(2.7rem, 7vw, 6.6rem); line-height: .94; letter-spacing: -.07em; }
        h2 { margin-bottom: 13px; font-size: clamp(1.7rem, 3vw, 2.65rem); line-height: 1; letter-spacing: -.05em; }
        h3 { margin-bottom: 10px; font-size: 1.18rem; letter-spacing: -.03em; }
        p { color: var(--muted); line-height: 1.7; }
        .lead { max-width: 590px; font-size: 1.08rem; }
        .button { display: inline-flex; align-items: center; min-height: 44px; margin-top: 14px; padding: 0 17px; color: var(--ink); background: var(--accent); font-weight: 800; text-decoration: none; }
        .button:hover { background: #e8b1a8; transform: translateY(-1px); }
        .button.secondary { margin-left: 8px; color: var(--text); background: transparent; border: 1px solid var(--line); }
        .button.secondary:hover { background: var(--panel); }
        .hero { display: grid; grid-template-columns: minmax(0, 1.2fr) minmax(300px, .8fr); gap: 72px; align-items: end; }
        .hero-copy { padding-bottom: 18px; }
        .hero h1 span { color: var(--accent); }
        .hero-panel { position: relative; min-height: 390px; padding: 27px; overflow: hidden; background: var(--accent); color: var(--ink); }
        .hero-panel::before { content: ""; position: absolute; right: -70px; bottom: -90px; width: 250px; height: 250px; border: 1px solid rgba(26,32,50,.25); border-radius: 50%; box-shadow: 0 0 0 34px rgba(26,32,50,.06), 0 0 0 68px rgba(26,32,50,.045); }
        .hero-panel-top { display: flex; justify-content: space-between; gap: 20px; font-family: var(--mono); font-size: .7rem; font-weight: 700; letter-spacing: .08em; }
        .hero-panel h2 { position: relative; max-width: 290px; margin: 92px 0 42px; font-size: clamp(2rem, 4vw, 3.7rem); }
        .hero-panel .panel-note { position: relative; max-width: 230px; margin: 0; color: rgba(11,16,32,.68); font-family: var(--mono); font-size: .72rem; line-height: 1.55; }
        .metric-row { display: grid; grid-template-columns: repeat(3, 1fr); margin: 75px 0 62px; border-top: 1px solid var(--line); border-bottom: 1px solid var(--line); }
        .metric { padding: 20px 18px 19px 0; }
        .metric + .metric { padding-left: 20px; border-left: 1px solid var(--line); }
        .metric-value { margin-top: 8px; color: var(--text); font-size: 1.55rem; font-weight: 800; letter-spacing: -.04em; }
        .module-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; }
        .module { min-height: 230px; padding: 24px; border: 1px solid var(--line); background: var(--panel); transition: transform .2s ease, border-color .2s ease; }
        .module:hover { transform: translateY(-4px); border-color: rgba(223,164,155,.55); }
        .module-number { margin-bottom: 46px; color: var(--accent); font-family: var(--mono); font-size: .8rem; }
        .module p { margin-bottom: 0; font-size: .91rem; }
        .page-head { display: flex; justify-content: space-between; gap: 40px; align-items: end; margin-bottom: 50px; }
        .page-head p { max-width: 390px; margin-bottom: 5px; }
        .board { border: 1px solid var(--line); background: rgba(255,255,255,.035); }
        .board-head, .record { display: grid; grid-template-columns: 1.4fr 1.4fr .85fr; gap: 20px; align-items: center; }
        .board-head { padding: 14px 22px; color: var(--muted); background: rgba(255,255,255,.045); font-family: var(--mono); font-size: .66rem; letter-spacing: .12em; text-transform: uppercase; }
        .record { min-height: 82px; padding: 17px 22px; border-top: 1px solid var(--line); }
        .record:hover { background: rgba(223,164,155,.07); }
        .record-name { font-weight: 800; letter-spacing: -.02em; }
        .record-meta { margin-top: 5px; color: var(--muted); font-family: var(--mono); font-size: .74rem; }
        .record-email { color: var(--muted); font-size: .9rem; overflow-wrap: anywhere; }
        .record-phone { color: var(--accent-soft); font-family: var(--mono); font-size: .78rem; }
        .role { display: inline-block; width: fit-content; padding: 6px 9px; color: var(--accent-soft); border: 1px solid rgba(223,164,155,.36); font-family: var(--mono); font-size: .7rem; }
        .about-layout { display: grid; grid-template-columns: minmax(0, 1fr) minmax(310px, .8fr); gap: 80px; }
        .about-copy p { max-width: 610px; font-size: 1.05rem; }
        .principles { border-top: 1px solid var(--line); }
        .principle { display: grid; grid-template-columns: 45px 1fr; gap: 16px; padding: 20px 0; border-bottom: 1px solid var(--line); }
        .principle-number { color: var(--accent); font-family: var(--mono); font-size: .74rem; }
        .principle h3 { margin-bottom: 6px; }
        .principle p { margin-bottom: 0; font-size: .9rem; }
        .callout { margin-top: 56px; padding: 24px; border-left: 3px solid var(--accent); background: var(--panel); }
        .callout p { margin-bottom: 0; font-family: var(--mono); font-size: .82rem; }
        footer { max-width: 1180px; margin: auto; padding: 0 26px 32px; color: var(--muted); font-family: var(--mono); font-size: .68rem; letter-spacing: .03em; }
        @media (max-width: 820px) { .hero, .about-layout { grid-template-columns: 1fr; gap: 38px; } .hero-panel { min-height: 310px; } .hero-panel h2 { margin-top: 58px; margin-bottom: 28px; } .module-grid { grid-template-columns: 1fr; } .module { min-height: 0; } .page-head { display: block; } .page-head p { margin-top: 18px; } }
        @media (max-width: 620px) { .nav { align-items: flex-start; flex-direction: column; padding: 16px 18px; } nav { width: 100%; overflow-x: auto; flex-wrap: nowrap; } nav a { white-space: nowrap; } main { padding: 52px 18px 72px; } footer { padding: 0 18px 26px; } h1 { font-size: clamp(2.65rem, 15vw, 4.8rem); } .button { width: 100%; justify-content: center; } .button.secondary { margin-top: 8px; margin-left: 0; } .metric-row { margin: 52px 0 45px; } .metric { padding-right: 8px; } .metric + .metric { padding-left: 11px; } .metric-value { font-size: 1.2rem; } .board { overflow-x: auto; } .board-head, .record { min-width: 650px; } }
        @media (prefers-reduced-motion: reduce) { *, *::before, *::after { scroll-behavior: auto !important; transition: none !important; } }
    </style>
</head>
<body>
<header>
    <div class="nav">
        <a class="brand" href="/">KIRBY POS</a>
        <?php $currentPath = trim(service('uri')->getPath(), '/'); ?>
        <nav aria-label="Main navigation">
            <a class="<?= $currentPath === '' ? 'active' : '' ?>" href="/">Home</a>
            <a class="<?= $currentPath === 'about' ? 'active' : '' ?>" href="/about">About</a>
            <a class="<?= $currentPath === 'customers' ? 'active' : '' ?>" href="/customers">Customers</a>
            <a class="<?= $currentPath === 'users' ? 'active' : '' ?>" href="/users">Users</a>
        </nav>
    </div>
</header>
<main><?= $this->renderSection('content') ?></main>
<footer>CodeIgniter 4 MVC laboratory activity · Static arrays are used as temporary data sources.</footer>
</body>
</html>
