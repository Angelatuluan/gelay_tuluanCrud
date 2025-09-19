<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #2D2A2E; /* mocha dark */
            margin: 0;
            padding: 0;
            color: #EDE7E3; /* soft cream text */
        }
        .top-bar {
            width: 90%;
            margin: 32px auto 0 auto;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
        .create-btn {
            background: linear-gradient(90deg, #C77D57 0%, #D9CAB3 100%);
            color: #2D2A2E;
            padding: 10px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.25);
            transition: background 0.2s, color 0.2s;
        }
        .create-btn:hover {
            background: #76B5A8;
            color: #fff;
        }
        h1 {
            text-align: center;
            margin: 40px 0 32px 0;
            font-size: 2.2rem;
            font-weight: 700;
            color: #D9CAB3;
            letter-spacing: 1px;
        }
        .table-container {
            width: 95%;
            margin: 0 auto;
            background: #3A3539;
            border-radius: 20px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.4);
            padding: 32px 0 24px 0;
            animation: fadeIn 0.6s ease-in-out;
        }
        table {
            width: 98%;
            margin: 0 auto;
            border-collapse: separate;
            border-spacing: 0;
            background: #2D2A2E;
            color: #EDE7E3;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.25);
        }
        th, td {
            padding: 18px 24px;
            text-align: left;
        }
        th {
            background: linear-gradient(90deg, #C77D57 0%, #76B5A8 100%);
            color: #fff;
            font-size: 1.1rem;
            font-weight: 600;
            border-bottom: 2px solid #C77D57;
        }
        tr {
            transition: background 0.2s;
        }
        tr:nth-child(even) {
            background: #3A3539;
        }
        tr:nth-child(odd) {
            background: #443F45;
        }
        tr:hover {
            background: #514A51;
        }
        .action-btn {
            text-decoration: none;
            padding: 7px 18px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 1rem;
            margin-right: 8px;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(0,0,0,0.25);
            border: none;
            cursor: pointer;
        }
        .action-btn.edit {
            background: linear-gradient(90deg, #76B5A8 0%, #D9CAB3 100%);
            color: #2D2A2E;
        }
        .action-btn.edit:hover {
            background: #C77D57;
            color: #fff;
        }
        .action-btn.delete {
            background: #D75A4A;
            color: #fff;
        }
        .action-btn.delete:hover {
            background: #B53D30;
        }
        .pagination {
            width: 98%;
            margin: 24px auto 0 auto;
            text-align: center;
        }
        .pagination-btn {
            padding: 8px 16px;
            margin: 0 4px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            background: #443F45;
            color: #D9CAB3;
            transition: background 0.2s, color 0.2s;
        }
        .pagination-btn.active {
            background: #76B5A8;
            color: #fff;
        }
        .pagination-btn:hover {
            background: #C77D57;
            color: #fff;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <a href="<?= site_url('user/create'); ?>" class="create-btn">+ Create User</a>
    </div>
    <h1>User List</h1>
    <div class="table-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
                // Pagination logic
                $limit = 7;
                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $total_users = count($users);
                $total_pages = ceil($total_users / $limit);
                $start = ($page - 1) * $limit;
                $users_paginated = array_slice($users, $start, $limit);
            ?>
            <?php foreach (html_escape($users_paginated) as $user): ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td>
                        <a href="<?= site_url('user/update/'.$user['id']); ?>" class="action-btn edit">Edit</a>
                        <a href="<?= site_url('user/delete/'.$user['id']); ?>" class="action-btn delete" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="pagination">
            <?php if ($total_pages > 1): ?>
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <button class="pagination-btn<?= $i == $page ? ' active' : '' ?>" onclick="window.location.href='?page=<?= $i; ?>'">
                        <?= $i; ?>
                    </button>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
