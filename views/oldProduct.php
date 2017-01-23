<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Produit Périmé</title>
  </head>
  <body>
    <h2>Produit périmé</h2>
    <p>Les produits suivants ne sont pas frais :</p>
    <ul>
      <?php foreach ($notFreshProducts as $key => $value): ?>
        <li><?= $value->getName()?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
