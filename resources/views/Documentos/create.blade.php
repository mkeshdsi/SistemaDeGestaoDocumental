@include('layouts/fixed-sidebar')

    <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
                <h1>Entrada de Documentos</h1>
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
            <form class="row g-3"action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nome do Cliente</label>
                    <input type="text" class="form-control" id="inputEmail4" name="nome_cliente">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Contacto</label>
                    <div class="col-12">
                    <div class="input-group">
                    <div class="input-group-text">258</div>
                    <input type="number" class="form-control" id="inlineFormInputGroupUsername" name="contacto" maxlength="9">
                    </div>
                </div>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Descrição</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Comentários" id="floatingTextarea" style="height: 100px;" name="descricao"></textarea>
                    </div>

                </div>
            
                <div class="col-12">           
                    <div class="row">
                        <div class="col">
                            <div class="mb-4">
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
                    <a href="{{ url('/index_documentos') }}" type="button" class="btn btn-warning">Voltar</a>
                </div>
        </form>
         
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

@include('layouts.footer')