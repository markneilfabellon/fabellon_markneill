<!DOCTYPE html>
<html lang="en" class="h-full bg-[#212631] text-[#ebebeb]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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

        input, select {
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

        input:focus, select:focus {
            border-color: var(--accent);
            box-shadow: 0 0 8px rgba(0, 191, 255, 0.5);
            transform: scale(1.01);
        }

        .password-container {
            position: relative;
        }

        .password-container button {
            position: absolute;
            right: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #999;
            cursor: pointer;
            font-size: 1.125rem;
            transition: color 0.2s ease;
        }

        .password-container button:hover {
            color: var(--text);
        }

        select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }

        button[type="submit"] {
            background: var(--accent);
            color: #000;
            border: 2px solid var(--accent);
            border-radius: 6px;
            padding: 0.75rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 0.5rem;
        }

        button[type="submit"]:hover {
            background: var(--accent-dark);
            box-shadow: 0 4px 16px rgba(0, 191, 255, 0.6);
            transform: translateY(-2px) scale(1.02);
        }

        a {
            display: flex;
            justify-content: center;
            background: var(--input-bg);
            color: var(--text);
            border: 2px solid var(--border);
            border-radius: 6px;
            padding: 0.75rem;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 0.5rem;
        }

        a:hover {
            background: #2a2a2a;
            border-color: var(--accent);
            box-shadow: 0 4px 16px rgba(0, 191, 255, 0.3);
            transform: translateY(-2px) scale(1.02);
        }

        p {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.875rem;
        }

        p a {
            color: var(--accent);
            text-decoration: underline;
            transition: color 0.2s ease;
        }

        p a:hover {
            color: var(--accent-dark);
            text-shadow: 0 0 8px rgba(0, 191, 255, 0.5);
        }

        .error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid #ef4444;
            color: #fca5a5;
            padding: 0.75rem;
            border-radius: 6px;
            margin-bottom: 1rem;
            font-size: 0.875rem;
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
        <h1>REGISTER</h1>

        <?php if (isset($error)): ?>
            <div class="error">
                <?= $error; ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('register'); ?>" method="post">
            <label for="name">Username:</label>
            <input
                type="text"
                id="name"
                name="name"
                placeholder="name"
                required />

            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="your@email.com"
                required />

            <label for="password">Password:</label>
            <div class="password-container">
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="password"
                    required />
                <button type="button" id="togglePassword">
                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path id="eyePath" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path id="eyePath2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>

            <label for="role">Role:</label>
            <select
                id="role"
                name="role"
                required>
                <option value="" disabled selected hidden>Select role</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <button type="submit">Register</button>
            <a href="<?= site_url('/'); ?>">Back to Home</a>
        </form>

        <p>Already have an account?
            <a href="<?= site_url('login'); ?>">Login</a>
        </p>
    </main>

    <script>
        const togglePassword = document.getElementById("togglePassword");
        const passwordField = document.getElementById("password");
        const eyePath = document.getElementById("eyePath");
        const eyePath2 = document.getElementById("eyePath2");

        const eyeSVGPaths = {
            eye: [
                "M15 12a3 3 0 11-6 0 3 3 0 016 0z",
                "M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
            ],
            eyeOff: [
                "M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.05 10.05 0 011.66-3.156M6.25 6.25l11.5 11.5",
                ""
            ]
        };

        togglePassword.addEventListener("click", function() {
            const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
            passwordField.setAttribute("type", type);

            if (type === "password") {
                eyePath.setAttribute("d", eyeSVGPaths.eye[0]);
                eyePath2.setAttribute("d", eyeSVGPaths.eye[1]);
            } else {
                eyePath.setAttribute("d", eyeSVGPaths.eyeOff[0]);
                eyePath2.setAttribute("d", eyeSVGPaths.eyeOff[1]);
            }
        });
    </script>
</body>

</html>