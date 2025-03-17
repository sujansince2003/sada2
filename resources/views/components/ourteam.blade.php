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
        .description {
         max-width: 800px; /* Limit width */
         margin: 0 auto 2rem auto; /* Center align + spacing */
         font-size: 14px;
        font-weight: 300;
        line-height: 1.6; /* Better readability */
}
        .title {
            font-size: 1.875rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: white;
        }

        .subtitle {
           
            font-size: 1.125rem;
            font-weight: 600;
            margin: 1rem 0;
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
            .subtitle {
            font-size: 12px;
            font-weight: 600;
            margin:1rem 0rem;
        }
        .description {
         max-width: 350px; /* Limit width */
         margin: 0 auto 1rem auto; /* Center align + spacing */
         font-size: 8px;
        font-weight: 300;
        line-height: 1.6; /* Better readability */
}
      
        }
    </style>
</head>
<body>

<div class="bg-black">
    <!-- Section Title -->
    <h2 class="title">We bring a wealth of Experience</h2>
    <p class="subtitle">From a wide range of Background</p>

     <h4 class="description">
        We have a simple philosophy: Hire great people, provide them the required resources and support to do their job.
    </h4> 
    
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
