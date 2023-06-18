<?php include "components/head.php" ?>

<?php include "components/navbar.php" ?>

<!-- Ceci est ma home page -->

<div class="sign">
    <div class="form">
        <h3>Inscription :</h3>
        <input type="text" placeholder="Entrer votre nom" class="subscribe">
        <input type="text" placeholder="Entrer votre pseudo" class="subscribe">
        <input type="text" placeholder="Entrer votre email" class="subscribe">
        <input type="password" placeholder="Entrer votre mot de passe" class="subscribe">
        <input type="password" placeholder="Confirmer votre mot de passe" class="subscribe">
        <div class="check_condition">
        <input type="checkbox" name="condition" id="condition"> <label for="condition">J'accepte les <a href="#">conditions générales</a></label>
        </div>
        <button class="sign_but">S'inscrire</button>
    </div>

</div>




<?php include "components/footer.php" ?>