<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Viajes Aventure3</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/viajesstyle.css">
  </head>
  <body>
    <?php include 'menu.php'; ?>

    <div class="hero">Descubre países lejanos</div>
    <div id="home" class="section">
      <h2>Descubre nuestra oferta de destinos</h2>
      <p>Las mejores opciones del mercado a precios inigualables.</p>
    </div>
    <div id="viajes" class="section">
      <h2>Catálogo de viajes</h2>
      <div class="viaje">
        <img src="https://cdn.pixabay.com/photo/2021/10/10/20/33/mehtab-bagh-6698669_1280.jpg" alt="India">
        <h3>India</h3>
        <p>Desde 1.200€</p>
        <p>Días: 10</p>
      </div>
      <div class="viaje">
        <img src="https://cdn.pixabay.com/photo/2020/05/14/09/28/jakarta-5170600_1280.jpg" alt="Indonesia">
        <h3>Indonesia</h3>
        <p>Desde 1.500€</p>
        <p>Días: 12</p>
      </div>
      <div class="viaje">
        <img src="https://cdn.pixabay.com/photo/2014/05/26/09/58/sydney-opera-house-354375_1280.jpg" alt="Australia">
        <h3>Australia</h3>
        <p>Desde 2.000€</p>
        <p>Días: 15</p>
      </div>
    </div>
    <h3>Próximamente disponibles...</h3>
    <ul id="proximos">
      <li>China</li>
      <li>Perú</li>
      <li>Kenia</li>
      <li>Canadá</li>
      <li>Argentina</li>
      <li>Brasil</li>
    </ul>

    <?php include 'footer.php'; ?>
  </body>
</html>
