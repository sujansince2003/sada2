<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Modern Design</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .header {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff;
        }

        .subheader {
            font-size: 1.25rem;
            color: #666;
            margin-bottom: 30px;
        }

        .contact-info {
            margin-bottom: 30px;
        }

        .contact-info h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
        }

        .contact-info p {
            font-size: 1rem;
            color: #555;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #007bff;
        }

        .contact-form textarea {
            resize: vertical;
            min-height: 150px;
        }

        .contact-form button {
            background: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .contact-form button:hover {
            background: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header {
                font-size: 2rem;
            }

            .subheader {
                font-size: 1rem;
            }

            .contact-info h2 {
                font-size: 1.25rem;
            }

            .contact-info p {
                font-size: 0.875rem;
            }

            .contact-form input,
            .contact-form textarea {
                font-size: 0.875rem;
            }

            .contact-form button {
                font-size: 0.875rem;
            }
        }

        @media (max-width: 480px) {
            .section {
                padding: 20px;
            }

            .header {
                font-size: 1.75rem;
            }

            .subheader {
                font-size: 0.875rem;
            }

            .contact-info h2 {
                font-size: 1rem;
            }

            .contact-info p {
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Contact Section -->
        <div class="section">
            <h1 class="header">Let's Talk</h1>
            <p class="subheader">Have some big idea or brand to develop and need help? Then reach out we'd love to hear about your project and provide help.</p>

            <!-- Contact Info -->
            <div class="contact-info">
                <h2>Email</h2>
                <p><strong>info@example.com</strong></p>
            </div>

            <!-- Contact Form -->
            <form class="contact-form">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <input type="text" placeholder="Subject" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</body>
</html>