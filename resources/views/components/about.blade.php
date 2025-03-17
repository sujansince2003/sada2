<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Section</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .about-section {
            margin-top: 5rem;
            padding: 9rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .about-section .decorative-circle {
            position: absolute;
            left: 280px;
            top: 17rem;
            width: 200px;
        }

        .about-left {
            position: relative;
            width: 475px;
            height: 600px;
        }

        .about-left img {
            width: 320px;
            height: 300px;
            position: absolute;
            border-radius: 1.5rem;
        }

        .about-left img:first-child {
            z-index: 1;
        }

        .about-left img:last-child {
            top: 9rem;
            left: 9rem;
            z-index: 2;
        }

        .about-right {
            width: 50%;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .about-right h1 {
            font-size: 3rem;
            font-weight: 600;
            line-height: 1.25;
        }
        h3 {
            display: none;
            font-size: 30px;
            font-weight: 600;
            line-height: 1.25;
        }

        .about-right p {
            font-size: 1rem;
            white-space: normal;
        }

        .stats-container {
            display: flex;
            flex-direction: column;
            gap: 4rem;
        }

        .stats-row {
            display: flex;
            gap: 5rem;
        }

        .stat-box {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            border: 2px solid transparent;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border-radius: 1.5rem;
            padding: 2.5rem;
            width: 250px;
        }

        .stat-box p {
            margin: 0;
        }

        .stat-box .number {
            font-size: 3rem;
            font-weight: 600;
        }

        .stat-box .number span {
            color: #FBB132;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 1200px) {
            .about-section {
                flex-direction: column;
                gap: 3rem;
            }
            h3 {
            display: inline;
          
        }
            .about-left {
                width: 100%;
                height: auto;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .about-left img {
                position: static;
                width: 80%;
                height: auto;
            }

            .about-left img:last-child {
                display: none; /* Hide overlapping image on smaller screens */
            }

            .about-right {
                width: 100%;
                text-align: center;
            }
            .about-right h1 {
                display: none
          
        }
        .stats-container {
           
            flex-direction: row;
            align-items: center;
            justify-content: center
            gap: 2rem;
        }
            .stats-row {
                flex-direction: column;
                gap: 2rem;
                align-items: center;
            }

            .stat-box {
                width: 150px;
                /* max-width: 300px; */
            }
        }

        @media (max-width: 768px) {
            .about-section .decorative-circle {
                display: none; /* Hide decorative circle on smaller screens */
            }

            .about-right h1 {
                font-size: 2rem;
            }

            .stat-box .number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
       
        <div class="about-section">
            <h3>Our company ensures flexibility, adaptability, & rapid response.</h3>
            <img class="decorative-circle" src="/ellipse.png" alt="Decorative Circle">
            <!-- Left About Us Section -->
            <div class="about-left">
                <img src="/aboutusimg1.png" alt="About Us Image 1">
                <img src="/aboutusimg2.png" alt="About Us Image 2">
            </div>
            <!-- Right About Us Section -->
            <div class="about-right">
                <h1>Our company ensures flexibility, adaptability, & rapid response.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. Vivamus ut sapien et ex.</p>
                <div class="stats-container">
                    <div class="stats-row">
                        <div class="stat-box">
                            <p class="number">5<span>+</span></p>
                            <p>Years Experience</p>
                        </div>
                        <div class="stat-box">
                            <p class="number">75<span>+</span></p>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="stats-row">
                        <div class="stat-box">
                            <p class="number">100<span>+</span></p>
                            <p>Order completed</p>
                        </div>
                        <div class="stat-box">
                            <p class="number">20<span>+</span></p>
                            <p>Professional team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>