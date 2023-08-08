<div class="container row">
    <div class="col-sm-12">
        <h1>Tela Consulta</h1>
    </div>

    <div class="col-sm-12">

        <table border="1">
            <tr>
                <th>Nome</th> <th>Email</th> <th>Número</th> <th>Ações</th>
            </tr>
            
            <?php foreach($consulta as $registro):?>
            <tr>
                <th><?php echo  $registro['nome'] ?></th>
                <th><?php echo  $registro['email'] ?></th>
                <th><?php echo  $registro['phone'] ?></th>
                <th>
                    <a href="?router=Site/editar/&id=<?php echo base64_encode($registro['id'])?>"> Update </a> |
                    <a href="?router=Site/deletar/&id=<?php echo base64_encode($registro['id'])?>"
                        data-toggle="modal" 
                        data-target="#exampleModal"
                    > Deletar </a> |
                </th>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Você confirma a Exclusão desse Registro?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger"> 
            <a style="text-decoration: none; color: white" href="?router=Site/deletar/&id=<?php echo base64_encode($registro['id'])?>"> Excluir </a>
        </button>
      </div>
    </div>
  </div>
</div>