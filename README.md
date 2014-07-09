SuperPay
========

Biblioteca para o Gateway de Pagamentos para o SuperPay portado da biblioteca da Locaweb

## Configuração
Configure o SuperPayGatewayConfig, ele só precisa ser configurado uma vez.
ex.:
    SuperPayGatewayConfig::setEnvironment("sandbox");
    SuperPayGatewayConfig::setToken("13014664467464");

## Para utilizar diretamente a API.
    echo "Executando criar:";
    $resposta = SuperPayGateway::criar( array(
      'url_retorno' => 'http://www.minha-loja.com.br/confirmacao-pedido.php?id=12345',
      'capturar' => 'true',
      'pedido' => array(
        'numero' => "123",
        'total' => "100.00",
        'moeda' => "real",
        'descricao' => "Cylon toaster!"
      ),
      'pagamento' => array(
        'meio_pagamento' => 'redecard_ws',
        'bandeira' => "visa",
        'cartao_numero' => "4012001037141112",
        'cartao_cvv' => "973",
        'parcelas' => "1",
        'tipo_operacao' => "credito_a_vista",
        'cartao_validade' => "082015"
      ),
      'comprador' => array(
        'nome' => "Bruna da Silva",
        'documento' => "27836038881",
        'endereco' => "Rua da Casa",
        'numero' => "1",
        'cep' => "09710240",
        'bairro' => "Centro",
        'cidade' => "São Paulo",
        'estado' => "SP"
      )
    ))->sendRequest();
    var_dump($resposta);
    echo "Executando capturar:";
    $resposta = SuperPayGateway::capturar(17)->sendRequest();
    var_dump($resposta);
    echo "Executando cancelar:";
    $resposta = SuperPayGateway::cancelar(17)->sendRequest();
    var_dump($resposta);
    echo "Executando consultar:";
    $resposta = SuperPayGateway::consultar(17)->sendRequest();
    var_dump($resposta);
    
    echo "==================================================================\n";
