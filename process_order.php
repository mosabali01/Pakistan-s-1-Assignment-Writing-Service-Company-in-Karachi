<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paper_type = $_POST["paper_type"];
    $academic_level = $_POST["academic_level"];
    $topic_title = $_POST["topic_title"];
    $deadlines = $_POST["deadlines"];
    $num_of_pages = $_POST["num_of_pages"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $instructions = $_POST["instructions"];

    // Pricing based on Deadline and Academic Level
    $deadline_prices = [
        "15 Days +" => ["Undergraduate" => 600, "Masters" => 700, "Mphil / Ph.D" => 800],
        "10 Days" => ["Undergraduate" => 700, "Masters" => 800, "Mphil / Ph.D" => 900],
        "7 Days" => ["Undergraduate" => 800, "Masters" => 900, "Mphil / Ph.D" => 1000],
        "6 Days" => ["Undergraduate" => 1100, "Masters" => 1100, "Mphil / Ph.D" => 1200],
        "5 Days" => ["Undergraduate" => 1200, "Masters" => 1300, "Mphil / Ph.D" => 1400],
        "4 Days" => ["Undergraduate" => 1300, "Masters" => 1400, "Mphil / Ph.D" => 1500],
        "3 Days" => ["Undergraduate" => 1500, "Masters" => 1600, "Mphil / Ph.D" => 1700],
        "48 Hours" => ["Undergraduate" => 1700, "Masters" => 1800, "Mphil / Ph.D" => 1900],
        "24 Hours" => ["Undergraduate" => 1900, "Masters" => 2000, "Mphil / Ph.D" => 2100],
        "12 Hours" => ["Undergraduate" => 2100, "Masters" => 2200, "Mphil / Ph.D" => 2300],
        "6 Hours" => ["Undergraduate" => 2300, "Masters" => 2400, "Mphil / Ph.D" => 2500],
    ];

    $total_price = $deadline_prices[$deadlines][$academic_level];

    // Send order details to customer
    $customer_subject = "Order Confirmation";
    $customer_message = "<html>
                            <head>
                                <style>
                                    body {
                                        background-color: #01a54445; /* Green background color */
                                        font-family: 'Arial', sans-serif;
                                        color: #000000; /* Black font color */
                                        margin: 0;
                                    }
                                    .header img {
                                        max-width: 100%;
                                    }
                                    .header {
                                        background-color: #01a54445; /* Dark green header background color */
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .header h1 {
                                        margin: 0;
                                        color: #111312; /* black font color */
                                    }
                                    .content {
                                        padding: 20px;
                                    }
                                    table {
                                        width: 100%;
                                        border-collapse: collapse;
                                        margin-bottom: 20px;
                                    }
                                    th, td {
                                        border: 1px solid #01a544; /* Green border color for table grid lines */
                                        text-align: left;
                                        padding: 8px;
                                    }
                                    .important-note {
                                        color: #000000; /* Black font color for important note */
                                        padding: 20px;
                                    }
                                    .footer img {
                                        max-width: 100%;
                                    }
                                    .footer {
                                        background-color: #01a54445; /* Dark green footer background color */
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .footer p {
                                        margin: 0;
                                        color: #ffffff; /* White font color for footer text */
                                    }
                                    .social-icons {
                                        display: flex;
                                        justify-content: center;
                                        margin-top: 10px;
                                    }
                                    .social-icons a {
                                        margin: 0 5px;
                                        text-decoration: none;
                                    }
                                    .social-icons img {
                                        width: 30px; /* Adjust the size as needed */
                                    }
                                </style>
                            </head>
                            <body>
                                <div class='header'>
                                <h1>Order Confirmation</h1>
                                    <img src='https://assignmenthelppakistan.pk/AssignmentPakistan/images/Email-Messages-for-Order-Confirmation-Page-v3.webp' alt='Company Poster'>                                    
                                </div>
                                <div class='content'>
                                    <p>Dear <strong style='color: #01a544;'>$name</strong>,</p>
                                    <p>Thank you for placing your order with us. We appreciate your business. Below are the details of your order:</p>
                                    <table>
                                        <tr>
                                            <th>Field</th>
                                            <th>Details</th>
                                        </tr>
                                        <tr>
                                            <td><strong>Paper Type:</strong></td>
                                            <td>$paper_type</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Academic Level:</strong></td>
                                            <td>$academic_level</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Topic / Title:</strong></td>
                                            <td>$topic_title</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Deadlines:</strong></td>
                                            <td>$deadlines</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Number of Pages:</strong></td>
                                            <td>$num_of_pages</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Name:</strong></td>
                                            <td>$name</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email:</strong></td>
                                            <td>$email</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Phone:</strong></td>
                                            <td>$phone</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Instructions:</strong></td>
                                            <td>$instructions</td>
                                        </tr>
                                        <tr>
                                        <td><strong>Total Price:</strong></td>
                                        <td>$total_price PKR</td>
                                    </tr>
                                    </table>
                                    <div class='important-note'>
                                        <p><strong>Important Note:</strong> Your privacy is important to us. Please review our <a href='#' style='color: #01a544;'>Privacy Policy</a> for more information.</p>
                                    </div>
                                   
                                </div>
                                <div class='footer'>
                                    <img src='https://assignmenthelppakistan.pk/AssignmentPakistan/images/logo-tp.png' alt='Company Logo' width='100px'>
                                    <p style='color: #111312;'>For any assistance, contact us on WhatsApp: <strong><a href='https://wa.me/03313999517' style='color: #01a544;' target='_blank'>03313999517</a></strong></p>
                                    <div class='social-icons'>
                                        <a href='#' target='_blank'><img src='https://assignmenthelppakistan.pk/AssignmentPakistan/images/fb.png' alt='Facebook'></a>
                                        <a href='#' target='_blank'><img src='https://assignmenthelppakistan.pk/AssignmentPakistan/images/twi.png' alt='Twitter'></a>
                                        <a href='#' target='_blank'><img src='https://assignmenthelppakistan.pk/AssignmentPakistan/images/insta.png' alt='Instagram'></a>
                                    </div>
                                </div>
                            </body>
                        </html>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($email, $customer_subject, $customer_message, $headers);

    // Send order details to admin
    $admin_email = "info@assignmenthelppakistan.pk";
    $admin_subject = "New Order Received";
    $admin_message = "<html>
                            <head>
                                <style>
                                    body {
                                        background-color: #01a54445; /* Green background color */
                                        font-family: 'Arial', sans-serif;
                                        color: #000000; /* Black font color */
                                        margin: 0;
                                    }
                                    .header img {
                                        max-width: 100%;
                                    }
                                    .header {
                                        background-color: #01a54445; /* Dark green header background color */
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .header h1 {
                                        margin: 0;
                                        color: #111312; /* black font color */
                                    }
                                    .content {
                                        padding: 20px;
                                    }
                                    table {
                                        width: 100%;
                                        border-collapse: collapse;
                                        margin-bottom: 20px;
                                    }
                                    th, td {
                                        border: 1px solid #01a544; /* Green border color for table grid lines */
                                        text-align: left;
                                        padding: 8px;
                                    }
                                    .important-note {
                                        color: #000000; /* Black font color for important note */
                                        padding: 20px;
                                    }
                                    .footer img {
                                        max-width: 100%;
                                    }
                                    .footer {
                                        background-color: #01a54445; /* Dark green footer background color */
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .footer p {
                                        margin: 0;
                                        color: #ffffff; /* White font color for footer text */
                                    }
                                    .social-icons {
                                        display: flex;
                                        justify-content: center;
                                        margin-top: 10px;
                                    }
                                    .social-icons a {
                                        margin: 0 5px;
                                        text-decoration: none;
                                    }
                                    .social-icons img {
                                        width: 30px; /* Adjust the size as needed */
                                    }
                                </style>
                            </head>
                            <body>
                                <div class='header'>
                                <h1>New Order Received</h1>
                                    <img src='https://assignmenthelppakistan.pk/AssignmentPakistan/images/Email-Messages-for-Order-Confirmation-Page-v3.webp' alt='Company Poster'>                                   
                                </div>
                                <div class='content'>
                                    <p>A new order has been received. Below are the details:</p>
                                    <table>
                                        <tr>
                                            <td><strong>Paper Type:</strong></td>
                                            <td>$paper_type</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Academic Level:</strong></td>
                                            <td>$academic_level</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Topic / Title:</strong></td>
                                            <td>$topic_title</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Deadlines:</strong></td>
                                            <td>$deadlines</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Number of Pages:</strong></td>
                                            <td>$num_of_pages</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Name:</strong></td>
                                            <td>$name</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email:</strong></td>
                                            <td>$email</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Phone:</strong></td>
                                            <td>$phone</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Instructions:</strong></td>
                                            <td>$instructions</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Total Price:</strong></td>
                                            <td>$total_price PKR</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class='footer'>
                                    <img src='https://assignmenthelppakistan.pk/AssignmentPakistan/images/logo-tp.png' alt='Company Logo' width='100px'>
                                    <p style='color: #111312;'>For any assistance, contact us on WhatsApp: <strong><a href='https://wa.me/03313999517' style='color: #01a544;' target='_blank'>03313999517</a></strong></p>
                                </div>
                            </body>
                        </html>";

    mail($admin_email, $admin_subject, $admin_message, $headers);

    // Redirect to a thank you page or display a success message
    header("Location: thanks.php");
    exit;
}
?>