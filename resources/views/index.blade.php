<!DOCTYPE html>
<html>
<head>
    <title>index</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <style>
        .yellow-header {
            background-color: yellow;
            padding: 20px;
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .yellow-footer {
            background-color: yellow;
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

    <div class="container">
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

    <div class="card">
        <div class="card-body">
        <form class="row g-3"action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
             @csrf
          
            <div class="col-12">
                <label for="inputAddress" class="form-label">Nome Cliente</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="">
            </div>
            <div class="col-12">           
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Documento de Identidade</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="documentoIdentidade">
                        </div>
                    </div>
                    <div class="col">
                    <div class="mb-3">
                            <label for="formFileSm" class="form-label">Formulário</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="formulario">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submeter</button>
            </div>
    </form>


        </div>
    </div>
        






    </div>

    <div class="yellow-footer">
        <h3>Meu Rodapé Amarelo</h3>
    </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
