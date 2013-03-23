<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?>

<?php if (!empty ($gallery)) : ?>
  <ul class="elastislide-list" id="carousel">
    <?php foreach ( $images as $image ) : ?>
      <li>
        <a href="<?php echo $image->imageURL ?>" title="<?php echo $image->description ?>" <?php echo $image->thumbcode ?> >
          <img alt="<?php echo $image->alttext ?>" src="<?php echo $image->thumbnailURL ?>" <?php echo $image->size ?> />
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>