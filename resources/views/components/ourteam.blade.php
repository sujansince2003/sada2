<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .bg-black {
            background: #000;
            color: white;
            padding: 5rem 1.5rem;
            text-align: center;
        }

        .title {
            font-size: 1.875rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .subtitle {
            font-size: 1.125rem;
            font-weight: 300;
            margin-bottom: 2rem;
        }

        .description {
            font-size: 1.125rem;
            max-width: 800px;
            margin: 0 auto 3rem auto;
            color: #E5E7EB; /* Tailwind gray-300 */
        }

        .team-container {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .member {
            text-align: center;
            max-width: 250px;
        }

        .member img {
            width: 100%;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(255, 255, 255, 0.1);
            margin-bottom: 1rem;
        }

        .member-name {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .member-role {
            font-size: 0.875rem;
            color: #D1D5DB; /* Tailwind gray-400 */
        }

        @media (max-width: 768px) {
            .team-container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<div class="bg-black">
    <!-- Section Title -->
    <h2 class="title">We bring a wealth of Experience</h2>
    <h3 class="subtitle">From a wide range of Background</h3>

    <p class="description">
        We have a simple philosophy: Hire great people, provide them the required resources and support to do their job.
    </p>

    <!-- Team Members -->
    <div class="team-container">
        <!-- Member 1 -->
        <div class="member">
            <img src="/manoj.png" alt="Manoj Pokharel">
            <h3 class="member-name">Manoj Pokharel</h3>
            <p class="member-role">Founder and CEO</p>
        </div>

        <!-- Member 2 -->
        <div class="member">
            <img src="/sujan.png" alt="Sujan Khatri">
            <h3 class="member-name">Sujan Khatri</h3>
            <p class="member-role">Web Developer</p>
        </div>

        <!-- Member 3 -->
        <div class="member">
            <img src="/nischal.png" alt="Nischal Pokhrel">
            <h3 class="member-name">Nischal Pokhrel</h3>
            <p class="member-role">UI/UX Designer</p>
        </div>
    </div>
</div>

</body>
</html>
