<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inspeção</title>
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #1e1e1e;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .header {
            text-align: center;
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
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            outline: none;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }
        .form-group input[type="date"] {
            color: #fff;
            background-color: #333;
        }
        .form-group input[type="file"] {
            border: none;
            padding: 5px;
            background-color: #333;
            color: #fff;
        }
        .form-group input[type="file"]::file-selector-button {
            background-color: #28a745;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-group input[type="file"]::file-selector-button:hover {
            background-color: #218838;
        }
        .button-group {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        .button:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
        .button:active {
            transform: scale(1);
        }
        .button.reset {
            background-color: #dc3545;
        }
        .button.reset:hover {
            background-color: #c82333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            vertical-align: top;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        .form-group textarea:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Formulário de Inspeção</h1>
        </div>
        <form id="inspectionForm" action="expecificacao.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="photo">Foto</label>
                            <input type="file" id="photo" name="photo" accept="image/*">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="tag">TAG APLICÁVEL</label>
                            <input type="text" id="tag" name="tag" placeholder="TAG APLICÁVEL">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="name">Série</label>
                            <input type="text" id="name" name="name" placeholder="Série">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="date">Data</label>
                            <input type="date" id="date" name="date">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="validacao">Validade de Inspeção</label>
                            <input type="text" id="validacao" name="validacao" placeholder="Validade de Inspeção">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="photo2">Foto Adicional 1</label>
                            <input type="file" id="photo2" name="photo2" accept="image/*">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="photo3">Foto Adicional 2</label>
                            <input type="file" id="photo3" name="photo3" accept="image/*">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="observacao">Observação</label>
                            <textarea id="observacao" name="observacao" placeholder="Observação"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <div class="button-group">
                            <button type="reset" class="button reset">Limpar</button>
                            <button type="submit" class="button">Cadastrar</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
