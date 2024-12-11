<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Thanlyin Technology University</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            font-size: 16px;
        }
        h1 {
            color: #0056b3;
        }
        p {
            margin: 0 0 10px;
        }
        .footer {
            font-size: 12px;
            color: #777;
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .button {
            display: inline-block;
            padding: 10px 15px;
            font-size: 16px;
            color: #fff;
            background-color: #0056b3;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to Thanlyin Technology University!</h2>
        <p>Dear {{name}},</p>
        <p>Congratulations and welcome to Thanlyin Technology University!</p>
        <p>We are pleased to inform you that your account has been successfully created. You can now access our online portal to explore your student resources, course materials, and more. Below are your login details:</p>
        <p><strong>Username:</strong> {{username}}</p>
        <p><strong>Password:</strong> {{password}}</p>
        <p>Please follow these steps to log in:</p>
        <ol>
            <li>Visit our website at <a href="ThanlyinTechnologyUniversity.com">Thanlyin Technology University Website</a>.</li>
            <li>Click on the "Login" button located at the side bar of the homepage.</li>
            <li>Enter your username and password as provided above.</li>
            <li>Click "Submit" to access your account.</li>
        </ol>
        <p><strong>Important:</strong></p>
        <ul>
            <li>For your security, we recommend changing your password after your first login. </li>
            <!-- <li>For your security, we recommend changing your password after your first login. You can do this by navigating to the "Account Settings" section once logged in.</li>
            <li>If you encounter any issues accessing your account, please contact our IT support team at <a href="mailto:[IT Support Email]">[IT Support Email]</a> or call us at [IT Support Phone Number].</li> -->
        </ul>
        <p>We are excited to have you as part of our university community and look forward to supporting you throughout your academic journey.</p>
        <p>If you have any questions or need further assistance, please do not hesitate to reach out.</p>
        <p>Best regards,</p>
        <p>Administration Department<br>
        Thanlyin Technology University</p>
        <!-- <div class="footer">
            <p>This email is generated automatically. Please do not reply to this message. For any queries, contact <a href="mailto:[IT Support Email]">[IT Support Email]</a>.</p>
        </div> -->
    </div>
</body>
</html>
