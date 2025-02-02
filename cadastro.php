<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:ital,wght@1,700&family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Cadastro</title>
</head>

<body>
    <div id="msgError"></div>
    <div id="msgSuccess"></div>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//undraw_shopping_re_3wst.svg" alt="">
        </div>
        <!--Formulário - cadastro de usuário-->
                    <div class="form">
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                        <form action="envio.php" method="POST">
                            <div class="form-header">
                                <h1>Cadastre-se</h1>
                            </div>
            
                            <div class="input-group">
                                <div class="input-box">
                                    <label id="labelNome" for="nome">Nome Completo</label>
                                    <input id="firstname" type="text" name="nome" size="25" placeholder="Digite seu  nome" required>
                                </div>
            
                                <div class="input-box">
                                    <label id="labelS" for="cpf">CPF</label>
                                    <input id="lastname" type="text" name="cpf" size="25" placeholder="   .   .    -  "
                                        required>
                                </div>
                                <div class="input-box">
                                    <label id="labelEmail" for="email">E-mail</label>
                                    <input id="email" type="email" name="email" size="25" placeholder="Digite seu e-mail" required>
                                </div>
            
                                <div class="input-box">
                                    <label id="labelCelular" for="telefone">Telefone</label>
                                    <input id="number" type="text" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                                </div>
            
                                <div class="input-box">
                                    <label id="labelSenha" for="cep">CEP <input name="cep" type="text" id="cep" value="" size="25" maxlength="9"  placeholder="Digite o cep" onblur="pesquisacep(this.value);"  placeholder="Digite o cep" required/></label>
                                </div>
            
                                <form method="get" action=".">
                 
                  
                   <div class="input-box">
                    <label id="labelCidade" for="cidade" >Cidade:
                    <input name="cidade" type="text" id="cidade" size="25" placeholder="digite sua cidade"/></label><br />
                    </div>
                    <div class="input-box">
                    <label id="labelEstado" for="uf" >Estado:
                    <input name="uf" type="text" id="uf" size="25"  placeholder="digite seu estado"/></label><br />
                    <div>
                     <div class="input-box">
                    <label id="labelBairro" for="ibge">Bairro:
                    <input name="ibge" type="text" id="ibge" size="25" placeholder="digite seu bairro" required/></label><br />
                    </div>
                </form>
                    </div>
                <script>
                
                function limpa_formulário_cep() {
                        //Limpa valores do formulário de cep.
                        document.getElementById('rua').value=("");
                        document.getElementById('bairro').value=("");
                        document.getElementById('cidade').value=("");
                        document.getElementById('uf').value=("");
                        document.getElementById('ibge').value=("");
                }
            
                function meu_callback(conteudo) {
                    if (!("erro" in conteudo)) {
                        //Atualiza os campos com os valores.
                        document.getElementById('rua').value=(conteudo.logradouro);
                        document.getElementById('bairro').value=(conteudo.bairro);
                        document.getElementById('cidade').value=(conteudo.localidade);
                        document.getElementById('uf').value=(conteudo.uf);
                        document.getElementById('ibge').value=(conteudo.ibge);
                    } //end if.
                    else {
                        //CEP não Encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                }
                    
                function pesquisacep(valor) {
            
                    //Nova variável "cep" somente com dígitos.
                    var cep = valor.replace(/\D/g, '');
            
                    //Verifica se campo cep possui valor informado.
                    if (cep != "") {
            
                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;
            
                        //Valida o formato do CEP.
                        if(validacep.test(cep)) {
            
                            //Preenche os campos com "..." enquanto consulta webservice.
                            document.getElementById('rua').value="...";
                            document.getElementById('bairro').value="...";
                            document.getElementById('cidade').value="...";
                            document.getElementById('uf').value="...";
                            document.getElementById('ibge').value="...";
            
                            //Cria um elemento javascript.
                            var script = document.createElement('script');
            
                            //Sincroniza com o callback.
                            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
            
                            //Insere script no documento e carrega o conteúdo.
                            document.body.appendChild(script);
            
                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulário_cep();
                            alert("Formato de CEP inválido.");
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulário_cep();
                    }
                };
            
                </script>
                           
            
                            <div class="input-box">
                                <label id="labelEndereço" for="endereço">Endereço</label>
                                <input id="endereço" type="text" name="endereço" size="25"
                                    placeholder="Digite sua senha novamente" required>
                            </div>
            
                            <div class="input-box">
                                <label id="labelNúmero" for="complemento">Número</label>
                                <input id="numero"type="text" name="numero" size="25"
                                    placeholder="Digite sua senha novamente" required>
                            </div>
            
                            <div class="input-box">
                                <label id="labelComplemento" for="complemento">Complemento</label>
                                <input id="complemento" type="text" name="complemento" size="25"
                                    placeholder="Digite sua senha novamente" required>
                            </div>
            
                            <button onclick="entrar()" id="btn_entrar" type="submit">Entrar</button>
            </form>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

        </div>
    </div>
     
    <script src="cadastro.js"></script>
</body>

</html>