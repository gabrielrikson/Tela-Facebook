<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/classesAuxiliares.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Facebook | Login</title>
</head>
<body>

    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div><!--logo-->

            <form method="post" class="form-login">
                <div class="form-element">
                    <p>Email ou telefone</p>
                    <input type="email" name="email" id="email" />
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha</p>
                    <input type="password" name="senha" id="senha"><br>
                    <p class="reset-password"><a href="#">Esqueceu a conta?</a></p>
                </div><!--form-element-->
                <div class="form-element">
                    <input type="submit" name="acao" value="Entrar">
                </div><!--form-element-->
            </form>
        </div><!--center-->
        <div class="clear"></div>
    </header><!--header-->

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <p>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</p>
                <img src="images/img1.png" alt="">
            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <p>É gratuito e sempre será.</p>
                <form action="" class="criar-conta">
                    <div class="w50">
                        <input type="text" name="" id="" placeholder="Nome">
                    </div>
                    <div class="w50">
                        <input type="text" name="" id="" placeholder="Sobrenome">
                    </div>
                    <div class="w100">
                        <input type="email" name="" id="" placeholder="Celular ou email">
                    </div>
                    <div class="w100">
                        <input type="password" name="" id="" placeholder="Nova Senha">
                    </div>
                    <div class="w100">
                        <h2>Data de Nascimento</h2>
                        <select name="nascimento-dia" id="" class="nascimento">
<!--                             <?php
                                for($dia = 1; $dia <= 31; $dia++){
                            ?>
                            <option value="<?php echo $dia; ?>"><?php echo $dia; ?></option>,
                            <?php } ?> -->
                        </select>
                        <select name="mascimento-mes" id="" class="nascimento">
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                        <select name="nascimento-ano" id="" class="nascimento">
                            <?php
                                for($ano = 1950; $ano <= 2021; $ano++){
                            ?>
                            <option value="<?php echo $ano; ?>"><?php echo $ano; ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" id="" value="Masculino">
                            <h2>Masculino</h2>
                        </div><!--input-radio-->
                        <div class="input-radio">
                            <input type="radio" name="sexo" id="" value="Masculino">
                            <h2>Feminino</h2>
                        </div><!--input-radio-->
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="politicas">
                        <p>Ao clicar em Cadastre-se, você concorda com nossos <a href=""> Termos Política de Dados e Política de Cookies</a>. Você poderá receber notificações por SMS e cancelar isso quando quiser.</p>
                    </div>

                    <div class="acao w50">
                        <input type="submit" value="Inscreva-se">
                    </div><!--acao-->
                </form><!--criar conta-->

                <p class="criar-pagina w100"><a href="">Criar uma Página</a> para uma Celebridade, banda ou empresa.</p>

            </div><!--abrir-conta-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->

    <section class="linguas">
        <div class="center">
            <ul>
                <li>
                    <a href="">Português (Brasil)</a>
                    <a href="">English (US)</a>
                    <a href="">Español</a>
                    <a href="">Français(France)</a>
                    <a href="">Italiano</a>
                    <a href="">Deutch</a>
                    <a href="">Arabic</a>
                    <a href="">Hindi</a>
                </li>
            </ul>
        </div><!--center-->
    </section><!--linguas-->


    <footer></footer>
</body>
</html>
