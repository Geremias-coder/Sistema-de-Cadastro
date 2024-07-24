<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuários (nome,email,senha,data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro realizado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel cadastrar, tente novamente');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuários SET nome='{$nome}', email='{$email}', senha='{$senha}', data_nasc='{$data_nasc}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Edição realizada com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel editar, tente novamente');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
        case 'excluir':

            $sql = "DELETE FROM usuários WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel excluir, tente novamente');</script>";
                print "<script>location.href='?page=listar';</script>";
            }


            break;
    }