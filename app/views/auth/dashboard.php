
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        :root {
            --bg: #000000;
            --panel: #151515;
            --text: #e5e5e5;
            --accent: #00bfff;
            --accent-dark: #1e40af;
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

        main {
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 2rem;
            width: 100%;
            max-width: 24rem;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        main::before {
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
            margin-bottom: 1rem;
            font-size: 1.5rem;
            font-weight: 600;
            text-shadow: 0 0 10px rgba(0, 191, 255, 0.5);
        }

        p {
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
        }

        a {
            display: inline-block;
            background: var(--accent);
            color: #000;
            border: 2px solid var(--accent);
            border-radius: 6px;
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        a:hover {
            background: var(--accent-dark);
            box-shadow: 0 4px 16px rgba(0, 191, 255, 0.6);
            transform: translateY(-2px) scale(1.02);
        }

        @media (max-width: 640px) {
            main {
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
    <main>
        <h1>Welcome, <?= session('name') ?>!</h1>
        <p>Role: <?= session('role') ?></p>
        <a href="<?= site_url('auth/logout') ?>">Logout</a>
    </main>
</body>
</html>
