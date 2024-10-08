<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/styles.css">
    <title>Cálculo Imposto de Renda</title>
</head>
<body>
    <main>
        <div class="center">
            <div class="form">
                <form action="../index.php" method="post" onsubmit="validateForm(event)">
                    <div class="inputs">
                        <label for="rendimentoMensal">Rendimento Mensal:</label>
                        <input type="text" name="rendimentoMensal" id="rendimentoMensal"><br>
                    </div>
                    <div class="inputs">
                        <label for="dependentes">Número de Dependentes:</label>
                        <input type="text" name="dependentes" id="dependentes"><br>
                    </div>
                    <div class="inputs">
                        <label for="pensao">Valor Pensão Alimentícia:</label>
                        <input type="text" name="pensao" id="pensao"><br>
                    </div>
                    <div class="inputs">
                        <label for="deducao">Outras Deduções:</label>
                        <input type="text" name="deducao" id="deducao">
                    </div>
                    <button type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
</body>
<script src="../src/js/form.js"></script>
</html>