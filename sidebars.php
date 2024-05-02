<style>
    a {
        text-decoration: none;
    }

    #sidebar {
        margin-top: 100px;
        left: 0px;
        width: 200px;
        position: fixed;
        height: 100%;
        /* height: calc(100%-100px); */
        display: flex;
        z-index: 900;
        background-color: rgba(0, 0, 0, 0.80);
        position: fixed;
        flex-direction: column;

    }

    .sidebar-link i {
        font-size: 1.1rem;
        margin-left: .20rem;
        padding-right: 10px;
    }

    a.sidebar-link {
        padding: .625rem 1.625rem;
        color: #fff;
        display: block;
        font-size: 1rem;
        white-space: nowrap;
        text-align: left;
        position: relative;
        border-left: 3px solid transparent;
    }

    a.sidebar-link:hover {
        background-color: rgba(255, 255, 255, .075);
        border-left: 3px solid #3b7ddd;
    }

    a.sidebar-link:focus {
        background-color: rgba(255, 255, 255, .095);
        border: 1px solid #fff;
        margin: 5px;
    }

    .sidebar-link[data-bs-toggle="collapse"]::after {
        border: solid;
        border-width: 0 .075rem .075rem 0;
        content: "";
        display: inline-block;
        padding: 2px;
        position: absolute;
        right: 2.5rem;
        top: 50%;
        transform: translateY(-50%) rotate(-135deg); 
        transition: all .2s ease-out;
    }

    .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
        transform: translateY(-50%) rotate(45deg); /* Centered the icon vertically */
        transition: all .2s ease-out;
    }
</style>
<div class="wrapper">
    <aside id="sidebar">
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
    </aside>
   
</div>