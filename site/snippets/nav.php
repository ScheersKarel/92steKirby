<div class="navMobile">
  <div class="header">
    <iconify-icon style="cursor: pointer;" class="hamburger-icon" icon="ci:hamburger-lg" style="color: #053F41;"
                  width="50" height="50"></iconify-icon>
    <img src="<?= $site->navImg()->toFile()->url() ?>" alt="">
  </div>

  <div id="navbarMobile" class="">
    <a href="home"> Home</a>
    <a href="steentje">Steentje</a>
    <a href="takken"> Takken</a>
    <a href="contact"> Contact</a>
    <a href="info"> Info</a>
    <a href="wontolla"> Wontolla</a>
    <a href="scoutsorama"> Scoutsorama</a>
    <a href="inschrijven" id="CTA"> Schrijf je in!</a>
  </div>

</div>

<div class="navDesctop">
  <div class="header">
    <img src="<?= $site->navImg()->toFile()->url() ?>" alt="">
  </div>

  <div id="navbar" class="">
    <a href="./home"> Home</a>
    <a href="steentje">Steentje</a>
    <div class="dropdown" id="dropdownButton">
      <a href="#" class="dropbtn">Takken
        <iconify-icon icon="gridicons:dropdown" style="color: #10587b; " width="20" height="20"></iconify-icon>
      </a>
      <div class="dropdown-content">
        <a href="paloebies">Paloebies</a>
        <a href="wolven">Wolven</a>
        <a href="poemas">Poema's</a>
        <a href="jvpvs">JvPv's</a>
        <a href="kevins">Kevins</a>
        <a href="jins">Jins</a>
      </div>
    </div>
    <a href="contact"> Contact</a>
    <a href="info"> Info</a>
    <a href="wontolla"> Wontolla</a>

    <div class="dropdown" id="dropdownButton1">
      <a href="#" class="dropbtn">Scoutsorama
        <iconify-icon icon="gridicons:dropdown" style="color: #10587b; "></iconify-icon>
      </a>
      <div class="dropdown-content1">
        <a href="scoutsorama">Scoutsorama 2025</a>
        <a href="kippenfestijn">Kippenfestijn</a>
        <a href="helpendeHanden">Helpende handen</a>
        <a href="sponsors">Sponsors</a>
        <a href="programma">Programma</a>
      </div>
    </div>

    <a href="inschrijven" id="CTA"> Schrijf je in!</a>
  </div>
</div>