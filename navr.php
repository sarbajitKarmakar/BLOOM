<div class="navRight">
    <div class="msgNot">
        <!-- notification -->
        <div class="right-options" id="notification" name="notification">
            <svg id="nott" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                    d="M12.02 2.91C8.70997 2.91 6.01997 5.6 6.01997 8.91V11.8C6.01997 12.41 5.75997 13.34 5.44997 13.86L4.29997 15.77C3.58997 16.95 4.07997 18.26 5.37997 18.7C9.68997 20.14 14.34 20.14 18.65 18.7C19.86 18.3 20.39 16.87 19.73 15.77L18.58 13.86C18.28 13.34 18.02 12.41 18.02 11.8V8.91C18.02 5.61 15.32 2.91 12.02 2.91Z"
                    stroke="#5A57FF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                <path
                    d="M13.87 3.2C12.6608 2.85559 11.3793 2.85559 10.17 3.2C10.46 2.46 11.18 1.94 12.02 1.94C12.86 1.94 13.58 2.46 13.87 3.2V3.2Z"
                    stroke="#5A57FF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M15.02 19.06C15.02 20.71 13.67 22.06 12.02 22.06C11.2 22.06 10.44 21.72 9.90002 21.18C9.33818 20.6173 9.02181 19.8552 9.02002 19.06"
                    stroke="#5A57FF" stroke-width="1.5" stroke-miterlimit="10" />
            </svg>
            <div class="form displayNone" id="notification-box">
                <h1>New notifications</h1>
                
                <div id="allCheck">
                    <form action="allcheck.php">
                    <input type="submit" name="allcheck" id="allchk" class="displayNone">
                    <label for="allchk"><i class="fa-solid fa-circle-check"></i></label>
                    </form> 
                </div>
                <?php
                $userIdddd = $_SESSION['userid'];

                $notSeenSelect = "SELECT * 
                FROM `notification_seen`
                INNER JOIN `notification`
                ON notification_seen.notification_id = notification.id
                WHERE tf = false AND seen_user_id = $userIdddd";  //MAKE THIS RIGHT ACCORDING TO USER
                
                $notSeenQuery = mysqli_query($con, $notSeenSelect);
                
                while ($notSeenArr = mysqli_fetch_array($notSeenQuery)) {
                    ?>
                    <a href="not.php?id=<?php echo $notSeenArr['patient_id'] ?>&notid=<?php echo $notSeenArr['notification_id'] ?>" class="notificationBoxes"> <?php echo $notSeenArr['massage']?> </a>
                <?php } ?>
            </div>
        </div>
        <!-- notification -->
        <!-- message -->
        <div class="right-options" id="massage">
            <svg id="msgg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M22 10.5V15.5C22 19 20 20.5 17 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H14"
                    stroke="#5A57FF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M7 9L10.13 11.5C11.16 12.32 12.85 12.32 13.88 11.5L15.06 10.56M19.5 8C20.163 8 20.7989 7.73661 21.2678 7.26777C21.7366 6.79893 22 6.16304 22 5.5C22 4.83696 21.7366 4.20107 21.2678 3.73223C20.7989 3.26339 20.163 3 19.5 3C18.837 3 18.2011 3.26339 17.7322 3.73223C17.2634 4.20107 17 4.83696 17 5.5C17 6.16304 17.2634 6.79893 17.7322 7.26777C18.2011 7.73661 18.837 8 19.5 8Z"
                    stroke="#5A57FF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
                <div class="form displayNone" id="msg-box">
                    <h1>Notifications</h1>
                    <?php
                $nottSelect = "SELECT * 
                FROM `notification`
                ORDER BY time DESC";

                $nottQuery = mysqli_query($con, $nottSelect);
                while ($nottArr = mysqli_fetch_array($nottQuery)) {
                    ?>
                    <a href="update.php?id=<?php echo $nottArr['patient_id'] ?>" class="notificationBoxes"> <?php echo $nottArr['massage']?> </a>
                <?php } ?>
                </div>
        </div>
        <!-- message -->
    </div>
    <!-- profile -->
    <div class="profile" id="profileBtn">
        <div class="profile-sym">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path
                    d="M16.1794 18.2772C16.1496 18.2772 16.1049 18.2772 16.0752 18.2772C16.0305 18.2772 15.971 18.2772 15.9263 18.2772C12.5477 18.173 10.0175 15.5386 10.0175 12.2939C10.0175 8.98973 12.7114 6.29578 16.0156 6.29578C19.3198 6.29578 22.0138 8.98973 22.0138 12.2939C21.9989 15.5535 19.4538 18.173 16.224 18.2772C16.1942 18.2772 16.1942 18.2772 16.1794 18.2772ZM16.0008 8.51345C13.917 8.51345 12.2351 10.2102 12.2351 12.279C12.2351 14.3181 13.8277 15.9702 15.8519 16.0446C15.8966 16.0298 16.0454 16.0298 16.1942 16.0446C18.1887 15.9405 19.7515 14.3032 19.7663 12.279C19.7663 10.2102 18.0845 8.51345 16.0008 8.51345Z"
                    fill="#5A57FF" />
                <path
                    d="M16.0011 32.0001C11.9974 32.0001 8.17229 30.5118 5.21043 27.8029C4.94252 27.5648 4.82345 27.2076 4.85322 26.8653C5.04671 25.0941 6.1481 23.442 7.9788 22.2215C12.4142 19.2746 19.603 19.2746 24.0234 22.2215C25.8541 23.4569 26.9555 25.0941 27.149 26.8653C27.1937 27.2225 27.0597 27.5648 26.7918 27.8029C23.83 30.5118 20.0048 32.0001 16.0011 32.0001ZM7.18996 26.5676C9.66066 28.6364 12.7714 29.7676 16.0011 29.7676C19.2309 29.7676 22.3416 28.6364 24.8123 26.5676C24.5444 25.6597 23.83 24.7815 22.7732 24.0671C19.1118 21.6262 12.9053 21.6262 9.21415 24.0671C8.15741 24.7815 7.45787 25.6597 7.18996 26.5676Z"
                    fill="#5A57FF" />
                <path
                    d="M16 32C7.17395 32 0 24.826 0 16C0 7.17395 7.17395 0 16 0C24.826 0 32 7.17395 32 16C32 24.826 24.826 32 16 32ZM16 2.23256C8.4093 2.23256 2.23256 8.4093 2.23256 16C2.23256 23.5907 8.4093 29.7674 16 29.7674C23.5907 29.7674 29.7674 23.5907 29.7674 16C29.7674 8.4093 23.5907 2.23256 16 2.23256Z"
                    fill="#5A57FF" />
            </svg>
        </div>
        <div class="dropdown">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path
                    d="M8.00003 11.2C7.53336 11.2 7.06669 11.02 6.71336 10.6667L2.36669 6.32C2.27371 6.22591 2.22156 6.09896 2.22156 5.96667C2.22156 5.83438 2.27371 5.70743 2.36669 5.61334C2.56003 5.42 2.88003 5.42 3.07336 5.61334L7.42003 9.96C7.74003 10.28 8.26003 10.28 8.58003 9.96L12.9267 5.61334C13.12 5.42 13.44 5.42 13.6334 5.61334C13.8267 5.80667 13.8267 6.12667 13.6334 6.32L9.28669 10.6667C8.93336 11.02 8.46669 11.2 8.00003 11.2Z"
                    fill="#5A57FF" />
            </svg>
        </div>
    </div>
    <!-- profile -->
    <div id="profileDiv" class="displayNone">
        <?php echo "This is ".$_SESSION['username']." ID" ?> 
            </div>
</div>
<script src='JS/notification.js'></script>

