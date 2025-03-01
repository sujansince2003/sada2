<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header with Internal CSS</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        header {
            display: flex;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 16px 40px;
            background-color: white;
            min-height: 70px;
            position: relative;
            z-index: 50;
            align-items: center;
            justify-content: space-between;
        }

        .logo img {
            width: 56px;
        }

        .menu {
            display: flex;
            gap: 20px;
            list-style: none;
        }

        .menu li a {
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            color: gray;
            padding: 10px;
            transition: color 0.3s ease;
        }

        .menu li a:hover {
            color: #007bff;
        }

        .mobile-menu {
            display: none;
            flex-direction: column;
            position: fixed;
            background: white;
            width: 250px;
            top: 0;
            left: 0;
            height: 100%;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            padding: 20px;
            overflow-y: auto;
            z-index: 100;
        }

        .mobile-menu.show {
            display: flex;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
        }

        .menu-toggle svg {
            width: 28px;
            height: 28px;
        }

        .close-menu {
            display: none;
            border: none;
            background: white;
            font-size: 24px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .discover-btn {
            background-color: #FBB132;
            color: white;
            font-weight: bold;
            padding: 12px 24px;
            border-radius: 20px 0 20px 0;
            border: none;
            cursor: pointer;
        }

        @media (max-width: 1024px) {
            .menu {
                display: none;
            }

            .menu-toggle {
                display: block;
            }

            .close-menu {
                display: block;
            }
        }
    </style>
</head>
<body>

<header>
    <a href="#" class="logo"><img src="/logo.png" alt="Logo"></a>
    
    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Team</a></li>
        <li><a href="#">Feature</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <button class="discover-btn">Discover More +</button>
    
    <button class="menu-toggle" id="toggleOpen">
        <svg fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"></path>
        </svg>
    </button>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu" id="collapseMenu">
    <button class="close-menu" id="toggleClose">×</button>
    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Team</a></li>
        <li><a href="#">Feature</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</div>

<script>
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        collapseMenu.classList.toggle('show');
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);
</script>

</body>
</html>
