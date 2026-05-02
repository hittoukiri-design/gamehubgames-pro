<?php include_once __DIR__ . '/config.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title ?? $brand) ?></title>
  <meta name="description" content="<?= htmlspecialchars($description ?? 'YaarWin Games premium online games, slots, casino, sports and rewards platform.') ?>">
  <meta name="theme-color" content="#1c9536">
  <link rel="icon" href="assets/img/logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="top-strip">
    <span>Welcome bonus available</span>
    <span>Fast support</span>
    <span>Mobile-first gaming</span>
  </div>
  <nav class="navbar container">
    <a class="brand" href="index.php" aria-label="YaarWin Games Home">
      <img src="assets/img/logo.svg" alt="YaarWin Games Logo">
      <span>YaarWin <b>Games</b></span>
    </a>
    <button class="menu-toggle" aria-label="Open menu" aria-expanded="false">☰</button>
    <div class="nav-links" id="navLinks">
      <a class="<?= active('index.php') ?>" href="index.php">Home</a>
      <a class="<?= active('casino.php') ?>" href="casino.php">Casino</a>
      <a class="<?= active('slots.php') ?>" href="slots.php">Slots</a>
      <a class="<?= active('sports.php') ?>" href="sports.php">Sports</a>
      <a class="<?= active('promotions.php') ?>" href="promotions.php">Promotions</a>
      <a class="<?= active('app.php') ?>" href="app.php">App</a>
      <a class="<?= active('blog.php') ?>" href="blog.php">Blog</a>
    </div>
    <div class="nav-actions">
      <a href="register.php" class="btn btn-outline">Login</a>
      <a href="register.php" class="btn btn-primary">Register</a>
    </div>
  </nav>
</header>
<main>
