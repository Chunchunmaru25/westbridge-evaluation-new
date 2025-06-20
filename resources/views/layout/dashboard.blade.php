<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Westbridge Dashboard</title>
    <!-- Google Material Icons -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=home" />
</head>

<body>

    <div class="app-container" id="app">
        <!-- Sidebar for desktop -->
        <aside class="sidebar" role="navigation" aria-label="Main navigation">
            <div class="logo-container" aria-label="Westbridge Institute of Technology logo">
                <img src="{{ asset('images/witilogo.png') }}" alt="this is Westbridge brrt brrt" />
                <div class="logo-text">
                    Westbridge<br />
                    <small>Institute of Technology Inc.</small>
                </div>
            </div>
            <hr>
            <nav class="sidebar-nav" aria-label="Primary">
                <ul>
                    <li><a href="{{ route('admin.dashboard') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">dashboard</span>Dashboard</a></li>

                    <li><a href="{{ route('admin.notification') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">notifications</span>Notifications</a>
                    </li>

                    <li><a href="{{ route('admin.evaluation') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">fact_check</span>Evaluations</a>
                    </li>
                    <li><a href="{{ route('admin.generateQR') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">qr_code</span>Generate QR</a>
                    </li>
                    <li><a href="{{ route('admin.add') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">admin_panel_settings</span>Add
                            Admin</a>
                    </li>
                    <hr>
                    <li><a href="{{ route('admin.account') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">person</span>Account</a>
                    </li>
                    <li><a href="{{ route('admin.settings') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">settings</span>Settings</a>
                    </li>
                    <hr>
                    <li><a href="{{ route('admin.callcenter') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">call</span>Call Center</a>
                    </li>
                    <li><a href="{{ route('admin.help') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">help_outline</span>Help</a>
                    </li>
                    <li><a href="{{ route('admin.logout') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">logout</span>Logout</a>
                    </li>

                    {{-- <li><button class="nav-btn"><span class="material-icons md-20"
                                aria-hidden="true">notifications</span>Notifications</button></li>
                    <li><button class="nav-btn active"><span class="material-icons md-20"
                                aria-hidden="true">fact_check</span>Evaluations</button></li>
                    <li><button class="nav-btn"><span class="material-icons md-20"
                                aria-hidden="true">qr_code</span>Generate QR</button></li>
                    <li><button class="nav-btn"><span class="material-icons md-20"
                                aria-hidden="true">admin_panel_settings</span>Add Admin</button></li>
                    <hr />
                    <li><button class="nav-btn"><span class="material-icons md-18"
                                aria-hidden="true">person</span>Account</button></li>
                    <li><button class="nav-btn"><span class="material-icons md-18"
                                aria-hidden="true">settings</span>Settings</button></li>
                    <hr />
                    <li><button class="nav-btn"><span class="material-icons md-18" aria-hidden="true">call</span>Call
                            Center</button></li>
                    <li><button class="nav-btn"><span class="material-icons md-18"
                                aria-hidden="true">help_outline</span>Help</button></li>
                    <li><button class="nav-btn"><span class="material-icons md-18" aria-hidden="true">logout</span>Log
                            Out</button></li> --}}
                </ul>
            </nav>
        </aside>

        <!-- Mobile header -->
        <header class="mobile-header" aria-label="Mobile site header">
            <span class="material-icons md-28" id="mobileMenuBtn" tabindex="0" role="button" aria-label="Open menu"
                aria-haspopup="true">menu</span>
            <nav class="breadcrumb" aria-label="Page breadcrumb">Evaluations</nav>
            <div style="width: 40px;"></div>
        </header>

        <!-- Mobile sidebar overlay -->
        <div class="mobile-sidebar-overlay" id="mobileSidebarOverlay" tabindex="-1"></div>
        <!-- Mobile sidebar drawer -->
        <aside class="mobile-sidebar" id="mobileSidebar" aria-label="Mobile navigation" tabindex="-1">
            <div class="logo-container" aria-label="Westbridge Institute of Technology logo">
                <img src="{{ asset('images/witilogo.png') }}" alt="this is Westbridge brrt brrt" />
                <div class="logo-text">
                    Westbridge<br />
                    <small>Institute of Technology Inc.</small>
                </div>
            </div>
            <hr>
            <nav class="sidebar-nav" aria-label="Primary">
                <ul>
                    <li><a href="{{ route('admin.dashboard') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">dashboard</span>Dashboard</a></li>

                    <li><a href="{{ route('admin.notification') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20"
                                aria-hidden="true">notifications</span>Notifications</a>
                    </li>

                    <li><a href="{{ route('admin.evaluation') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">fact_check</span>Evaluations</a>
                    </li>
                    <li><a href="{{ route('admin.generateQR') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">qr_code</span>Generate QR</a>
                    </li>
                    <li><a href="{{ route('admin.add') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">admin_panel_settings</span>Add
                            Admin</a>
                    </li>
                    <hr>
                    <li><a href="{{ route('admin.account') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">person</span>Account</a>
                    </li>
                    <li><a href="{{ route('admin.settings') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">settings</span>Settings</a>
                    </li>
                    <hr>
                    <li><a href="{{ route('admin.callcenter') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">call</span>Call Center</a>
                    </li>
                    <li><a href="{{ route('admin.help') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">help_outline</span>Help</a>
                    </li>
                    <li><a href="{{ route('admin.logout') }}" class="nav-btn" aria-current="page">
                            <span class="material-icons md-20" aria-hidden="true">logout</span>Logout</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main panel -->
        <main class="main-panel" role="main">
            <header class="app-header">
                <div class="header-left" aria-label="Welcome message">
                    <h1>Welcome, {{ $admininfo->firstname }}!</h1>
                    <p>brrtbrrt</p>
                </div>
                <form role="search" class="header-search" aria-label="Search form" onsubmit="return false;">
                    <input type="search" aria-label="Search here" placeholder="Search here" />
                    <button type="submit" aria-label="Search"><span
                            class="material-icons md-20">search</span></button>
                </form>
                <div class="header-user" aria-label="User profile">
                    <div class="user-info">
                        <span class="name">{{ $admininfo->firstname }} {{ $admininfo->middlename }}
                            {{ $admininfo->lastname }}</span>
                        <span class="role">{{ $admininfo->department }}</span>
                    </div>
                    <div class="avatar" aria-hidden="true">
                        <img src="https://placehold.co/38x38?text=ND" alt="User avatar letter ND" />
                    </div>
                </div>
            </header>
            <section class="content-area" aria-label="Dashboard content area">
                <!-- Empty content card as placeholder -->
                <div class="content-card" role="region" aria-live="polite"
                    aria-label="Dashboard content placeholder">
                    <!-- Content will eventually go here -->
                    @yield('content') {{-- Inject dynamic page content --}}
                </div>
            </section>
        </main>
    </div>

    <script>
        // Mobile nav toggling
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const mobileSidebarOverlay = document.getElementById('mobileSidebarOverlay');

        function closeMobileSidebar() {
            mobileSidebar.classList.remove('active');
            mobileSidebarOverlay.classList.remove('active');
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
            mobileMenuBtn.focus();
        }

        function openMobileSidebar() {
            mobileSidebar.classList.add('active');
            mobileSidebarOverlay.classList.add('active');
            mobileMenuBtn.setAttribute('aria-expanded', 'true');
            mobileSidebar.focus();
        }

        mobileMenuBtn.addEventListener('click', () => {
            if (mobileSidebar.classList.contains('active')) {
                closeMobileSidebar();
            } else {
                openMobileSidebar();
            }
        });

        mobileSidebarOverlay.addEventListener('click', () => {
            closeMobileSidebar();
        });

        // Close sidebar with Escape key for accessibility
        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileSidebar.classList.contains('active')) {
                closeMobileSidebar();
            }
        });

        // Nav button active state switching
        const navButtons = document.querySelectorAll('.sidebar-nav .nav-btn');
        navButtons.forEach((btn) => {
            btn.addEventListener('click', () => {
                navButtons.forEach((b) => {
                    b.classList.remove('active');
                    b.removeAttribute('aria-current');
                });
                btn.classList.add('active');
                btn.setAttribute('aria-current', 'page');
                // Update breadcrumb for mobile header
                const breadcrumb = document.querySelector('.breadcrumb');
                breadcrumb.textContent = btn.textContent.trim();
                closeMobileSidebar();
            });
        });
    </script>
</body>

</html>
