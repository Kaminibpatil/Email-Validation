<style>
    .navbar {
        width: 100%;
        background-color: rgb(205 215 222 / 50%);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        height: 100px;
        position:fixed;
        top: 0;
        left: 0;
        z-index: 1000;
    }

    nav ul li{
        display: flex;
        list-style-type: none;
        padding: 0px;
        margin-right: 10px;
    }

    .navbar-nav .icon {
        font-size: 30px;
        padding: 10px;
    }

    .navbar-nav .icon:hover {
        color: #eb5406;
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
                <a href="#"><i class="fa fa-bell icon"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-gear icon"></i></a>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Are you sure ?</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <h3 class="text-center">Do you want to logout? </h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><a href="logout.php" class='logout'>Yes</a></button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" class='logout'>No</button>
            </div>
        </div>
    </div>
</div>

