<div class="container">
    
    <div class="card my-2 bg-primary">
        <div class="card-body text-white pb-0">
            <p>Produtos</p>
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
                                <td><?= $produto_item['categoria']; ?></td>
                                <td>
                                    <a class="btn btn-sm btn-primary">
                                        <i class="tiny material-icons">info_outline</i>
                                    </a>    
                                    <a class="btn btn-sm btn-success">
                                        <i class="tiny material-icons">edit</i>
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
