<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background: linear-gradient(to right, #007bff, #0056b3); 

.button-container {
    display: flex;
    flex-direction: row;
}

button {
    margin: 10px;
    padding: 12px 24px;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    background: linear-gradient(to right, #007bff, #0056b3);
}

    </style>
</head>
<body>
    <div class="button-container">
        <button onclick="window.location.href = '{{ route('produto.index') }}';">Ir para Produtos</button>
        <button onclick="window.location.href = '{{ route('usuarios.index') }}';">Ir para Usuarios</button>
    </div>
</body>
</html>
