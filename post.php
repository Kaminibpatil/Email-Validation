<?php
include 'assets/php/constant.php';
include 'header.php';
include 'navbar.php';
// include 'ticker.php';
include 'sidebars.php';
?>
<style>
    .main-content {
        margin-left: 200px;
        margin-top: 70px;
        margin-bottom: 50px;
        overflow: hidden;
    }

    .defaultpic {
        width: 30px;
        height: 30px;
        border-radius: 5px;
    }

    .rectangle {
        border: 1px solid black;
        border-radius: 10px;
        padding: 10px;
        margin-top: 10px;

    }

    input {
        border: none;
        outline: none;
    }
</style>
<div class="main-content">

    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="rectangle">
                    <div class="txt">
                        <img src="<?= base_url ?>/assets/images/default_pic.jpg" alt="not found image" class="defaultpic">
                        <i class="lni lni-pencil"></i>
                        <input type="text" name="" id="" placeholder="write something">
                    </div>
                    <div class="text_icons">
                        <div class="row">
                            <div class="col">
                                <i class="lni lni-image"></i>
                                <span>Photo</span>
                            </div>
                            <div class="col">
                                <i class="lni lni-video"></i>
                                <span>Video</span>
                            </div>
                            <div class="col">
                                <i class="lni lni-folder"></i>
                                <span>Document</span>
                            </div>
                            <div class="col">
                                <div class="d-inline-block" style="width: 70%;">
                                    <input type="submit" name="Share Post" id="Share Post" value="Share Post" class="btn btn-primary w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- display post  -->
                <div class="col-8">
                    <div class="post">
                        <img src="./assets/images/default_pic.jpg" alt="profile pic" width="30px" height="30px" class="rounded-circle">
                        <span>User Name</span>
                        <img src="./assets/images/bannerImg1.png" alt="" width="720px" height="300px">
                        <div class="caption">
                            This is text that is caption for above image.
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="post">
                        <img src="./assets/images/default_pic.jpg" alt="profile pic" width="30px" height="30px" class="rounded-circle">
                        <span>User Name</span>
                        <img src="./assets/images/bannerImg1.png" alt="" width="720px" height="300px">
                        <div class="caption">
                            This is text that is caption for above image.
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="post">
                        <img src="./assets/images/default_pic.jpg" alt="profile pic" width="30px" height="30px" class="rounded-circle">
                        <span>User Name</span>
                        <img src="./assets/images/bannerImg1.png" alt="" width="720px" height="300px">
                        <div class="caption">
                            This is text that is caption for above image.
                        </div>
                    </div>
                </div>
            

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>