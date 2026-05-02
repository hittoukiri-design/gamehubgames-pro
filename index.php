<?php $title='YaarWin Games - Premium Online Gaming'; include 'includes/header.php'; ?>
<section class="hero">
  <div class="container hero-grid">
    <div>
      <span class="eyebrow">● Premium green-black gaming experience</span>
      <h1>Play smarter with <span class="gradient">YaarWin Games</span></h1>
      <p>Enjoy a modern gaming hub for slots, casino tables, live-style entertainment, sports themes, promotions, and mobile-first play. Built with a fast responsive layout for both desktop and mobile visitors.</p>
      <div class="hero-actions">
        <a class="btn btn-primary" href="register.php">Start Playing</a>
        <a class="btn btn-outline" href="slots.php">Explore Slots</a>
      </div>
      <div class="stats">
        <div class="stat"><strong>500+</strong><span>Game placeholders</span></div>
        <div class="stat"><strong>24/7</strong><span>Support section</span></div>
        <div class="stat"><strong>Fast</strong><span>PHP/HTML template</span></div>
      </div>
    </div>
    <div class="phone-mock">
      <div class="screen">
        <div class="screen-top"><b>YaarWin Live</b><span class="chip">Online</span></div>
        <div class="jackpot"><small>Featured Prize Pool</small><h2>₹ 9,88,000</h2><a class="btn btn-primary" href="register.php">Claim Bonus</a></div>
        <div class="mini-grid">
          <div class="mini-game">Slots</div><div class="mini-game">Casino</div><div class="mini-game">Sports</div><div class="mini-game">Rewards</div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="section-head"><div><span class="eyebrow">Popular categories</span><h2>Choose your game zone</h2></div><p>Clean category cards designed for casino-style landing pages.</p></div>
    <div class="grid-4">
      <?php foreach(['Slots','Live Casino','Sports Picks','Crash Games','Lottery','Table Games','Jackpot','VIP Rewards'] as $cat): ?>
      <div class="game-card"><div class="game-thumb"><?= $cat ?></div><h3><?= $cat ?></h3><p>High-converting card block ready for your real game links and thumbnails.</p><span class="tag">Play Now</span></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="section">
  <div class="container banner">
    <div><span class="eyebrow">Mobile ready</span><h2>Built for PC and mobile traffic</h2><p>Responsive header, compact mobile menu, CTA buttons, floating chat buttons, and reusable PHP includes.</p></div>
    <a class="btn btn-primary" href="app.php">Get App</a>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
