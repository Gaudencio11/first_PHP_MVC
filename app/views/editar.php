<div class="container row">
    <div class="col-sm-12">
        <h1>Tela Edição de Usuário</h1>
    </div>

    <div class="col-sm-12">
        <form action="?router=Site/editado/" method="POST">

        <?php foreach($read_one as $registro):?>

            <input type="hidden" name="id" value="<?php echo $registro['id']?>">

            <div class="mb-3">
                <label for="nome" class="form-label">Type your name</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $registro['nome']?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $registro['email']?>">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $registro['phone']?>">
            </div>
        <?php endforeach;?>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>