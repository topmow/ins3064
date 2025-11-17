<?php
// Bắt đầu session để sử dụng cho Bài tập 3
session_start();

echo "<pre>"; // Dùng thẻ <pre> để output dễ đọc hơn

// --- Bài tập 1: Định nghĩa vai trò và quyền hạn ---

/**
 * $roles
 * Định nghĩa các quyền cho mỗi vai trò.
 */
$roles = [
    'admin' => ['view_user', 'create_user', 'edit_user', 'delete_user'],
    'user'  => ['view_user', 'edit_own_profile'],
    'guest' => ['view_user']
];

/**
 * $users (Thay cho $user_roles)
 * Một mảng người dùng đơn giản. Trong thực tế, cái này sẽ đến từ CSDL.
 * Mảng này gán vai trò (role) cho mỗi user_id.
 */
$users = [
    1 => ['username' => 'Alice', 'role' => 'admin'],
    2 => ['username' => 'Bob',   'role' => 'user'],
    3 => ['username' => 'Charlie', 'role' => 'guest'],
];

echo "--- Bài tập 1: Dữ liệu ---<br>";
echo "Mảng \$roles:<br>";
print_r($roles);
echo "<br>Mảng \$users:<br>";
print_r($users);
echo "<hr>";


// --- Bài tập 2: Viết hàm kiểm tra quyền (theo ID) ---

/**
 * Kiểm tra xem một user_id cụ thể có một quyền (permission) nhất định hay không.
 *
 * @param int $user_id ID của người dùng cần kiểm tra.
 * @param string $permission Quyền (dưới dạng chuỗi) cần kiểm tra.
 * @return bool True nếu có quyền, False nếu không.
 */
function hasPermission($user_id, $permission) {
    // Sử dụng 'global' để truy cập các mảng đã định nghĩa bên ngoài
    global $users, $roles;

    // 1. Kiểm tra xem người dùng có tồn tại không
    if (!isset($users[$user_id])) {
        return false;
    }

    // 2. Lấy vai trò (role) của người dùng
    $user_role = $users[$user_id]['role'];

    // 3. Kiểm tra xem vai trò đó có được định nghĩa trong $roles không
    if (!isset($roles[$user_role])) {
        return false;
    }

    // 4. Kiểm tra xem quyền (permission) có nằm trong mảng quyền của vai trò đó không
    return in_array($permission, $roles[$user_role]);
}

echo "--- Bài tập 2: Kiểm tra hasPermission() ---<br>";
echo "User 1 (admin) có quyền 'delete_user'? " . (hasPermission(1, 'delete_user') ? 'CÓ' : 'KHÔNG') . "<br>";
echo "User 2 (user) có quyền 'delete_user'? " . (hasPermission(2, 'delete_user') ? 'CÓ' : 'KHÔNG') . "<br>";
echo "User 3 (guest) có quyền 'view_user'? " . (hasPermission(3, 'view_user') ? 'CÓ' : 'KHÔNG') . "<br>";
echo "<hr>";


// --- Bài tập 3: Quản lý vai trò dựa trên Session ---

// Giả lập việc đăng nhập: Gán vai trò 'admin' vào session
$_SESSION['user_role'] = 'admin';
// Bạn có thể đổi 'admin' thành 'user' hoặc 'guest' để kiểm tra

/**
 * Kiểm tra xem người dùng *hiện tại* (đang đăng nhập) có quyền được yêu cầu hay không.
 *
 * @param string $required_permission Quyền (dưới dạng chuỗi) cần kiểm tra.
 * @return bool True nếu có quyền, False nếu không.
 */
function checkAccess($required_permission) {
    global $roles;

    // 1. Lấy vai trò từ session. Nếu không có thì mặc định là 'guest'.
    $user_role = $_SESSION['user_role'] ?? 'guest';

    // 2. Kiểm tra vai trò có tồn tại không (phòng trường hợp session bị lỗi)
    if (!isset($roles[$user_role])) {
        $user_role = 'guest';
    }

    // 3. Kiểm tra quyền
    return in_array($required_permission, $roles[$user_role]);
}

echo "--- Bài tập 3: Kiểm tra checkAccess() ---<br>";
echo "Người dùng hiện tại (Session Role: {$_SESSION['user_role']}) có thể 'view_user'? " . (checkAccess('view_user') ? 'CÓ' : 'KHÔNG') . "<br>";
echo "Người dùng hiện tại (Session Role: {$_SESSION['user_role']}) có thể 'create_user'? " . (checkAccess('create_user') ? 'CÓ' : 'KHÔNG') . "<br>";
echo "Người dùng hiện tại (Session Role: {$_SESSION['user_role']}) có thể 'edit_own_profile'? " . (checkAccess('edit_own_profile') ? 'CÓ' : 'KHÔNG') . "<br>";

echo "</pre>"; // Kết thúc thẻ <pre>
?>