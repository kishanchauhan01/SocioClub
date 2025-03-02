<?php include_once "../header.php" ?>

<link rel="stylesheet" href="../../../public/css/userProfile.css" />
</head>

<body class="overflow-y-hidden">
    <div class="hero vh-100 vw-100 bg-black">
        <div class="row w-100 h-100">
            <?php include_once "leftNavbar.php" ?>

            <div class="col-md-10 col-12 p-0 h-100">
                <div class="banner h-25">
                    <div class="banner-img h-100">
                        <img src="../../../public/images/homess/banner-bg.jpg" alt="" class="w-100 h-100">
                    </div>
                    <div class="profile-picture">
                        <img src="../../../public/images/homess/user1.jpg" alt="" class="" style="width: 100px; height: 100px; border-radius: 50%; margin-top: -60px; margin-left: 50px;">
                    </div>

                </div>
                <div class="user-info h-25">
                    <div class="usernames h-75 d-flex flex-column justify-content-end gap-1">
                        <div class="d-md-flex justify-content-md-between w-md-100">
                            <h3 class="text-white fs-3 fw-bold w-md-50">Kishan Chauhan</h3>
                            <div class="d-md-flex justify-content-md-start w-md-50 text-white-50 flex-md-wrap">
                                <p><b><i>"Each dream you leave behind is a part of your future that will <span class="text-warning"> no longer </span>exist."</i></b></p>
                            </div>
                        </div>
                        <p class="text-white-50">kishan007</p>


                    </div>
                    <div class="follwers-followings h-25 text-white">
                        <ul class="h-100 d-flex w-75 justify-content-around align-items-end pb-2">
                            <a href="#all-posts">
                                <li>2 posts</li>
                            </a>
                            <a href="./followers.php">
                                <li>45 follwers</li>
                            </a>
                            <a href="./followers.php">
                                <li>58 following</li>
                            </a>
                        </ul>

                    </div>

                </div>
                <div class="posts h-50 overflow-y-scroll" id="all-posts">
                    <div class="creat-posts h-25 d-flex justify-content-center align-items-center gap-2">
                        <a href="../create_post/" class="btn btn-outline-secondary h-50">+ Create Post</a>
                        <a class="btn btn-outline-secondary h-50">+ Add Thought</a>
                    </div>
                    <div class="post-img h-75">
                        <div class="row h-100 w-100">
                            <div class="col-4">
                                <img src="../../../public/images/homess/post1.jpg" alt="" class="w-100">
                            </div>
                            <div class="col-4">
                                <img src="../../../public/images/homess/post3.jpg" alt="" class="w-100">
                            </div>
                            <div class="col-4">
                                <img src="../../../public/images/homess/post3.jpg" alt="" class="w-100">
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include_once "notificationSidebar.php" ?>


</body>

</html>