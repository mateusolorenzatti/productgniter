<div class="container">

    <div class="card my-2 bg-primary">
        <div class="card-body text-white pb-0 row">
            <div class="col-1">
                <a href="<?= base_url('/produtos'); ?>" class="btn btn-primary mb-3"> <i class="material-icons">arrow_back</i> </a>
            </div>
            <div class="col-11">

                <?php if (isset($produto)) : ?>
                    <p class="mt-2"> Editar Produto #<?= $produto['id']; ?> </p>

                <?php else : ?>
                    <p class="mt-2"> Adicionar Produto </p>

                <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <?php if (isset($produto)) : ?>
                <form method="POST" action="<?= base_url('/produtos/update') ?>">

                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $produto['id']; ?>">

                    <div class="form-group mb-2">
                        <label for="nome">Nome </label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?= $produto['nome']; ?>">
                    </div>

                    <div class="form-group mb-2">
                        <label for="descricao">Descricao</label>
                        <textarea class="form-control" id="descricao" name="descricao"> <?= $produto['descricao']; ?> </textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="valor">Valor</label>
                        <input type="number" step="0.01" class="form-control" id="valor" name="valor" value="<?= $produto['valor']; ?>">
                    </div>

                    <div class="form-group mb-4">
                        <label for="categoria">Categoria</label>
                        <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">

                            <?php if ($categorias) :
                                foreach ($categorias as $cat) : ?>
                                    <option value="<?= $cat['id']; ?>" 
                                        <?php if ($produto['categoria'] === $cat['id']) : ?> 
                                            selected 
                                        <?php endif; ?>> 
                                        <?= $cat['nome']; ?> 
                                    </option>
                            <?php endforeach;
                            endif; ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary"> Salvar </button>
                </form>

            <?php else : ?>
                <form method="POST" action="<?= base_url('/produtos/add') ?>">
                    <div class="form-group mb-2">
                        <label for="nome">Nome </label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="descricao">Descricao</label>
                        <textarea class="form-control" id="descricao" name="descricao"> </textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="valor">Valor</label>
                        <input type="number" step="0.01" class="form-control" id="valor" name="valor" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="categoria">Categoria</label>
                        <select class="form-select" aria-label="Default select example" name="categoria" id="categoria" required>
                            <option value="0" selected> Selecione uma Categoria</option>

                            <?php if ($categorias) :
                                foreach ($categorias as $cat) : ?>
                                    <option value="<?= $cat['id']; ?>"> <?= $cat['nome']; ?> </option>
                            <?php endforeach;
                            endif; ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary"> Salvar </button>
                </form>

            <?php endif; ?>

        </div>
    </div>
</div>