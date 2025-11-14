<?php
// Set the session save path, consistent with other examples
session_start();

// Define the name and values
$variableName = "myAppVar";
$cookieValue = "This is the COOKIE value";
$sessionValue = "This is the SESSION value";

// 1. Set the cookie
// Giá trị này sẽ chỉ có sẵn trong mảng $_COOKIE sau khi tải lại trang.
// Nó được gửi đến trình duyệt ngay lập tức.
setcookie($variableName, $cookieValue, time() + 3600, "/"); // Hết hạn sau 1 giờ

// 2. Set the session variable
// Giá trị này có sẵn ngay lập tức trong tập lệnh này.
$_SESSION[$variableName] = $sessionValue;

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie vs Session</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        h1 { color: #333; }
        p { margin: 10px 0; }
        strong { color: #005a9c; }
        code { background: #f4f4f4; padding: 2px 5px; border-radius: 3px; }
        .note { background: #fffbe6; border-left: 4px solid #ffeb3b; padding: 10px; }
    </style>
</head>
<body>

    <h1>So sánh Cookie và Biến Session (Cùng Tên)</h1>

    <p>Tên biến được sử dụng: <code><?php echo $variableName; ?></code></p>

    <hr>

    <h2>Giá trị hiện tại:</h2>

    <p>
        <strong>Giá trị Biến Session (<code>$_SESSION['<?php echo $variableName; ?>']</code>):</strong>
        <?php
        if (isset($_SESSION[$variableName])) {
            echo htmlspecialchars($_SESSION[$variableName]);
        } else {
            echo "<em>Biến session chưa được đặt.</em>";
        }
        ?>
    </p>

    <p>
        <strong>Giá trị Cookie (<code>$_COOKIE['<?php echo $variableName; ?>']</code>):</strong>
        <?php
        if (isset($_COOKIE[$variableName])) {
            echo htmlspecialchars($_COOKIE[$variableName]);
        } else {
            echo "<em>Cookie chưa được đặt hoặc chưa có sẵn.</em>";
        }
        ?>
    </p>

    <div class="note">
        <strong>Ghi chú:</strong>
        <ul>
            <li>Biến session (<code>$_SESSION</code>) có sẵn ngay lập tức sau khi được đặt.</li>
            <li>Cookie (<code>$_COOKIE</code>) chỉ được điền vào <strong>sau khi tải lại trang</strong>. Trình duyệt cần gửi cookie trở lại máy chủ trong yêu cầu HTTP tiếp theo.</li>
        </ul>
    </div>

    <p style="margin-top: 20px;">
        <a href="16_Cookie_vs_Session_Same_Name.php" style="padding: 10px 15px; background: #007bff; color: white; text-decoration: none; border-radius: 5px;">
            Tải lại trang này
        </a>
    </p>
    <p>Hãy thử tải lại trang để xem giá trị cookie xuất hiện.</p>

</body>
</html>