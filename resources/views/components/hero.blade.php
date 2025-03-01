<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section with Internal CSS</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .hero-section {
            position: relative;
            height: 800px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .absolute {
            position: absolute;
        }

        .top-left {
            top: 112px;
            left: 0;
        }

        .top-right {
            top: 0;
            right: 0;
        }

        .middle-left {
            width: 478px;
            height: 300px;
            left: 0;
            top: 384px;
        }

        .middle-right {
            width: 478px;
            height: 400px;
            right: 0;
            top: 4px;
            transform: scaleX(-1);
        }

        .content {
            position: absolute;
            z-index: 10;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .tagline {
            background: black;
            margin-top: 40px;
            width: 380px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            padding: 12px;
            border-radius: 24px;
        }

        .tagline img {
            width: 24px;
            height: 24px;
        }

        .tagline p {
            color: white;
            font-size: 13px;
            font-weight: normal;
        }

        .headline {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .headline h1 {
            font-size: 48px;
            font-weight: bold;
            line-height: 2.5rem;
        }

        .headline span {
            color: #007bff;
        }

        .highlight {
            color: #FBB132;
        }

        .subtext {
            font-size: 32px;
        }

        .description {
            font-size: 16px;
            width: 780px;
        }

        .cta {
            position: relative;
        }

        .cta button {
            font-size: 20px;
            font-weight: 600;
            color: white;
            background: #FBB132;
            display: flex;
            gap: 20px;
            align-items: center;
            justify-content: center;
            padding: 12px 32px;
            border-radius: 16px 0 16px 0;
            border: none;
            cursor: pointer;
        }

        .cta img {
            width: 16px;
            height: 16px;
        }

        .hero-image {
            position: absolute;
            right: 0;
            top: 24px;
            width: 780px;
        }

        @media (max-width: 1024px) {
            .headline h1 {
                font-size: 36px;
                line-height: 2rem;
            }

            .subtext {
                font-size: 24px;
            }

            .description {
                font-size: 14px;
                width: 100%;
            }

            .hero-image {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>

<div class="hero-section">
    <img class="absolute top-left" src="/yellowdothero.png" alt="">
    
    <div class="absolute top-right">
        <img src="/springhero.png" alt="">
    </div>
    
    <img class="absolute middle-left" src="/rectanglehero.png" alt="">
    <img class="absolute middle-right" src="/rectanglehero.png" alt="">
    
    <div class="content">
        <div class="tagline">
            <div class="rounded-full bg-white p-2">
                <img src="/likebtn.png" alt="">
            </div>
            <p>Bring your dream project to life with us</p>
        </div>

        <div class="headline">
            <h1>Where <span>Creativity</span> meets <span class="highlight">Technology.</span></h1>
            <p class="subtext">Building solutions that drive success.</p>
            <p class="description">Bring your ideas to life with passion and precision, your dream project deserves expert craftsmanship, let’s create something extraordinary together.</p>
        </div>

        <div class="cta">
            <button>
                Get Started
                <span>
                    <img src="/buttondownarrow.png" alt="">
                </span>
            </button>
            <div class="absolute" style="top: 0; left: 220px;">
                <img src="/springhero.png" alt="">
            </div>
        </div>
    </div>

    <img class="hero-image" src="/herogirlimg.png" alt="Hero Lander Image">
</div>

</body>
</html>
