<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_amount = isset($_POST["total_amount"]) ? floatval($_POST["total_amount"]) : 0;
    $down_payment = isset($_POST["down_payment"]) ? floatval($_POST["down_payment"]) : 0;
    $interest_rate = isset($_POST["interest_rate"]) ? floatval($_POST["interest_rate"]) : 0;
    $loan_term = isset($_POST["loan"]) ? intval($_POST["loan"]) : 0;

    $loan_amount = $total_amount - $down_payment;
    $monthly_rate = ($interest_rate / 100) / 12;
    $num_payments = $loan_term * 12;

    if ($monthly_rate > 0) {
        $monthly_payment = ($loan_amount * $monthly_rate * pow(1 + $monthly_rate, $num_payments)) / 
                           (pow(1 + $monthly_rate, $num_payments) - 1);
    } else {
        $monthly_payment = $loan_amount / $num_payments;
    }

    // Format result in Indian Rupees
    $formatted_payment = number_format($monthly_payment, 2, '.', ',');

    echo json_encode(["status" => "success", "payment" => $formatted_payment]);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}
?>
