<?php  if (count($errors) > 0) : ?>
  <div style="color:red; font-size:20px;" class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>