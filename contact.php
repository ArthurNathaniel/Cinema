<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="hero">
            <h1>Contact Us</h1>
        </div>
    </section>
    <section>
        <div class="contact-grid">
            <div class="contact-box">
                <h1>Location</h1>
                <h1><i class="fa-solid fa-location-dot"></i></h1>
                <p>Patasi</p>
            </div>
            <div class="contact-box">
                <h1>Email Address</h1>
                <h1><i class="fa-solid fa-envelope"></i></h1>
                <p>info@companyname.com</p>
            </div>
            <div class="contact-box">
                <h1>Phone Number</h1>
                <h1><i class="fa-solid fa-phone"></i> </h1>
                <p>+233 244 762 183</p>
            </div>
        </div>
    </section>
    <section>
        <div class="contact">
            <div class="contact-form">
                <div class="contact-title">
                    <h1>📬 Get in Touch with Us!</h1>
                    <p>
                        Feel free to reach out if you have any questions, suggestions, or just want to say hello. Our team is here and ready to assist you. Contact us for a seamless and enjoyable experience
                    </p>
                </div>
                <div class="forms-all">
                    <form action="">
                        <div class="forms">
                            <input type="text" name="name" placeholder="Enter your name">
                        </div>

                        <div class="forms">
                            <input type="text" name="subject" placeholder="Enter your subject">
                        </div>

                        <div class="forms">
                            <input type="text" name="number" min="0" placeholder="Enter your phone number">
                        </div>

                        <div class="forms">
                            <input type="text" name="email" placeholder="Enter your email address">
                        </div>

                        <div class="forms">
                            <textarea name="message" name="email" placeholder="Enter your message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="forms">
                            <button type="submit">Send Message <i class="fa-solid fa-location-arrow"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15851.04425758446!2d-1.6431455!3d6.6764974!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb973c19b4e93f%3A0x5da30d4e1b944e7b!2sMovie%20House%20Plaza%20Patasi!5e0!3m2!1sen!2sgh!4v1701313393523!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <section>
        <div class="newsletter">
            <h1> 📧 Subscribe to Our Newsletter for Exclusive Updates!</h1>
            <p>
                Stay in the loop with the latest movie releases, special events, and exclusive offers by subscribing to our newsletter. Join our community and be the first to know about the cinematic wonders awaiting you. Don't miss out—subscribe now for a front-row seat to all the excitement! 🍿✨
            </p>
            <div class="newsletter-forms">
                <form action="">
                    <div class="letter">
                        <input type="email" name="email" placeholder="Enter your email address" required>
                        <button type="submit">Submit <i class="fa-solid fa-arrow-trend-up"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>

</body>

</html>