<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer</title>
    <style>
        /* Global Styles */
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        .footer {
            background-color: #1a1a1a;
            padding: 50px 20px;
            color: white;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }

        .footer h6 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer ul li {
            margin-bottom: 8px;
        }

        .footer a {
            text-decoration: none;
            color: #b0b0b0;
            font-size: 13px;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: white;
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons svg {
            width: 30px;
            height: 30px;
            fill: #b0b0b0;
            transition: fill 0.3s ease;
        }

        .social-icons a:hover svg {
            fill: white;
        }

        .subscribe {
            margin-top: 20px;
        }

        .subscribe a {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .subscribe a:hover {
            background-color: #0056b3;
        }

        .footer hr {
            border: 1px solid #333;
            margin: 20px 0;
        }

        .footer p {
            text-align: center;
            font-size: 13px;
            color: #b0b0b0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .footer-container {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 20px;
            }

            .footer h6 {
                font-size: 13px;
            }

            .footer a {
                font-size: 12px;
            }

            .social-icons svg {
                width: 25px;
                height: 25px;
            }

            .subscribe a {
                font-size: 12px;
                padding: 8px 16px;
            }

            .footer p {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            .footer-container {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
                gap: 15px;
            }

            .footer h6 {
                font-size: 12px;
            }

            .footer a {
                font-size: 11px;
            }

            .social-icons {
                gap: 10px;
            }

            .social-icons svg {
                width: 20px;
                height: 20px;
            }

            .subscribe a {
                font-size: 11px;
                padding: 6px 12px;
            }

            .footer p {
                font-size: 11px;
            }
        }
    </style>
</head>
<body>

<footer class="footer">
    <div class="footer-container">
        <div>
            <h6>RESOURCES</h6>
            <ul>
                <li><a href="#">Graphic Design Tools</a></li>
                <li><a href="#">Video Editing Tools</a></li>
                <li><a href="#">Image Enhancer</a></li>
                <li><a href="#">Remove Backgrounds</a></li>
                <li><a href="#">Photo Enhancement</a></li>
                <li><a href="#">Explore All Tools</a></li>
            </ul>
        </div>

        <div>
            <h6>HELPFUL LINKS</h6>
            <ul>
                <li><a href="#">Subscription Plans</a></li>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Developer API</a></li>
                <li><a href="#">Career Opportunities</a></li>
                <li><a href="#">Become a Contributor</a></li>
                <li><a href="#">Brand Guidelines</a></li>
                <li><a href="#">Upcoming Events</a></li>
                <li><a href="#">Search Insights</a></li>
                <li><a href="#">Latest Articles</a></li>
            </ul>
        </div>

        <div>
            <h6>POLICIES</h6>
            <ul>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">User Agreement</a></li>
                <li><a href="#">Data Privacy Policy</a></li>
                <li><a href="#">Copyright Notice</a></li>
                <li><a href="#">Cookie Usage Policy</a></li>
                <li><a href="#">Manage Cookies</a></li>
            </ul>
        </div>

        <div>
            <h6>SOCIAL MEDIA</h6>
            <div class="social-icons">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.652 49.652"><path d="M24.826 0C11.137 0 0 11.137 0 24.826c0 13.688 11.137 24.826 24.826 24.826 13.688 0 24.826-11.138 24.826-24.826C49.652 11.137 38.516 0 24.826 0zM31 25.7h-4.039v14.396h-5.985V25.7h-2.845v-5.088h2.845v-3.291c0-2.357 1.12-6.04 6.04-6.04l4.435.017v4.939h-3.219c-.524 0-1.269.262-1.269 1.386v2.99h4.56z"/></svg></a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.196 112.196"><circle cx="56.098" cy="56.097" r="56.098" fill="#007ab9"/><path fill="#fff" d="M89.616 60.611v23.128H76.207V62.161c0-5.418-1.936-9.118-6.791-9.118-3.705 0-5.906 2.491-6.878 4.903-.353.862-.444 2.059-.444 3.268v22.524h-13.41s.18-36.546 0-40.329h13.411v5.715c-.027.045-.065.089-.089.132h.089v-.132c1.782-2.742 4.96-6.662 12.085-6.662 8.822 0 15.436 5.764 15.436 18.149z"/></svg></a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 152 152"><rect width="152" height="152" rx="76" fill="url(#a)"/><path fill="#fff" d="M94 36H58a22 22 0 0 0-22 22v36a22 22 0 0 0 22 22h36a22 22 0 0 0 22-22V58a22 22 0 0 0-22-22zm15 54.84A18.16 18.16 0 0 1 90.84 109H61.16A18.16 18.16 0 0 1 43 90.84V61.16A18.16 18.16 0 0 1 61.16 43h29.68A18.16 18.16 0 0 1 109 61.16z"/></svg></a>
            </div>
            <div class="subscribe">
                <h6>Get exclusive assets sent straight to your inbox</h6>
                <a href="#">Sign up</a>
            </div>
        </div>
    </div>

    <hr>

    <p>Sada Creatives © 2025. All rights reserved.</p>
</footer>

</body>
</html>