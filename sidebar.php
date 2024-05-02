    <style>
        a {
            text-decoration: none;
        }

        #sidebar {
            width: 70px;
            top: 100px;
            left: 0;
            min-width: 70px;
            z-index: 900;
            height: calc(100%-100px);
            transition: all .25s ease-in-out;
            background-color: rgba(0, 0, 0, 0.80);
            display: block;
            position: sticky;
            margin-top: 100px;
            flex-direction: column;
            /* height: 550vh; */
        }

        #sidebar.expand {
            width: 200px;
            min-width: 200px;
            /* position: fixed; */
        }

        #toggle-btn {
            background-color: transparent;
            cursor: pointer;
            border: 0;
            padding: 1rem 1.5rem;
        }

        #toggle-btn i {
            font-size: 1.5rem;
            color: #fff;
        }

        #sidebar:not(.expand) .sidebar-logo,
        #sidebar:not(.expand) a.sidebar-link span {
            display: none;
        }

        #sidebar.expand .sidebar-logo,
        #sidebar.expand a.sidebar-link span {
            animation: fadeIn .25s ease;
        }

        .sidebar-nav {
            padding: 0;
            flex: 1 1;
        }

        a.sidebar-link {
            padding: .625rem 1.625rem;
            color: #fff;
            display: block;
            font-size: 0.9rem;
            white-space: nowrap;
            text-align: left;
            border-left: 3px solid transparent;
        }

        .sidebar-link i {
            font-size: 1.1rem;
            margin-left: .20rem;
            padding-right: 10px;
        }

        a.sidebar-link:hover {
            background-color: rgba(255, 255, 255, .075);
            border-left: 3px solid #3b7ddd;
        }

        .sidebar-item {
            position: relative;
        }
/* 
        #sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
            position: absolute;
            top: 0;
            left: 60px;
            background-color: #0e2238;
            padding: 0;
            min-width: 15rem;
            display: none;
        }

        #sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
            display: block;
            max-height: 15em;
            width: 100%;
            opacity: 1;
        }

        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
            border: solid;
            border-width: 0 .075rem .075rem 0;
            content: "";
            display: inline-block;
            padding: 2px;
            position: absolute;
            right: 1rem;
            top: 1.4rem;
            transform: rotate(-135deg);
            transition: all .2s ease-out;
        }

        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
            transform: rotate(45deg);
            transition: all .2s ease-out;
        } */
    </style>

    </head>

    <body>
        <div class="wrapper">
            <aside id="sidebar">
                <div class="d-flex">
                    <button id="toggle-btn" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#profile" aria-expanded="false" aria-controls="profile">
                            <i class='fas fa-user-alt'></i>
                            <span>User Profile</span>
                        </a>
                        <ul id="profile" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Edit Profile </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Manage Posts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#program" aria-expanded="false" aria-controls="program">
                            <i class="fas fa-calendar"></i>
                            <span>Programs</span>
                        </a>
                        <ul id="program" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Upcoming Events </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Past Events</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Workshop</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Study & Research</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-pencil-alt"></i>
                            <span>Post</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-newspaper"></i>
                            <span>News & Updates</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#network" aria-expanded="false" aria-controls="network">
                            <i class="fas fa-network-wired"></i>
                            <span>My Networks</span>
                        </a>
                        <ul id="network" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Connected</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Recommended</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Invitation</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-hands-helping"></i>
                            <span>Donors</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-comments"></i>
                            <span>Chat</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#notify" aria-expanded="false" aria-controls="notify">
                            <i class="fas fa-bell"></i> <span>Notifications</span>
                        </a>
                        <ul id="notify" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Notifications Setting</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </aside>
            <div class="main">
                <main class="content">
                    <div class="container-fluid">
                        <div class="mb-3">
                            <h3 class="fm-bold fs-4 mb-3">Dashboard</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quo sapiente nam nobis error cupiditate sequi praesentium et laudantium eveniet, vero alias dolorum necessitatibus, dolores consequuntur facere id quas! Suscipit.</p>
                            <!-- Main content goes here -->
                        </div>
                        <div class="mb-3">
                            <h3 class="fm-bold fs-4 mb-3">Dashboard</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quo sapiente nam nobis error cupiditate sequi praesentium et laudantium eveniet, vero alias dolorum necessitatibus, dolores consequuntur facere id quas! Suscipit.</p>
                            <!-- Main content goes here -->
                        </div>
                        <div class="mb-3">
                            <h3 class="fm-bold fs-4 mb-3">Dashboard</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quo sapiente nam nobis error cupiditate sequi praesentium et laudantium eveniet, vero alias dolorum necessitatibus, dolores consequuntur facere id quas! Suscipit.</p>
                            <!-- Main content goes here -->
                        </div>
                        <div class="mb-3">
                            <h3 class="fm-bold fs-4 mb-3">Dashboard</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quo sapiente nam nobis error cupiditate sequi praesentium et laudantium eveniet, vero alias dolorum necessitatibus, dolores consequuntur facere id quas! Suscipit.</p>
                            <!-- Main content goes here -->
                        </div>
                        <div class="mb-3">
                            <h3 class="fm-bold fs-4 mb-3">Dashboard</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quo sapiente nam nobis error cupiditate sequi praesentium et laudantium eveniet, vero alias dolorum necessitatibus, dolores consequuntur facere id quas! Suscipit.</p>
                            <!-- Main content goes here -->
                        </div>
                        <div class="mb-3">
                            <h3 class="fm-bold fs-4 mb-3">Dashboard</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quo sapiente nam nobis error cupiditate sequi praesentium et laudantium eveniet, vero alias dolorum necessitatibus, dolores consequuntur facere id quas! Suscipit.</p>
                            <!-- Main content goes here -->
                        </div>
                        <div class="mb-3">
                            <h3 class="fm-bold fs-4 mb-3">Dashboard</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quo sapiente nam nobis error cupiditate sequi praesentium et laudantium eveniet, vero alias dolorum necessitatibus, dolores consequuntur facere id quas! Suscipit.</p>
                            <!-- Main content goes here -->
                        </div>

                        <div class="mb-3">
                            <h3 class="fm-bold fs-4 mb-3">Dashboard</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quo sapiente nam nobis error cupiditate sequi praesentium et laudantium eveniet, vero alias dolorum necessitatibus, dolores consequuntur facere id quas! Suscipit.</p>
                            <!-- Main content goes here -->
                        </div>
                        <div class="mb-3">
                            <h3 class="fm-bold fs-4 mb-3">Dashboard</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quo sapiente nam nobis error cupiditate sequi praesentium et laudantium eveniet, vero alias dolorum necessitatibus, dolores consequuntur facere id quas! Suscipit.</p>
                            <!-- Main content goes here -->
                        </div>
                        <div class="mb-3">
                            <h3 class="fm-bold fs-4 mb-3">Dashboard</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quo sapiente nam nobis error cupiditate sequi praesentium et laudantium eveniet, vero alias dolorum necessitatibus, dolores consequuntur facere id quas! Suscipit.</p>
                            <!-- Main content goes here -->
                        </div>
                        <div class="mb-3">
                            <h3 class="fm-bold fs-4 mb-3">Dashboard</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quo sapiente nam nobis error cupiditate sequi praesentium et laudantium eveniet, vero alias dolorum necessitatibus, dolores consequuntur facere id quas! Suscipit.</p>
                            <!-- Main content goes here -->
                        </div>
                    </div>
                </main>
            </div>
        </div>