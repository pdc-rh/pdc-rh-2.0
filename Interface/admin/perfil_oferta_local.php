<?php
include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");
?>
<div class="main">
    <div class="titulo">
        <span>Estatisticas/ Lista dos perfill de Oferta por Local</span>
    </div>
</div>
<div class="agrupar">


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
                $a1 = oci_connect("pdc-rh-v2", "123","localhost/XE"); 
                $consulta1 = oci_parse($a1, "select candidato.bi_pessoa,pessoa.bi,pessoa.nome,pessoa.id_local_morada,local.id,local.provincia,local.municipio,local.bairro,local.rua from candidato,pessoa,local where candidato.bi_pessoa=pessoa.bi and pessoa.id_local_morada=local.id order by local.id asc "); 
                oci_execute($consulta1); 
                while ($row1 = oci_fetch_array($consulta1)){ 
                    echo"<td>".($row1['BI']."</td><td>".$row1['NOME']."</td><td>".$row1['MUNICIPIO']."-".$row1['BAIRRO']."-".$row1['RUA'])."</td></tr>"; 
                } 
                oci_free_statement($consulta1);
                oci_close($a1);
            ?> 
            
            
            
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>