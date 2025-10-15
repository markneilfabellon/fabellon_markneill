<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create User </title>

  <!-- Fonts & Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer" />
  

  <style>
    :root {
      --bg: #000000;
      --panel: #151515;
      --text: #e5e5e5;
      --accent: #00bfff;
      --accent-dark: #1e40af;
      --input-bg: #1a1a1a;
      --border: #333333;
      --radius: 12px;
      --shadow: 0 8px 32px rgba(0, 191, 255, 0.1);
    }

    body {
      font-family: 'Inter', system-ui, sans-serif;
      background: var(--bg);
      background-image: radial-gradient(circle at 20% 80%, rgba(0, 191, 255, 0.05) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(0, 191, 255, 0.03) 0%, transparent 50%);
      color: var(--text);
      margin: 0;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }

    .form-container {
      background: var(--panel);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 2rem;
      width: 100%;
      max-width: 24rem;
      position: relative;
      overflow: hidden;
    }

    .form-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--accent), transparent);
    }

    h1 {
      color: var(--accent);
      text-align: center;
      margin-bottom: 1.5rem;
      font-size: 1.5rem;
      font-weight: 600;
      text-shadow: 0 0 10px rgba(0, 191, 255, 0.5);
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }

    label {
      font-size: 0.875rem;
      font-weight: 500;
      margin-bottom: 0.25rem;
      color: var(--text);
    }

    input[type="text"],
    input[type="email"] {
      background: var(--input-bg);
      border: 1px solid var(--border);
      border-radius: 6px;
      padding: 0.75rem;
      color: var(--text);
      font-size: 0.875rem;
      outline: none;
      transition: all 0.2s ease;
      width: 100%;
    }

    input:focus {
      border-color: var(--accent);
      box-shadow: 0 0 8px rgba(0, 191, 255, 0.5);
      transform: scale(1.01);
    }

    button[type="submit"] {
      background: transparent;
      color: var(--accent);
      border: 2px solid var(--accent);
      border-radius: 6px;
      padding: 0.75rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 0.5rem;
    }

    button[type="submit"]:hover {
      background: var(--accent);
      color: #000;
      box-shadow: 0 4px 16px rgba(0, 191, 255, 0.6);
      transform: translateY(-2px) scale(1.02);
    }

    .back-link {
      display: block;
      margin-top: 1.5rem;
      color: var(--text);
      text-decoration: none;
      font-size: 0.875rem;
      transition: color 0.2s ease;
    }

    .back-link:hover {
      color: var(--accent);
      text-shadow: 0 0 8px rgba(0, 191, 255, 0.5);
    }

    @media (max-width: 640px) {
      .form-container {
        padding: 1.5rem;
        max-width: 20rem;
      }
      h1 {
        font-size: 1.25rem;
      }
    }
  </style>

</head>
<body>
  <div class="form-container">
    <h1>CREATE USER</h1>

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

    <a href="<?=site_url('users/show');?>" class="back-link">Back to Dashboard</a>
  </div>
</body>
</html>