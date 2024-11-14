<div class="container">
    <h2 class="">Enviar encuestas</h2>
    <div class="row">
        <div class="col-xs-12" id="enviarEncuestas">
            
            <!-- Encuestas que desea enviar -->
            <div class="form-group">
                <label>Encuestas que desea enviar (puedes seleccionar más de una)</label>
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
            <div class="form-group">
                <form id="uploadForm">
                    <label for="fileInput">Subir archivo Excel con correos en una columna, sin cabecera:</label>
                    <input type="file" id="fileInput" accept=".xlsx, .xls" class="form-control">
                </form>
                <h3>Lista de correos:</h3>
                <ul id="emailList" class="list-group"></ul>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control" name="mensaje" rows="3" placeholder="Ejemplo: Hola, te envío la encuesta para que la contestes.">Hola, soy el ayudante del ramo seguridad TI, les envio la siguiente encuesta</textarea>
            </div>
            <button class="btn col-xs-12 enviarEmails">Solicitar envio a administradores de encuestas</button>
        </div>
    </div>
</div>

</br></br></br></br></br></br>

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
#emailList {
    margin-top: 15px;
    max-height: 300px;
    overflow-y: auto;
    border: 1px solid #ddd;
    padding: 10px;
}
.list-group-item {
    padding: 8px 12px;
    font-size: 14px;
}
</style>

<script src="<?php echo $url ?>views/js/enviarEncuesta.js?v=1.0"></script>