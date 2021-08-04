<div class="container">

    <div class="card my-2 bg-success">
        <div class="card-body text-white pb-0 row">
            <div class="col-1">
                <a href="<?= base_url('/categorias'); ?>" class="btn btn-success mb-3"> <i class="material-icons">arrow_back</i> </a>
            </div>
            <div class="col-11">

                <?php if (isset($categoria)) : ?>
                    <p class="mt-2"> Editar Categoria </p>

                <?php else : ?>
                    <p class="mt-2"> Adicionar Categoria </p>

                <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <?php if (isset($categoria)) : ?>
                <form method="POST" action="<?= base_url('/categorias/update') ?>">

                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $categoria['id']; ?>">

                    <div class="form-group mb-3">
                        <label for="nome">Nome </label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?= $categoria['nome']; ?>">
                    </div>

                    <button type="submit" class="btn btn-primary"> Salvar </button>
                </form>

            <?php else : ?>
                <form method="POST" action="<?= base_url('/categorias/add') ?>">
                    <div class="form-group mb-3">
                        <label for="nome">Nome </label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>

                    <button type="submit" class="btn btn-primary"> Salvar </button>
                </form>

            <?php endif; ?>

        </div>
    </div>
</div>