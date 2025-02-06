<?php if (isset($errors)) : ?>
  <?php foreach ($errors as $error) : ?>
    <div class="messag bg-red-100 my3">
      <?= $error ?>
    </div>
  <?php endforeach; ?>
<?php endif; ?>