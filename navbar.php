<div class="navbar-all">
    <a href="index.php">
        <div class="logo">
<h1>M.H.P</h1>
        </div>
    </a>
    <div class="nav-items">
        <div class="nav-links">
           <a href="">Home</a>
           <a href="">About Us</a>
           <a href="">Events</a>
           <a href="">Tickets</a>
           <a href="">Contact Us</a>
        </div>
        <div class="nav-btns">
            <button><a href="">Admin Login</a></button>
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