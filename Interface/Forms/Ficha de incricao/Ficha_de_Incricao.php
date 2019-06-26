

<?php
include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");
?>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="javascript.js"></script>
        
        
    
    
        <form method="post" action="Ficha_de_Incricao.php"  name="ficha" id="form">
        <nav class="Formularios" >
            <div >
                    
                    <input type="text" class="text_Nome" type="text"  id="nome" name="nome" size="50" maxlength="30" required/>  
                    <label class="Ind_Nome" for="Nome" autocomplete="off">Nome</label>
            
            </div>
            
             <div  >  
                    <label  >Data de Nascimento :   
                    <input class="Data_Nasc" type="date"/> 
            </label> 
            </div>
            
            <div class="Genero">
             
                    <span class="Genero">Genero :</span>
                    <input type="radio"  class="GeneroM" name="Genero" value="Masculino" checked="checked" />Masculino
                    <input type="radio"  class="GeneroF" name="Genero" value="Femenino" />Femenino
                    
           </div>
            
            
            
            <div class="Estado_Civ"  >
               <p> Estado Civil: 
                    <select class="Estado_Civil">
                        <i class="fas fa-angle-down"></i>
                        <option>Solteiro</option>
                        <option>Casado</option>
                        <option>Divorciado</option>
                        <option>Viuvo</option>
                        
                    </select>
                    
               </p>
            </div>
            
            
            
           
            
             <div  >
                    
                    <input type="text" class="text_Morada" type="text"  required id="Morada" name="morada"  size="53" maxlength="100"/> 
                 <label class="Ind_Morada" for="Morada">Morada</label>              
            
            </div>
            <div >
                     
                    <input type="text"  class="text_BI" type="text"  required id="B.I" name="bi" size="20" maxlength="14"/>
                    <label class="Ind_BI" for="B.I">B.I Nº</label> 
                
                
            </div>
            <div>
                    
                    <input type="tel" class="text_Telefone" type="tel" id="Telefone" required name="telefone" size="20" maxlength="12">
                    <label class="Ind_Tel" for="Telefone">Telefone</label>
                
            </div>
            
            
            
            
            
            <div class="Carta_Cond">
             
                    <span class="Carta">Tem Carta de Condução:</span>
                    <input type="radio"  class="CartaS" name="carta" value="Sim" checked="checked" />Sim
                    <input type="radio"  class="CartaN" name="carta" value="Não" />Não
                    
           </div>
            
             
            
            
            
            <div class="Perfil_Oferta"  >
               <p> Oferta de Candidatura : 
                    <select class="Perfil_Ofer" name="perfil">
                       
                        <option>Tecnico de Contabilidade</option>
                        <option>Gestor de Stock</option>
                        <option>Corrector de Bolsa</option>
                        <option>Operador de Maquinas</option>
                        
                    </select>
                    
               </p>
            </div>
            <div class="Bottons" name="Bottons">
                
                
                <button class="Cancelar" name="cancelar" >Cancelar</button>   
                <button class="Enviar" name="enviar" onclick="validar()">Enviar</button>
            </div>
         
            
             
        </nav>
           
               
           
            
        
        
        </form>
        
    
    </body>




</html>