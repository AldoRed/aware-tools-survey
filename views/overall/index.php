<h2>Las encuestas disponibles son:</h2>

<?php

foreach ($encuestas as $key => $value) {
    echo "<li><a href='". $value['ruta'] ."'>". $value['nombre'] ."</a></li>";
}
