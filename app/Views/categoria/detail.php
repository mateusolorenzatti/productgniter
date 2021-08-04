<div class="container">

    <?php if (isset($categoria)) : ?>

        <div class="card my-2 bg-success">
            <div class="card-body text-white pb-0 row">
                <div class="col-1">
                    <a href="<?= base_url('/categorias'); ?>" class="btn btn-success mb-3"> <i class="material-icons">arrow_back</i> </a>
                </div>
                <div class="col-9">
                    <p class="mt-2"> Categoria </p>
                </div>
                <div class="col-2 text-right">
                    <a class="btn btn-sm btn-success" href="<?= base_url('/categorias/update/' . $categoria['id']); ?>">
                        <i class="tiny material-icons">edit</i>
                    </a>
                    <a class="btn btn-sm btn-success" href="<?= base_url('/categorias/delete/' . $categoria['id']); ?>">
                        <i class="tiny material-icons">delete</i>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <p> Nome: <b> <?= $categoria['nome']; ?> </b> </p>
            </div>
        </div>

    <?php else : ?>

        <div class="card my-5">
            <div class="card-body text-center p-4">
                <h4 class="text-muted my-4"> Categoria Inexistente! </h4>
                <a class="btn btn-sm btn-primary" href="<?= base_url('/categorias') ?>">
                    Voltar para a Home
                </a>
            </div>
        </div>

    <?php endif; ?>
</div>