<?php
include 'includes/header.php';
$page = 'Contact Us';
?>
<main>


<!-- CONTACT FORM -->
<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-dark">Contact Us</h6>
                        <h1 class="mb-4">Feel Free To Contact Us</h1>
                        <form action="contactus.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating field">
                                        <input name="quote[name]" required="" type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating field">
                                        <input name="quote[email]" required="" type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating field">
                                        <input name="quote[number]" required="" type="tel" class="form-control f-field" placeholder="number" data-inputmask="'mask': '(999) 999-9999'">
                                        <label for="number">number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating field">
                                        <input name="quote[company]" required="" type="company" class="form-control" id="company" placeholder="company">
                                        <label for="company">company</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating field-msg">
                                        <textarea name="quote[message]" required="" class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                <a class="order-btn" href="#">Send</a>   
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462117.052962404!2d66.82581651692442!3d25.19345856839425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1701984986837!5m2!1sen!2s" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- CONATCT FORM -->



<style>
    .order-btn{
    padding: 10px 40px;
    border-radius: 30px;
    font-family: 'Rubik', sans-serif;
    color: #01a544;
    font-weight: 500;
    border-color: #000000;
    border: 1px solid #01a544;
    margin: 20px 0;
    background-color: #fff;
}
.order-btn:hover{
    transition: 0.5s;
    background-color: #01a544;
    color: #fff;
}
</style>












</main>
<?php
include 'includes/footer.php';
$page = 'Contact Us';
?>