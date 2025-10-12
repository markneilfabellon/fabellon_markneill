<?php // views/update.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Update Record | Project CRUD</title>
  <?php include __DIR__ . '/students/_cyber_shared.php'; ?>
</head>
<body>
  <div class="container">
    <div class="panel" style="max-width:500px;margin:auto;">
      <h1>Update Record</h1>

      <form action="<?= site_url('update/'.$record['id']) ?>" method="post" style="display:flex;flex-direction:column;gap:.8rem;">
        <div>
          <label for="name">Name</label>
          <input id="name" name="name" class="input" type="text" value="<?= html_escape($record['name']) ?>" required />
        </div>

        <div>
          <label for="email">Email</label>
          <input id="email" name="email" class="input" type="email" value="<?= html_escape($record['email']) ?>" required />
        </div>

        <div>
          <label for="role">Role</label>
          <select id="role" name="role" class="input" required>
            <option value="user" <?= $record['role'] === 'user' ? 'selected' : '' ?>>User</option>
            <option value="admin" <?= $record['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
          </select>
        </div>

        <button class="btn" type="submit">Update</button>
        <a href="<?= site_url('users/show') ?>" class="btn" style="border-color:transparent;background:var(--neo-accent);color:#000;">Back</a>
      </form>
    </div>
  </div>
</body>
</html>
