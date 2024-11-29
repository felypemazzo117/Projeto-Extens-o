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
            background-color: #28a745; /* Cor verde */
            color: #fff;
            font-size: 24px;
            padding: 20px 40px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #218838; /* Verde mais escuro para o hover */
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
        <form id="inspectionForm" action="identificacao.php">
            <table>
                <tr>
                    <td colspan="2" style="text-align: center;">
                            <button type="submit" class="button">Nova Inspeção</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
