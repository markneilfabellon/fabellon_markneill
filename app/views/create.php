<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User </title>
  
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
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
      background: var(--bg);
      padding: 2rem 1rem;
    }

    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .form-container {
      width: 100%;
      max-width: 520px;
      background: var(--panel);
      border-radius: var(--radius);
      padding: 2.5rem;
      border: 1px solid var(--border);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
      animation: fadeIn 0.8s ease forwards;
    }

    h1 {
      font-size: clamp(1.7rem, 5vw, 2.3rem);
      font-weight: 600;
      margin-bottom: 2rem;
      color: var(--accent);
      text-align: center;
      text-shadow: 0 0 10px var(--accent-glow);
      letter-spacing: 1px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .form-group {
      display: flex;
      flex-direction: column;
    }

    label {
      font-size: 0.9rem;
      font-weight: 600;
      color: var(--accent);
      margin-bottom: 0.4rem;
      letter-spacing: 0.5px;
    }

    input[type="text"],
    input[type="email"] {
      padding: 0.9rem 1rem;
      background: var(--input-bg);
      border: 1px solid var(--border);
      border-radius: 10px;
      font-size: 1rem;
      color: var(--text);
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      outline: none;
      border-color: var(--accent);
      box-shadow: 0 0 8px var(--accent-glow);
    }

    button[type="submit"] {
      margin-top: 0.5rem;
      padding: 1rem;
      background: transparent;
      color: var(--accent);
      border: 2px solid var(--accent);
      border-radius: var(--radius);
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px var(--accent-glow);
    }

    button[type="submit"]:hover {
      background: var(--accent);
      color: #000;
      box-shadow: 0 6px 20px var(--accent-glow);
      transform: translateY(-2px) scale(1.02);
    }

    .back-link {
      display: inline-block;
      margin-top: 1.8rem;
      text-decoration: none;
      color: var(--text-light);
      font-size: 0.9rem;
      font-weight: 500;
      transition: all 0.3s ease;
      text-align: center;
    }

    .back-link:hover {
      color: var(--accent);
      text-shadow: 0 0 5px var(--accent-glow);
      transform: scale(1.05);
    }

    @media (max-width: 500px) {
      .form-container {
        padding: 2rem 1.5rem;
      }
      h1 {
        font-size: 1.6rem;
        margin-bottom: 1.5rem;
      }
    }
  </style>



</head>
<body>
  <div class="form-container">
    <h1>Create User</h1>
    <form action="<?=site_url('users/create');?>" method="post">
      <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" required>
      </div>

      <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>

      <button type="submit">Submit Record</button>
    </form>
    <a href="<?=site_url('users/show');?>" class="back-link">← Back to Dashboard</a>
  </div>
</body>
</html>
