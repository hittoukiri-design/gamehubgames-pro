<?php $title='Sports - YaarWin Games'; include 'includes/header.php'; ?>
<section class="page-hero"><div class="container"><span class="eyebrow">Sports hub</span><h1>Sports-Themed Gaming</h1><p>Original sports landing page for cricket, football, tennis, kabaddi and match-day promotions.</p></div></section>
<section class="section"><div class="container grid-4"><?php foreach(['Cricket','Football','Tennis','Kabaddi','Basketball','Esports','Live Picks','Match Rewards'] as $g): ?><div class="game-card"><div class="game-thumb"><?= $g ?></div><h3><?= $g ?></h3><p>Create event cards, odds previews, or promotional blocks.</p></div><?php endforeach; ?></div></section>
<?php include 'includes/footer.php'; ?>
