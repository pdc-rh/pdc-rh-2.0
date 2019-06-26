
<?php
include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");
?>
<div class="main">
    <div class="titulo">
        <span>Estatisticas/ Para cada Filiar listar Todos funcionarios</span>
    </div>
</div>
<div class="agrupar">

    <form method="post">
        <select name="local">
            <?php  
                $a1 = oci_connect("pdc-rh-v2", "123","localhost/XE"); 
                $consulta1 = oci_parse($a1, "select * from local"); 
                oci_execute($consulta1); 
                while ($row1 = oci_fetch_array($consulta1)){ 
                    echo"<option value='".$row1['ID']."'>".($row1['PROVINCIA']."-".$row1['MUNICIPIO']."-".$row1['BAIRRO']."-".$row1['RUA'])."</option>"; 
                } 
                oci_free_statement($consulta1);
                oci_close($a1);
            ?> 
        </select>
    <input type="submit" value="buscar" name="buscar">
    <br><br>

    <table class="tabela">
        <thead>
        <tr>
            <th>BI</th>
            <th>Nome do Candidato</th>
            <th>Morada</th>
      
        </tr>
        </thead>

        <tbody>
        <tr>
           
            <?php 
                if(isset($_POST['buscar'])){
                    
                    $codLocal=$_POST['local'];
                
                    $a1 = oci_connect("pdc-rh-v2", "123","localhost/XE"); 
                    $consulta1 = oci_parse($a1, "select funcionario.bi_pessoa, pessoa.bi, pessoa.nome, pessoa.id_local_morada, filial.id,filial.descricao from funcionario,pessoa,filial where funcionario.bi_pessoa = pessoa.bi and funcionario.id_filial='$codLocal' "); 
                    oci_execute($consulta1); 
                    while ($row1 = oci_fetch_array($consulta1)){ 
                        echo"<td>".$row1['BI']."</td><td>".$row1['NOME']."</td><td>".$row1['DESCRICAO']."</td></tr>";
    } 
                    oci_free_statement($consulta1);
                    oci_close($a1); 
                }
            ?> 
            
            
           </form>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>

