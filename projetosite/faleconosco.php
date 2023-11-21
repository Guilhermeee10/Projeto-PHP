<!DOCTYPE html>
    <body>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="site.css"> 
        <div class="conteudo">
            <section class="parte">
                <h3 style="font-size: 22px; margin-bottom:20px; color: #592F20;"> Sobre o Formulário de Feedback ao lado</h3>
                <br>
                <p>
                    Estamos sempre empenhados em oferecer a melhor experiência possível aos nossos clientes. Com o objetivo de aprimorar nossos serviços, implementamos um formulário de feedback que permite a você, nosso valioso cliente, compartilhar suas opiniões conosco.
                </p>
                <br>
                <p>
                    Este formulário abrange uma variedade de áreas, desde reclamações e dúvidas até elogios e sugestões. Acreditamos que cada interação com nossos clientes é uma oportunidade de aprendizado e crescimento, e valorizamos imensamente suas contribuições.
                </p>
                <br>
                <p>
                    Agradecemos por dedicar seu tempo para nos ajudar a servir melhor você e todos os nossos clientes. Juntos, continuaremos a construir uma relação de confiança e excelência.
                </p>
                <img src="img/PHP_Chocolates__Logo_-removebg-preview.png" style="width: 280px; margin-left: 100px;">
            </section>
            <section class="parte">
                   <form action="sucesso.php" method="post">
                        <fieldset>
                            <legend><b>Formulário de envio para a empresa</b></legend>
                                <label style="margin-left: 1rem;" for="nome">Nome: </label>
                                <input id="nome" type="text"name="nome" placeholder="Digite seu nome..." required>
                                <br>
                                <label style="margin-left: 1rem;" for="sobrenome">Sobrenome: </label>
                                <input id="sobrenome" type="text"name="sobrenome" placeholder="Digite seu sobrenome...">
                                <br>
                                <label style="margin-left: 1rem;" for="email">E-mail: </label>
                                <input id="email" type="email"name="email" placeholder="Digite seu email aqui..." required>
                                <br>
                                <br>
                                Informe seu sexo:<input type="radio" name="sexo" value="M"> Masculino
                                <input type="radio" name="sexo" value="F">Feminino
                                <input  type="radio" name="sexo" value="O">Outros
                                <input  type="radio"  name="sexo" value="P">Prefiro não informar
                                <br>
                                <label style="margin-left: 1rem;">Selecione qual o assunto: </label>
                                <select name="assunto"><br>
                                    <option value="Reclamações">Reclamações</option>
                                    <option vlaue="Dúvidas">Dúvidas</option>
                                    <option value="Sugestões">Sugestões</option>
                                    <option value="Elogios">Elogios</option>
                                    <option value="Outros assuntos">Outros assuntos</option>
                                </select>
                                <br>
                                <br>
                                <label style="margin-left: 1rem;" for="caixa">Mensagem: </label>
                                <br>
                                <textarea id="caixa" name="mensagem"
                                placeholder="Digite sua mensagem..." required></textarea>
                                <br>
                                <input type="reset" value="Resetar" class="botao_resetar">
                                <input type="submit" value="Enviar" class="botao_enviar">
                        </fieldset>
                    </form>
                </section>
            </div>
    </body>
</html>
