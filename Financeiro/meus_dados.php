<?php

    // ===== Requisição de Sessão Criada! =====
    require_once './DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    // == Final da Requisição de Sessão Criada! ==

    require_once './DAO/UsuarioDAO.php';

    // Objeto Global!
    $objDAO = new UsuarioDAO();

    if(isset($_POST['btnSalvar'])){
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $repSenha = trim($_POST['repSenha']);

        $ret = $objDAO->GravarMeusDados($nome, $email, $senha, $repSenha);
    }

    // Array!
    $dadosUser = $objDAO->CarregarMeusDados();

    // echo '<pre>';
    // var_dump($dadosUser);
    // echo '</pre>';

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include_once '_head.php'; ?>

<body>
    <div id="wrapper">
        <?php
            include_once '_topo.php';
            include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Alterar Dados de Cadastro do Usuário.</h2>
                        <h5>Aqui você pode ALTERAR seus dados de cadastro.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr/>
                <form action="meus_dados.php" method="POST">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Digite seu Nome:</label>
                            <input type="text" class="form-control" placeholder="Digite seu Nome aqui..." name="nome" id="nome" value="<?= $dadosUser[0]['nome_usuario'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Digite seu E-mail:</label>
                            <input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name="email" id="email" value="<?= $dadosUser[0]['email_usuario'] ?>"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Digite sua Nova Senha:</label>
                            <div class="ajuste-1">
                                <input type="password" class="form-control" placeholder="Digite sua Nova Senha aqui..." name="senha" id="senha" value="<?= $dadosUser[0]['senha_usuario'] ?>" maxlength="8"/>
                                <img src="./assets/img/img_senha.png" alt="Clique para ver sua Senha!" title="Clique para ver sua Senha!" id="olho1" class="icon-senha-1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Repita sua Nova Senha:</label>
                            <div class="ajuste-2">
                                <input type="password" class="form-control" placeholder="Repita sua Nova Senha aqui..." name="repSenha" id="repSenha" value="<?= $dadosUser[0]['senha_usuario'] ?>" maxlength="8"/>
                                <img src="./assets/img/img_senha.png" alt="Clique para ver sua Senha!" title="Clique para ver sua Senha!" id="olho2" class="icon-senha-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-success" name="btnSalvar" onclick="return ValidarMeusDados();">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>

        // Manipula a visualização da Senha!
        $( "#olho1" ).mousedown(function() {
            $("#senha").attr("type", "text");
        });

        $( "#olho1" ).mouseup(function() {
            $("#senha").attr("type", "password");
        });

        // Manipula a visualização do Repetir Senha!
        $( "#olho2" ).mousedown(function() {
            $("#repSenha").attr("type", "text");
        });

        $( "#olho2" ).mouseup(function() {
            $("#repSenha").attr("type", "password");
        });

    </script>
</body>
</html>