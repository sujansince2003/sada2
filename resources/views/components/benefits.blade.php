<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            
        }

        

        .section1 {
            padding: 2rem 1.5rem;
            text-align: center;
            background-color: black;
           
         
           
        }

        .section h2 {
            font-size: 2.25rem;
            font-weight: bold;
            margin-bottom: 1rem;

        
        }

        .section-txt
        {
            
            text-align: center;
            background-color: black;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 50px 10px;
        }

        .section-txt h2{
            font-size: 40px;
        }

        .section p {
            font-size: 1.125rem;
            color: #9CA3AF; /* gray-400 */
            margin-bottom: 3rem;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media (min-width: 640px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 768px) {
            .grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .card {
            background: white;
            padding: 1.5rem;
            border-radius: 0.5rem;
            height: 358px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card img {
            width: 64px;
            height: 64px;
            margin-bottom: 1rem;
        }

        .card h2 {
            font-size: 1.875rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .card .blacktext {
            font-size: 1.875rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: black
        }

        .card p {
            font-size: 0.875rem;
            width: 11rem;
            text-align: center;
            color: black;
        }

        .bg-yellow {
            background: #FBB132;
            color: white;
        }

        .bg-yellow h3,
        .bg-yellow p {
            color: white;
        }

    </style>
</head>
<body>

<div class="bg-black">
    <!-- Main Section -->
    <section class="section1">
        <div class="section-txt">

      
        <h2>Enjoy Our Excellent Service</h2>
        <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, liat Europa usa li sam vocabular.</p>
    </div>
        <!-- Grid Section -->
        <div class="grid">
            <!-- UI/UX Design -->
            <div class="card">
                <img src="/uiuxbenefit.png" alt="">
                <h2 class="blacktext">UI/UX Design</h2>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
            </div>

            <!-- Graphics Design -->
            <div class="card bg-yellow">
                <img src="/designbenefit.png" alt="">
                <h2>Graphics Design</h2>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
            </div>

            <!-- Mobile App Development -->
            <div class="card">
                <img src="/duo-icons_app.png" alt="">
                <h2 class="blacktext">Mobile App Development</h2>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
            </div>

            <!-- Web Development -->
            <div class="card bg-yellow">
                <img src="/webbenefit.png" alt="">
                <h2>Web Development</h2>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
            </div>

            <!-- Digital Marketing -->
            <div class="card">
                <img src="/digitalbenefit.png" alt="">
                <h2 class="blacktext">Digital Marketing</h2>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
            </div>

            <!-- Video Editing -->
            <div class="card bg-yellow">
                <img src="/video.png" alt="">
                <h2>Video Editing</h2>
               
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
            </div>
        </div>
    </section>
</div>

</body>
</html>
