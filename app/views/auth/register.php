<?php // views/auth/register.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Register | Project CRUD</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <?php include __DIR__ . '/_tf2_shared.php'; ?>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
  <main class="w-full max-w-md tf2-panel">
    <h1 class="text-2xl">Create Account</h1>
    <p class="muted small mb-4">Register a new user</p>

    <?php if (isset($error)): ?>
      <div class="mb-3 text-sm text-red-300 bg-red-900/20 border border-red-700 px-3 py-2 rounded-md">
        <?= $error; ?>
      </div>
    <?php endif; ?>

    <form action="<?= site_url('auth/register') ?>" method="post" class="space-y-4">
      <div>
        <label for="name">Username</label>
        <input id="name" name="name" type="text" placeholder="username" required />
      </div>

      <div>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="you@email.com" required />
      </div>

      <div class="relative">
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="password" required style="padding-right:3rem;" />
        <button type="button" id="togglePassword" aria-label="Toggle password visibility"
                style="position:absolute;right:.6rem;top:38px;background:transparent;border:0;color:var(--tf2-text);cursor:pointer">
          <!-- eye svg (same as login) -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" style="width:1.15rem;height:1.15rem" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path id="eyePath" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path id="eyePath2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
          </svg>
        </button>
      </div>

      <div>
        <label for="role">Role</label>
        <select id="role" name="role" required>
          <option value="" disabled selected hidden>Select role</option>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <div class="flex items-center justify-between">
        <button type="submit" class="tf2-btn tf2-primary">Register</button>
        <a href="<?= site_url('auth/login') ?>" class="muted small">Have an account? Login</a>
      </div>
    </form>
  </main>

  <script>
    // password toggle (same logic as login)
    (function(){
      const toggle = document.getElementById('togglePassword');
      const pwd = document.getElementById('password');
      const eyePath = document.getElementById('eyePath');
      const eyePath2 = document.getElementById('eyePath2');
      const paths = {
        eye: [
          "M15 12a3 3 0 11-6 0 3 3 0 016 0z",
          "M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
        ],
        eyeOff: [
          "M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.05 10.05 0 011.66-3.156M6.25 6.25l11.5 11.5",
          ""
        ]
      };
      toggle.addEventListener('click', function(){
        const type = pwd.getAttribute('type') === 'password' ? 'text' : 'password';
        pwd.setAttribute('type', type);
        if(type === 'password'){
          eyePath.setAttribute('d', paths.eye[0]); eyePath2.setAttribute('d', paths.eye[1]);
        } else {
          eyePath.setAttribute('d', paths.eyeOff[0]); eyePath2.setAttribute('d', paths.eyeOff[1]);
        }
      });
    })();
  </script>
</body>
</html>
