<?php // views/auth/dashboard.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Dashboard | Project CRUD</title>
  <?php include __DIR__ . '/_tf2_shared.php'; ?>
</head>
<body class="min-h-screen p-6">
  <header style="display:flex;align-items:center;justify-content:space-between;max-width:1100px;margin:0 auto;">
    <div>
      <h1 class="tf2-title">Project CRUD</h1>
      <p class="muted small">Welcome back</p>
    </div>
    <div>
      <form action="<?= site_url('auth/logout') ?>" method="post" style="display:inline;">
        <button type="submit" class="tf2-btn tf2-danger">Logout</button>
      </form>
    </div>
  </header>

  <main class="max-w-4xl mx-auto mt-8">
    <div class="tf2-panel">
      <h2 class="small">Welcome, <?= html_escape(session('name') ?? 'User') ?>!</h2>
      <p class="muted">Role: <?= html_escape(session('role') ?? '') ?></p>

      <div style="margin-top:1rem;">
        <a class="tf2-btn tf2-primary" href="<?= site_url('users/show') ?>">Open Users Console</a>
      </div>
    </div>
  </main>
</body>
</html>
