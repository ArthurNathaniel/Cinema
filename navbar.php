<div class="navbar-all">
    <a href="index.php">
        <div class="logo">
<h1>LOGO </h1>
        </div>
    </a>
    <div class="nav-items">
        <div class="nav-links">
           <a href="index.php">Home</a>
           <a href="about.php">About Us</a>
           <a href="events.php">Events</a>
           <!-- <a href="">Tickets</a> -->
           <a href="gallery.php">Gallery</a>
           <a href="contact.php">Contact Us</a>
        </div>
        <div class="nav-btns">
            <button><a href="login.php">Admin Login</a></button>
        </div>
    </div>
    <button id="toggleButton">
        <i class="fa-solid fa-bars"></i>
    </button>
</div>

<script>
    const toggleButton = document.getElementById("toggleButton");
    const navItems = document.querySelector(".nav-items");

    toggleButton.addEventListener("click", () => {
        // Toggle the 'show-flex' class on the nav-items element
        navItems.classList.toggle("show-flex");
    });
</script>