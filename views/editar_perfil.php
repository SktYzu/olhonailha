<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>

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
                <h1>Editar Perfil</h1>
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

    <section style="margin: 1rem;">
        <legend style="text-align: center;"><h2>Editar perfil</h2></legend>
        <form class="mx-auto p-5" style = "width: 1000px">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp">
    
              </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" name="senha" id="senha">
            </div>
            <div class="mb-3">
                <label for="celular" class="form-label">Celular</label>
                <input type="tel" class="form-control" nome="celular" id="celular" aria-describedby="emailHelp">
              
    
              </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" aria-describedby="emailHelp">
    
              </div>
            
            <button type="submit" class="btn btn-primary">Editar</button>
          </form>

    </section>
    <footer style="text-align: center; padding: 1rem; margin-top: 140px; background-color: rgba(0, 195, 255, 0.89);">Todos os direitos reservados &copy;</footer>
    
</body>
</html>