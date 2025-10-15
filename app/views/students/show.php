<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Data Grid</title>
  
  <!-- Font + Icons (same as Login/Register) -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
      --hover: #2a2a2a;
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
      justify-content: center;
      align-items: flex-start;
      padding: 2rem 1rem;
    }

    .container {
      background: var(--panel);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      width: 100%;
      max-width: 1200px;
      padding: 2rem;
      position: relative;
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
      color: var(--accent);
      text-align: center;
      font-size: 1.5rem;
      font-weight: 600;
      text-shadow: 0 0 10px rgba(0, 191, 255, 0.5);
      margin-bottom: 2rem;
    }

    .header-controls-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
      gap: 1rem;
    }

    .search-container {
      flex: 1;
      max-width: 500px;
    }

    .search-form {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    #searchBox {
      flex: 1;
      padding: 0.75rem;
      border-radius: 6px;
      background: var(--input-bg);
      border: 1px solid var(--border);
      color: var(--text);
      font-size: 0.875rem;
      outline: none;
      transition: all 0.2s ease;
    }

    #searchBox:focus {
      border-color: var(--accent);
      box-shadow: 0 0 8px rgba(0, 191, 255, 0.5);
      transform: scale(1.01);
    }

    .search-btn {
      padding: 0.75rem 1rem;
      border-radius: 6px;
      border: 2px solid var(--accent);
      background: transparent;
      color: var(--accent);
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .search-btn:hover {
      background: var(--accent);
      color: #000;
      box-shadow: 0 4px 16px rgba(0, 191, 255, 0.6);
      transform: translateY(-2px) scale(1.02);
    }

    .create-record-btn {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      border: 2px solid var(--accent);
      border-radius: 6px;
      background: transparent;
      color: var(--accent);
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .create-record-btn:hover {
      background: var(--accent);
      color: #000;
      box-shadow: 0 4px 16px rgba(0, 191, 255, 0.6);
      transform: translateY(-2px) scale(1.02);
    }

    .table-responsive {
      width: 100%;
      overflow-x: auto;
      border-radius: 8px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
      font-size: 0.875rem;
    }

    thead {
      background: var(--input-bg);
    }

    th, td {
      padding: 0.75rem;
      border-bottom: 1px solid var(--border);
      text-align: center;
      white-space: nowrap;
    }

    th {
      color: var(--accent);
      font-weight: 600;
      text-transform: uppercase;
      font-size: 0.8rem;
      letter-spacing: 0.5px;
    }

    tbody tr:hover {
      background: var(--hover);
      transition: background 0.2s ease;
    }

    .action-links a {
      color: var(--accent);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.2s ease;
    }

    .action-links a:hover {
      color: var(--accent-dark);
      text-shadow: 0 0 8px rgba(0, 191, 255, 0.5);
    }

    .action-links .delete-link {
      color: #ef4444;
    }

    .action-links .delete-link:hover {
      color: #dc2626;
      text-shadow: 0 0 8px rgba(239, 68, 68, 0.5);
    }

    .pagination-container {
      margin-top: 2rem;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 0.5rem;
    }

    .pagination-container a,
    .pagination-container strong {
      padding: 0.5rem 1rem;
      border: 2px solid var(--accent);
      border-radius: 6px;
      text-decoration: none;
      color: var(--accent);
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .pagination-container a:hover {
      background: var(--accent);
      color: #000;
      box-shadow: 0 4px 16px rgba(0, 191, 255, 0.6);
      transform: translateY(-2px) scale(1.02);
    }

    .pagination-container strong {
      background: var(--accent);
      color: #000;
      box-shadow: 0 4px 16px rgba(0, 191, 255, 0.6);
    }

    .logout-container {
      position: absolute;
      top: 1.5rem;
      right: 2rem;
    }

    .logout-btn {
      background: #ef4444;
      border: 2px solid #ef4444;
      color: #000;
      border-radius: 6px;
      padding: 0.75rem 1.5rem;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .logout-btn:hover {
      background: #dc2626;
      box-shadow: 0 4px 16px rgba(239, 68, 68, 0.6);
      transform: translateY(-2px) scale(1.02);
    }

    @media (max-width: 992px) {
      .container {
        padding: 1.5rem;
      }

      .logout-container {
        position: relative;
        top: auto;
        right: auto;
        text-align: center;
        margin-top: 2rem;
      }

      .logout-btn {
        width: 100%;
      }
    }

    @media (max-width: 768px) {
      .header-controls-container {
        flex-direction: column;
        align-items: stretch;
      }

      .create-record-btn {
        text-align: center;
      }

      th, td {
        padding: 0.5rem;
        font-size: 0.8rem;
      }
    }

    @media (max-width: 480px) {
      h1 {
        font-size: 1.25rem;
      }

      .search-btn {
        padding: 0.6rem 0.8rem;
      }

      .pagination-container a,
      .pagination-container strong {
        padding: 0.4rem 0.6rem;
        font-size: 0.8rem;
      }
    }
  </style>

</head>
<body>
  <div class="container">
    <h1>User Dashboard</h1>
    
    <div class="header-controls-container">
      <div class="search-container">
        <form action="<?= site_url('users/show'); ?>" method="get" class="search-form">
          <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
          <input type="text" name="q" placeholder="Search records..." value="<?= html_escape($q); ?>" id="searchBox">
          <button type="submit" class="search-btn">Search</button>
        </form>
      </div>

      <?php $current_role = isset($_SESSION['role']) ? $_SESSION['role'] : ''; ?>
      <?php if ($current_role === 'admin'): ?>
      <a href="<?= site_url('users/create'); ?>" class="create-record-btn">Create New Record</a>
      <?php endif; ?>
    </div>

    <div class="table-responsive">
      <table id="studentsTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
            <?php if ($current_role === 'admin'): ?>
            <th>Action</th>
            <?php endif; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach (html_escape($users) as $user): ?>
          <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['last_name']; ?></td>
            <td><?= $user['first_name']; ?></td>
            <td><?= $user['email']; ?></td>
            <?php if ($current_role === 'admin'): ?>
            <td class="action-links">
              <a href="<?= site_url('users/update/'.$user['id']); ?>">Update</a> |
              <a href="<?= site_url('users/delete/'.$user['id']); ?>" class="delete-link" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
            </td>
            <?php endif; ?>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="pagination-container">
      <?php if (isset($page)) echo $page; ?>
    </div>

    <div class="logout-container">
      <?php if (isset($_SESSION['user_id'])): ?>
      <form action="<?= site_url('logout'); ?>" method="post" style="display: inline;">
        <button type="submit" class="logout-btn">Logout</button>
      </form>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>