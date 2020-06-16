<?php


include './partials/header.php';
include './partials/nav.php';

include './classes/Manager.php';
$manager = new Manager();
?>

<div class="container row form-register">
    <div class="col s8 offset-s3">
        <form method="POST" action="">
            <div class="row">
                <div class="input-field col s8">
                <input type="text" name="TO-name" class="validate">
                <label class="active" for="TO-name">Nom du Tour Operator</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                <input type="text" name="TO-link" class="validate">
                <label class="active" for="TO-link">Lien du site Web</label>
                </div>
            </div>
            <!-- <div class="row">
                <div class="input-field col s8">
                    <select name="select-premium">
                        <label>Compte Premium ?</label>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="">Standard</option>
                        <option value="premium">Premium</option>
                    </select>
                </div>
            </div> -->
            <button class="btn waves-effect waves-light red right" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>

<?php
$manager->createTourOperator();
// include './partials/footer.php';