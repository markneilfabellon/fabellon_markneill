<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User | System Console</title>
  
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
      margin: 0;
      padding: 2rem 1rem;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
      background: var(--bg);
    }

    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .form-container {
      width: 100%;
      max-width: 540px;
      background: var(--panel);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 2.5rem;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
      animation: fadeIn 0.8s ease forwards;
    }

    h1 {
      font-size: clamp(1.6rem, 4vw, 2.4rem);
      color: var(--accent);
      margin-bottom: 2rem;
      text-align: center;
      letter-spacing: 2px;
      text-transform: uppercase;
      text-shadow: 0 0 10px var(--accent-glow);
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    label {
      font-size: 0.9rem;
      font-weight: 700;
      color: var(--accent);
      margin-bottom: 0.4rem;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 0.85rem 1rem;
      background: var(--input-bg);
      border: 1px solid var(--border);
      border-radius: 12px;
      color: var(--text);
      font-size: 1rem;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input:focus {
      outline: none;
      border-color: var(--accent);
      box-shadow: 0 0 8px var(--accent-glow);
    }

    button[type="submit"] {
      padding: 1rem;
      border: none;
      background: transparent;
      color: var(--accent);
      border: 2px solid var(--accent);
      border-radius: var(--radius);
      font-weight: 700;
      text-transform: uppercase;
      font-size: 1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px var(--accent-glow);
    }

    button[type="submit"]:hover {
      background: var(--accent);
      color: #000;
      transform: translateY(-2px) scale(1.03);
      box-shadow: 0 6px 18px var(--accent-glow);
    }

    .back-link {
      display: inline-block;
      margin-top: 1.5rem;
      text-decoration: none;
      color: var(--text-light);
      font-size: 0.9rem;
      border: 1px solid var(--border);
      padding: 0.5rem 1rem;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .back-link:hover {
      background: var(--accent);
      color: #000;
      box-shadow: 0 4px 12px var(--accent-glow);
      transform: scale(1.05);
    }
  </style>



</head>
<body>
  <div class="form-container">
    <h1>// Update User</h1>
    <form action="<?=site_url('users/update/'.$user['id']);?>" method="post">
      <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?=html_escape($user['last_name']);?>" required>
      </div>

      <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?=html_escape($user['first_name']);?>" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?=html_escape($user['email']);?>" required>
      </div>

      <button type="submit">Update Record</button>
    </form>
    <a href="<?=site_url('users/show');?>" class="back-link">// Back to Dashboard</a>
  </div>
</body>
</html>
