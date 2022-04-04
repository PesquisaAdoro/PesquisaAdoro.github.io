<?php

//https://sheetdb.io/use-cases/google-sheets-json-data-with-php --> link exemplo

function requestSheetdb($url, $method = 'GET', $data = []) {

  $options = array(
    'http' => array(
      'header'  => 'Content-type: application/x-www-form-urlencoded',
      'method'  => strtoupper($method),
      'content' => http_build_query([
        'data' => $data
      ])
    )
  );

  try {
    $raw = @file_get_contents($url, false, stream_context_create($options));
    $result = json_decode($raw);
  } catch (Exception $e) {
    return false;
  }

  return $result;
}

$data_atual = date('d/m/Y');
$pdv = filter_input(INPUT_POST, 'pdv');

$cod_produto1 = '197769';
$desc_produto1 = 'COXINHA MARIN RESF PV';
$estoque1 = filter_input(INPUT_POST, 'estoque1');

$cod_produto2 = '197772';
$desc_produto2 = 'PASSARINHO MARIN RESFR PV';
$estoque2 = filter_input(INPUT_POST, 'estoque2');

$cod_produto3 = '197775';
$desc_produto3 = '1/2 ASA MARIN RESFR PV';
$estoque3 = filter_input(INPUT_POST, 'estoque3');

$cod_produto4 = '124506';
$desc_produto4 = 'FILE DE COXA C/P CG (PCT)';
$estoque4 = filter_input(INPUT_POST, 'estoque4');

$cod_produto5 = 'FLFAT010204';
$desc_produto5 = 'FATIADOS CG (TODAS AS GRAMATURAS)';
$estoque5 = filter_input(INPUT_POST, 'estoque5');

$cod_produto6 = 'FLCX010205';
$desc_produto6 = 'FILE DE COXA MARIN RESF';
$estoque6 = filter_input(INPUT_POST, 'estoque6');

$motivo = filter_input(INPUT_POST, 'motivo');
$comentario = filter_input(INPUT_POST, 'comentario');


// returns all spreadsheets data
$content = requestSheetdb('https://sheetdb.io/api/v1/skn3bch0qzzkz');


// returns when name="Steve" AND age=22
//$content = requestSheetdb('https://sheetdb.io/api/v1/58f61be4dda40/search?name=Steve&age=22');

// insert one row
// Produto 1
$content = requestSheetdb('https://sheetdb.io/api/v1/skn3bch0qzzkz', 'POST', 
  ['data_atual' => $data_atual, 'pdv' => $pdv, 'cod_produto' => $cod_produto1, 'desc_produto' => $desc_produto1, 'estoque' => $estoque1, 'motivo' => $motivo, 'comentario' => $comentario]);

// Produto 2
$content = requestSheetdb('https://sheetdb.io/api/v1/skn3bch0qzzkz', 'POST', 
  ['data_atual' => $data_atual, 'pdv' => $pdv, 'cod_produto' => $cod_produto2, 'desc_produto' => $desc_produto2, 'estoque' => $estoque2, 'motivo' => $motivo, 'comentario' => $comentario]);

// Produto 3
$content = requestSheetdb('https://sheetdb.io/api/v1/skn3bch0qzzkz', 'POST', 
  ['data_atual' => $data_atual, 'pdv' => $pdv, 'cod_produto' => $cod_produto3, 'desc_produto' => $desc_produto3, 'estoque' => $estoque3, 'motivo' => $motivo, 'comentario' => $comentario]);

// Produto 4
$content = requestSheetdb('https://sheetdb.io/api/v1/skn3bch0qzzkz', 'POST', 
  ['data_atual' => $data_atual, 'pdv' => $pdv, 'cod_produto' => $cod_produto4, 'desc_produto' => $desc_produto4, 'estoque' => $estoque4, 'motivo' => $motivo, 'comentario' => $comentario]);

// Produto 5
$content = requestSheetdb('https://sheetdb.io/api/v1/skn3bch0qzzkz', 'POST', 
  ['data_atual' => $data_atual, 'pdv' => $pdv, 'cod_produto' => $cod_produto5, 'desc_produto' => $desc_produto5, 'estoque' => $estoque5, 'motivo' => $motivo, 'comentario' => $comentario]);

// Produto 6
$content = requestSheetdb('https://sheetdb.io/api/v1/skn3bch0qzzkz', 'POST', 
  ['data_atual' => $data_atual, 'pdv' => $pdv, 'cod_produto' => $cod_produto6, 'desc_produto' => $desc_produto6, 'estoque' => $estoque6, 'motivo' => $motivo, 'comentario' => $comentario]);

// Volta para a página inicial
header("Location: index.html");

?>