<?php
    require_once "connect-db.php"
    if (isset($_COOKIE['idUserSave'])) {
        $idUser = $_COOKIE['idUserSave'];
        $query_user = mysqli_query($conn, "select * from `user` where `IDUser` = $idUser");
        $user
    }
?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Food Dash</title>
    <link href="https://fonts.googleapis.com/css?family=Wendy+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lexend&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/profile.css">

</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            <div class="header-block">
                <div class="logo-header">
                    <img src="FoodDush/resources/logo.svg" alt="Логотип FoodDash">
                </div>
                <nav>
                    <ul class="links-header">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="Offers">Offers</a></li>
                        <li><a href="Service">Service</a></li>
                        <li><a href="About Us">About Us</a></li>
                    </ul>
                </nav>
                <div class="button-header">
                    <a href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path
                                d="M14.3333 14.3333L21 21M8.77778 16.5556C4.48223 16.5556 1 13.0733 1 8.77778C1 4.48223 4.48223 1 8.77778 1C13.0733 1 16.5556 4.48223 16.5556 8.77778C16.5556 13.0733 13.0733 16.5556 8.77778 16.5556Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </a>
                    <a href="authorization.php" aria-label="User Profile" style="width: 50px; height: 50px;">
                        <img src="FoodDush/resources/user.svg" alt="Фото пользователя">
                    </a>
                </div>
            </div>
        </header>
        
        <!-- Profile Content -->
        <main class="profile-content">
            <!-- Profile Form -->
            <form class="profile-form">
                <h2 class="section-title">Personal data</h2>
                <div class="two-column-form">
                    <div class="form-column">
                        <div class="form-group">
                            <label class="form-label">Login</label>
                            <div class="input-container">
                                <input type="text" class="form-input" placeholder="Login">
                                <button type="button" class="edit-btn">Edit</button>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <div class="input-container">
                                <input type="email" class="form-input" placeholder="email@gmail.com" required >
                                <button type="button" class="edit-btn">Edit</button>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Phone number</label>
                            <div class="input-container">
                                <input type="" class="form-input" placeholder="+7 (___) ___-____" required >
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-column">
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <div class="input-container">
                                <input type="password" class="form-input" placeholder="Password" required>
                                <button type="button" class="edit-btn">Edit</button>
                            </div>
                        </div>
                        
                        <div class="birthday-group">
                            <div class="birthday-field">
                                <label class="form-label">Birthday Date</label>
                                <input type="date" class="birthday-input" required>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="button" class="delete-account-btn">Delete Account</button>
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
            
            <!-- Welcome Section -->
            <div class="welcome-section">
                <h2 class="welcome-message">You're welcome!</h2>
                <img class="profile-image" src="FoodDush/resources/user.svg" alt="Фото пользователя">
            </div>
        </main>
    </div>
</body>
</html>