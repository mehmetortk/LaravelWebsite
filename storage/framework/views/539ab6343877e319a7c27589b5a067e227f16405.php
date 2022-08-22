<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/user_details.css')); ?>">
</head>

<body>

    <div class="container">
        <div class="searchbar"></div>
        <div class="main">
            <div class="left">
                <div class="left-top">
                    <div class="user-section">
                        <div class="user-pic"> <img src="<?php echo e($user_details->image); ?>" alt=""> </div>
                        <div class="user-name">
                            <p><?php echo e($user_details->full_name); ?> </p>
                        </div>
                        <div class="user-role">
                            <p><?php echo e($user_details->role_id); ?></p>
                        </div>
                    </div>
                    <div class="accomplishment">
                        <div class="accomplishment-left">
                            <div class="accomplishment-logo">
                                <p>&#10004;</p>
                            </div>
                            <div class="accomplishment-details">
                                <div class="accomplishment-amounts">
                                    <p>1.2k</p>
                                </div>
                                <div class="accomplishment-role">
                                    <p>Tasks Done</p>
                                </div>
                            </div>
                        </div>
                        <div class="accomplishment-right">
                            <div class="accomplishment-logo">
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-bar-graph" viewBox="0 0 16 16">
                                        <path d="M4.5 12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1z" />
                                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                    </svg></p>
                            </div>
                            <div class="accomplishment-details">
                                <div class="accomplishment-amounts">
                                    <p> 1.4k</p>
                                </div>
                                <div class="accomplishment-role">
                                    <p>Projects Done</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-details">
                        <h2>Details</h2>
                        <hr>
                        <div class="user-info">
                            <ul>
                                <li><span>Username:</span> <span> <?php echo e($user_details->username); ?></span> </li>
                                <li><span>Email:</span> <span><?php echo e($user_details->email); ?> </span></li>
                                <li><span>Status:</span> <span><?php echo e($user_details->status); ?> </span></li>
                                <li><span>Role:</span> <span><?php echo e($user_details->role_id); ?> </span></li>
                                <li><span>Contact:</span> <span> <?php echo e($user_details->contact); ?></span></li>
                                <li><span>Languages:</span> <span> <?php echo e($user_details->language_id); ?></span></li>
                                <li><span>Country:</span> <span><?php echo e($user_details->country_id); ?> </span></li>
                            </ul>
                        </div>
                        <div class="user-buttons">
                            <a href="" class="edit-btn">
                                <div class="edit-btn-div">Edit</div>
                            </a>
                            <a href="" class="susp-btn">
                                <div class="susp-btn-div">Suspendend</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="left-bottom">

                </div>
            </div>
            <div class="right">
                <div class="right nav">

                </div>
                <div class="right top">

                </div>
                <div class="right bottom">

                </div>
            </div>
        </div>
    </div>





</body>

</html><?php /**PATH /home/mehmet/Desktop/Laravel Projects/My-Website/resources/views/user_details.blade.php ENDPATH**/ ?>