<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Hero Section with Internal CSS</title>
    <style>
       
        * {
            font-family: "Poppins", sans-serif;
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
            margin-left: 70px;
          
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

        .highlight1 {
            color: #007bff;
        }

        .highlight2 {
            color: #FBB132
        }

        .subtext {
            font-size: 32px;
            font-weight: semibold;
            font-family: "Poppins", sans-serif;
        }

        .description {
            font-size: 16px;
            width: 780px;
            font-family: "Poppins", sans-serif;
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
            font-family: "Poppins", sans-serif;
        }

        .cta img {
            width: 16px;
            height: 16px;
        }

        .likebtn{
            border-radius: 100%;
            background: white;
            padding: 5px;
           
        }
        .hero-image {
            position: absolute;
            right: 0;
            top: 24px;
            width: 780px;
        }
        .description1
        {
            font-size: 13px;
            color: white;
            font-weight: 500;
            font-family: "Poppins", sans-serif;
        }
        .description2
        {
            font-size: 16px;
           font-family: "Poppins", sans-serif;
           max-width: 700px;
           
        }

        .headline1
        {
            font-family: "Poppins", sans-serif;
            font-size: 48px;
            font-weight: bold;
        }

        @media (max-width: 1024px) {
            .hero-section {
           
            
            height: 300px;
            align-items: start;
            padding-top: 50px;
           
        }
            .headline h1 {
                font-size: 30px;
                line-height: 2rem;
                font-family: "Poppins", sans-serif;
                text-align: center
            }

            .content {
          justify-content: center;
            align-items: center;
            gap: 40px;
            margin-left: 0px;
           
          
        }




            .subtext {
                font-size: 15px;
                font-family: "Poppins", sans-serif;
                text-align: center;
                font-weight: 600
            }

            .description2
        {
            font-size: 10px;
           font-family: "Poppins", sans-serif;
          text-align: center;
          font-weight: 400;
           
        }

            .hero-image {
                width: 100%;
                height: auto;
                display: none
            }
            .content
            {
                margin-left:0px;
                padding: 10px
            }

            .tagline{
            
            margin-top: 20px;
            width: 320px;
            
            gap: 12px;
            padding: 8px;
            border-radius: 24px;
        }

        .tagline img {
            width: 16px;
            height: 16px;
        }

        .tagline p {
           
            font-size: 12px;
           
        }

 .middle-left {
           
            width: 300px;
            height: 300px;
            left: 0;
            top: 384px;
            display: none;
        }
        .middle-right {
           
           width: 300px;
           height: 300px;
           left: 0;
           top: 384px;
           display: none;
       }
    

        .cta button {
            font-size: 14px;
            gap: 14px;
             padding: 8px 20px;
        }

        .cta img {
            width: 12px;
            height: 12px;
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
            <div class="likebtn  ">
                <img src="/likebtn.png" alt="">
            </div>
            <p class="description1">Bring your dream project to life with us</p>
        </div>

        <div class="headline">
            <h1 class="headline1">Where <span class="highlight1">Creativity</span> meets <span class="highlight2">Technology.</span></h1>
            <p class="subtext">Building solutions that drive success.</p>
            <p class="description2">Bring your ideas to life with passion and precision, your dream project deserves expert craftsmanship, let’s create something extraordinary together.</p>
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
