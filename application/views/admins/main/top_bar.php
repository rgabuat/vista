

<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topbar-right-menu float-right mb-0">
<!-- ============================================================== -->
<!-- This is sample content -->
<!-- Replace with PHP if possible -->
<!-- If not remove this -->
<!-- ============================================================== -->
        <!--
       <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-bell noti-icon"></i>
                <span class="noti-icon-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                        <span class="float-right">
                            <a href="javascript: void(0);" class="text-dark">
                                <small>Clear All</small>
                            </a>
                        </span>Notification
                    </h5>
                </div>

                <div class="slimscroll" style="max-height: 230px;">

                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar commented on Admin
                            <small class="text-muted">1 min ago</small>
                        </p>
                    </a>

                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info">
                            <i class="mdi mdi-account-plus"></i>
                        </div>
                        <p class="notify-details">New user registered.
                            <small class="text-muted">5 hours ago</small>
                        </p>
                    </a>

                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon">
                            <img src="/assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                        <p class="notify-details">Cristina Pride</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>Hi, How are you? What about our next meeting</small>
                        </p>
                    </a>
                </div>

                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                    View All
                </a>

            </div>
        </li>
        -->
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span class="account-user-avatar">
                    <img src="<?=isset($user_obj->file_upload_path) && trim($user_obj->file_upload_path) != '' && file_exists(FCPATH.$user_obj->file_upload_path) ? '/'.$user_obj->file_upload_path : DEFAULT_PROFILE_IMAGE ?>" alt="user-image" class="rounded-circle member_avatar">
                </span>
                <!--ADMIN USER NAME HERE-->
                <span>
                    <span class="account-user-name"><?=isset($this->session->userdata['logged_in']) ? $this->session->userdata['logged_in']['user_obj']->user_name : ''?></span>
                    <!--ADMIN USER TITLE - IF POSSIBLE-->
                    <span class="account-position">Admin</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome <?=isset($this->session->userdata['logged_in']) ? $this->session->userdata['logged_in']['user_obj']->user_firstname : ''?>!</h6>
                </div>

                <a target="_blank" href="/" class="dropdown-item notify-item">
                    <i class="mdi mdi-earth"></i>
                    <span>Visit Website</span>
                </a>

                <!-- item-->
                <a href="/admin/profile_page" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle"></i>
                    <span>My Account</span>
                </a>

                <a href="/messages" class="dropdown-item notify-item">
                    <i class="mdi mdi-email"></i>
                    <span class="position-relative">Messages <?= isset($total_msg_count) && $total_msg_count > 0 ? '<span class="badge badge-pill badge-danger text-white">'.$total_msg_count.'</span>' : ''; ?></span>
                </a>

                <a href="/member-directory" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-multiple"></i>
                    <span>Directory</span>
                </a>

                <!-- item-->
                <a href="/admin/profile_setting" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-settings-variant"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <!--
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-lifebuoy"></i>
                    <span>Support</span>
                </a>
                -->

                <!-- item-->
                <!--
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-lock-outline"></i>
                    <span>Lock Screen</span>
                </a>
                -->

                <!-- item-->
                <a href="/admin/logout" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left disable-btn">
        <i class="mdi mdi-menu"></i>
    </button>
    <div class="app-search">
        <form action="/admin/search" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="sq" placeholder="Search..." value="<?= isset($_GET['sq']) ? $_GET['sq'] : "" ?>">
                <span class="mdi mdi-magnify"></span>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end Topbar -->
