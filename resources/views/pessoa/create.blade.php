<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Crud com Laravel</title>
    <style>
        .btnicon{
            width: 50px;
        }
        .d-btn{
            display: flex;
            gap: 7px;
        }
        .container-header{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="container-header">
            <h2 class="mt-3 mb-3">Novo Cliente</h2>
            <a class="btn btn-primary mt-5 w-20 h20" href="{{ route('pessoa.index') }}" >Listar Todos Investidores</a>
            
        </div>

        <form action="{{ route('pessoa.store') }}" method="POST" >
            @csrf
            @method("POST")
            <div class="row">
                <!-- <div class="col">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div> -->
                <div class="col">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="form-control">
                </div>
                <div class="col">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="form-control">
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col">
                    <label for="capital">Capital Inicial</label>
                    <input type="text" name="capital" id="capital" class="form-control">
                </div>

                <div class="col">
                    <label for="atual">Capital Atual</label>
                    <input type="text" name="capital_atual" id="atual" class="form-control">
                </div>

                <div class="col">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade" class="form-control">
                </div>

                <div class="col">
                    <label for="estado">Estado</label>
                    <input type="text" name="estado" id="estado" class="form-control">
                </div>

            </div>
            <button type="submit" class="btnicon btn btn-outline-success"><i class="fa-solid fa-floppy-disk"></i></button>
        </form>

    </div>
</body>
</html>