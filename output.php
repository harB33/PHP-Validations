<?php 
$item_prices = [
    'fan1' => 2500,
    'fan2' => 2000,
    'fan3' => 1500,
    'gfs003' => 1750,
    'gfs006' => 1500,
    'gfs007' => 1250
];

$item_names = [
    'fan1' => 'JisuLife Handheld Fan Ultra2',
    'fan2' => 'JisuLife Handheld Fan Ultra1',
    'fan3' => 'JisuLife Handheld Fan Pro1S',
    'gfs003' => 'GOOJODOQ Foldable Portable Fan GFS003',
    'gfs006' => 'GOOJODOQ Portable Fan High Speed GFS006',
    'gfs007' => 'GOOJODOQ High Speed Mini Fan GFS007'
];

$item_images = [
    'fan1' => './ultra2-main_1.jpg',
    'fan2' => './handheldfanultra1-main_1.jpg',
    'fan3' => './pro1s-2025-main_3.jpg',
    'gfs003' => './GFS003.png',
    'gfs006' => './GFS006.png',
    'gfs007' => './GFS007.png'
];

$first_name = '';
$last_name = '';
$email = '';
$selected_items = [];
$total_amount = 0;
$errors = [];
$valid = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = trim($_POST['first_name'] ?? '');
    $last_name = trim($_POST['last_name'] ?? '');
    $email = trim($_POST['email'] ?? '');

    $selected_items = $_POST['items'] ?? [];
    if (!is_array($selected_items)) {
        $selected_items = [$selected_items];
    }

    if ($first_name === '') {
        $errors[] = 'First name is required.';
    }
    if ($last_name === '') {
        $errors[] = 'Last name is required.';
    }
    if ($email === '') {
        $errors[] = 'Email is required.';
    }
    if (empty($selected_items)) {
        $errors[] = 'Please select at least one product.';
    }

    foreach ($selected_items as $item) {
        $total_amount += $item_prices[$item] ?? 0;
    }

    $valid = empty($errors);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="main">
        <img src="./HajoLogo.png" alt="Hajo logo" class="logo">

        <div class="summary-card">
            <h1 class="section-title">Order Summary</h1>

            <?php if ($valid): ?>
                <div class="summary-row">
                    <p>Name:<?php echo htmlspecialchars($first_name . ' ' . $last_name); ?></p>
                    <p>Email:<?php echo htmlspecialchars($email); ?></p>
                    <p>Items bought:<?php echo count($selected_items); ?></p>
                    <p>Selected items:</p>
                    <div class="item-list">
                        <?php foreach ($selected_items as $item): ?>
                            <div class="selected-item">
                                <img src="<?php echo htmlspecialchars($item_images[$item] ?? ''); ?>" alt="<?php echo htmlspecialchars($item_names[$item] ?? $item); ?>" class="item-thumb">
                                <div class="item-info">
                                    <p class="item-name"><?php echo htmlspecialchars($item_names[$item] ?? $item); ?></p>
                                    <p class="item-price">₱<?php echo number_format($item_prices[$item] ?? 0); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <p class="summary-total">Total Price: ₱<?php echo number_format($total_amount); ?></p>
            <?php else: ?>
                <?php if (!empty($errors)): ?>
                    <div class="summary-row">
                        <p><strong>There were problems with your order:</strong></p>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo htmlspecialchars($error); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php else: ?>
                    <p class="summary-row">No data submitted. Please go back and complete the form.</p>
                <?php endif; ?>
            <?php endif; ?>
            <div class="back-button-container">
                <a href="input.php" class="back-button">Back to Selection</a>
            </div>
        </div>
    </div>
</body>
</html>
