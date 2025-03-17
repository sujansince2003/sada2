<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Header with Hamburger Menu</title>
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
      display: flex;
      flex-direction: column;
      position: fixed;
      background: white;
      width: 250px;
      top: 0;
      left: -250px;
      height: 100%;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
      padding: 20px;
      overflow-y: auto;
      z-index: 100;
      transition: left 0.3s ease;
    }

    .mobile-menu.show {
      left: 0;
    }

    .mobile-menu-list {
      display: flex;
      flex-direction: column;
      gap: 20px;
      list-style: none;
      margin-top: 2rem;
    }

    .mobile-menu-list li a {
      text-decoration: none;
      font-size: 16px;
      color: gray;
      font-weight: bold;
    }

    .mobile-menu-list li a:hover {
      color: #007bff;
    }

    .overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 99;
    }

    .overlay.show {
      display: block;
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
      align-self: flex-end;
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

      .discover-btn {
        display: none;
      }
    }
  </style>
</head>
<body>

<header>
  <a href="#" class="logo"><img src="/logo.png" alt="Logo"></a>

  <!-- Desktop Menu -->
  <ul class="menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">Team</a></li>
    <li><a href="#">Feature</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
  </ul>

  <button class="discover-btn">Discover More +</button>

  <!-- Hamburger -->
  <button class="menu-toggle" id="toggleOpen" aria-label="Open Menu">
    <svg fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd"
        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
        clip-rule="evenodd"></path>
    </svg>
  </button>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu" id="collapseMenu">
  <button class="close-menu" id="toggleClose" aria-label="Close Menu">×</button>
  <ul class="mobile-menu-list">
    <li><a href="#">Home</a></li>
    <li><a href="#">Team</a></li>
    <li><a href="#">Feature</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</div>

<!-- Overlay -->
<div class="overlay" id="overlay"></div>

<script>
  // Get elements
  var toggleOpen = document.getElementById('toggleOpen');
  var toggleClose = document.getElementById('toggleClose');
  var collapseMenu = document.getElementById('collapseMenu');
  var overlay = document.getElementById('overlay');

  // Toggle mobile menu and overlay
  function toggleMenu() {
    collapseMenu.classList.toggle('show');
    overlay.classList.toggle('show');
  }

  // Add event listeners
  toggleOpen.addEventListener('click', toggleMenu);
  toggleClose.addEventListener('click', toggleMenu);
  overlay.addEventListener('click', toggleMenu); // Close menu when clicking outside
</script>

</body>
</html>
