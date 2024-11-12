<div class="container">
    <h2 class="">Enviar encuestas</h2>
    <div class="row">
        <div class="col-xs-12" id="enviarEncuestas">
            <form method="post">
                <!-- Encuestas que desea enviar -->
                <div class="form-group">
                    <label>Encuestas que desea enviar</label>
                    <table>
                        <?php foreach ($encuestas as $value): ?>
                            <tr>
                                <td style="vertical-align: middle;">
                                    <input type="checkbox" id="encuesta-<?php echo $value['id']; ?>" name="encuestas[]" value="<?php echo $value['id']; ?>">
                                </td>
                                <td>
                                    <label for="encuesta-<?php echo $value['id']; ?>" style="font-weight:100;">
                                        <?php echo htmlspecialchars($value['nombre']); ?>
                                    </label>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <!-- Subir archivo con correos -->
                <div class="form-group">
                    <label for="archivo">Subir archivo excel con correos en una columna, sin cabecera</label>
                    <input type="file" class="form-control" name="archivo" required>
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <textarea class="form-control" name="mensaje" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn col-xs-12 enviarEmail">Enviar</button>
            </form>
        </div>
    </div>
</div>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

table td {
    padding: 5px 10px;
}

table input[type="checkbox"] {
    margin: 0;
}

#enviarEncuestas form{
    min-height: 80vh;
    margin-bottom: 10px;
}

</style>