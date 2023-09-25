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
<html>
<head>
    <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Japanese Learning</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="ExProgress.css">
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
    
    <meta charset="UTF-8">
    <title> Multiple Choice Questions </title>
    <style>
        /* CSS styles for the quiz */
    .title{
        text-align : center;
    }
        
        .quiz-container {
            max-width: 500px;
            margin-top: 0;
            text-align: left;
        }

        .quiz-container h1 {
            max-width: 500px;
            margin-top: 20px;
        
            text-align: left;
            
        }

        .question {
            margin-bottom: 10px;
        }
        
        .options label {
            display: block;
            margin-bottom: 5px;
        }
        
        .submit-btn {
            margin-top: 10px;
        }
        
        
        </style>
        
</head>
<body>
    
    <div class="progress-container">
        <div class="progress-bar" id="progress"></div>
    </div>
<div class="container">
    <div class="timer-container">
        <span id="timer">Time left: <span id="time-remaining"></span></span>
    </div>
    <div class="quiz-container">
        
    <h1>　第１課の練習(文法）　</h1>
    
    <form action="ExQuiz.php" method="post" onsubmit="return validateForm()"> <!-- Add onsubmit attribute here -->
            <div class="question">
                <p>Question 1 : I am a student. </p>
                <div class="options">
                    <label><input type="radio" name="q1" value="a">a) わたし　わ　いしゃ　です。</label>
                    <label><input type="radio" name="q1" value="b">b) わたし　は　がくせい　です。</label>
                    <label><input type="radio" name="q1" value="c">c) わたし　がくせい　は　です。</label>
                </div>
            </div>
            
            <div class="question">
                <p>Question 2: I am not a teacher.</p>
                <div class="options">
                    <label><input type="radio" name="q2" value="a">a) いしゃ　は　わたし　じゃありません。</label>
                    <label><input type="radio" name="q2" value="b">b) わたし　じゃありません　いしゃ　です。</label>
                    <label><input type="radio" name="q2" value="c">c) わたし　は　せんせい　じゃありません。</label>
                </div>
            </div>

            <div class="question">
                <p>Question 3: I am not a teacher.</p>
                <div class="options">
                    <label><input type="radio" name="q3" value="a">a) いしゃ　は　わたし　じゃありません。</label>
                    <label><input type="radio" name="q3" value="b">b) わたし　じゃありません　いしゃ　です。</label>
                    <label><input type="radio" name="q3" value="c">c) わたし　は　せんせい　じゃありません。</label>
                </div>
            </div>
            
            <div id="scoreDisplay"></div>

            <!-- Add more questions and options as needed -->
            
            <input class="submit-btn" type="submit" value="Submit">
        </form>
    </div> 
 </div>
<script>
    
    const form = document.querySelector('form');

// Function to update the progress bar
function updateProgressBar() {
    const totalQuestions = document.querySelectorAll('.question').length;
    const answeredQuestions = document.querySelectorAll('input[name^="q"]:checked').length;
    const percentage = (answeredQuestions / totalQuestions) * 100;

    // Update the width of the progress bar
    const progressBar = document.getElementById('progress');
    progressBar.style.width = percentage + '%';
}

// Add an event listener to all radio buttons for question changes
const radioButtons = document.querySelectorAll('input[type="radio"]');
radioButtons.forEach(function (radio) {
    radio.addEventListener('change', updateProgressBar);
});

// Initialize the progress bar
updateProgressBar();
        


// Set the timer duration in seconds (e.g., 300 seconds for 5 minutes)
const timerDuration = 300;
let timeRemaining = timerDuration;
let timerInterval;

// Initialize the timer display
updateTimerDisplay();

// Start the timer
startTimer();

// Function to update the timer display
function updateTimerDisplay() {
    const minutes = Math.floor(timeRemaining / 60);
    const seconds = timeRemaining % 60;
    document.getElementById('time-remaining').textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
}


// Function to start the timer
function startTimer() {
    updateTimerDisplay();
    timerInterval = setInterval(function () {
        timeRemaining--;
        if (timeRemaining <= 0) {
            clearInterval(timerInterval);
            alert('Time is up!'); // You can customize this action when the timer expires
        } else {
            updateTimerDisplay();
        }
    }, 1000);
}



// Function to stop the timer
function stopTimer() {
    clearInterval(timerInterval);
}

// Initialize the progress bar and start the timer
updateProgressBar();




</script>

</body>
</html>
