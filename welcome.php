

<div class="logout-button">
    <?php
    session_start();

    // Check if the user is logged in
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        // If the user is logged in, show the logout button
        echo '<a href="logout.php">Logout</a>';
    } else {
        // If the user is not logged in, redirect to the login page
        header("Location: login1.php");
        exit;
    }
    ?>
</div>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Japanese Learning</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        /* Add some basic CSS for the login/logout link */
        .login-logout {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>
<body>
    <header>
        
        <div class="logo1">
            <a href="welcome.php">
            <img src="png/logo-color.png" class="logo-image">
            </a>
         </div>
        <h1Japanese Learning</h1>
        
        <nav>
            <ul>
            

                <li class="dropdown">
                    <a href="welcome.php">Home</a>
                </li>

                <li class="dropdown">
                    <a href="#">Lessons</a>
                    <div class="dropdown-content">
                        <a href="grammer.php">Grammar</a>
                        <a href="vocab1.html">Vocabulary</a>
                        <a href="https://jlptsensei.com/jlpt-n5-kanji-list/">Kanji</a>
                        <!-- Add more lesson links as needed -->
                    </div>
                </li>

                <li class="dropdown">
                    <a href="#">Training</a>
                    <div class="dropdown-content">
                        <a href="https://jlptsensei.com/wp-content/uploads/2017/10/JLPT-N5-practice-test-grammar-section.pdf">Grammar</a>
                        <a href="http://www.coelang.tufs.ac.jp/mt/ja/vmod/v_search_detail.php?sid=1&id=898&idl=1587,898,273,851,1856,1923,200,1921,610,1411,1922,598,1634,1704,422&pnm=1&rf=1">Vocabulary</a>
                        <a href="#">Kanji</a>
                        <!-- Add more training links as needed -->
                    </div>
                </li>

                <li class="dropdown">
                    <a href="kana.html">Kana List</a>
                </li>

                <li class="dropdown">
                    <a href="#">basic</a>
                    <div class="dropdown-content">
                    <a href="#">Daily Greetings and Expressions</a>
                    <a href="jyosuushi.html">Counters and Basic Quantifiers</a>
                    <a href="#">Classroom Instructions</a>
                    </div>

                </li>
            </ul>
            
</nav>

        </nav>
    </header>
    
    <main>
        
        <div class="about-section">
            <h2>About Japanese Learning</h2>
            <p>Welcome to Japanese Learning, your ultimate resource for learning the Japanese language. Whether you're a beginner or an advanced learner, we have comprehensive lessons and training materials to help you improve your Japanese skills. Explore our grammar lessons, vocabulary exercises, kanji practice, and more. Start your Japanese learning journey with us today!</p>
        </div>
        
        <div class="image-section">
            
                 <img src="japan/7.jpg" alt="Lesson 1" class="img1">
        
                 <img src="japan/8.jpg" alt="Lesson 2">
            
                 <img src="japan/10.jpg" alt="Lesson 3">
        
        </div>
        
        <div class="cta-section">
            <h2>Ready to Start Learning Japanese?</h2>
            <a href="grammer.html">
            <button>Get Started</button>
            </a>
        </div>
        
        <div class="testimonial-section">
            <h2>What Our Students Say</h2>
            <div class="testimonial">
                <p>The Japanese Learning platform has been a game-changer for me. The lessons are well-structured and easy to follow. I'm making significant progress in my Japanese language skills. Highly recommended!</p>
                <p class="testimonial-author">- Emily S.</p>
            </div>
            <div class="testimonial">
                <p>I've tried several Japanese learning resources, but Japanese Learning stands out. The interactive exercises and comprehensive study materials have helped me become more confident in speaking Japanese.</p>
                <p class="testimonial-author">- Alex L.</p>
            </div>
        </div>
    </main>
    
    <footer>
        &copy; 2023 Japanese Learning. All rights reserved.
    </footer>

</body>
</html>
