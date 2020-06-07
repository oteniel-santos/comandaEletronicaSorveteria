 <!--CAMPOS DO FORMULÁRIO  -->
 <input type="hidden" name="codProduto" value="<?=$dados['codProduto']?>">
 
<div class="row mb-3"> 
    <div class="col-8"> 
        <label>Sabor</label>
                <input type="text" 
                required
                    name="sabor"
                    class="form-control" 
                    placeholder="Digite o sabor do sorvete"
                    value="<?=$dados['sabor']?>" 
                >
    </div>        
</div>

<div class="row  mb-3">
    <div class="col-4">
        <label>preco</label>
        <input type="number" 
               name="preco"
               step=0.01  
               class="form-control" 
               placeholder="Digite o preço"
               value="<?=$dados['preco']?>" 
        >
    </div>

 
</div>        

            <!-- FIM CAMPOS DO FORMULÁRIO  -->