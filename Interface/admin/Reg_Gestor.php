
<?php

include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");

?>



        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="javascript.js"></script>
        
    
        <form method="post" action="Gestor.php"  name="Gestor" id="form">
        <nav class="Formularios" >
            <div>
                 <input type="text" class="Codigo" id="Codigo" placeholder="Insira o Código do Bilhete" name="Idade_Max" size="20" maxlength="12">
            </div>
             <div>
                 <input type="text" class="Nome" id="Nome" placeholder="Nome do Gestor" name="nome" size="20" maxlength="12">
            </div>
            
            <div>
                <label>Área:
                     <select class="Areas"> 
                        <option>Director de Recursos Humanos</option>
                        <option>Director de Tecnologias de Informação</option>
                        <option>Director Comercial</option>
                        <option>Director de Producao</option>
                        <option>Chefe do Departamento de Segurança</option>
                        <option>Chefe de Secção de Secretariado Executivo</option>
                        
                    </select>
                </label>
            </div>
           
            <div>
          <label>Filial:
                     <select class="Filial"> 
                        <option>Sede-Luanda</option>
                        <option>Martires</option>
                        <option>Kwanza-Sul</option>
                        <option>Lubango</option>
                        <option>Namibe</option>
                        <option>Cabinda</option>
                        
                    </select>
                </label>
            </div>
            <div class="Bottons" name="Bottons">
                
                
                <button class="Anular" name="anular" >Cancelar</button>   
                <button class="Alterar" name="Alterar" >Registar</button>
                   
            </div>
            
         
        </nav>
           
               
           
            
        
        
        </form>
        
    
    </body>




</html>