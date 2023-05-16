<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>

    @vite([
        'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>
    <div class= "mx-auto bg-white">
        <div class="container-lg mx-auto px-0 py-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-lg">
                    <a class="navbar-brand" href="#">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link active" href="">Cadastrar </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="consulta">Consultar</a>
                            </li>
                        </ul>
                    </div>
            </nav>
    <div class="card">
            <div class="card-body">
                <div class="container-lg">
                    <h4 class="card-title">Cadastro - Agendamento</h4>
                    <p class="card-text"> Sistema de agendamento de serviços </p>
                    <form class="row g-3" method="POST" id="form" action="{{route('agendamentos.salvar')}}" nome="form">
                        @csrf
                        <div class="form-row">

                            <label for="validationCustom01">Nome</label>
                            <input type="text" name="nome" class="form-control" id="validationCustom01" placeholder="Nome Completo" required>
                            <br>

                            <label for="validationCustom02">Telefone</label>
                            <input type="tel" name="telefone" class="form-control" id="validationCustom02" placeholder="(xx) xxxxx-xxxx"  required>
                            <br>
                            <label for="inputState" class="form-label">Origem</label>
                            <select class="form-select" name="origem" id="inlineFormCustomSelect" required>
                                <option selected value="Celular">Celular</option>
                                <option value="Telefone Fixo">Telefone Fixo</option>
                                <option value="Celular/Telefone Móvel">Celular/Telefone Móvel</option>
                                <option value="Ramal">Ramal</option>
                                <option value="Whatsapp">Whatsapp</option>
                                <option value="Telegram">Telegram</option>
                                <option value="Facebook">Facebook</option>
                            </select>     
                            <br>
                            <label for="validationCustom03">Data do Contato</label>
                            <input type="date" name="contato" class="form-control" id="validationCustom03" required>
                            <br>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Observação</label>
                                <textarea class="form-control" name="observacao" id="txtObservacao" placeholder="Digite uma observação" rows="3" required></textarea>
                            </div>
                            <br>
                            <button class="btn btn-primary" type="submit">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>