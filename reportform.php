<!DOCTYPE html>
<html>
<head>
  <title>Relatório de Livros</title>
  <link rel="stylesheet" href="css/style.css">
  <script>
    function toggleDropdown(id) {
      var dropdown = document.getElementById(id);
      dropdown.classList.toggle("open");
    }
  </script>
</head>
<body>
  <div class="card">
    <h2>Relatório da Colportagem</h2>
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
          <input type="text" name="nlivros"/>
        </div>
      </div>
      <div class="form-group">
        <label for="jornais-toggle" onclick="toggleDropdown('jornais-dropdown')">Jornais:</label>
        <div class="dropdown" id="jornais-dropdown">
          <input type="text" name="njornais"/>
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
