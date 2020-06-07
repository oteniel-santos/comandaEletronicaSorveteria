 <!--CAMPOS DO FORMULÁRIO  -->
 <input type="hidden" name="cod" value="<?=$dados['cod']?>">
 
<div class="row mb-3"> 
    <div class="col-8"> 
        <label>Nome</label>
                <input type="text" 
                    name="nome" 
                    class="form-control" 
                    placeholder="Digite aqui seu nome"
                    value="<?=$dados['nome']?>" 
                >
    </div>        
</div>

<div class="row  mb-3">
    <div class="col-4">
        <label>CPF</label>
        <input type="text" 
               name="cpf" 
               class="form-control" 
               placeholder="Digite aqui seu cpf"
               value="<?=$dados['cpf']?>" 
        >
    </div>

     <div class="col-4">       
        <label>Telefone</label>
        <input type="text" 
               name="fone" 
               class="form-control" 
               placeholder="Digite aqui seu fone"
               value="<?=$dados['fone']?>" 
        >
    </div>
</div>

<div class="row mb-3">
<div class="col-8">
        <label>Endereço</label>
        <input type="text" 
               name="end" 
               class="form-control" 
               placeholder="Digite aqui seu end"
               value="<?=$dados['end']?>" 
        >
   </div>    
</div>


<div class="row mb-4">
<div class="col-3">        
        <label>Data Cadastro</label>
        <input type="date" 
               name="dataCadastro" 
               class="form-control" 
               placeholder="Digite aqui seu dataCadastro"
               value="<?=$dados['dataCadastro']?>" 
        >
</div>
</div>        

            <!-- FIM CAMPOS DO FORMULÁRIO  -->