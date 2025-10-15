<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Register</title>

<!-- Font Awesome + Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer" />


<style>
  :root {
    --bg: #000;
    --panel: #0f0f0f;
    --accent: #00bfff;
    --accent-glow: rgba(0, 191, 255, 0.6);
    --text: #fff;
    --text-light: #ccc;
    --input-bg: #1a1a1a;
    --border: #333;
    --radius: 12px;
  }

  body {
    background: var(--bg);
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: var(--text);
    margin: 0;
  }

  @keyframes fadeIn {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
  }

  .form-container {
    background: var(--panel);
    border: 1px solid var(--border);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
    border-radius: var(--radius);
    padding: 2.5rem 3rem;
    text-align: center;
    width: 400px;
    position: relative;
    animation: fadeIn 0.8s ease forwards;
  }

  h1 {
      color: var(--accent);
      margin-bottom: 1.5rem;
      font-size: 1.5rem;
      font-weight: 600;
      text-shadow: 0 0 10px rgba(0, 191, 255, 0.5);
  }

  form {
    display: flex;
    flex-direction: column;
    gap: 1.4rem;
  }

  label {
    display: block;
    text-align: left;
    margin-bottom: 0.3rem;
    color: var(--accent);
    font-size: 0.9rem;
    text-transform: uppercase;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"],
  select {
    width: 100%;
    padding: 0.8rem 2.8rem 0.8rem 1rem;
    background: var(--input-bg);
    border: 1px solid var(--border);
    border-radius: 6px;
    color: var(--text);
    font-size: 1rem;
    margin-bottom: 0.5rem;
    box-sizing: border-box;
    transition: 0.3s ease;
  }

  input:focus,
  select:focus {
    outline: none;
    border-color: var(--accent);
    box-shadow: 0 0 6px var(--accent-glow);
  }

  .input-wrapper {
    position: relative;
  }

  .toggle-password {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: var(--accent);
    font-size: 1rem;
    z-index: 10;
    background: transparent;
    border: none;
  }

  .toggle-password:hover {
    opacity: 0.8;
    transform: translateY(-50%) scale(1.1);
  }

  button[type="submit"] {
    width: 100%;
    padding: 0.8rem;
    font-size: 1.1rem;
    color: var(--accent);
    background: transparent;
    border: 2px solid var(--accent);
    border-radius: 8px;
    cursor: pointer;
    transition: 0.3s ease;
    text-shadow: 0 0 10px var(--accent-glow);
    text-transform: uppercase;
    box-shadow: 0 4px 15px var(--accent-glow);
  }

  button[type="submit"]:hover {
    background: var(--accent);
    color: #000;
    box-shadow: 0 6px 20px var(--accent-glow);
    transform: translateY(-2px) scale(1.02);
  }

  .back-link {
    display: block;
    margin-top: 1.5rem;
    color: var(--text-light);
    text-decoration: none;
    font-size: 0.95rem;
    transition: color 0.3s ease, text-shadow 0.3s ease;
  }

  .back-link:hover {
    color: var(--accent);
    text-shadow: 0 0 10px var(--accent-glow),
                 0 0 20px var(--accent-glow);
    transform: scale(1.05);
  }

  .error {
    color: #ff3366;
    font-size: 0.9rem;
    margin-bottom: 1rem;
  }

  @media (max-width: 420px) {
    .form-container {
      width: 90%;
      padding: 2rem;
    }
  }
</style>

<!-- TF2_SC_INJECT_START -->
<style>
:root{
  --tf2-red:#b8383b;
  --tf2-blu:#3b5b92;
  --tf2-orange:#c58b4b;
  --tf2-dark:#0f0d0c;
  --tf2-panel:#302925;
  --tf2-text:#f1e7d0;
  --tf2-border:#4e443f;
  --tf2-highlight:#d9a441;
}

/* Base */
html,body{height:100%;margin:0;padding:0;background:var(--tf2-dark);color:var(--tf2-text);font-family: Georgia, 'Times New Roman', serif;}
/* TF2-like textured background achieved with CSS gradients (self-contained) */
body{
  background-color:var(--tf2-dark);
  background-image:
    radial-gradient(circle at 10% 20%, rgba(255,255,255,0.02) 0 2px, transparent 2px 60px),
    radial-gradient(circle at 80% 80%, rgba(255,255,255,0.01) 0 1px, transparent 1px 120px),
    linear-gradient(180deg, rgba(0,0,0,0.15), rgba(0,0,0,0.35));
  background-blend-mode: overlay;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
}

/* Panel */
.tf2-panel, .container, .form-container, .card, .panel {
  background: linear-gradient(180deg, rgba(48,41,37,0.96), rgba(34,28,25,0.96));
  border:6px solid var(--tf2-border);
  border-radius:12px;
  box-shadow: 10px 10px 0 rgba(0,0,0,1);
  padding:1.5rem;
  color:var(--tf2-text);
}

/* Title */
h1,h2,h3{font-family: "Impact", "Arial Black", sans-serif;margin:0 0 .75rem 0;color:var(--tf2-highlight);text-shadow:3px 3px 0 #000;}
.tf2-title{ background: linear-gradient(90deg,var(--tf2-highlight), #e6b85d); -webkit-background-clip:text; -webkit-text-fill-color:transparent;}

/* Buttons */
.tf2-btn{ display:inline-block; font-weight:700; text-transform:uppercase; border:3px solid #000; padding:.6rem 1rem; border-radius:8px; box-shadow:6px 6px 0 #000; cursor:pointer; font-family:"Impact","Arial Black",sans-serif; }
.tf2-btn-yellow{ background:var(--tf2-highlight); color:#111; }
.tf2-btn-red{ background:var(--tf2-red); color:#fff; }
.tf2-btn-blue{ background:var(--tf2-blu); color:#fff; }
.tf2-btn:hover{ transform:translateY(-3px); filter:brightness(1.06); box-shadow:9px 9px 0 rgba(0,0,0,0.9); }

/* Inputs */
input[type="text"], input[type="email"], textarea, select {
  background:#241a18; color:var(--tf2-text); border:3px solid var(--tf2-border); padding:.85rem .9rem; border-radius:6px; font-size:1rem; width:100%;
}
input:focus, textarea:focus, select:focus{ outline:none; box-shadow:0 0 10px var(--tf2-orange); border-color:var(--tf2-orange); transform:scale(1.01); }

/* Table */
.tf2-table{ width:100%; border-collapse:collapse; margin-top:.5rem; }
.tf2-table thead th{ background:linear-gradient(90deg,#8b2d22,#3a3432); color:#fff; text-transform:uppercase; padding:.9rem; letter-spacing:1.2px; border-bottom:4px solid var(--tf2-highlight); }
.tf2-table tbody td{ padding:.8rem; border-bottom:1px solid rgba(255,255,255,0.04); color:var(--tf2-text); }

/* Pagination */
.pagination a{ display:inline-block; margin:.25rem; padding:.45rem .75rem; background:var(--tf2-highlight); color:#111; border:3px solid #000; border-radius:6px; box-shadow:4px 4px 0 #000; text-decoration:none; font-weight:700; }
.pagination strong{ background:var(--tf2-red); color:#fff; border:3px solid #000; padding:.45rem .75rem; box-shadow:4px 4px 0 #000; border-radius:6px; display:inline-block; }

/* Small devices */
@media (max-width:600px){
  .tf2-panel{ padding:1rem; border-width:4px; border-radius:8px; }
  h1{ font-size:1.6rem; }
  .tf2-btn{ padding:.5rem .75rem; }
}
</style>
<!-- TF2_SC_INJECT_END -->

</head>
<body>
  <div class="form-container">
    <h1>REGISTER</h1>

    <?php if(isset($error)): ?>
      <div class="error"><?=$error;?></div>
    <?php endif; ?>

    <form action="<?=site_url('register');?>" method="post" autocomplete="on">
      <div class="form-group">
        <label for="username">Username</label>
        <div class="input-wrapper">
          <input type="text" id="username" name="username" required autocomplete="username">
        </div>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <div class="input-wrapper">
          <input type="email" id="email" name="email" required autocomplete="email">
        </div>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <div class="input-wrapper">
          <input type="password" id="password" name="password" required autocomplete="new-password">
          <button type="button" id="togglePassword" class="toggle-password" aria-label="Show password" aria-pressed="false">
            <i class="fa-solid fa-eye-slash" aria-hidden="true"></i>
          </button>
        </div>
      </div>

      <div class="form-group">
        <label for="role">Role</label>
        <select id="role" name="role" required>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <button type="submit">Register</button>
    </form>

    <a href="<?=site_url('login');?>" class="back-link">Login</a>
  </div>

  <script>
    (function(){
      const toggleBtn = document.getElementById('togglePassword');
      const pwd = document.getElementById('password');
      const icon = toggleBtn.querySelector('i');

      toggleBtn.addEventListener('click', function(){
        const isHidden = pwd.type === 'password';
        pwd.type = isHidden ? 'text' : 'password';
        icon.classList.toggle('fa-eye');
        icon.classList.toggle('fa-eye-slash');
        this.setAttribute('aria-pressed', String(isHidden));
        this.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
      });
    })();
  </script>
</body>
</html>