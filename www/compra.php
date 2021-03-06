<?php
    include 'cabecalho.php';
    include 'bd_control/conecta.php';
    include 'bd_control/control.php';
    include 'compra/compra_control.php';

    $compras = lista_compra($conexao);
?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Compras</h2>
            </div>
            <div class="col-md-6">
                <div class="input-group h2">
                    <input name="busca" class="form-control" id="busca" type="text" placeholder="Pesquisar Pedidos">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                </div>
            </div>
            <div class="col-md-3">
                <a href="compra/compra_add.php" class="btn btn-primary pull-right h2">Nova Compra</a>
            </div>
        </div>
        <div class="row text-center ">
            <ul class="list-inline">
                <li>
                    <div class="form-group">
                        <input type="radio" id="busca_sup" name="campo" value="user" checked>
                        <label for="busca_sup">Supervisor</label>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                            <input type="radio" id="busca_ID" name="campo" value="C.ID">
                            <label for="busca_ID">ID</label>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <input type="radio" id="busca_emp" name="campo" value="nome" checked>
                        <label for="busca_emp">Empresa</label>
                    </div>
                </li>
            </ul>
        </div>
        <hr />
        <?php include 'results.php'; ?>
        <div id="list" class="row text-center">
            <div class="table-responsive col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Empresa</th>
                            <th class="text-center">Supervisor</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Data</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="itens">
                        <?php
                            foreach ($compras as $row):
                        ?>
                                <tr>
                                    <td><?=$row['ID']?></td>
                                    <td><?=$row['nome']?></td>
                                    <td><?=$row['user']?></td>
                                    <td>R$ <?=$row['preco_total']?></td>
                                    <td><?=date('d/m/Y', strtotime($row['data']))?></td>
                                    <?php
                                        include 'acoes.php';
                                    ?>
                                </tr>
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

<?php
    include "modal_excluir.php";
    include "busca_com_filtro.php";
    include "rodape.php";
?>
