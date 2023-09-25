
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
    <script src="GrammerScript(1).js"></script>
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
    <div class="sidebar">
        <button class="sidebar-toggle" onclick="toggleSidebar()">☰</button>
        <ul class="sidebar-nav">
            <li><a href="grammer.html">Chapter 1</a></li>
            <li><a href="grammer.html">Chapter 2</a></li>
            <li><a href="grammer.html">Chapter 3</a></li>
            <li><a href="grammer.html">Chapter 4</a></li>
            <li><a href="grammer.html">Chapter 5</a></li>
            <li><a href="grammer.html">Chapter 6</a></li>
            <li><a href="grammer.html">Chapter 7</a></li>
            <li><a href="grammer.html">Chapter 8</a></li>
            <li><a href="grammer.html">Chapter 9</a></li>
            <li><a href="grammer.html">Chapter 10</a></li>
            <!-- Add more chapter links as needed -->
        </ul>
    </div>

    
    <h1 class="title"><b>第１章</b></h1>
    
    <div class="content">
        <div class="sentence-section1">
        <div class="image-section">
            <a href="vocab1.html">
            <img src="pictures for chapter 1/study_nihongo.png" alt="student">
            </a>
        </div>
        <div class="text-section">
            <h5> ⚠️ Before studying grammar, it is essential to focus on building a strong <a href="vocab1.html"> vocabulary</a>foundation.⚠️</h5>
                
        </div>
    </div>
    <div class="grammar-topic" >
        <h1>🌟 N1 <span style="color: darkred;">は</span>　N2 <span style="color: darkred;">です</span>。</h1>
       
        <p> The phrase <span style="color: darkred;">N1 は N2 です</span>is a basic sentence structure in Japanese and is commonly used to describe or state information about something or someone.
            <br>Here's an explanation of each part:<br>

            - <h2> N1 :</h2> This represents the <span style="color: darkred;"><b>first noun or subject </span></b>that you want to talk about. It can be a person, a thing, or even an abstract concept. <br>
            
            - <h2> は (wa):</h2>  This particle is used to mark the <span style="color: darkred;"><b>topic of the sentence.</span></b> It helps to indicate what you're talking about or what the sentence is focused on. <br>
            
            - <h2> N2 :</h2> This represents the <span style="color: darkred;"><b>second noun or attribute that describes the first noun.</span></b>  It can be an adjective, another noun, or any word that provides additional information about the first noun.<br>
            
            - <h2> です (desu):</h2> This is a polite copula verb in Japanese that is used to link the subject (N1) and the attribute (n2) together. It is similar to the English verb "to be" and helps to form a complete sentence.<br>
            
            <blockquote> <h4>🤩 Here are a few examples to illustrate this sentence structure:<br></h4>
                <div class="sentence-section">
                    <div class="image-section">
                        <img src="pictures for chapter 1/student.jpeg" alt="student">
                    </div>
                    <div class="text-section">
                        <h3>わたし&nbsp;<span style="color: darkred;"> は &nbsp;</span> がくせい &nbsp; <span style="color: darkred;"> です。</span></h3>
                        <p>Translation: I am a student.</p>
                        <p>Explanation: In this sentence, "わたし" is the subject or the first noun, and "がくせい" is the attribute or the second noun describing the 'I'. The sentence states that I am a student.</p>
                    </div>
                </div>

                <div class="sentence-section">
                    <div class="image-section">
                        <img src="pictures for chapter 1/doctor.png" alt="doctor">
                    </div>
                    <div class="text-section">
                        <h3>わたし&nbsp;<span style="color: darkred;"> は &nbsp;</span> いしゃ &nbsp; <span style="color: darkred;"> です。</span></h3>
                        <p>Translation: I am a doctor.</p>
                        
                    </div>
                </div>

                <div class="sentence-section">
                    <div class="image-section">
                        <img src="pictures for chapter 1/teacher.png" alt="teacher">
                    </div>
                    <div class="text-section">
                        <h3>Yeさん　&nbsp;<span style="color: darkred;"> は &nbsp;</span> きょうし &nbsp; <span style="color: darkred;"> です。</span></h3>
                        <p>Translation: Ye is a teacher.</p>
                        
                    </div>
                </div>
                
            </blockquote><br>
            <p><b>Remember that this sentence structure can be used with various nouns and attributes to describe different things or situations.</p></b>
    </div>

    <div class="grammar-topic">
        <h1>🌟 N1 <span style="color: darkred;">は</span>　N2 <span style="color: darkred;">じゃありません</span>。</h1>
       
        <p> The phrase <span style="color: darkred;">N1 は N2 じゃありません。</span>is a Japanese sentence structure used to express negation or the idea of "N1 is not N2." Here's a breakdown of each component:
            <br>Here's an explanation of each part:<br>

            - <h2> N1 :</h2> This represents the <span style="color: darkred;"><b>first noun or subject </span></b>that you want to talk about. It can be a person, a thing, or even an abstract concept. <br>
            
            - <h2> は (wa):</h2>  This particle is used to mark the <span style="color: darkred;"><b>topic of the sentence.</span></b> It helps to indicate what you're talking about or what the sentence is focused on. <br>
            
            - <h2> N2 :</h2> This represents the <span style="color: darkred;"><b>second noun or attribute that describes the first noun.</span></b>  It can be an adjective, another noun, or any word that provides additional information about the first noun.<br>
            
            - <h2> じゃありません (jya arimasen):</h2> This is a polite form of the negation verb in Japanese, equivalent to "is not" or "are not" in English.<br>
            
            <blockquote> <h4>🤩 Here are a few examples to illustrate this sentence structure:<br></h4>
                <div class="sentence-section">
                    <div class="image-section">
                        <img src="pictures for chapter 1/student.jpeg" alt="student">
                    </div>
                    <div class="text-section">
                        <h3>わたし&nbsp;<span style="color: darkred;"> は &nbsp;</span> いしゃ &nbsp; <span style="color: darkred;"> じゃありません。</span></h3>
                        <p>Translation: I am not a doctor.</p>
                        <p>Explanation: In this sentence, "わたし" is the subject or the first noun, and "いしゃ" is the attribute or the second noun describing the 'I'. The sentence states that I am not a doctor./p>
                    </div>
                </div>

                <div class="sentence-section">
                    <div class="image-section">
                        <img src="pictures for chapter 1/doctor.png" alt="doctor">
                    </div>
                    <div class="text-section">
                        <h3>わたし&nbsp;<span style="color: darkred;"> は &nbsp;</span> がくせい &nbsp; <span style="color: darkred;"> じゃありません</span></h3>
                        <p>Translation: I am a not a student.</p>
                        
                    </div>
                </div>

                <div class="sentence-section">
                    <div class="image-section">
                        <img src="pictures for chapter 1/teacher.png" alt="teacher">
                    </div>
                    <div class="text-section">
                        <h3>Yeさん　&nbsp;<span style="color: darkred;"> は &nbsp;</span> ぎんこういん &nbsp; <span style="color: darkred;"> じゃありません。</span></h3>
                        <p>Translation: Ye is a not a bank staff.</p>
                        
                    </div>
                </div>
                
            </blockquote><br>
            <p><b>Remember that this sentence structure can be used with various nouns and attributes to describe different things or situations.</p></b>
    </div>
        
        <!-- Add more grammar explanation content here -->
    
       
        <div class="sentence-section">
            <div class="image-section">
                <img src="pictures for chapter 1/yaruki.png" alt="student">
            </div>
            <div class="text-section">
                <h2>After studying vocabulary and grammar, it's time to engage in exercises and practice to reinforce your language skills.</h2>
                <p><a href="vocab1.html">第１章（vocab)</a></p>
                <p><a href="Ex.php">第１章（(Exercise)</a></p>
            </div>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
                .sectionForFancy {
                    background-color: #f5f5f5;
                    padding: 20px;
                    border-radius: 10px;
                    text-align: left;
                }

                .sectionForFancy h2 {
                    color: #333;
                    font-size: 24px;
                    margin-bottom: 20px;
                    background-color: antiquewhite;
                    text-align: left;
                }
                .seactionForFancy a {
                    color: #fff;
                    background-color: #e8b381;
                    padding: 10px 20px;
                    text-decoration: none;
                    border-radius: 5px;
                }
                .seactionForFancy a:hover {
                    background-color: #59421d;
                }
            </style>
        
        
    </div>
    
    <link rel="stylesheet" href="grammer(1).css">
    
    
</main>




<footer>
    &copy; 2023 Japanese Learning. All rights reserved.
</footer>


</body>
</html>
