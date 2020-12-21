<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro de Vendas</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <div style = "text-align: right">
        <a href = "#" role="button" class = "btn btn-primary btn-sm"> Relatórios</a>
        <a href = "#" role="button" class = "btn btn-danger btn-sm"> Voltar</a>

      </div>

        <form action = "cadastro_vendas2.php" method = "post"> 
          <div class="form-group">
        <label> Selecione o mês: </label>
            <div class="form-group">

                <select class="form-control" name = "mes">
                    <option>Jan</option>
                    <option>Fev</option>
                    <option>Mar</option>
                    <option>Abr</option>
                    <option>Mai</option>
                    <option>Jun</option>
                    <option>Jul</option>
                    <option>Ago</option>
                    <option>Set</option>
                    <option>Out</option>
                    <option>Nov</option>
                    <option>Dez</option>
                </select>
            </div>
            <div class = "form-group">
              <label>Digite a quantidade: </label>
              <input type ="number" name ="quantidade" class="form-control" name = "quantidade">
          </div>
          <div class = "form-group">
              <label>Digite o valor: </label>
              <input type ="numeric" name ="valor" class="form-control">
          </div>
          <div style = "text-align: right">
            <button type = "submit" class= "btn btn-primary"> Cadastrar </button>
          
          </div>

        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>