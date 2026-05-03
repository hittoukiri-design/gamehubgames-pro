<?php $title='Sports - YaarWin Games'; include 'includes/header.php'; ?>
<section class="page-hero">
  <div class="container">
    <span class="eyebrow">Sports hub</span>
    <h1>Sports-Themed Gaming Guide</h1>
    <p>Explore cricket, football, tennis, kabaddi, match-day topics, payment checks, and responsible sports gaming habits for Indian players.</p>
  </div>
</section>
<section class="section">
  <div class="container grid-4">
    <?php foreach(['Cricket','Football','Tennis','Kabaddi','Basketball','Esports','Live Picks','Match Rewards'] as $g): ?>
      <article class="game-card">
        <div class="game-thumb"><?= $g ?></div>
        <h2><?= $g ?></h2>
        <p>Review account access, match timing, bonus notes, wallet readiness, and personal limits before joining <?= strtolower($g) ?>-related sessions.</p>
      </article>
    <?php endforeach; ?>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
