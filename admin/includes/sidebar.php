<div id="layoutSidenav_nav">
                
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading"></div>
                <a class="nav-link" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Hotel Admin Dashboard
                </a>

                <a class="nav-link" href="bookingpending.php">
                    <div class="sb-nav-link-icon"><i class="far fa-calendar"></i></div>
                    Booking Pendings
                </a>

                <a class="nav-link" href="bookingcheckin.php">
                    <div class="sb-nav-link-icon"><i class="far fa-calendar-minus"></i></div>
                    Booking Check in
                </a>

                <a class="nav-link" href="bookingcheckout.php">
                    <div class="sb-nav-link-icon"><i class="far fa-calendar-check"></i></div>
                    Booking Check Out
                </a>

                <a class="nav-link" href="bookingmissed.php">
                    <div class="sb-nav-link-icon"><i class="far fa-calendar-times"></i></div>
                    Booking Missed
                </a>

                <a class="nav-link" href="bookingcancel.php">
                    <div class="sb-nav-link-icon"><i class="far fa-window-close"></i></div>
                    Booking Cancellations
                </a>

                <a class="nav-link" href="userinfo.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    User Information
                </a>

                 <a class="nav-link" href="admininfo.php">
                    <div class="sb-nav-link-icon"><i class="far fa-calendar-times"></i></div>
                    Admin Information
                </a>

                <a class="nav-link" href="blocklist.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-ban"></i></div>
                    User Block List
                </a>
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as ID Account:
                <?= $_SESSION['auth_user']['user_id'] ?>
            </div>
        </div>
    </nav>
</div>