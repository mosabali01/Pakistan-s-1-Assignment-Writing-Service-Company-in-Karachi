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

    // Send order details to customer
    $customer_subject = "Order Confirmation";
    $customer_message = "<html>
                            <head>
                                <style>
                                    body {
                                        background-color: #4CAF50; /* Green background color */
                                        font-family: 'Arial', sans-serif;
                                        color: #FFFFFF; /* White font color */
                                        margin: 0;
                                    }
                                    .header img {
                                        max-width: 100%;
                                    }
                                    .header {
                                        background-color: #367e39; /* Dark green header background color */
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .header h1 {
                                        margin: 0;
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
                                        border: 1px solid #dddddd;
                                        text-align: left;
                                        padding: 8px;
                                    }
                                    .important-note {
                                        background-color: #267027; /* Dark green important note background color */
                                        padding: 20px;
                                        color: #FFFFFF; /* White font color for important note */
                                    }
                                    .footer img {
                                        max-width: 100%;
                                    }
                                    .footer {
                                        background-color: #267027; /* Dark green footer background color */
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .footer p {
                                        margin: 0;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class='header'>
                                    <img src='images/webp-folder/banner-main-img.png' alt='Company Poster'>
                                    <h1>Order Confirmation</h1>
                                </div>
                                <div class='content'>
                                    <p>Dear $name,</p>
                                    <p>Thank you for placing your order with us. We appreciate your business. Below are the details of your order:</p>
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
                                    </table>
                                    <div class='important-note'>
                                        <p><strong>Important Note:</strong> Your privacy is important to us. Please review our <a href='#' style='color: #FFFFFF;'>Privacy Policy</a> for more information.</p>
                                    </div>
                                </div>
                                <div class='footer'>
                                    <img src='company_logo.jpg' alt='Company Logo'>
                                    <p>For any assistance, contact us on WhatsApp: <strong>+1234567890</strong></p>
                                    <p>Follow us on social media: <a href='#' style='color: #FFFFFF;'>Facebook</a>, <a href='#' style='color: #FFFFFF;'>Twitter</a>, <a href='#' style='color: #FFFFFF;'>Instagram</a></p>
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
                                        background-color: #4CAF50; /* Green background color */
                                        font-family: 'Arial', sans-serif;
                                        color: #FFFFFF; /* White font color */
                                        margin: 0;
                                    }
                                    .header img {
                                        max-width: 100%;
                                    }
                                    .header {
                                        background-color: #367e39; /* Dark green header background color */
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .header h1 {
                                        margin: 0;
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
                                        border: 1px solid #dddddd;
                                        text-align: left;
                                        padding: 8px;
                                    }
                                    .important-note {
                                        background-color: #267027; /* Dark green important note background color */
                                        padding: 20px;
                                        color: #FFFFFF; /* White font color for important note */
                                    }
                                    .footer img {
                                        max-width: 100%;
                                    }
                                    .footer {
                                        background-color: #267027; /* Dark green footer background color */
                                        padding: 20px;
                                        text-align: center;
                                    }
                                    .footer p {
                                        margin: 0;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class='header'>
                                    <img src='company_poster.jpg' alt='Company Poster'>
                                    <h1>New Order Received</h1>
                                </div>
                                <div class='content'>
                                    <p>A new order has been received! Below are the details:</p>
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
                                    </table>
                                </div>
                                <div class='footer'>
                                    <img src='company_logo.jpg' alt='Company Logo'>
                                    <p>For any assistance, contact us on WhatsApp: <strong>+1234567890</strong></p>
                                    <p>Follow us on social media: <a href='#' style='color: #FFFFFF;'>Facebook</a>, <a href='#' style='color: #FFFFFF;'>Twitter</a>, <a href='#' style='color: #FFFFFF;'>Instagram</a></p>
                                </div>
                            </body>
                        </html>";

    mail($admin_email, $admin_subject, $admin_message, $headers);

    // Redirect to a thank you page or display a success message
    header("Location: thanks.php");
    exit;
}
?>




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
    $customer_message = "..."; // Your existing customer message

    // ... (the rest of your existing code)

    // Add pricing information to the order confirmation table
    $customer_message .= "<tr>
                            <td><strong>Total Price:</strong></td>
                            <td>$total_price PKR</td>
                        </tr>";

    // ... (the rest of your existing code)

    // Redirect to a thank you page or display a success message
    header("Location: thanks.php");
    exit;
}
?>
















<form action="process_order.php" method="post">
    <h1 class="pb-3">Place Your Order</h1>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <p class="form-hed text-dark pb-1 ms-2">Paper Type <span class="text-danger">*</span></p>
            <div class="input-group mb-4">
                <select class="form-select" id="paper_type" name="paper_type">
                    <option value="Essay" selected="selected">Essay</option>
                    <option value="Term paper">Term paper</option>
                    <option value="Research paper">Research paper</option>
                </select>
            </div>

            <p class="form-hed text-dark pb-1 ms-2">Academic Level <span class="text-danger">*</span>
            </p>
            <div class="input-group mb-4">
                <select class="form-select" id="academic_level" name="academic_level">
                    <option selected>Paper Select</option>
                    <option value="Undergraduate" selected="selected">Undergraduate</option>
                    <option value="Masters">Masters</option>
                    <option value="Mphil / Ph.D">Mphil / Ph.D</option>
                </select>
            </div>
            <p class="form-hed text-dark pb-1 ms-2">Topic / Title <span class="text-danger">*</span></p>
            <div class="input-group mb-4">
                <input type="text" id="topic_title" name="topic_title" placeholder="Topic / Title" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="form-hed text-dark pb-1 ms-2">Deadlines<span class="text-danger">*</span>
                    </p>
                    <div class="input-group mb-4">
                        <select class="form-select" id="deadlines" name="deadlines">
                            <option value="15 Days +" data-deadline="dd1" selected="selected">15
                                Days +
                            </option>
                            <option value="10 Days" data-deadline="dd2">10 Days</option>
                            <option value="8 Days" data-deadline="dd3">8 Days</option>
                            <option value="6 Days" data-deadline="dd4">6 Days</option>
                            <option value="5 Days" data-deadline="dd5">5 Days</option>
                            <option value="4 Days" data-deadline="dd6">4 Days</option>
                            <option value="3 Days" data-deadline="dd7">3 Days</option>
                            <option value="48 Hours" data-deadline="dd8">48 Hours</option>
                            <option value="24 Hours" data-deadline="dd9">24 Hours</option>
                            <option value="12 Hours" data-deadline="dd10">12 Hours</option>
                            <option value="6 Hours" data-deadline="dd11">6 Hours</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <p class="form-hed text-dark pb-1 ms-2">No. Of Pages<span class="text-danger">*</span></p>
                    <div class="input-group mb-4">
                        <select class="form-select" id="num_of_pages" name="num_of_pages">
                            <option value="1 Page" data-page="1">1 Page / 250 Words</option>
                            <option value="2 Pages" data-page="2">2 Pages / 500 Words</option>
                            <option value="3 Pages" data-page="3">3 Pages / 750 Words</option>
                            <option value="4 Pages" data-page="4">4 Pages / 1000 Words</option>
                            <option value="5 Pages" data-page="5">5 Pages / 1250 Words</option>
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <p class="form-hed text-dark pb-1 ms-2">Name <span class="text-danger">*</span></p>
            <div class="input-group mb-4">
                <input type="text" placeholder="Name" class="form-control" name="name" id="name"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <p class="form-hed text-dark pb-1 ms-2">Email <span class="text-danger">*</span></p>
            <div class="input-group mb-4">
                <input type="text" placeholder="Email" class="form-control" name="email" id="email"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <p class="form-hed text-dark pb-1 ms-2">Phone <span class="text-danger">*</span></p>
            <div class="input-group mb-4">
                <input type="text" placeholder="Phone" class="form-control" name="phone" id="phone"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
    </div>
    <p class="form-hed text-dark pb-1 ms-2">Other Instructions:</p>
    <textarea class="form-control-2" rows="8" name="instructions" id="instructions" aria-label="With textarea"
        spellcheck="false"></textarea>

    <input class="btn-solid" type="submit" name="submit" value="Order Now">
</form>




<form action="process_order.php" method="post">
    <h1 class="pb-3">Place Your Order</h1>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <!-- Your existing form elements... -->

            <p class="form-hed text-dark pb-1 ms-2">Academic Level <span class="text-danger">*</span></p>
            <div class="input-group mb-4">
                <select class="form-select" id="academic_level" name="academic_level">
                    <!-- Options will be dynamically populated based on paper type selection -->
                </select>
            </div>

            <!-- Your existing form elements... -->
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <!-- Your existing form elements... -->
        </div>
    </div>
    <p class="form-hed text-dark pb-1 ms-2">Other Instructions:</p>
    <textarea class="form-control-2" rows="8" name="instructions" id="instructions" aria-label="With textarea" spellcheck="false"></textarea>

    <p>Total Price: <span id="total_price">0 PKR</span></p>

    <input class="btn-solid" type="submit" name="submit" value="Order Now">
</form>

<script>
    // Update academic level options based on paper type
    $('#paper_type').change(function () {
        var selectedPaperType = $(this).val();
        var academicLevelOptions = {
            'Essay': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
            'Term paper': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
            'Research paper': ['Undergraduate', 'Masters', 'Mphil / Ph.D']
        };

        // Clear existing options
        $('#academic_level').empty();

        // Populate academic level options
        $.each(academicLevelOptions[selectedPaperType], function (index, value) {
            $('#academic_level').append($('<option>', {
                value: value,
                text: value
            }));
        });
    });

    // Update total price based on deadlines and academic level
    $('#deadlines, #academic_level').change(function () {
        var selectedDeadline = $('#deadlines').val();
        var selectedAcademicLevel = $('#academic_level').val();
        
        // Define your price logic here...
        // For example, you can use an array or object to store prices for different deadlines and academic levels

        // Calculate total price based on the selected options
        var totalPrice = calculateTotalPrice(selectedDeadline, selectedAcademicLevel);
        
        // Update the total price span
        $('#total_price').text(totalPrice + " PKR");
    });

    // Function to calculate total price based on selected options
    function calculateTotalPrice(deadline, academicLevel) {
        // Implement your pricing logic here...
        // Use the data structure you created in the PHP code to fetch the price

        // For example:
        var prices = {
        "15 Days +": {"Undergraduate": 600, "Masters": 700, "Mphil / Ph.D": 800},
        "10 Days": {"Undergraduate": 700, "Masters": 800, "Mphil / Ph.D": 900},
        "7 Days": {"Undergraduate": 800, "Masters": 900, "Mphil / Ph.D": 1000},
        "6 Days": {"Undergraduate": 1100, "Masters": 1100, "Mphil / Ph.D": 1200},
        "5 Days": {"Undergraduate": 1200, "Masters": 1300, "Mphil / Ph.D": 1400},
        "4 Days": {"Undergraduate": 1300, "Masters": 1400, "Mphil / Ph.D": 1500},
        "3 Days": {"Undergraduate": 1500, "Masters": 1600, "Mphil / Ph.D": 1700},
        "48 Hours": {"Undergraduate": 1700, "Masters": 1800, "Mphil / Ph.D": 1900},
        "24 Hours": {"Undergraduate": 1900, "Masters": 2000, "Mphil / Ph.D": 2100},
        "12 Hours": {"Undergraduate": 2100, "Masters": 2200, "Mphil / Ph.D": 2300},
        "6 Hours": {"Undergraduate": 2300, "Masters": 2400, "Mphil / Ph.D": 2500},
    };

        return prices[deadline][academicLevel];
    }
</script>

