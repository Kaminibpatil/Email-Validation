<style>
    .navbar {
        width: 100%;
        background-color: rgb(205 215 222 / 100%);
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* padding: 10px; */
        height: 70px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
    }

    nav ul li {
        display: flex;
        list-style-type: none;
        padding: 0px;
        margin-right: 10px;
    }

    .navbar-nav .icon {
        font-size: 25px;
        padding: 10px;
    }

    .navbar-nav .icon:hover {
        color: #eb5406;
    }

    .icon {
        font-size: 30px;
        color: black;
    }

    .modal-content {
        margin-top: 80px;
    }

    .num {
        background: #eb5406;
        border-radius: 50%;
        padding: 2px;
        color: #fff;
        vertical-align: top;
        margin-left: -25px;
    }
    
</style>


<nav class="navbar navbar-expand">
    <img src="<?= base_url ?>/assets/images/logo.png" alt="not found">
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ms-auto">
            <li>
                <a href="#"><i class="fas fa-comments icon"></i></a>
            </li>
            <li>
                <a href="#" onclick="toggleNotifi()"><i class="fa fa-bell icon"></i><span class="num">17</span></a>
            </li>
            <li>
                <a href="#" id="notify" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa fa-gear icon"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-question-circle icon"></i></a>
            </li>
            <li>
                <a href="#" id="logoutlink" data-bs-toggle="modal" data-bs-target="#logoutmodal"><i class="fas fa-sign-out-alt icon"></i></a>
            </li>
        </ul>
    </div>
</nav>

<div class="modal fade" id="logoutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 350px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Are you sure ?</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <span class="text-center">Do you want to logout? </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><a href="logout.php" class='logout'>Yes</a></button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" class='logout'>No</button>
            </div>
        </div>
    </div>
</div>

<!-- notification dialog -->
<div class="modal fade  my-50" id="notifybox" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Notifications</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include 'notify.php';?>