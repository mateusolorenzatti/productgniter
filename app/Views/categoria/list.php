<div class="container">
    
    <div class="card my-2 bg-success">
        <div class="card-body text-white pb-0 row">
            <div class="col-11">
                <p class="mt-2"> Categorias </p>
            </div>
            <div class="col-1 text-right">
                <a href="<?= base_url('/categorias/add'); ?>" alt="Adicionar Protuto" class="btn btn-success mb-3" > <i class="material-icons">add</i> </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Nome</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php if ($categorias) :
                        foreach ($categorias as $item) : ?>
                            <tr>
                                <td><?= $item['nome']; ?></td>
                                <td>
                                <a class="btn btn-sm btn-primary" href="<?= base_url('/categorias/detail/' . $item['id']); ?>">
                                        <i class="tiny material-icons">info_outline</i>
                                    </a>    
                                    <a class="btn btn-sm btn-success" href="<?= base_url('/categorias/update/' . $item['id']); ?>">
                                        <i class="tiny material-icons">edit</i>
                                    </a> 
                                    <a class="btn btn-sm btn-danger" href="<?= base_url('/categorias/delete/' . $item['id']); ?>">
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
