<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conciencia sobre el Cambio Climático</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <h1>Conciencia sobre el Cambio Climático</h1>
    <nav>
    <button type="button" class="btn btn-outline-success"><a href="#causas">Causas</a></button>
    <button type="button" class="btn btn-outline-success"><a href="#efectos">Efectos</a></button>
    <button type="button" class="btn btn-outline-success"><a href="#acciones">Qué puedes hacer</a></button>
    </nav>
  </header>
  
  <main>
    <section id="introduccion">
      <h2>¿Por qué es importante?</h2>
      <p>El cambio climático es uno de los mayores desafíos de nuestro tiempo. Afecta a los ecosistemas, la biodiversidad y nuestras vidas diarias.</p>
    </section>
    
    <section id="causas">
      <h2>Causas del Cambio Climático</h2>
      <ul>
        <li>Quema de combustibles fósiles.</li>
        <li>Deforestación.</li>
        <li>Agricultura intensiva.</li>
      </ul>
    </section>
    
    <section id="efectos">
      <h2>Efectos del Cambio Climático</h2>
      <p>Aquí tienes algunos de los impactos más graves:</p>
      <ul>
        <li>Aumento del nivel del mar.</li>
        <li>Fenómenos meteorológicos extremos.</li>
        <li>Pérdida de biodiversidad.</li>
      </ul>
    </section>
    
    <section id="acciones">
      <h2>Qué puedes hacer</h2>
      <p>¡Tú puedes marcar la diferencia! Aquí hay algunas acciones:</p>
      <ol>
        <li>Reducir, reutilizar y reciclar.</li>
        <li>Usar transporte sostenible.</li>
        <li>Consumir energía renovable.</li>
      </ol>
      <button id="more-tips">Más Consejos</button>
      <div id="tips" class="hidden">
        <p>Planta árboles, apoya políticas sostenibles, educa a otros sobre el tema.</p>
      </div>
    </section>
  </main>
  
  <footer>
    <p>© 2024 Conciencia Climática | Diseñado con amor por bb</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
