<header>
    <div class="logo">
        <img src="../image/logo.png" width="150">
    </div>
    <div class="right">
        <div class="bx bxs-user" id="user-btn"></div>
        <div class="toggle-btn"><i class="bx bx-menu"></i></div>
    </div>
    <div class="profile-detail">
        <?php
        $select_profile = $conn->prepare("select * from seller where id=?");
        $select_profile->execute([$seller_id]);

        if ($select_profile->rowcount() > 0) {
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
            <div class="profile">
                <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" class="logo-img" width="100">
                <p><?= $fetch_profile['name']; ?></p>
                <div class="flex-btn">
                    <a href="profile.php" class="btn">profile</a>
                    <a href="../components/admin_logout.php" onclick="return confirm('logout from this website?');"
                        class="btn">logout</a>
                </div>
            </div>
            <div>
            <?php } ?>
        </div>
</header>
<div class="sidebar-container">
    <div class="sidebar">
        <?php
        $select_profile = $conn->prepare("select * from seller where id=?");
        $select_profile->execute([$seller_id]);

        if ($select_profile->rowcount() > 0) {
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
            <div class="profile">
                <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" class="logo-img" width="100">
                <p><?= $fetch_profile['name']; ?></p>
            </div>
            <div>
            <?php } ?>
            <h5>menu</h5>
            <div class="navbar">
                <ul>
                    <li><a href="dashboard.php"><i class="bx bxs-home-smile"></i>dashboard</a></li>
                    <li><a href="add_product.php"><i class="bx bxs-shopping-bags"></i>add products</a></li>
                    <li><a href="view_product.php"><i class="bx bxs-food-menu"></i>view product</a></li>
                    <li><a href="user_accounts.php"><i class="bx bxs-user-detail"></i>accounts</a></li>
                    <li><a href="../components/admin_logout.php" onclick="return confirm('logout from this website');"><i class="bx bx-log-out"></i>logout</a></li>
                </ul>
            </div>
            <h5>find us</h5>
            <div class="social-links">
                <i class="bx bx1-facebook"></i>
                <i class="bx bx1-instagram-alt"></i>
                <i class="bx bx1-linkedin"></i>
                <i class="bx bx1-twitter"></i>
                <i class="bx bx1-pinterest-alt"></i>

            </div>
        </div>
    </div>
</div>