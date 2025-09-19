<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #2D2A2E; /* mocha dark */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #EDE7E3; /* cream text */
        }
        .form-container {
            background: #3A3539; /* lighter mocha */
            color: #EDE7E3;
            padding: 32px 40px;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.4);
            width: 370px;
            animation: fadeIn 0.6s ease-in-out;
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 24px;
            font-size: 2rem;
            color: #D9CAB3; /* soft cream */
            font-weight: 700;
            letter-spacing: 1px;
        }
        label {
            font-weight: 600;
            display: block;
            margin-top: 16px;
            margin-bottom: 6px;
            color: #C77D57; /* caramel accent */
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #76B5A8; /* muted teal */
            border-radius: 8px;
            outline: none;
            background: #2D2A2E;
            color: #EDE7E3;
            box-shadow: 0 2px 8px rgba(0,0,0,0.25);
            transition: border 0.2s, box-shadow 0.2s;
            font-size: 15px;
        }
        input[type="text"]:focus, input[type="email"]:focus {
            border: 1.5px solid #C77D57;
            box-shadow: 0 0 8px #76B5A8;
        }
        input[type="submit"] {
            margin-top: 28px;
            width: 100%;
            padding: 13px;
            background: linear-gradient(90deg, #76B5A8 0%, #D9CAB3 100%);
            color: #2D2A2E;
            font-size: 1.1rem;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0,0,0,0.25);
            transition: background 0.2s, box-shadow 0.2s, color 0.2s;
        }
        input[type="submit"]:hover {
            background: #C77D57;
            color: #fff;
            box-shadow: 0 4px 16px rgba(0,0,0,0.35);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Create User</h1>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <input type="submit" value="Submit User">
        </form>
    </div>
</body>
</html>
