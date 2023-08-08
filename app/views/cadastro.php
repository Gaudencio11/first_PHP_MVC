<div class="container row">
    <div class="col-sm-12">
        <h1>Tela Cadastro</h1>
    </div>

    <div class="col-sm-12">
        <form action="?router=Site/cadastrado/" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Type your name</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>