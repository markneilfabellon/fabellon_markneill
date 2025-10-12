<?php // views/home.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Home | Project CRUD</title>
  <?php include __DIR__ . '/students/_cyber_shared.php'; ?>
</head>
<body>
  <div class="container">
    <div class="panel" style="text-align:center;max-width:600px;margin:auto;">
      <h1>Welcome to Project CRUD</h1>
      <p class="small muted">Your centralized portal for managing users</p>

      <div style="display:flex;flex-direction:column;gap:.8rem;margin-top:2rem;">
        <a href="<?= site_url('auth/login') ?>" class="btn">Admin Login (TF2 Theme)</a>
        <a href="<?= site_url('user_auth/login') ?>" class="btn">User Login (Neon Theme)</a>
        <a href="<?= site_url('user_auth/register') ?>" class="btn" style="border-color:var(--neo-pink);color:var(--neo-pink)">Register New User</a>
      </div>
    </div>
  </div>
</body>
</html>
