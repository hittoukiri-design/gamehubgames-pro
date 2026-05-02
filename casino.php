<?php $title='Casino - YaarWin Games'; include 'includes/header.php'; ?>
<section class="page-hero"><div class="container"><span class="eyebrow">Casino floor</span><h1>Live-style Casino Experience</h1><p>Roulette, blackjack, baccarat, dice, table games and premium game sections in a black-green theme.</p></div></section>
<section class="section"><div class="container grid-3"><?php foreach(['Roulette Arena','Baccarat Lounge','Blackjack Pro','Teen Patti Room','Andar Bahar','Dragon Tiger'] as $g): ?><div class="card"><span class="tag">Casino</span><h3><?= $g ?></h3><p>Use this card for provider game embeds, tables, or campaign landing pages.</p><a class="btn btn-primary" href="register.php">Enter</a></div><?php endforeach; ?></div></section>
<?php include 'includes/footer.php'; ?>
