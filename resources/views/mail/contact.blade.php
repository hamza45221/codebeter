<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Submission - Enhanced Template</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f7f9fc;
        }
        table.main-table {
            width: 100%;
            max-width: 750px;
            margin: 30px auto;
            background-color: #ffffff;
            border-collapse: collapse;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }
        table.content-table {
            width: 100%;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 5px;
        }
        h2 {
            color: #34495e;
            font-size: 20px;
            margin-top: 0;
            margin-bottom: 25px;
        }
        p {
            color: #555555;
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 15px;
        }
        .header-section {
            text-align: center;
            padding: 30px;
            background-color: #4a90e2;
            color: #ffffff;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
        .image-container {
            text-align: center;
            padding: 20px 0;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }
        .data-section {
            padding: 25px;
            background-color: #f0f4f8;
            border-left: 5px solid #4a90e2;
            border-radius: 8px;
            margin-bottom: 25px;
        }
        .data-section p {
            margin: 8px 0;
            font-weight: 500;
        }
        .description-box {
            border: 1px solid #e0e0e0;
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            line-height: 1.6;
            max-height: 200px; /* Limit height */
            overflow-y: auto; /* Enable vertical scrolling if needed */
        }
        .footer-section {
            text-align: center;
            padding: 20px;
            background-color: #e9eff6;
            color: #888888;
            font-size: 13px;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }
        .footer-section a {
            color: #4a90e2;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

<table class="main-table" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td class="header-section">
            <h1>Hello from [Your Company Name]!</h1>
        </td>
    </tr>
    <tr>
        <td style="padding: 15px;">
            <table class="content-table" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <h2>We have a new user for you!</h2>
                        <p>Hey team,</p>
                        <p>We're excited to let you know that a new user has just reached out. Here are their details—we thought you'd want to take a look!</p>

                        <div class="data-section">
                            <p><strong>Name:</strong> [First Name] [Last Name]</p>
                            <p><strong>Email:</strong> <a href="mailto:[User Email]" style="color:#4a90e2; text-decoration:none;">[User Email]</a></p>
                        </div>

                        <p><strong>Here is the user's message:</strong></p>
                        <div class="description-box">
                            <p>[User Description or Message]</p>
                        </div>

                        <div class="image-container">
                            <p style="font-weight: bold; color: #34495e;">Submitted Image:</p>
                            <img src="[Image URL]" alt="User submitted image" style="display: block;">
                        </div>

                        <p>Let's make sure we give them a warm welcome.</p>
                        <p>All the best,<br>The [Your Company Name] Team</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="footer-section">
            <p>This is an automated notification. If you have any questions, feel free to reply to this email.</p>
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </td>
    </tr>
</table>

</body>
</html>
