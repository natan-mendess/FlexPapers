<?php
require "cabecalho.php";
require "conexao.php";

$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
$limite = 8;
$inicio = ($pagina * $limite) - $limite;

$comandoCount = "SELECT COUNT(titulo) as count FROM produtos";
$consulta = mysqli_query($conexao, $comandoCount);
$resultadoConsulta = mysqli_fetch_assoc($consulta);
$registros = $resultadoConsulta['count'];
$paginas = ceil($registros / $limite);

if (isset($_GET['busca'])) {
    $pesquisa = $_GET['busca'];
    $comando = "SELECT idprod, titulo, foto, preco FROM produtos WHERE titulo LIKE '%$pesquisa%' LIMIT $inicio, $limite";
} else {
    $comando = "SELECT idprod, titulo, foto, preco FROM produtos LIMIT $inicio, $limite";
}

$resultado = mysqli_query($conexao, $comando);
$registrosProduto = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

if (isset($_GET['busca']) && empty($registrosProduto)) {
    echo "<div class=\"nenhum-resultado\">Nenhum resultado encontrado</div>";
} else {
    ?>
    <div class="linhas">
        <div class="linha">
            <?php
            $contador = 0;
            foreach ($registrosProduto as $registro) :
                $id = $registro["idprod"];
            ?>
                <div class="produto">
                    <a href="ver_produto.php?idprod=<?= $id ?>"><img src="<?= $registro["foto"] ?>" alt="foto_produto" class="img_produto"></a>
                    <a href="ver_produto.php?idprod=<?= $id ?>" class="nome_produto"><?= $registro["titulo"] ?></a>
                    <p class="preco_produto">R$ <?= number_format($registro["preco"], 2, ',', '.') ?></p>
                </div>
                <?php
                $contador++;
                if ($contador % 4 == 0) {
                    echo '</div><div class="linha">';
                }
            endforeach;
            ?>
        </div>
    </div>

    <div class="paginacao">
        <a href="?pagina=1"<?= ($pagina == 1) ? ' class="pagina-atual"' : '' ?>>Primeira</a>

        <?php if ($pagina > 1): ?>
            <a href="?pagina=<?= $pagina - 1 ?>" class="setas"> << </a>
        <?php endif; ?>

        <?= $pagina ?>

        <?php if ($pagina < $paginas): ?>
            <a href="?pagina=<?= $pagina + 1 ?>" class="setas"> >> </a>
        <?php endif; ?>

        <a href="?pagina=<?= $paginas ?>"<?= ($pagina == $paginas) ? ' class="pagina-atual"' : '' ?>>Última</a>
    </div>
    <?php
}

require "rodape.php";
?>
