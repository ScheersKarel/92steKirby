<div class="navMobile">
    <div class="header">
        <iconify-icon style="cursor: pointer;" class="hamburger-icon" icon="ci:hamburger-lg" style="color: #053F41;" width="50" height="50"></iconify-icon>
        <img src="<?= $site->navImg()->toFile()->url() ?>./resources/images/navImgMobile.png" alt="">
    </div>

    <div id="navbarMobile" class="">
        <a href="./home.php"> Home</a>
        <a href="./steentje.php">Steentje</a>
        <a href="./takken.php"> Takken</a>
        <a href="./contact.php"> Contact</a>
        <a href="./info.php"> Info</a>
        <a href="./wontolla.php"> Wontolla</a>
        <a href="./inschrijven.php" id="CTA"> Schrijf je in!</a>
    </div>
</div>

<div class="navDesctop">
    <div class="header">
        <img src="./resources/images/navImgMobile.png" alt="">
    </div>

    <div id="navbar" class="">
        <a href="./home.php"> Home</a>
        <a href="./steentje.php">Steentje</a>
        <div class="dropdown" id="dropdownButton">
            <a href="#" class="dropbtn">Takken <iconify-icon icon="gridicons:dropdown" style="color: #10587b; " width="20" height="20"></iconify-icon></a>
            <div class="dropdown-content">
                <a href="">Paloebies</a>
                <a href="">Wolven</a>
                <a href="./poemas.php">Poema's</a>
                <a href="#">JvPv's</a>
                <a href="#">Kevins</a>
                <a href="#">Jins</a>
            </div>
        </div>
        <a href="./contact.php"> Contact</a>
        <a href="./info.php"> Info</a>
        <a href="./wontolla.php"> Wontolla</a>
        <a href="./inschrijven.php" id="CTA"> Schrijf je in!</a>
    </div>
</div>