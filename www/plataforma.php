<?php
    include 'cabecalho.php';
    include 'bd_control/conecta.php';
    include 'bd_control/control.php';
    include 'plataforma/plataforma_control.php';

    $rows = lista_tabela_simples($conexao, $table);
?>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Plataformas</h2>
            </div>
            <div class="col-md-6">
                <div class="input-group h2">
                    <input name="busca" class="form-control" id="busca" type="text"
                    placeholder="Pesquisar Plataformas">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                </div>
            </div>
            <div class="col-md-3">
                <a href="plataforma/plataforma_add.php" class="btn btn-primary pull-right h2">Nova Plataforma</a>
            </div>
        </div>
        <hr />
        <?php
            include 'results.php';
        ?>
        <br>
        <div id="list" class="row text-center">
            <div class=" table-responsivecol-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Plataforma</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="itens">
                        <?php
                            foreach ($rows as $row):
                        ?>
                                <tr>
                                    <td><?= $row['nome'] ?></td>
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
    include "busca_control.php";
    include "rodape.php";
?>
