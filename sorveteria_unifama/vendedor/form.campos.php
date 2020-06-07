 <!--CAMPOS DO FORMULÁRIO  -->
 <input type="hidden" name="codVendedor" value="<?=$dados['codVendedor']?>">
 
<div class="row mb-3"> 
    <div class="col-8"> 
        <label>Nome</label>
                <input type="text" 
                    name="nomeVendedor" 
                    class="form-control" 
                    placeholder="Digite aqui seu nome"
                    value="<?=$dados['nomeVendedor']?>" 
                >
    </div>        
</div>

<div class="row mb-3"> 
    <div class="col-8"> 
        <label>Comissão</label>
                <input type="text" 
                    name="comissaoVenda" 
                    class="form-control" 
                    placeholder="Digite aqui seu nome"
                    value="<?=$dados['comissaoVenda']?>" 
                >
    </div>        
</div>


            <!-- FIM CAMPOS DO FORMULÁRIO  -->