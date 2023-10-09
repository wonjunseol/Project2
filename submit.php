<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookname = $_POST["bookname"];
    $writername = $_POST["writername"];
    // 다른 폼 필드들도 필요에 따라 처리할 수 있습니다.

    // 여기에서 폼 데이터를 처리하고 데이터베이스에 저장하는 등의 작업을 수행합니다.
    // 처리 결과를 클라이언트에게 반환할 수도 있습니다.

    // 예: 폼 데이터를 데이터베이스에 저장
    // $dbConnection = new PDO("mysql:host=localhost;dbname=mydatabase", "username", "password");
    // $sql = "INSERT INTO books (bookname, writername) VALUES (:bookname, :writername)";
    // $stmt = $dbConnection->prepare($sql);
    // $stmt->bindParam(":bookname", $bookname);
    // $stmt->bindParam(":writername", $writername);
    // $stmt->execute();

    // 처리 결과를 클라이언트에게 반환
    echo "폼 데이터가 성공적으로 제출되었습니다.";
} else {
    echo "잘못된 요청입니다.";
}
?>