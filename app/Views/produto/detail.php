<div class="container">

    <?php if (isset($produto)) : ?>

        <div class="card my-2 bg-primary">
            <div class="card-body text-white pb-0 row">
                <div class="col-1">
                    <a href="<?= base_url('/produtos'); ?>" class="btn btn-primary mb-3"> <i class="material-icons">arrow_back</i> </a>
                </div>
                <div class="col-9">
                    <p class="mt-2"> Produto #<?= $produto['id']; ?> </p>
                </div>
                <div class="col-2 text-right">
                    <a class="btn btn-sm btn-primary" href="<?= base_url('/produtos/update/' . $produto['id']); ?>">
                        <i class="tiny material-icons">edit</i>
                    </a>
                    <a class="btn btn-sm btn-primary" href="<?= base_url('/produtos/delete/' . $produto['id']); ?>">
                        <i class="tiny material-icons">delete</i>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <p> Nome: <b> <?= $produto['nome']; ?> </b> </p>

                <p> Descrição: <b> <?= $produto['descricao']; ?> </b></p>

                <p> Valor: <b> <?= $produto['valor']; ?> </b></p>

                <p> Categoria: <b> <?= $categoria['nome']; ?> (#<?= $categoria['id']; ?>) </b> </p>

            </div>
        </div>

    <?php else : ?>

        <div class="card my-5">
            <div class="card-body text-center p-4">
                <h4 class="text-muted my-4"> Produto Inexistente! </h4>
                <a class="btn btn-sm btn-primary" href="<?= base_url('/produtos') ?>">
                    Voltar para a Home
                </a>
            </div>
        </div>

    <?php endif; ?>
</div>