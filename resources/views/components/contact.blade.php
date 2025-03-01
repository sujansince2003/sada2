<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiring & Contact Form</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #EEEEEE;
        }
        .container {
            margin: 24px;
        }
        .section {
            background: #EEEEEE;
            padding: 20px;
            margin: 10px 0;
            border-radius: 10px;
        }
        .header {
            font-size: 32px;
            font-weight: bold;
        }
        .button {
            background: white;
            padding: 10px 15px;
            border-radius: 10px 0 0 10px;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }
        .profile-images img {
            width: 40px;
            height: 40px;
            border: 2px solid white;
            border-radius: 50%;
            margin-left: -10px;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }
        .contact-form button {
            background: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h1 class="header">We are hiring</h1>
            <p>We’re always looking for Great People. Chat to our Team.</p>
            <button class="button">Explore Open Roles</button>
            <div class="profile-images">
                <img src="/manoj.png" alt="Profile">
                <img src="/manoj.png" alt="Profile">
                <img src="/manoj.png" alt="Profile">
                <img src="/manoj.png" alt="Profile">
            </div>
        </div>

        <div class="section">
            <h1 class="header">Let's Talk</h1>
            <p>Have some big idea or brand to develop and need help? Then reach out we'd love to hear about your project and provide help.</p>
            <div>
                <h2>Email</h2>
                <p><strong>info@example.com</strong></p>
            </div>

            <form class="contact-form">
                <input type='text' placeholder='Name'>
                <input type='email' placeholder='Email'>
                <input type='text' placeholder='Subject'>
                <textarea placeholder='Message' rows="6"></textarea>
                <button type='submit'>Send</button>
            </form>
        </div>
    </div>
</body>
</html>
