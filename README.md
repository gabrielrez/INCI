<h3>API</h3>
<h4>Geral</h4>
<ul>
  <li>Framework: Slim PHP</li>
  <li>Rotas Disponíveis: '/plataformas', '/ferramentas'</li>
  <li>Formato de Resposta: JSON</li>
</ul>
<h4>Dependências</h4>
<ul>
  <li>Composer: Utiliza autoload do Composer</li>
  <li>PSR-7: Implementação para manipulação de requisições e respostas HTTP</li>
</ul>
<h4>Diretórios</h4>
<ul>
  <li>Arquivo Principal: 'index.php'</li>
  <li>Vendor: 'vendor/' (gerado pelo Composer)</li>
  <li>Imagens: '/public/img/'</li>
</ul>

<br>

<h3>Javscript</h3>
<h4>fetchPlataformas</h4>
<ul>
  <li>Descrição: Função assíncrona que busca dados das plataformas a partir da API</li>
  <li>Retorno: Dados das plataformas em formato JSON</li>
</ul>

<h4>displayPlataformas</h4>
<ul>
  <li>Descrição: Função que exibe as plataformas na página HTML</li>
  <h5>Parâmetros</h5>
  <ul>
    <li>plataformas: Array de objetos contendo os dados das plataformas</li>
  </ul>
   <h5>Funcionamento</h5>
  <ul>
    <li>Seleciona o container com a classe .plataformas-container</li>
    <li>Limpa o conteúdo do container</li>
    <li>Itera sobre o array de plataformas, criando elementos HTML para cada uma e inserindo-os no container</li>
  </ul>
</ul>

<h4>fetchFerramentas</h4>
<ul>
  <li>Descrição: Função assíncrona que busca dados das ferramentas a partir de uma API</li>
  <li>Retorno: Dados das ferramentas em formato JSON</li>
</ul>

<h4>displayFerramentas</h4>
<ul>
  <li>Descrição: Função que exibe as ferramentas na página HTML</li>
  <h5>Parâmetros</h5>
  <ul>
    <li>ferramentas: Array de objetos contendo os dados das ferramentas</li>
  </ul>
   <h5>Funcionamento</h5>
  <ul>
    <li>Seleciona o container com a classe .ferramentas-container</li>
    <li>Limpa o conteúdo do container</li>
    <li>Itera sobre o array de ferramentas, criando elementos HTML para cada uma e inserindo-os no container</li>
  </ul>
</ul>
