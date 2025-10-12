<?php // views/user_auth/register.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>User Register | Project CRUD</title>
  <?php include __DIR__ . '/../students/_cyber_shared.php'; ?>
  <style>
    .form-wrap{width:360px;margin:4rem auto;padding:2rem;border-radius:10px}
    .toggle-password{position:absolute;right:12px;top:50%;transform:translateY(-50%);cursor:pointer;color:var(--neo-accent);background:transparent;border:0}
    .input-wrapper{position:relative}
  </style>
</head>
<body>
  <div class="container">
    <div class="panel form-wrap">
      <h1>REGISTER</h1>

      <?php if (isset($error)): ?>
        <div style="background:rgba(255,0,0,0.06);padding:.6rem;border-radius:6px;margin-bottom:1rem;color:#ffb3b3;border:1px solid rgba(255,0,0,0.08)"><?= $error ?></div>
      <?php endif; ?>

      <form action="<?= site_url('user_auth/register') ?>" method="post" style="display:flex;flex-direction:column;gap:.9rem">
        <div>
          <label for="username">Username</label>
          <input id="username" name="username" class="input" type="text" required />
        </div>

        <div>
          <label for="email">Email</label>
          <input id="email" name="email" class="input" type="email" required />
        </div>

        <div class="input-wrapper">
          <label for="password">Password</label>
          <input id="password" name="password" class="input" type="password" style="padding-right:3rem" required />
          <button type="button" id="togglePassword" class="toggle-password" aria-label="Toggle password">
            <i class="fa fa-eye"></i>
          </button>
        </div>

        <div>
          <label for="role">Role</label>
          <select id="role" name="role" class="input" required>
            <option value="" disabled selected hidden>Select Role</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div>

        <button class="btn" type="submit" style="align-self:flex-start">Register</button>
        <a href="<?= site_url('user_auth/login') ?>" class="btn" style="border-color:transparent;background:var(--neo-accent);color:#000;">Back to Login</a>
      </form>
    </div>
  </div>

  <script>
    (function(){
      const toggle = document.getElementById('togglePassword');
      const pwd = document.getElementById('password');
      toggle.addEventListener('click', function(){
        const type = pwd.getAttribute('type') === 'password' ? 'text' : 'password';
        pwd.setAttribute('type', type);
        toggle.innerHTML = type === 'password' ? '<i class=\"fa fa-eye\"></i>' : '<i class=\"fa fa-eye-slash\"></i>';
      });
    })();
  </script>
</body>
</html>
