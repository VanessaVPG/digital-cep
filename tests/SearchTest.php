<?php

use PHPUnit\Framework\TestCase;
use VanessaVPG\DigitalCep\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromZipCodeDefaultUsage(string $input, array $esperado)
    {
        $resultado = new Search();
        $resultado = $resultado->getAddressFromZipCode($input);
        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste()
    {
        return [
                "Endereço São Sebastião" => [
                "88136000",
                    [
                    "cep" => "88136-000",
                    "logradouro" => "Rua Tomáz Domingos da Silveira",
                    "complemento" => "de 2834/2835 ao fim",
                    "bairro" => "São Sebastião",
                    "localidade" => "Palhoça",
                    "uf" => "SC",
                    "ibge" => "4211900",
                    "gia" => "",
                    "ddd" => "48",
                    "siafi" => "8233",
                    ]
                ],
                "Endereço qualquer" => [
                    "01001000",
                    [
                        "cep" => "01001-000",
                        "logradouro" => "Praça da Sé",
                        "complemento" => "lado ímpar",
                        "bairro" => "Sé",
                        "localidade" => "São Paulo",
                        "uf" => "SP",
                        "ibge" => "3550308",
                        "gia" => "1004",
                        "ddd" => "11",
                        "siafi" => "7107"
                    ]
                ]

        ];
    }
}
