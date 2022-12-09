<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descart-aqui</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <style>
        /*mapa*/
        html, body{
            height: 100%;
            /*margin: 0;
            padding: 0;*/
        }

        /*.conteudo-descarte-mapa, #descarte{
            display: flex;
            height: 100%;
            margin: 0;
            padding: 0;


            font-family: 'Montserrat';
            font-weight: 400;
            font-size: 18px;
            color: black;
        }

        .conteudo-descarte-mapa1{
            width: 60%;

            margin-left: 3%;
        }

        .conteudo-descarte-mapa2{
            width: 40%;
            background-color: rgb(0, 102, 255);

            margin-right: 3%;
        }*/

        /*h2{
            text-align: center;
        }*/

        #descarte h4{
            margin-left: 5%;
        }

        #map{
            margin-top: 1%;
            width: 90%;
            height: 80%;
            margin-left: 5%;
            
            margin-top: 3%;

            /*width: 65vw;
            height: 76%;
            margin-left: 17.5%;
            margin-bottom: 1%;
            width: 80vw;
            height: 70%;
            margin-left: 9.5%;*/
        }
        
    </style>


    <!-- Autocomplete Endereço -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        var searchInput = 'endereco';

        $(document).ready(function () {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode'],
            });

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var near_place = autocomplete.getPlace();
                document.getElementById('end-lat').value = near_place.geometry.location.lat();
                document.getElementById('end-lng').value = near_place.geometry.location.lng();

                document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
                document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
            });
        });
        
        $(document).on('change', '#'+searchInput, function () {
            document.getElementById('latitude_view').innerHTML = '';
            document.getElementById('longitude_view').innerHTML = '';
        });

    </script>
    
</head>
<body class="index">
    
    <div class="cabecalho-conteudo" id="cabecalho-conteudo">
        <header class="cabecalho" id="cabecalho">
            <a class="cabecalho-logo" href="#cabecalho-conteudo">DESCART-AQUI</a>
            <nav class="cabecalho-menu">
                <a class="cabecalho-menu-item" href="#cabecalho-conteudo">Início</a>
                <a class="cabecalho-menu-item" href="#sobre">Sobre</a>
                <a class="cabecalho-menu-item" href="#categorias">Categorias</a>
                <a class="cabecalho-menu-item" href="#danos">Danos</a>
                <a class="cabecalho-menu-item" href="#descarte">Descarte</a>
            </nav>        
        </header>

        <main class="conteudo" id="inicio">
            <section class="conteudo-principal">
                <h1 class="conteudo-principal-titulo">PEQUENAS AÇÕES <br> GRANDES MUDANÇAS</h1>
                <h2 class="conteudo-principal-subtitulo">Faça sua parte e ajude no descarte consciente de e-waste.</h2>
                <!--adicionado-->
                <a class="saiba-mais" href="#sobre"><button class="custom-btn btn-16">Saiba mais</button></a>
            </section>
    
            <section class="conteudo-secundario">
                <!--<img class="conteudo-secundario-imagem" src="image1.png" alt="Imagem e-waste">-->
            </section>
        </main>

    </div>

    <!-------------------------------------------------------------------->

    <main class="conteudo" id="sobre">
        <section class="conteudo-sobre1">
            <h4 class="conteudo-sobre-titulo1">O QUE É?</h4>
            <p class="conteudo-sobre-texto1">E-waste (termo em inglês para lixo eletrônico/resíduos eletrônicos), são todos os dispositivos eletroeletrônicos que foram descartados,
                quebrados, danificados ou que não tenham mais nenhuma utilidade para o dono. Uma das principais causas (se não a principal) da grande quantidade que vem sendo produzida é com certeza o 
                <b>consumo excessivo</b> desses aparelhos. Uma vez que somos sempre levados a acreditar que precisamos 
                trocá-los mesmos estes ainda estando em funcionamento.</p>
        </section>

        <section class="conteudo-sobre2">
            <img class="conteudo-sobre-imagem" src="https://herofutureenergies.com/uploads/blogs/1570685655unnamed.png" alt="Imagem e-waste">
            <!--https://img.freepik.com/icones-gratis/eletronicos_318-972944.jpg?w=996-->
            
        </section>
        
    </main>

    <!-------------------------------------------------------------------->

    <main class="conteudo" id="categorias">
        <section class="conteudo-categorias1">
            <h4 class="conteudo-categorias-titulo">TIPOS DE E-WASTE</h4>
            <p class="conteudo-categorias-texto">Eles são classificados de acordo com seu tamanho, manuseio e aplicação.</p>
        </section>

        <section class="conteudo-categorias2">
            <div class="section verde active">
                <h5 class="conteudo-categorias-titulo1">LINHA VERDE</h5>
                <p class="conteudo-categorias-texto1"> Computadores, tablets, celulares, impressoras, fones de ouvido.</p>
                <div class="categoria-img"><img class="conteudo-categorias-imagem1" src="https://cdn-icons-png.flaticon.com/512/44/44124.png" alt="Imagem celular"></div>
                
            </div>
            <div class="section marrom">
                <h5 class="conteudo-categorias-titulo2">LINHA MARROM</h5>
                <p class="conteudo-categorias-texto2"> Aparelhos de som, TV, equipamentos de DVD/VHS.</p>
                <div class="categoria-img"><img class="conteudo-categorias-imagem1" src="https://cdn-icons-png.flaticon.com/512/26/26643.png?w=740&t=st=1655937687~exp=1655938287~hmac=33f76e710e99e4956357f2a31cb84a0da072232df553306de1b06f9645f8daa3" alt="Imagem aparelho de som"></div>
            </div>
            <div class="section azul">
                <h5 class="conteudo-categorias-titulo3">LINHA AZUL</h5>
                <p class="conteudo-categorias-texto3"> Eletrodomésticos portáteis.</p>
                <div class="categoria-img"><img class="conteudo-categorias-imagem1" src="https://cdn-icons-png.flaticon.com/512/1243/1243775.png?w=740&t=st=1655938294~exp=1655938894~hmac=f06d6343895d3d260074ef3c39d8e06d8f76b1012393445f6b7d3d0c1f702ee8" alt="Imagem ventilador"></div>
            </div>
            <div class="section branco">
                <h5 class="conteudo-categorias-titulo4">LINHA BRANCA</h5>
                <p class="conteudo-categorias-texto4"> Eletrodomésticos de grande porte.</p>
                <div class="categoria-img"><img class="conteudo-categorias-imagem1" src="https://cdn-icons-png.flaticon.com/512/1235/1235885.png?w=740&t=st=1655939824~exp=1655940424~hmac=7b447680f68726d18bc7079d342c108fb7e1e55d63e46d6aba85a18757e6bedc" alt="Imagem geladeira"></div>
            </div>    
        </section>
    </main>

    <!-------------------------------------------------------------------->

    <main class="conteudo" id="danos">
        <section class="conteudo-danos1">
            <h4 class="conteudo-danos-titulo1">DANOS À SAÚDE PÚBLICA</h4>
            <p class="conteudo-danos-texto1">Apesar de não ser uma consequência ambiental propriamente dita, 
                este problema está diretamente relacionado ao descarte incorreto do lixo eletrônico, pois a 
                poluição causada pelo descarte incorreto pode causar danos à saúde da população que vive no 
                entorno dos aterros sanitários ou que vivem da separação dos resíduos destinados aos mesmos.</p>
        </section>

        <section class="conteudo-danos2">
            <h4 class="conteudo-danos-titulo2">COMPONENTES DANOSOS</h4>
            <table class="conteudo-danos-tabela">
                <tr>
                    <th style="width:15%">Componentes</th>
                    <th>Danos causados</th>
                    <th>Onde são encontrados?</th>
                </tr>
                <tr>
                    <td>Chumbo</td>
                    <td>Danos ao sistema nervoso e sanguíneo.</td>
                    <td>Computadores, celulares, televisão.</td>
                </tr>
                <tr>
                    <td>Mercúrio</td>
                    <td>Danos cerebrais e ao fígado.</td>
                    <td>Computador, monitor e TV de tela plana.</td>
                </tr>
                <tr>
                    <td>Cádmio</td>
                    <td>Envenenamento, danos aos ossos, rins e pulmões.</td>
                    <td>Computador, monitores de tudo antigos, baterias de laptops.</td>
                </tr>
                <tr>
                    <td>Arsênico</td>
                    <td>Doenças de pele, prejudica o sistema nervoso e pode causar câncer no pulmão.</td>
                    <td>Celular.</td>
                </tr>
                <tr>
                    <td>Belírio</td>
                    <td>Câncer no pulmão.</td>
                    <td>Computador, celular.</td>
                </tr>
                <tr></tr>
                <tr></tr>
            </table>
        </section>
    </main>

    <!-------------------------------------------------------------------->

    <!--<main class="conteudo" id="descarte">
        <section class="conteudo-sobre1">
            <h4 class="conteudo-sobre-titulo1">IMPORTÂNCIA DO DESCARTE CORRETO</h4>
            <p class="conteudo-sobre-texto1">Para evitar os danos causados pelo lixo eletrônico, 
                não há outro caminho que não seja investir no descarte correto e em programas de
                reciclagem que levem em conta todas as pessoas e instituições envolvidas na vida
                útil dos equipamentos. Ademais, em 2010 foi criada a <b>Lei 12.305/10</b> que 
                institui a Política Nacional de Resíduos Sólidos (PNRS), a fim de conferir diretrizes
                ao gerenciamento de resíduos sólidos no Brasil.</p>
        </section>

        <section class="conteudo-sobre2">
            <h4 class="conteudo-sobre-titulo2"> TÁ, MAS ONDE DESCARTAR?</h4>
            <p class="conteudo-sobre-texto2">⤷ O Instituto Brasileiro de Defesa do Consumidor (IDEC) lista as principais empresas de informática e celulares, e onde os aparelhos das marcas determinadas podem ser descartados.
                <br>⤷ A ONG Lixo Eletrônico também dá aos usuários uma lista de locais onde pode ser feita a doação de artigos para a reciclagem dos resíduos eletrônicos
                <br>⤷ Para doar seu computador para que ele faça parte de programas de inclusão digital, você pode procurar a CDI. Para isso é necessário que o seu PC tenha alguns requisitos básicos, para que possa ser reutilizado por crianças e comunidades carentes.
                </p>
        </section>
    </main>-->

    <main class="conteudo" id="descarte">
        <section class="form-container conteudo-descarte-mapa">
            <h4>LOCALIZADOR DE PONTOS DE DESCARTE</h4>
            <div id="map">
            </div>
        </section>

        <section class="form-container conteudo-descarte-cadastro">
            <form action="cadastrar.php" method="post">
                <h1>Cadastre-se</h1>
                <p class="inf-cadastro">Caso conheça algum ponto de descarte de e-lixo que não esteja no mapa, cadastre aqui.</p>
                <input type="text" name="nome" placeholder="Digite o nome do local" required/>
                <input type="email" name="email" placeholder="Digite o e-mail do local" />
                <input type="tel" name="telefone" placeholder="Digite o telefone do local" />
                
                <input type="text" name="local" id="endereco" placeholder="Digite o endereco completo do local" required/>
                
                <input type="hidden" name="lat" id="end-lat">
                <input type="hidden" name="lng" id="end-lng">

                <!--<select id="estado" name="estado">
                    <option value="AC">Escolha um estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                
                <input type="text" name="cidade" placeholder="Cidade" />-->
          
                <input type="submit" value="Cadastrar" id="enviar">
                <?php
                    if(isset($_SESSION['msgcadastro'])){
                        echo $_SESSION['msgcadastro'];
                        unset($_SESSION['msgcadastro']);
                    }
                ?>
            </form>
        </section>
      
    </main>

    <!-------------------------------------------------------------------->

    <footer class="rodape">
        <div class="rodape-icon">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
        </div>
    </footer>

    <!-- Display latitude and longitude
    <div class="latlong-view">
        <p><b>Latitude:</b> <span id="latitude_view"></span></p>
        <p><b>Longitude:</b> <span id="longitude_view"></span></p>
    </div> -->

    <script 
        async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4CFLSf6Dxgf9h60iv8LmuiPoLQKvEYBE&libraries=places&callback=initMap"
        defer
    ></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="pontos.js"></script> <!--pegar variável de outro arquivo-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    

    
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    <script>
        window.particlesJS.load('cabecalho-conteudo', 'particlesjs-config.json');
    </script>

</body>
</html>