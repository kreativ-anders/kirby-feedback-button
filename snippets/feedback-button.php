<div class="fab-container">
  <div class="fab fab-icon-holder" id="feedback-plane">
    <i class="far fa-paper-plane"></i>
  </div>
  <ul class="fab-options">

    <?php foreach(option('kreativ-anders.feedback-button.accounts') as $account): ?>

    <li><span class="fab-label"><?= $account['name'] ?></span>
      <a href="<?= $account['url'] ?>" target="_blank">
        <div class="fab-icon-holder">

        <?php switch(Str::lower($account['name'])): 
          case 'whatsapp': ?>
            <i class="fab fa-whatsapp"></i>
          <?php break; ?>
          <?php case 'twitter': ?>
            <i class="fab fa-twitter"></i>
          <?php break; ?>
          <?php case 'linkedin': ?>
            <i class="fab fa-linkedin"></i>
          <?php break; ?>
          <?php case 'github': ?>
            <i class="fab fa-github"></i>
          <?php break; ?>
          <?php case 'email': ?>
            <i class="far fa-envelope"></i>
          <?php break; ?>
        <?php endswitch; ?>

        </div>
      </a>
    </li>  

    <?php endforeach ?>
    
  </ul>
</div>

<style>
  .fab-icon-holder i {
    --background-color: <?= option('kreativ-anders.feedback-button.color') ?>
  } 
</style>
