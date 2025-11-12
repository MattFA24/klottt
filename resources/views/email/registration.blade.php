<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Cloud Computing 2025</title>
    <style>
        /* Basic reset */
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
        
        /* Main styles */
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f4f4f7;
            margin: 0 !important;
            padding: 0 !important;
        }
        
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .header {
            background-color: #2196F3;
            padding: 30px 30px;
            text-align: center;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .header h1 {
            margin: 0;
            color: #ffffff;
            font-size: 26px;
            font-weight: 600;
        }

        .content {
            background-color: #ffffff;
            padding: 40px 30px;
            color: #333333;
            font-size: 16px;
            line-height: 1.6;
        }

        .content p {
            margin: 0 0 20px 0;
        }

        .button-container {
            text-align: center;
            padding: 10px 0 20px 0;
        }

        .button {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            display: inline-block;
        }

        .footer {
            background-color: #f4f4f7;
            padding: 30px 30px;
            text-align: center;
            font-size: 13px;
            color: #777777;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

    </style>
</head>
<body style="font-family: 'Poppins', Arial, sans-serif; background-color: #f4f4f7; margin: 0 !important; padding: 0 !important;">

    <!-- Main Table -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" style="padding: 20px 10px;">
                
                <!-- Container Table -->
                <table border="0" cellpadding="0" cellspacing="0" class="container" style="width: 100%; max-width: 600px; margin: 0 auto;">
                    
                    <!-- Header -->
                    <tr>
                        <td align="center" class="header" style="background-color: #2196F3; padding: 30px 30px; text-align: center; border-top-left-radius: 12px; border-top-right-radius: 12px;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 26px; font-weight: 600;">Welcome!</h1>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td align="left" class="content" style="background-color: #ffffff; padding: 40px 30px; color: #333333; font-size: 16px; line-height: 1.6;">
                            
                            <!-- 
                                Note: You'll need to pass the $user object to this view from your Mailable. 
                                The Mailable class I provided earlier already does this.
                            -->
                            <p style="margin: 0 0 20px 0;">Hello <strong>{{ $user->name }}</strong>,</p>
                            
                            <p style="margin: 0 0 20px 0;">Thank you for registering for <strong>Cloud Computing 2025</strong>. We're excited to have you as a new member of our community!</p>
                            
                            <p style="margin: 0 0 20px 0;">Your account has been created successfully. You can now log in using your email address.</p>

                            <!-- Button -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="center" class="button-container" style="text-align: center; padding: 10px 0 20px 0;">
                                        <!-- 
                                            You can change this link to your login page 
                                            Example: {{ url('/login') }} 
                                        -->
                                        <a href="{{ url('/') }}" target="_blank" class="button" style="background-color: #4CAF50; color: #ffffff; padding: 12px 25px; text-decoration: none; border-radius: 8px; font-weight: 500; display: inline-block;">
                                            Go to Your Dashboard
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin: 0 0 20px 0;">If you have any questions, feel free to reply to this email.</p>
                            
                            <p style="margin: 0;">Best regards,<br>The Cloud Computing 2025 Team</p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" class="footer" style="background-color: #f4f4f7; padding: 30px 30px; text-align: center; font-size: 13px; color: #777777; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px;">
                            <p style="margin: 0 0 10px 0;">© {{ date('Y') }} Cloud Computing 2025. All rights reserved.</p>
                            <p style="margin: 0;">You received this email because you just registered on our site.</p>
                        </td>
                    </tr>

                </table>
                <!-- /Container Table -->

            </td>
        </tr>
    </table>
    <!-- /Main Table -->

</body>
</html>
