<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | System Console</title>
  
  <style>
    :root {
      --bg: #000000;
      --panel: #0f0f0f;
      --text: #e5e5e5;
      --accent: #00bfff;
      --accent-dark: #1e40af;
      --input-bg: #1a1a1a;
      --border: #333333;
      --radius: 18px;
      --shadow: 0 8px 32px rgba(0, 191, 255, 0.1);
    }

    body {
      margin: 0;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Inter', system-ui, sans-serif;
      background: var(--bg);
      background-image: radial-gradient(circle at 20% 80%, rgba(0, 191, 255, 0.05) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(0, 191, 255, 0.03) 0%, transparent 50%);
      padding: 2rem;
      color: var(--text);
    }

    @keyframes fadeUp {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .container {
      width: 100%;
      max-width: 520px;
      background: var(--panel);
      border-radius: var(--radius);
      padding: 2.5rem;
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
      text-align: center;
      animation: fadeUp 0.9s ease forwards;
      position: relative;
      overflow: hidden;
    }

    .container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--accent), transparent);
    }

    h1 {
      font-size: clamp(1.8rem, 5vw, 2.4rem);
      font-weight: 600;
      margin-bottom: 2rem;
      color: var(--accent);
      text-shadow: 0 0 10px rgba(0, 191, 255, 0.5);
      letter-spacing: 1px;
      animation: fadeUp 1s ease forwards;
    }

    .btn-group {
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
      align-items: center;
    }

    .main-btn {
      display: inline-block;
      width: 100%;
      max-width: 280px;
      padding: 0.9rem 1rem;
      border-radius: var(--radius);
      border: 2px solid var(--accent);
      background: var(--input-bg);
      color: var(--accent);
      font-size: 1rem;
      font-weight: 600;
      text-decoration: none;
      text-align: center;
      transition: all 0.3s ease;
      box-shadow: 0 0 12px rgba(0, 191, 255, 0.2);
    }

    .main-btn:hover {
      background: var(--accent);
      color: #000;
      box-shadow: 0 6px 20px rgba(0, 191, 255, 0.6);
      transform: translateY(-3px) scale(1.02);
    }

    /* Add subtle floating animation for modern vibe */
    .container:hover {
      transform: translateY(-4px);
      transition: transform 0.3s ease;
    }

    @media (max-width: 500px) {
      .container {
        padding: 2rem 1.5rem;
      }
      h1 {
        font-size: 1.7rem;
        margin-bottom: 1.5rem;
      }
    }
  </style>



</head>
<body>
  <div class="container">
    <h1>Student Management</h1>
    <div class="btn-group">
      <a href="<?=site_url('auth/login');?>" class="main-btn">Log In</a>
      <a href="<?=site_url('auth/register');?>" class="main-btn">Register</a>
    </div>
  </div>
</body>
</html>
