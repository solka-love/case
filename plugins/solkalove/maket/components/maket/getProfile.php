<?php
// getProfile.php

$employeeId = $_POST['employee'];
$profileData = Employee::find($employeeId);

// Проверка наличия данных профиля
if ($profileData) {
    // Преобразование модели в массив
    $profileArray = $profileData->toArray();

    // Возвращение данных в виде JSON
    header('Content-Type: application/json');
    echo json_encode(['profileData' => $profileArray]);
} else {
    // Если профиль не найден, возвращаем ошибку
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Профиль не найден']);
}
?>
