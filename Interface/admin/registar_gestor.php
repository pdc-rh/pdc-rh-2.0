<?php
include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");
?>
<div class="main">
    <div class="titulo">
        <span>Funcionário/ Registar Gestor</span>
    </div>
</div>
<form method="post" action="../../controlador/gestor_areaControlalor.php"  id="formulario">
            <input type="text" class="bi" id="bi" placeholder="Insira o Código do Bilhete" name="bi" size="20" maxlength="12">


            <label>Área:</label>
                <select name="area">
                    <?php  
                        $a1 = oci_connect("pdc-rh-v2", "123","localhost/XE"); 
                        $consulta1 = oci_parse($a1, "select * from area"); 
                        oci_execute($consulta1); 
                        while ($row1 = oci_fetch_array($consulta1)){ 
                            echo"<option value='".$row1['ID']."'>".$row1['NOME']."</option>"; 
                        } 
                        oci_free_statement($consulta1);
                        oci_close($a1);
                    ?> 

                </select>

            <label>Filial:</label>
                <select name="filial">
                     <?php  
                        $a1F = oci_connect("pdc-rh-v2", "123","localhost/XE"); 
                        $consulta1F = oci_parse($a1F, "select * from filial"); 
                        oci_execute($consulta1F); 
                        while ($row1 = oci_fetch_array($consulta1F)){ 
                            echo"<option value='".$row1['ID']."'>".$row1['DESCRICAO']."</option>"; 
                        } 
                        oci_free_statement($consulta1F);
                        oci_close($a1F);
                    ?> 

                </select>

             <label>Tipo:</label>
                <select name="tipo">
                    <option value="Gestor de area">Gestor de outras area</option>
                    <option value="Gestor de R&H">Gestor de R&H</option>
                </select>
        <div>


            <button class="Anular" name="anular" >Cancelar</button>
            <button class="Alterar" name="Alterar" >Registar</button>

        </div>
</form>
</body>
</html>