<?php // views/students/create.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Create User | Project CRUD</title>
  <?php include __DIR__ . '/_cyber_shared.php'; ?>
</head>
<body>
  <div class="container">
    <div class="panel">
      <h1>Create User</h1>

      <form action="<?= site_url('users/create') ?>" method="post" style="max-width:520px;">
        <div style="margin-bottom:.8rem;">
          <label for="last_name">Last Name</label>
          <input id="last_name" name="last_name" type="text" class="input" required />
        </div>

        <div style="margin-bottom:.8rem;">
          <label for="first_name">First Name</label>
          <input id="first_name" name="first_name" type="text" class="input" required />
        </div>

        <div style="margin-bottom:.8rem;">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" class="input" required />
        </div>

        <div style="display:flex;gap:.6rem;align-items:center;margin-top:.75rem;">
          <button type="submit" class="btn">Submit Record</button>
          <a href="<?= site_url('users/show') ?>" class="btn" style="border-color:transparent;background:var(--neo-accent);color:#000;text-decoration:none">Back to Dashboard</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
