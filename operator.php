<?php
     include './classes/Review.php';
     include './classes/TourOperator.php';
     include './partials/header.php';
     include './partials/nav.php';
     $manager = new Manager();
     $tourOp = new TourOperator();
     $review = new Review();
    //  $review->getAuthor();
     
     ?>

<div class="container">
    <h4><?=ucfirst($_GET['name'])?></h4>
    <?php $tourOp->getIsPremium(); ?>

    <div class="row">
       <?php $destinationByOps = $manager->getDestinationByOperatorId();

       foreach ($destinationByOps as $destination) {?>
    
        <div class="col s12 m7">
        <h5 class="header"> <?= ucfirst($destination["location"])?> <span class="right"><?=$destination['price']?>€</span></h5>
        <div class="card horizontal">
          <div class="card-image test">
          <img src="./assets/IMG/<?=$destination['photos']?>">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
       <?php }?>
    </div>
    <div>
        
    <h5>Reviews</h5>
        <ul>
            <?= $review->getMessage() ?>
        </ul>
    </div>
    <h5>Add a review</h5>
    <div class="row">
      <form action="post" class="form-review">
        <input type="text" class="col s5" name="author" placeholder="Your name">
        <input type="text" name="message" placeholder="Your message">
        <input type="submit" value="Send">
      </form>
    </div>
</div>

<?php

include './partials/footer.php';