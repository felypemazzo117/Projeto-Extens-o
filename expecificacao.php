<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especificações</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            width: 100%;
            max-width: 600px;
            background-color: #222;
            border: 2px solid #444;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group select,
        .form-group textarea,
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #555;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
        .button.save {
            background-color: #28a745; /* Cor verde */
        }
        .button.cancel {
            background-color: #ff0000; /* Cor vermelha */
        }
        .other-input {
            display: none;
            margin-top: 10px;
        }
        .other-input label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="title">ESPECIFICAÇÕES</div>
        <div class="form-group">
            <label for="tipo">TIPO</label>
            <select id="tipo" name="tipo" onchange="showOtherInput('tipo')">
                <option value="">Selecione um tipo</option>
                <option value="tipo1">Tipo 1</option>
                <option value="tipo2">Tipo 2</option>
                <option value="tipo3">Tipo 3</option>
                <option value="outro">Outro</option>
            </select>
            <div class="other-input" id="tipo-other">
                <label for="tipo-outro">Especifique:</label>
                <input type="text" id="tipo-outro" name="tipo-outro">
                <button class="button" onclick="confirmAndReplace('tipo')">Confirmar</button>
            </div>
        </div>
        <div class="form-group">
            <label for="fabricante">FABRICANTE</label>
            <select id="fabricante" name="fabricante" onchange="showOtherInput('fabricante')">
                <option value="">Selecione um fabricante</option>
                <option value="fabricante1">Fabricante 1</option>
                <option value="fabricante2">Fabricante 2</option>
                <option value="fabricante3">Fabricante 3</option>
                <option value="outro">Outro</option>
            </select>
            <div class="other-input" id="fabricante-other">
                <label for="fabricante-outro">Especifique:</label>
                <input type="text" id="fabricante-outro" name="fabricante-outro">
                <button class="button" onclick="confirmAndReplace('fabricante')">Confirmar</button>
            </div>
        </div>
        <div class="form-group">
            <label for="capacidade">CAPACIDADE</label>
            <select id="capacidade" name="capacidade" onchange="showOtherInput('capacidade')">
                <option value="">Selecione uma capacidade</option>
                <option value="capacidade1">Capacidade 1</option>
                <option value="capacidade2">Capacidade 2</option>
                <option value="capacidade3">Capacidade 3</option>
                <option value="outro">Outro</option>
            </select>
            <div class="other-input" id="capacidade-other">
                <label for="capacidade-outro">Especifique:</label>
                <input type="text" id="capacidade-outro" name="capacidade-outro">
                <button class="button" onclick="confirmAndReplace('capacidade')">Confirmar</button>
            </div>
        </div>
        <div class="form-group">
            <label for="bitola">BITOLA</label>
            <select id="bitola" name="bitola" onchange="showOtherInput('bitola')">
                <option value="">Selecione uma bitola</option>
                <option value="bitola1">Bitola 1</option>
                <option value="bitola2">Bitola 2</option>
                <option value="bitola3">Bitola 3</option>
                <option value="outro">Outro</option>
            </select>
            <div class="other-input" id="bitola-other">
                <label for="bitola-outro">Especifique:</label>
                <input type="text" id="bitola-outro" name="bitola-outro">
                <button class="button" onclick="confirmAndReplace('bitola')">Confirmar</button>
            </div>
        </div>
        <div class="form-group">
            <label for="observacoes">OBSERVAÇÕES</label>
            <textarea id="observacoes" name="observacoes"></textarea>
        </div>
        <div class="button-group">
            <button class="button cancel" onclick="clearForm()">Limpar</button>
            <button class="button save" onclick="save()">Salvar</button>
        </div>
    </div>

    <script>
        function showOtherInput(fieldId) {
            const field = document.getElementById(fieldId);
            const otherInput = document.getElementById(`${fieldId}-other`);
            if (field.value === 'outro') {
                otherInput.style.display = 'block';
            } else {
                otherInput.style.display = 'none';
            }
        }

        function confirmAndReplace(fieldId) {
            const input = document.getElementById(`${fieldId}-outro`);
            const select = document.getElementById(fieldId);
            if (input.value.trim() !== '') {
                select.innerHTML = `<option value="${input.value}">${input.value}</option>`;
                select.value = input.value;
                input.parentElement.style.display = 'none';
            } else {
                alert('Por favor, digite um valor antes de confirmar.');
            }
        }

        function save() {
            window.location.href = 'checklist.php';
        }

        function clearForm() {
            document.getElementById('tipo').selectedIndex = 0;
            document.getElementById('fabricante').selectedIndex = 0;
            document.getElementById('capacidade').selectedIndex = 0;
            document.getElementById('bitola').selectedIndex = 0;
            document.getElementById('observacoes').value = '';

            document.querySelectorAll('.other-input').forEach(input => {
                input.style.display = 'none';
                input.querySelector('input').value = '';
            });
        }
    </script>
</body>
</html>
