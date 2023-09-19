<button hx-get="/count/<?= !empty($val)? $val : 0 ?>" hx-swap="outerHTML">
  <?= !empty($val)? $val :  0  ?>
</button>