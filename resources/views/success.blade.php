<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Registration Successful</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --header-bg: #2196F3;
            --success-green: #4CAF50;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            overflow: hidden;
            box-sizing: border-box;
            animation: fadeIn 0.7s ease-in-out;
            text-align: center;
            padding: 40px;
            color: #333;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Simple checkmark icon */
        .icon {
            font-size: 50px;
            color: var(--success-green);
            line-height: 1;
            margin-bottom: 15px;
        }

        h1 {
            margin: 0 0 15px 0;
            font-size: 1.8em;
            font-weight: 600;
        }

        p {
            margin: 0;
            font-size: 1.1em;
            font-weight: 300;
            color: #555;
            line-height: 1.6;
        }

    </style>
</head>
<body>
    <div class="card">
        <div class="icon">
            &#10004; <!-- Simple checkmark character -->
        </div>
        <h1>Registration Successful!</h1>
        <p>Welcome to Cloud Computing 2025. You are now registered.</p>
        <p style="margin-top: 10px;">We're excited to have you on board.</p>
    </div>
</body>
</html>

