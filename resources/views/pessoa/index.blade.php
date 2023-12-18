<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Crud com Laravel</title>
</head>
<body>

    <div class="container">
        <h2 class="text-center mt-3 mb-5">Lista Pessoas Resumido</h2>
        
        <a class="btn btn-success mb-5" href="{{ route('pessoa.create') }}">Adicionar Investidor</a>

        <a class="btn btn-primary mb-5" href="{{ route('pessoa.completo') }}">Relatórios</a>

        <table class="table">
            <thead>
                <tr>
                    <th class="text-center" width="50">Código</th>
                    <th class="text-center" scope="col">Nome</th>
                    <th class="text-center" scope="col">Cpf</th>
                    <th class="text-center" scope="col">Capital</th>
                    <th class="text-center" scope="col">Valor Mês</th>
                    <th class="text-center" scope="col">Estado</th>
                    <th class="text-center" scope="col">Ações</th>
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
                    <td class="text-center">
                        <a class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ route('pessoa.destroy', ['pessoa' => $pessoa->id ])}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que quer apagar essa investidor?')"><i class="fa-solid fa-trash"></i></button>
                        </form> 
                    </td>
                </tr>

                @empty
                    <p class="h4 text-center mt-5 link link-danger" style="text-decoration: none;">Nenhum investidor encontrado!</p>
                @endforelse
            </tbody>
                <!-- <tfoot>
                    <tr>
                        <td>Investidores <span class="badge bg-primary">03</span></td>
                    </tr>
                    <tr>
                        <td>Capital Geral <span class="badge bg-success" >R$ 50.000,00</span></td>
                    </tr>
                </tfoot> -->
            </table>
    </div>

</body>
</html>