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
            <h1>Gallery</h1>
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