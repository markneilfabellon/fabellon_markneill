<?php // views/students/update.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Update User | Project CRUD</title>
  <?php include __DIR__ . '/_cyber_shared.php'; ?>
</head>
<body>
  <div class="container">
    <div class="panel" style="max-width:520px;margin:0 auto;">
      <h1>Update User</h1>

      <form action="<?= site_url('users/update/'.$user['id']) ?>" method="post">
        <div style="margin-bottom:.8rem;">
          <label for="last_name">LAST NAME</label>
          <input id="last_name" name="last_name" value="<?= html_escape($user['last_name']) ?>" class="input" required />
        </div>

        <div style="margin-bottom:.8rem;">
          <label for="first_name">FIRST NAME</label>
          <input id="first_name" name="first_name" value="<?= html_escape($user['first_name']) ?>" class="input" required />
        </div>

        <div style="margin-bottom:.8rem;">
          <label for="email">EMAIL</label>
          <input id="email" name="email" type="email" value="<?= html_escape($user['email']) ?>" class="input" required />
        </div>

        <div style="display:flex;gap:.6rem;align-items:center;margin-top:.75rem;">
          <button type="submit" class="btn">Update Record</button>
          <a href="<?= site_url('users/show') ?>" class="btn" style="border-color:transparent;background:var(--neo-accent);color:#000">Back to Dashboard</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
