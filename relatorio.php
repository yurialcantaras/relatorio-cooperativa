<!DOCTYPE html>
<html>
<head>
  <title>Relatório de Livros</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
    }
    .card {
      width: 400px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .card h2 {
      text-align: center;
    }
    .form-group {
      margin-bottom: 10px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
    }
    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .dropdown {
      display: none;
    }
    .dropdown.open {
      display: block;
    }
    .form-group button {
      width: 100%;
      padding: 8px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .form-group button:hover {
      background-color: #45a049;
    }
  </style>
  <script>
    function toggleDropdown(id) {
      var dropdown = document.getElementById(id);
      dropdown.classList.toggle("open");
    }
  </script>
</head>
<body>
  <div class="card">
    <h2>Formulário de Vendas</h2>
    <form>
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
      </div>
      <div class="form-group">
        <label for="kits">Número de Kits:</label>
        <input type="number" id="kits" name="kits" required>
      </div>
      <div class="form-group">
        <label for="livros-toggle" onclick="toggleDropdown('livros-dropdown')">Livros:</label>
        <div class="dropdown" id="livros-dropdown">
          <select id="livros" name="livros">
            <option value="">Selecione</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <!-- Adicione mais opções conforme necessário -->
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="jornais-toggle" onclick="toggleDropdown('jornais-dropdown')">Jornais:</label>
        <div class="dropdown" id="jornais-dropdown">
          <select id="jornais" name="jornais">
            <option value="">Selecione</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <!-- Adicione mais opções conforme necessário -->
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="valor-dinheiro">Valor em Dinheiro:</label>
        <input type="number" id="valor-dinheiro" name="valor-dinheiro" step="0.01" required>
      </div>
      <div class="form-group">
        <label for="valor-pix">Valor em PIX:</label>
        <input type="number" id="valor-pix" name="valor-pix" step="0.01" required>
      </div>
      <div class="form-group">
        <label for="valor-cartao">Valor Total do Cartão:</label>
        <input type="number" id="valor-cartao" name="valor-cartao" step="0.01" required>
      </div>
      <div class="form-group">
        <button type="submit">Enviar</button>
      </div>
    </form>
  </div>
</body>
</html>
