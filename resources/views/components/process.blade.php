<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Development Process</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .bg-gray {
            background: #F3F4F6; /* Tailwind gray-100 */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 5rem 1.5rem;
        }

        .text-center {
            text-align: center;
        }

        .title {
            font-size: 1.875rem;
            font-weight: bold;
            color: #1F2937; /* Tailwind gray-800 */
            margin-bottom: 3rem;
        }

        .process-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .step {
            text-align: center;
            max-width: 280px;
        }

        .step-number {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #3B82F6; /* Tailwind blue-500 */
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
            color: white;
            font-size: 1.25rem;
            font-weight: bold;
            margin: 0 auto 1rem auto;
        }

        .step img {
            width: 100%;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
        }

        .step-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #374151; /* Tailwind gray-700 */
            margin-bottom: 0.5rem;
        }

        .step-text {
            font-size: 1rem;
            color: #6B7280; /* Tailwind gray-600 */
        }

        .arrow {
            width: 150px;
        }

        @media (max-width: 768px) {
            .process-container {
                flex-direction: column;
                gap: 1rem;
            }

            .arrow {
                transform: rotate(90deg);
            }
        }
    </style>
</head>
<body>

<div class="bg-gray">
    <div class="container">
        <!-- Section Title -->
        <div class="text-center">
            <h2 class="title">Our Development Process</h2>
        </div>

        <!-- Process Steps -->
        <div class="process-container">
            <!-- Step 1 -->
            <div class="step">
                <div class="step-number">1</div>
                <img src="/process1.png" alt="Step 1">
                <h3 class="step-title">Define Requirements</h3>
                <p class="step-text">In a free hour, when our power of choice is untrammelled and when nothing prevents dolor sit amet, consectetur.</p>
            </div>

            <!-- Arrow -->
            <img src="/processarrow.png" alt="Arrow" class="arrow">

            <!-- Step 2 -->
            <div class="step">
                <div class="step-number">2</div>
                <img src="/process2.png" alt="Step 2">
                <h3 class="step-title">Design & Prototyping</h3>
                <p class="step-text">In a free hour, when our power of choice is untrammelled and when nothing prevents dolor sit amet, consectetur.</p>
            </div>

            <!-- Arrow -->
            <img src="/processarrow.png" alt="Arrow" class="arrow">

            <!-- Step 3 -->
            <div class="step">
                <div class="step-number">3</div>
                <img src="/process3.png" alt="Step 3">
                <h3 class="step-title">Final Solution</h3>
                <p class="step-text">In a free hour, when our power of choice is untrammelled and when nothing prevents dolor sit amet, consectetur.</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
