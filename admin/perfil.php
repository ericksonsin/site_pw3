<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Perfil</li>
    </ol>
</nav>

<h4>Perfil</h4>


<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
        </div>
    </div>

</div>
</div>

<div class="container bg-white">

    <div class="col-sm-4 offset-sm-4 text-center">

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Alterar imagem <i>(.jpg .png .bmp)</i></label>
                <input type="file" name="imagem" required class="form-control">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" name="nome" class="form-control" placeholder="Nome Completo" aria-label="nome" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1" disabled>
            </div>

            
            <div class="col-sm-6 offset-sm-3 text-center">
                <button type="submit" class="btn btn-primary form-control">
                    Atualizar
                </button>
            </div>
        </form>
    </div>
   
