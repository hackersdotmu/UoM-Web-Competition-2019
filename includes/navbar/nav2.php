
<!-- Navbar -->
<nav class="ui menu">
    <div class="ui container">

        <!-- Logo -->
        <div class="logo">
            <a href="http://localhost/moPortal/includes/pages/dashboard.php"><span id="subLogo">mo&nbsp;</span>Portal</a>
        </div>

        <!-- Search field -->
        <form class="ui search icon input" id="searchForm" >
            <input class="prompt" type="text" placeholder="Search posts by sector" id="searchField">
            <i class="search icon" id="searchIcon"></i>
            <div class="results"></div>
        </form>

        <div class="ui compact mini menu" id="notif">
            <a class="item" id="in" href="../pages/inbox.php">
            <i class="icon mail"></i> INBOX
            <!-- <div class="floating ui red tiny label"></div> -->
            </a>
        </div>
            
        <!-- User Space -->
        <div class="ui pointing dropdown" id="userDrop" tabindex="0">
                <span class="text" id="user"><?php echo $_SESSION['userLoggedIn']; ?></span>
                <i class="dropdown icon"></i>
                <div class="menu" tabindex="-1">
                    <a class="item" href="http://localhost/moPortal/index.php">Log out</a>
                    <a class="item" href="includes/profile.php">Edit Profile</a>
                </div>
        </div>
    </div>
</nav>

