<?php
include '../../ConnectDB.php';
session_start();

header('Content-Type: application/json');

$cus_id = $_SESSION['cus_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $discount_code = mysqli_real_escape_string($conn, $_POST['discountCode']);
    $discount_value = mysqli_real_escape_string($conn, $_POST['discountValue']);

    $image_url = null;
    if (isset($_FILES['promotionImage']) && $_FILES['promotionImage']['error'] == 0) {
        $target_dir = "../../img/";
        $file_extension = pathinfo($_FILES["promotionImage"]["name"], PATHINFO_EXTENSION);
        $new_filename = uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_filename;
        
        $check = getimagesize($_FILES["promotionImage"]["tmp_name"]);
        if($check !== false) {
            if (move_uploaded_file($_FILES["promotionImage"]["tmp_name"], $target_file)) {
                $image_url = "img/" . $new_filename;
            } else {
                echo json_encode(["success" => false, "message" => "Failed to move uploaded file"]);
                exit;
            }
        } else {
            echo json_encode(["success" => false, "message" => "File is not an image"]);
            exit;
        }
    }

    $sql = "INSERT INTO discount (discount_code, cus_id, discount_value, image_url) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sids", $discount_code, $cus_id, $discount_value, $image_url);

    if ($stmt->execute()) {
        echo json_encode([
            "success" => true, 
            "message" => "Promotion added successfully",
            "data" => [
                "discount_code" => $discount_code,
                "cus_id" => $cus_id,
                "discount_value" => $discount_value,
                "image_url" => $image_url
            ]
        ]);
    } else {
        echo json_encode([
            "success" => false, 
            "message" => "Error adding promotion: " . $stmt->error,
            "sql_error" => mysqli_error($conn)
        ]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
}

$conn->close();
