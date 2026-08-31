<?php include_once __DIR__ . '/config.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title ?? $brand) ?></title>
  <meta name="description" content="<?= htmlspecialchars($description ?? 'GameHub Games India platform for GameHub login, Aviator, Teen Patti, Rummy, Wingo colour prediction, cricket betting, live casino, bonuses, UPI payment checks, fast withdrawal support, and mobile-first real-money game access.') ?>">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large">
  <meta name="theme-color" content="#050705">
  <link rel="icon" href="/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/favicon-64x64.png" sizes="64x64" type="image/png">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="top-strip">
    <span>GameHub login guide</span>
    <span>UPI payment topics</span>
    <span>Fast withdrawal reads</span>
  </div>
  <nav class="navbar container">
    <a class="brand" href="/" aria-label="GameHub Games Home">
      <img src="/assets/img/ywg-logo.webp" alt="GameHub Games Logo" width="44" height="44">
      <span>GameHub <b>Games</b></span>
    </a>
    <button class="menu-toggle" aria-label="Open menu" aria-expanded="false">☰</button>
    <div class="nav-links" id="navLinks">
      <a class="<?= active('index.php') ?>" href="/">Home</a>
      <a href="/gamehub/">GameHub</a>
      <a class="<?= active('casino.php') ?>" href="/casino/">Casino</a>
      <a class="<?= active('promotions.php') ?>" href="/promotions/">Promotions</a>
      <a href="/blog/">Blog</a>
      <a class="<?= active('contact.php') ?>" href="/contact/">Help</a>
    </div>
    <div class="nav-actions">
      <a href="<?= htmlspecialchars($login_link) ?>" class="btn btn-outline" rel="nofollow noopener" target="_blank">Login</a>
      <a href="<?= htmlspecialchars($register_link) ?>" class="btn btn-primary" rel="nofollow noopener" target="_blank">Register</a>
    </div>
  </nav>
</header>
<main>
