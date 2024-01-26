<?php

// Check form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if admin form is submitted
    if (isset($_POST['adminSubmit'])) {
        $adminUsername = $_POST['adminUsername'];
        $adminPassword = $_POST['adminPassword'];
        $productName = $_POST['productName'];
        $productImageURl = $_POST['productImageURL'];

        // Check admin credentials
        if ($adminUsername === 'admin' && $adminPassword === 'admin_password') {

            // Instantiate Admin class
            $admin = new Admin(1, $adminUsername, "admin@example.com", $adminPassword);

            // Upload
            $admin($productName, $productImageURl);
        } else {
            echo "Invalid username or password.";
        }
    }
}

// Check if customer form is submitted
else if (isset($_POST["customerSubmit"])) {
    $customerUsername = $_POST['customerSubmit'];
    $customerPassword = $_POST['customerPassword'];
    
    // Check customer credentials
    if ($customerUsername === 'customer' && $customerPassword === 'customer_password') {

        //Instantiate Customer class
        $customer = new Customer(2, $customerUsername, "customer@example.com", $customerPassword);

        // View product
        $customer->viewProduct($productId);
    } else {
        echo "Invalid username or password.";
    }
}