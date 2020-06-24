<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/** @var Route $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/SevenMobileWS/resources/sevenapi/login', function (Request $request) {
    $login = $request->get('login');
    $password = $request->get('senha');

    if ($login !== 'SEVEN' || $password !== 'A3D24B555BC2EE180607EF34377D8996') {
        return response(['message' => 'login invalid or password'], 403);
    }

    return response('eyJhbGciOiJIUzUxMiJ9.eyJpYXQiOjE1NTEzNjA2MDEsImlzcyI6IkZBQklPIiwiZXhwIjoxNTUxNDQ3MDAxfQ.D7Enk9JX_DzeFHrhtH7LMZyOOLN0GAiIpwKHXBFxWktdV4w6fB4gNJeg0DvUaywm50P4UAOuR8a3DuJ6IsEXWw', 200);
});

$router->post('/SevenMobileWS/resources/sevenapi/pedidovenda/inserePedidoVenda', function (Request $request) {
    $arrayReference = [
        'pedido' => [
            [
                'valorTotalPedido' => 250.5,
                'valorTotalItens' => 250.5,
                'planoConta' => "2.2.1",
                'cfop' => "5411",
                'PTAX' => 3.39,
                'observacaoPedido2' => "Pedido urgente.",
                'observacaoPedido1' => "Pedido lançado pela API.",
                'observacaoNota1' => "REFERENTE A COTAÇÃO B190110049849",
                'item' => [
                    [
                        'valorTotal' => 100,
                        'valorLiquido' => 100,
                        'percentualDesconto' => 0,
                        'valorBruto' => 100,
                        'sku' => "126-01880",
                        'quantidade' => 1,
                    ],
                ],
                'servico' => [
                    [
                        'valorTotal' => 150.5,
                        'valorLiquido' => 150.5,
                        'percentualDesconto' => 0,
                        'valorBruto' => 150.5,
                        'sku' => "ESY-HEL01",
                        'quantidade' => 1,
                    ],
                ],
                'formaPagamento' => "1x (30 dias) - (Duplicata)",
                'formaCobranca' => "A PRAZO - DUPLICATA",
                'dataPedido' => "16/01/2019",
                'codigoPedido' => "0064600000LYBVRAA1",
            ],
            [
                'valorTotalPedido' => 200.0,
                'valorTotalItens' => 200.0,
                'planoConta' => "2.2.1",
                'cfop' => "5411",
                'observacaoPedido2' => "VIP: 935CFF456E9C8014040A",
                'observacaoPedido1' => "OP2019000040819 PTAX: R$3,3900",
                'observacaoNota1' => "REFERENTE A COTAÇÃO B190110049849",
                'observacao' => "",
                'item' => [
                    [
                        'valorTotal' => 200.0,
                        'valorLiquido' => 100.0,
                        'percentualDesconto' => 50,
                        'valorBruto' => 200,
                        'sku' => "126-01880",
                        'quantidade' => 2,

                    ],
                ],
                'formaPagamento' => "1x (30 dias) - (Duplicata)",
                'formaCobranca' => "A PRAZO - DUPLICATA",
                'dataPedido' => "16/01/2019",
                'dataPrevistaEntrega' => "17,01/2019",
                'codigoPedido' => "0064600000LYBVRAA3",
            ],
        ],
        'vendedor' => [
            'nomeVendedor' => "Alice Sophie Amanda",
            'enderecoVendedor' => [
                'numero' => "251",
                'logradouro' => "Av. Duque de Caxias",
                'estado' => "PR",
                'cidade' => "Maringá",
                'cep' => "87013180",
                'bairro' => "Centro",
            ],
            'cpfCnpjVendedor' => "89337642913",
        ],
        'cliente' => [
            'tipoTributacao' => "Consumidor Final - Pessoa Juridica",
            'regimeTributacao' => "Simples Nacional",
            'serasa' => [
                [
                    'serasaTexto' => "Nada consta para o CNPJ consultado.",
                    'serasaData' => "11/01/2019",
                ]
            ],
            'razaoSocial' => "Julio e Anthony Comercio de Bebidas ME",
            'observacaoCliente' => "EMITIR LICENÇA PARA: FABIO ",
            'nomeFantasia' => "ZULEIDE",
            'limiteCredito' => 46,
            'inscricaoEstadual' => "ISENTO",
            'enderecoCliente' =>[
                'numero' => "136",
                'logradouro' => "Rua Indalécio Quiles",
                'estado' => "PR",
                'complemento' => "CONJ 304",
                'cidade' => "LONDRINA",
                'cep' => "86036610",
                'bairro' => "Jardim Pioneiros",
            ],
            'cpfCnpjCliente' => "11116353000178",
            'contato' => [
                'contatoTelefone' => [
                    [
                        'tipoContatoTelefone' => "COMERCIAL",
                        'numeroContatoTelefone' => "(44) 2933-8637",
                        'nomeContatoTelefone' => "Ricardo Sérgio",
                    ],
                ],
                "contatoEmail" => [
                    [
                        'tipoContatoEmail' => "PRINCIPAL",
                        'nomeContatoEmail' => "Ricardo Sérgio",
                        'emailContatoEmail' => "rricardosergiodaconceicao@orbisat.com.br",
                    ],
                ],
            ],
        ],
    ];

    dd($arrayReference === $request->all());
});
