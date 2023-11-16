<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Denúncia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- js do bs -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        .nav1{
            background-color: rgba(0, 195, 255, 0.89);
            padding: 30px;
            
            }

    .nav1 ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    .nav1 li {
      float: left;
      margin-right: 20px;
    }

    .nav1 a {
      display: block;
      color: white;
      text-align: center;
      text-decoration: none;
    }

    .nav1 a:hover {
      background-color: #555;
    }
    
    .nav3 {
        display: flex;
      justify-content: space-between;
      align-items: center;
        
    }

    .nav2 {
        font-size: 25px;
        display: flex;
        
        margin-right: 20px;
       
    }
        
       
        
    </style>
</head>

<body>
    <header>
        <nav class="nav1">

            <div class="nav3">
                <h1>Editar Denuncia</h1>
                <nav class="nav2">
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Sobre</a></li>
                      <li><a href="#">Serviços</a></li>
                      <li><a href="#">Contato</a></li>
                    </ul>
                  
                </nav>
            </div>
        </nav>
    </header>
    </header>


<section style="margin: 1rem;">
    <legend style="text-align: center;"><h2>Editar Denúncia</h2></legend>
    <form class="mx-auto p-5" style = "width: 1000px">
      <div class="mb-3">
        <select class="form-select" name="id_tipo" id="id_tipo" aria-label="Default select example">
            <option selected>Tipo de Denúncia</option>
            <option value="1">1</option>
            <option value="2">2</option>
        
          </select>
    </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="emailHelp">

          </div>
        <div class="mb-3">
          <label for="descricao" class="form-label">Descrição</label>
          <textarea rows="4" cols="50" class="form-control" name="descricao" id="descricao" form="usrform"></textarea>
          
        </div>
        <div class="mb-3">
          <label for="local" class="form-label">Local</label>
          <input type="Text" class="form-control" name="local" id="local">
        </div>
        <div class="mb-3">
            <label for="foto_denuncia" class="form-label">Imagem</label>
            <input type="file" class="form-control" name="foto_denuncia" id="foto_denuncia">
          

          </div>
       
        
        <button type="submit" class="btn btn-primary">Editar</button>
        </form>


    
  </section>
  <footer style="text-align: center; padding: 1rem; margin-top: 100px; background-color: rgba(0, 195, 255, 0.89);">Todos os direitos reservados &copy;</footer>
</body>
</html>