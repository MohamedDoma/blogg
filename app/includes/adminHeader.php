<style>
    .bn{
        margin: 9px;
        float: right;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        margin-right: 1em;
    }
</style>

<header>
<a href="<?php echo BASE_URL . '/index.php' ?>">
     <img src="assets/dirar2.png" alt="" class="bn">
     </a>

    <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
        <h1 class="logo-text"><span>ضرار </span>حجازي</h1>
    </a>
    
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <?php if (isset($_SESSION['username'])): ?>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                        <?php echo $_SESSION['username'] ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">تسجيل الخروج</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</header>