<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mkesh</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link href="https://pro.fontawensome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <style>
        .yellow-header {
            background-color: #f1cf00;
            padding: 20px;
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .yellow-footer {
            background-color: #f1cf00;
            padding: 20px;
            margin-top: auto;
        }

        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
        <div class="yellow-header">
            <h1>Meu Cabeçalho Amarelo</h1>
        </div>

            @if(Session::has('success'))
                <div id="success-alert" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('success-alert').remove();
                    }, 5000); 
                </script>
            @endif
            @if(Session::has('error'))
                <div id="error-alert" class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('error-alert').remove();
                    }, 5000); 
                </script>
            @endif

        <div class="container">

        <div class="col-sm">
            <table id="example" class="table table-striped mt-5" style="width:100%">
              <thead style="background: #008e6f; color: white;">
                  <tr style="font-size: 10px;">
                      <th>#</th>
                      <th>NOME CLIENTE</th>
                      <th>CONTACTO</th>
                      <Th>TIPO PEDIDO</th>
                      <Th>Documentos</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($documentos as $documento)
                <tr>
                     <td>{{ $loop->index + 1 }}</td>
                     <td>{{ $documento->nome_cliente}}</td>
                     <td>{{ $documento->contacto }}</td>
                     <td>RESET PIN </td>
                     <td>
                        <a onclick="acessarInvisiveis()" class="btn btn-success btn-sm" download><i class="icon ion-md-download p-1"></i>Baixar</a>
                        <a href="{{ route('formulario.download', ['id' => $documento->id]) }}" id="botaoInvisivel1" style="display: none;" class="btn btn-success btn-sm" download><i class="icon ion-md-download p-1"></i>Baixar Formulário</a>
                        <a href="{{ route('documento.download', ['id' => $documento->id]) }}" id="botaoInvisivel2" style="display: none;" class="btn btn-success btn-sm" download><i class="icon ion-md-download p-1"></i>Baixar Documento</a>
                    </td>
                </tr>
                @endforeach
             </tbody>
            </table>
        </div>


    </div>
  
     <div class="yellow-footer">
        <h3>Meu Rodapé Amarelo</h3>
    </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script>
        function acessarInvisiveis() {
            document.getElementById('botaoInvisivel1').click();
            document.getElementById('botaoInvisivel2').click();
        }
    </script>
</body>
</html>
