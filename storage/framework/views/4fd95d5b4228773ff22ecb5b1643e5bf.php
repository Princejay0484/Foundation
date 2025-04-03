<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Side Navigation</title>
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body>
    <!-- Mobile Sidebar Menu Button -->
    <button class="sidebar-menu-button">
      <span class="material-symbols-rounded">menu</span>
    </button>
    <aside class="sidebar">
      <!-- Sidebar Header -->
      <header class="sidebar-header">
        <a href="/admin_dasboard" class="header-logo">
          <img src="/img/logo.png" alt="CodingNepal" />
        </a>
        <button class="sidebar-toggler">
          <span class="material-symbols-rounded">chevron_left</span>
        </button>
      </header>
      <nav class="sidebar-nav">
        <!-- Primary Top Nav -->
        <ul class="nav-list primary-nav">
          <li class="nav-item">
            <a href="/admin_dasboard" class="nav-link">
              <span class="material-symbols-rounded">dashboard</span>
              <span class="nav-label">Dashboard</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Dashboard</a></li>
            </ul>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown-container">
            <a href="#" class="nav-link dropdown-toggle">
              <span class="material-symbols-rounded">Diversity_1</span>
              <span class="nav-label">Maya's Hope</span>
              <span class="dropdown-icon material-symbols-rounded">keyboard_arrow_down</span>
            </a>
            <!-- Dropdown Menu -->
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Maya's Hope</a></li>
              <li class="nav-item"><a href="/chalice" class="nav-link dropdown-link">Sponsored</a></li>
              <li class="nav-item"><a href="/mayashope_onrtime_record" class="nav-link dropdown-link">One time Support</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/accoutinformation" class="nav-link">
              <span class="material-symbols-rounded">Person</span>
              <span class="nav-label">Account Information</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Account Information</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/events" class="nav-link">
              <span class="material-symbols-rounded">Event</span>
              <span class="nav-label">Event</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Event</a></li>
            </ul>
          </li>
          <!-- Dropdown -->
          <li class="nav-item">
            <a href="/mayashope" class="nav-link">
              <span class="material-symbols-rounded">Analytics</span>
              <span class="nav-label">Chalice</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Chalice</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/mayaform" class="nav-link">
              <span class="material-symbols-rounded">Contract</span>
              <span class="nav-label">Qualification Form</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Qualification Form</a></li>
            </ul>
          </li>
        </ul>
        <!-- Secondary Bottom Nav -->
        <ul class="nav-list secondary-nav">
          <li class="nav-item">
            <a href="<?php echo e(route('logout')); ?>" class="nav-link">
              <span class="material-symbols-rounded">logout</span>
              <span class="nav-label">Sign Out</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Sign Out</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>
    <script>
        // Toggle the visibility of a dropdown menu
const toggleDropdown = (dropdown, menu, isOpen) => {
    dropdown.classList.toggle("open", isOpen);
    menu.style.height = isOpen ? `${menu.scrollHeight}px` : 0;
  };
  // Close all open dropdowns
  const closeAllDropdowns = () => {
    document.querySelectorAll(".dropdown-container.open").forEach((openDropdown) => {
      toggleDropdown(openDropdown, openDropdown.querySelector(".dropdown-menu"), false);
    });
  };
  // Attach click event to all dropdown toggles
  document.querySelectorAll(".dropdown-toggle").forEach((dropdownToggle) => {
    dropdownToggle.addEventListener("click", (e) => {
      e.preventDefault();
      const dropdown = dropdownToggle.closest(".dropdown-container");
      const menu = dropdown.querySelector(".dropdown-menu");
      const isOpen = dropdown.classList.contains("open");
      closeAllDropdowns(); // Close all open dropdowns
      toggleDropdown(dropdown, menu, !isOpen); // Toggle current dropdown visibility
    });
  });
  // Attach click event to sidebar toggle buttons
  document.querySelectorAll(".sidebar-toggler, .sidebar-menu-button").forEach((button) => {
    button.addEventListener("click", () => {
      closeAllDropdowns(); // Close all open dropdowns
      document.querySelector(".sidebar").classList.toggle("collapsed"); // Toggle collapsed class on sidebar
    });
  });
  // Collapse sidebar by default on small screens
  if (window.innerWidth <= 1024) document.querySelector(".sidebar").classList.add("collapsed");
    </script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\fundation-main\resources\views//header.blade.php ENDPATH**/ ?>