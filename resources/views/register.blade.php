<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Cloud Computing 2025</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --header-bg: #2196F3; /* A vibrant blue for the header, matching the image */
            --form-bg: rgba(255, 255, 255, 0.1); /* Slightly more transparent for glass effect */
            --border-color: rgba(255, 255, 255, 0.3);
            --text-color: #ffffff;
            --input-bg-color: rgba(255, 255, 255, 0.15);
            --button-bg: #2196F3; /* Matching the header for the button */
            --button-text: #ffffff;
            --error-color: #ffcccc;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0; /* Remove padding from body as container handles it */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* Using a static background now, if you want animated gradient back, put it here */
            background: linear-gradient(135deg, #6dd5ed, #2193b0); /* A calm blue gradient */
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite; /* Keep animation for flair */
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .card {
            background: #ffffff; /* Solid white background for the card as in the image */
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            overflow: hidden; /* Ensures rounded corners on header */
            box-sizing: border-box;
            animation: fadeIn 0.7s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card-header {
            background-color: var(--header-bg); /* Solid blue header */
            color: var(--text-color);
            padding: 25px 30px;
            text-align: center;
        }

        .card-header h1 {
            margin: 0;
            font-size: 1.8em;
            font-weight: 600;
        }

        .card-header p {
            margin: 5px 0 0;
            font-size: 1em;
            opacity: 0.9;
        }

        .card-body {
            padding: 30px;
            background-color: #ffffff; /* White background for the form area */
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333; /* Dark text for labels on white background */
            font-weight: 500;
            font-size: 0.95em;
        }

        input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            background-color: #f8f8f8; /* Light background for inputs */
            color: #333;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            transition: all 0.3s ease;
            font-size: 0.95em;
        }
        
        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: none; /* No invert for dark picker on light background */
            cursor: pointer;
        }

        input::placeholder {
            color: #999;
        }

        input:focus {
            outline: none;
            border-color: var(--button-bg); /* Highlight with primary blue on focus */
            background-color: #fff;
            box-shadow: 0 0 0 3px rgba(33, 150, 243, 0.2); /* Soft blue shadow */
        }

        button {
            width: 100%;
            background: var(--button-bg); /* Blue button */
            color: var(--button-text);
            padding: 14px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1em;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(33, 150, 243, 0.3); /* Button shadow */
        }

        button:hover {
            background: #1976D2; /* Slightly darker blue on hover */
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(33, 150, 243, 0.4);
        }
        
        .error-message {
            color: #d32f2f; 
            font-weight: 400;
            font-size: 0.85em;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h1>Cloud Computing top</h1>
            <p>Registration Form</p>
        </div>
        <div class="card-body">
            <form action="{{ route('register.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required>
                    @error('name')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Student Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your student email" required>
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a secure password" required>
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                </div>

                <div class="form-group">
                    <label for="birthdate">Birthdate</label>
                    <input type="date" id="birthdate" name="birthdate" value="{{ old('birthdate') }}" placeholder="dd/mm/yyyy" required>
                    @error('birthdate')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit">Register for Cloud Computing 2025</button>
            </form>
        </div>
    </div>
</body>
</html>

