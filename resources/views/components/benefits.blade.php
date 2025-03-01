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

        .bg-black {
            background: black;
            color: white;
        }

        .section {
            padding: 4rem 1.5rem;
            text-align: center;
        }

        .section h2 {
            font-size: 2.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
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

        .card h3 {
            font-size: 1.875rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
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
    <section class="section">
        <h2>Enjoy Our Excellent Service</h2>
        <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, liat Europa usa li sam vocabular.</p>
      
        <!-- Grid Section -->
        <div class="grid">
            <!-- UI/UX Design -->
            <div class="card">
                <img src="/uiuxbenefit.png" alt="">
                <h3>UI/UX Design</h3>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
            </div>

            <!-- Graphics Design -->
            <div class="card bg-yellow">
                <img src="/designbenefit.png" alt="">
                <h3>Graphics Design</h3>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
            </div>

            <!-- Mobile App Development -->
            <div class="card">
                <img src="/mobilebenefit.png" alt="">
                <h3>Mobile App Development</h3>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
            </div>

            <!-- Web Development -->
            <div class="card bg-yellow">
                <img src="/webbenefit.png" alt="">
                <h3>Web Development</h3>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
            </div>

            <!-- Digital Marketing -->
            <div class="card">
                <img src="/digitalbenefit.png" alt="">
                <h3>Digital Marketing</h3>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
            </div>

            <!-- Video Editing -->
            <div class="card bg-yellow">
                <img src="/video.png" alt="">
                <h3>Video Editing</h3>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
            </div>
        </div>
    </section>
</div>

</body>
</html>
