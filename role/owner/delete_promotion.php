<?php
include '../../ConnectDB.php';
session_start();

header('Content-Type: application/json');

$cus_id = $_SESSION['cus_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $discount_code = mysqli_real_escape_string($conn, $_POST['deleteDiscountCode']);

    $sql = "DELETE FROM discount WHERE discount_code = ? AND cus_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $discount_code, $cus_id);

    if ($stmt->execute()) {
        $affected_rows = $stmt->affected_rows;
        if ($affected_rows > 0) {
            echo json_encode([
                "success" => true, 
                "message" => "Promotion(s) deleted successfully",
                "deleted_count" => $affected_rows
            ]);
        } else {
            echo json_encode([
                "success" => false, 
                "message" => "No promotions found with the given discount code"
            ]);
        }
    } else {
        echo json_encode([
            "success" => false, 
            "message" => "Error deleting promotion: " . $stmt->error,
            "sql_error" => mysqli_error($conn)
        ]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
}

$conn->close();
