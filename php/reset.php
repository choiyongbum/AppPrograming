<?php
// 데이터베이스 연결 설정
$host = "localhost";
$user = "korea";
$pw = "1234";
$dbname = "test";

// MySQL 데이터베이스에 연결
$conn = new mysqli($host, $user, $pw, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

// exercise, 가슴운동, 어깨운동, 하체운동, 팔운동 테이블 초기화 쿼리 실행
$success = true;
$error_message = "";

$sql = "TRUNCATE TABLE exercise";
if (!$conn->query($sql)) {
    $success = false;
    $error_message .= "exercise 테이블 초기화 실패: " . $conn->error . "<br>";
}

$sql = "TRUNCATE TABLE 가슴운동";
if (!$conn->query($sql)) {
    $success = false;
    $error_message .= "가슴운동 테이블 초기화 실패: " . $conn->error . "<br>";
}

$sql = "TRUNCATE TABLE 어깨운동";
if (!$conn->query($sql)) {
    $success = false;
    $error_message .= "어깨운동 테이블 초기화 실패: " . $conn->error . "<br>";
}

$sql = "TRUNCATE TABLE 하체운동";
if (!$conn->query($sql)) {
    $success = false;
    $error_message .= "하체운동 테이블 초기화 실패: " . $conn->error . "<br>";
}

$sql = "TRUNCATE TABLE 팔운동";
if (!$conn->query($sql)) {
    $success = false;
    $error_message .= "팔운동 테이블 초기화 실패: " . $conn->error . "<br>";
}

// 실패 시 에러 메시지 표시
if (!$success) {
    echo "<h2>초기화에 실패했습니다:</h2>";
    echo $error_message;
} else {
    // 성공 메시지 표시
    echo "<script>alert('초기화되었습니다.');</script>";
    echo "<meta http-equiv='refresh' content='0;url=success.html'>";
}

// 연결 종료
$conn->close();
?>
