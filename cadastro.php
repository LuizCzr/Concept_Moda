<div class="container_cadastro">
    <div class="caixa_cadastro">
        <div class="cadastro">
            <h3>Cadastre-se para aproveitar beneficios exclusivos!</h3>
            <form action="?pg=admin/cadastra_usuario" method="post">
                <div class="form-group">
                    <label>Nome completo:</label>
                    <input type="text" name="nome" required>
                </div>
                
                <div class="form-group">
                    <label>E-mail:</label>
                    <input type="email" name="email" required>
                </div>

                <div class="form-group">
                    <label>Usuario:</label>
                    <input type="text" name="usuario" required>
                </div>
                
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" name="senha" required>
                </div>
                
                <div class="form-group">
                    <label>Telefone:</label>
                    <input type="tel" placeholder="(xx) xxxxx-xxxx" name="telefone" required>
                </div>
                
                <div class="botaocadastro">
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>
</div>