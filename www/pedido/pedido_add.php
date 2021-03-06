<?php
    include '../cabecalho_interno.php';
    include '../bd_control/conecta.php';
    include '../bd_control/control.php';
    include 'pedido_control.php';

    $metodos = lista_tabela_simples($conexao, 'METODO');
?>
    <div class="container">
        <div class="row">
            <h3>Pedido - Adicionar</h3>
        </div>
        <hr />
        <?php
            include '../results.php';
        ?>
        <form action="add.php" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="cliente">Cliente</label>
                    <input type="text" class="form-control" id="cliente"
                        placeholder="Informe o Cliente" name="cliente"  required
                    >
                </div>
                <div class="form-group col-md-4">
                    <label for="frete">Frete</label>
                    <input type="number" step="any" class="form-control" id="frete"
                        placeholder="Informe o Frete" min="0" onchange="calculaTotal();" name="frete"
                        value="0"
                    >
                </div>
                <div class="form-group col-md-4">
                    <label for="met_pag">Método de Pagamento</label>
                    <select class="form-control" id="met_pag" name="met_pag" required>
                        <option value="">Escolha uma método</option>
                        <?php
                            foreach ($metodos as $metodo):
                        ?>
                                <option value="<?=$metodo['ID']?>"><?=$metodo['nome']?></option>
                        <?php
                            endforeach;
                        ?>
                    </select>
                </div>
            </div>
            <br><br>
            <input type="hidden" class="form-control" id="jogos" name="jogos" required>
            <input type="hidden" class="form-control" id="qnt_jogos" name="qnt_jogos" required>
            <input type="hidden" class="form-control" id="valor_total" name="valor_total" required>
            <input type="hidden" class="form-control" id="estoque" required>
            <div class="row">
                <div class="col-md-12">
                    <label for="jogo">Jogos</label>
                    <div id="list" class="row text-center">
                        <div class="table-responsive col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Código</th>
                                        <th class="text-center">Título</th>
                                        <th class="text-center">Preço</th>
                                        <th class="text-center">Quantidade</th>
                                        <th class="text-center">Total Individual</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    <tr id="adicionarNovo">
                                        <td>
                                            <input type="number" class="form-control" id="codigo" placeholder="Informe o Código">
                                            <input type="hidden" id="cod" name="cod_jogo">
                                        </td>
                                        <td id="titulo">   ----------   </td>
                                        <td id="preco">  -----  </td>
                                        <td>
                                            <input type="number" class="form-control" id="quantidade" min="0" placeholder="Informe a Quantidade" disabled>
                                        </td>
                                        <td id="total_unidade">  -----  </span></td>
                                        <td>
                                            <button type="button" id="addJogo" class="btn btn-sm btn-default"
                                                onclick="add(); return false;" disabled>
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody id="listaJogos">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="row text-right">
                <p><strong>Total</strong></p>
                <p id="total"> --- </p>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" onclick="return valida();" class="btn btn-primary">Adicionar</button>
                    <a href="../pedido.php" class="btn btn-default">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
    <script>
        $("#cliente").keypress( function(event){
            $( "#cliente" ).autocomplete({
                source: '../busca.php?campo=PESSOA_CPF&table=CLIENTE',
            });
        });
        $( "#cliente" ).on( "autocompleteselect", function( event, ui ) {
            var buscar = ui.item.value;
            $("#cliente").val(buscar);
        });
    </script>
    <?php
        include 'jogo_pedido.php';
        include '../rodape_interno.php';
    ?>
