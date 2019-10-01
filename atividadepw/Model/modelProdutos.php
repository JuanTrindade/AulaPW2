<?php


/*function somar($num1, $num2){
    $soma = $num1+$num2;
    return $soma;
}*/

function buscarOproduto()
{
    include "conexao.php";
    $sql = $conn->prepare("SELECT * FROM produto WHERE ativo = true");
    $sql->execute();
    $executador = $sql->get_result();

    while($linha = $executador->fetch_assoc()){
        /*echo $linha['nome'];
        echo "<br>";
        echo "Por apenas R$".$linha['preco'];
        echo "<br>";
        echo $linha['descricao'];*/
        echo "
            <div class='col-lg-3 col-sm-6 mb-5 mx-auto'>
                <div class='card h-100'>
                <div class='card border border-dark'>
                    <img class='card-img-top mx-auto' style='width: 150px;' src='View/carrinho.png'>
                    <div class='card-body'>
                        <h4 class='card-title text-center mb-5'>".$linha['nome']."</h4>
                        <center><h6 class='card-subtitle'>".$linha['descricao']."</h6></center>
                    </div>
                    <div class='card-footer bg-white border-0'>
                        <form action='' method='POST'>
                            <button class='btn btn-outline-success btn-block card-link'>
                                <label class='mr-3 mt-2'>".$linha['preco']."</label>
                                <img class='w-25 p-3 h-25 d-inline-block' src='View/carrinho.png' alt='Carrinho de compras'>
                            </button>
                        </form>
                        </div>
                    </div>     
                </div>
            </div>
        ";
    }
}

?>