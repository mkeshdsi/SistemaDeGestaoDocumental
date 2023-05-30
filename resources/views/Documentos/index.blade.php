@include('layouts/fixed-sidebar')

    <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
                <h1>Visualização de Pedidos</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
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
            <a href="{{ url('/entradaDocumentos') }}" type="button" class="btn btn-primary float-right" style="margin: 10px">Registar Pedido</a>
            <table id="example" class="table table-striped mt-5" style="width:100%">
              <thead style="background: #008e6f; color: white;">
                  <tr style="font-size: 10px;">
                      <th>#</th>
                      <th>NOME CLIENTE</th>
                      <th>CONTACTO</th>
                      <Th>TIPO PEDIDO</th>
                      <th>DATA<th>
                  </tr>
              </thead>
              <tbody>
                @foreach($documentos as $documento)
                <tr>
                     <td>{{ $loop->index + 1 }}</td>
                     <td>{{ $documento->nome_cliente}}</td>
                     <td>{{ $documento->contacto }}</td>
                     <td>RESET PIN </td>
                     <td>{{ $documento->created_at}}</td>
                     <td>
                        <a onclick="acessarInvisiveis()" class="btn btn-success btn-sm" download><i class="fa fa-download"></i></a>
                        <a href="{{ route('formulario.download', ['id' => $documento->id]) }}" id="botaoInvisivel1" style="display: none;" class="btn btn-success btn-sm" download><i class="icon ion-md-download p-1"></i>Baixar Formulário</a>
                        <a href="{{ route('documento.download', ['id' => $documento->id]) }}" id="botaoInvisivel2" style="display: none;" class="btn btn-success btn-sm" download><i class="icon ion-md-download p-1"></i>Baixar Documento</a>
                    </td>
                </tr>
                @endforeach
             </tbody>
            </table>   
            {{ $documentos->links('pagination::bootstrap-4') }}     
        </div>
      <div>

    </section>
 <!-- /.content -->
 </div>
<!-- /.content-wrapper -->
<script>
  setTimeout(function() {
          document.querySelector('.alert').remove();
      }, 5000);
</script>
<script>
    function acessarInvisiveis() {
        document.getElementById('botaoInvisivel1').click();
        document.getElementById('botaoInvisivel2').click();
    }
</script>

@include('layouts.footer')