<div class="container">

    <div class="card my-2 bg-primary">
        <div class="card-body text-white pb-0 row">
            <div class="col-11">
                <p class="mt-2"> Produtos </p>
            </div>
            <div class="col-1 text-right">
                <a href="<?= base_url('/produtos/add'); ?>" alt="Adicionar Protuto" class="btn btn-primary mb-3"> <i class="material-icons">add</i> </a>
            </div>
        </div>
    </div>

    <!-- <p>
        <a href="<?= base_url('/create') ?>">Adicionar Aluno</a>
    </p> -->

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php if ($produtos) :
                        foreach ($produtos as $produto_item) : ?>
                            <tr>
                                <td><?= $produto_item['nome']; ?></td>
                                <td><?= $produto_item['valor']; ?></td>
                                <td>
                                    <a class="btn btn-light" href="<?= base_url('/categorias/detail/' . $produto_item['categoria']); ?>" target="_blank">
                                        <?= $produto_item['categoria__nome']; ?>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="<?= base_url('/produtos/detail/' . $produto_item['id']); ?>">
                                        <i class="tiny material-icons">info_outline</i>
                                    </a>
                                    <a class="btn btn-sm btn-success" href="<?= base_url('/produtos/update/' . $produto_item['id']); ?>">
                                        <i class="tiny material-icons">edit</i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="<?= base_url('/produtos/delete/' . $produto_item['id']); ?>">
                                        <i class="tiny material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                    <?php endforeach;
                    endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>