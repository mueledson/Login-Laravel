<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Crud com Laravel</title>
    <style>
        .btn-icon{
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
            <h2 class="mt-3 mb-3">Lista Pessoas</h2>
            <a href="{{ route('pessoa.create') }}" class="btn btn-success">Add</a>
        </div>

        <table class="table">
            
            <thead>
                <tr>
                    <th class="text-center" width="50">Código</th>
                    <th >Nome</th>
                    <th >Cpf</th>
                    <th >Telefone</th>
                    <th >Capital Inícial</th>
                    <th >Capital Atual</th>
                    <th >Cidade</th>
                    <th >Estado</th>
                    <th >Data Início</th>
                    <th class="text-center" scope="col">Data Atualização</th>
                </tr>
            </thead>
            
            <tbody>
                @forelse($pessoas as $pessoa)
                <tr>
                    <th class="text-center">{{ $pessoa->id }}</th>
                    <td class="text-center">{{ $pessoa->nome }}</td>
                    <td class="text-center">{{ $pessoa->cpf }}</td>
                    <td class="text-center">{{'R$ ' . number_format($pessoa->capital, 2, ',', '.') }}</td>
                    <td class="text-center">{{'R$ ' . number_format($pessoa->capital_atual, 2, ',', '.') }}</td>
                    <td class="text-center">{{ $pessoa->estado }}</td>
                </tr>

                @empty
                    <p class="h4 text-center mt-5 link link-danger" style="text-decoration: none;">Nenhum investidor encontrado!</p>
                @endforelse
            </tbody>

            <tfoot>
                <tr>
                    <td>Participantes <span class="badge bg-primary">03</span></td>
                </tr>
                <tr>
                    <td>Total Capital Geral <span class="badge bg-success" >R$ 50.000,00</span></td>
                </tr>
            </tfoot>
        </table>

    </div>

</body>
</html>