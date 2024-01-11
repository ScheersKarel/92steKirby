<div class="navMobile">
    <div class="header">
        <iconify-icon style="cursor: pointer;" class="hamburger-icon" icon="ci:hamburger-lg" style="color: #053F41;" width="50" height="50"></iconify-icon>
        <img src="<?= $site->navImg()->toFile()->url() ?>./resources/images/navImgMobile.png" alt="">
    </div>

    <div id="navbarMobile" class="">
        <a href="home"> Home</a>
        <a href="steentje">Steentje</a>
        <a href="takken"> Takken</a>
        <a href="contact"> Contact</a>
        <a href="info"> Info</a>
        <a href="wontolla"> Wontolla</a>
        <a href="inschrijven" id="CTA"> Schrijf je in!</a>
    </div>
</div>

<div class="navDesctop">
    <div class="header">
        <img src="./resources/images/navImgMobile.png" alt="">
    </div>

    <div id="navbar" class="">
        <a href="home"> Home</a>
        <a href="steentje">Steentje</a>
        <div class="dropdown" id="dropdownButton">
            <a href="#" class="dropbtn">Takken <iconify-icon icon="gridicons:dropdown" style="color: #10587b; " width="20" height="20"></iconify-icon></a>
            <div class="dropdown-content">
                <a href="takken/paloebies">Paloebies</a>
                <a href="takken/wolven">Wolven</a>
                <a href="takken/poemas">Poema's</a>
                <a href="takken/jvpvs">JvPv's</a>
                <a href="takken/kevins">Kevins</a>
                <a href="takken/jins">Jins</a>
            </div>
        </div>
        <a href="contact"> Contact</a>
        <a href="info"> Info</a>
        <a href="wontolla"> Wontolla</a>
        <a href="inschrijven" id="CTA"> Schrijf je in!</a>
    </div>
</div>