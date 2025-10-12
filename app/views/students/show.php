<?php // views/students/show.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Users | Project CRUD</title>
  <?php include __DIR__ . '/_cyber_shared.php'; ?>
</head>
<body>
  <div class="container">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:1rem;">
      <div>
        <h1>User Data Grid</h1>
        <p class="small muted">Access Terminal</p>
      </div>
      <div>
        <?php if (isset($_SESSION['user_id'])): ?>
          <form action="<?= site_url('auth/logout') ?>" method="post" style="display:inline;">
            <button class="logout-btn" type="submit">Logout</button>
          </form>
        <?php endif; ?>
      </div>
    </div>

    <div class="panel">
      <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:1rem;flex-wrap:wrap;gap:.6rem;">
        <form action="<?= site_url('users/show') ?>" method="get" class="search-form" style="flex:1;max-width:600px;">
          <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
          <input id="searchBox" name="q" value="<?= html_escape($q) ?>" placeholder="Search records..." class="input" />
          <button type="submit" class="btn">Search</button>
        </form>

        <?php $current_role = isset($_SESSION['role']) ? $_SESSION['role'] : ''; ?>
        <?php if ($current_role === 'admin'): ?>
          <a href="<?= site_url('users/create') ?>" class="btn" style="margin-left:.5rem">Create New Record</a>
        <?php endif; ?>
      </div>

      <div class="table-responsive">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Email</th>
              <?php if ($current_role === 'admin') echo '<th>Action</th>'; ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?= $user['id'] ?></td>
                <td><?= html_escape($user['last_name']) ?></td>
                <td><?= html_escape($user['first_name']) ?></td>
                <td><?= html_escape($user['email']) ?></td>
                <?php if ($current_role === 'admin'): ?>
                  <td class="action-links">
                    <a href="<?= site_url('users/update/'.$user['id']) ?>">Update</a>
                    <a href="<?= site_url('users/delete/'.$user['id']) ?>" class="delete" onclick="return confirm('Delete this record?')">Delete</a>
                  </td>
                <?php endif; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div style="margin-top:1.25rem;">
        <div class="small muted">
          <!-- your pagination output -->
          <?php if (isset($page)) echo $page; ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
