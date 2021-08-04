<div class="container">

    <?php if (isset($produto)) : ?>

        <div class="card my-2 bg-primary">
            <div class="card-body text-white pb-0 row">
                <div class="col-1">
                    <a href="<?= base_url('/produtos'); ?>" class="btn btn-primary mb-3"> <i class="material-icons">arrow_back</i> </a>
                </div>
                <div class="col-9">
                    <p class="mt-2"> Produto </p>
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
            <div class="card-body col-12 row">
                <div class="col-6">
                    <p> Nome: <b> <?= $produto['nome']; ?> </b> </p>

                    <p> Descrição: <b> <?= $produto['descricao']; ?> </b></p>

                    <p> Valor: <b> <?= $produto['valor']; ?> </b></p>

                    <p> Categoria:
                        <b> <?= $categoria['nome']; ?> </b>

                        <a class="btn btn-light" href="<?= base_url('/categorias/detail/' . $categoria['id']); ?>" target="_blank">
                            <i class="material-icons">open_in_new</i>
                        </a>
                    </p>
                </div>
                <div class="col-6">
                    <?php if (isset($produto['imagem'])) : ?>
                        <img src="<?= '/images/' . $produto['imagem']; ?>" class="img-thumbnail">
                    <?php else : ?>
                        <div class="text-center pt-4">
                            <h4 class="text-muted my-4"> Sem Imagem </h4>
                        </div>
                    <?php endif; ?>
                </div>
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