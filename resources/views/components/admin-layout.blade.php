<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Sistema de seguridad</title>
    @vite(['resources/css/admin-layout.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.bunny.net">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

    <!-- Styles -->
    @livewireStyles

</head>

<body>

<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxs-shield icon'></i>
            <div class="logo_name">SecurityWA</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
    <li>
      <a href="{{ route('admin.users') }}">
        <i class='bx bx-user'></i>
        <span class="links_name">Users</span>
      </a>
      <span class="tooltip">Users</span>
    </li>
    <li>
      <a href="{{ route('admin.audits') }}">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Audits</span>
      </a>
      <span class="tooltip">Audits</span>
    </li>
    <li>
      <a href="{{ route('admin.events') }}">
        <i class='bx bx-error'></i>
        <span class="links_name">Events</span>
      </a>
      <span class="tooltip">Events</span>
    </li>
    <li>
      <a href="{{ route('admin.standards') }}">
        <i class='bx bx-shield'></i>
        <span class="links_name">Standards</span>
      </a>
      <span class="tooltip">Standards</span>
    </li>
    <li>
        <a href="{{ route('admin.protocols') }}">
          <i class='bx bx-transfer'></i>
          <span class="links_name">Protocols</span>
        </a>
      <span class="tooltip">Protocols</span>
    </li>
    <li class="profile">
      <div class="profile-details">
        <img src="https://drive.google.com/uc?export=view&id=1ETZYgPpWbbBtpJnhi42_IR3vOwSOpR4z" alt="profileImg">
        <div class="name_job">
          <div class="name">{{ Auth::user()->name }}</div>
          <div class="job">Administrator</div>
        </div>
      </div>
      <i class='bx bx-log-out' id="log_out"></i>
    </li>
  </ul>
</div>

<section class="home-section">
    <main class="main">
      {{ $slot }}
    </main>
</section>

    @livewireScripts
    @stack('scripts')

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        //let searchBtn = document.querySelector(".bx-search");
        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });
        /*searchBtn.addEventListener("click", () => {
        // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
        });*/
        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>

</body>
</html>