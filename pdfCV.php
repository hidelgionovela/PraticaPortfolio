<?php

use Dompdf\Dompdf;

require __DIR__ . '/vendor/autoload.php';

require __DIR__ .'/app/Db/db.php';
// $p = new atm();

$dadoss = buscaDado("SELECT titulo,subTitulo,descricao  FROM autobi;");
$dados = buscaDado("SELECT * FROM dadospessoais;");
$dadosss = buscaDados("SELECT *  FROM formacao;");
$dadossss = buscaDados("SELECT *  FROM certificacoes;");
$dadol = buscaDados("SELECT *  FROM linguas;");
$dadoh = buscaEspecial("SELECT * FROM habilidades;");

$html  = '<body>';
$html .= '<center>';
$html .= '<header>';
$html .= '<div>';
$html .= '<h3>Curriculum Vitae</h3>';
$html .= '</div>';
$html .= '</header>';
$html .= '</center>';

$html .=  '<h6>Dados Pessoais</h6>';

$html .= '<table style=" width:100%; ">';
      $html .= '<tr>';
        $html .= '<th>Nome :</th>';
        $html .= '<td>' . $dados['Nome'] . '</td>';
      $html .= '</tr>';
      $html .= '<tr>';
        $html .= '<th> Data de Nascimento :</th>';
       $html .= ' <td>' .  $dados['DataNascimento'] . '</td>';
     $html .= ' </tr>';
      $html .= '<tr>';
        $html .= '<th>Naturalidade :</th>';
        $html .= '<td>' . $dados['Naturalidade'] . '</td>';
      $html .= '</tr>';
      $html .= '<tr>';
        $html .= '<th>Nacionalidade :</th>';
        $html .= '<td>' . $dados['Nacionalidade'] . '</td>';
      $html .= '</tr>';
     $html .= ' <tr>';
        $html .= '<th> Estado Civil : </th>';
        $html .= '<td>' . $dados['Estado_Civil'] . '</td>';
      $html .= '</tr>';
      $html .= '<tr>';
        $html .= '<th> Género : </th>';
        $html .= '<td>' .$dados['Genero'] . '</td>';
     $html .= '</tr>';
     $html .= '<tr>';
        $html .= '<th>Residencia :</th>';
        $html .= '<td>' . $dados['Residencia'] . '</td>';
     $html .= ' </tr>';

   $html .= '</table><br><br><br>';


$html .= '<table style=" width:100%; border: 1px solid black; border-collapse: collapse; ">';
$html .=  '<tr style=" width:100%; border: 1px solid black; border-collapse: collapse; ">';

    if (count($dadosss) > 0) {
        for ($i = 0; $i < 1; $i++) {

            foreach ($dadosss[$i] as $k => $v) {
                if ($k != "id") {
                    if ($k != "Ano") {
                        $html .= '<th style=" border: 1px solid black;">' . $k . '</th>';
                    }
                }
            }
        }
    }


    $html .= '</tr>';

if (count($dadosss) > 0) {
    for ($i = 0; $i < count($dadosss); $i++) {
        $html .= '<tr style=" width:100%; border: 1px solid black; border-collapse: collapse; ">';

        foreach ($dadosss[$i] as $k => $v) {
            if ($k != "id") {
                $html .= '<td style=" border: 1px solid black; border-collapse: collapse; ">' . $v . '</td>';
            }
        }

        $html .= "</tr>";
    }
}


$html .= '</table><br><br><br>';



$html .= '<table style=" width:100%; border: 1px solid black; border-collapse: collapse; ">';
$html .=  '<tr style=" width:100%; border: 1px solid black; border-collapse: collapse; ">';

    if (count($dadossss) > 0) {
        for ($i = 0; $i < 1; $i++) {

            foreach ($dadossss[$i] as $k => $v) {
                if ($k != "id") {
                    
                        $html .= '<th style=" border: 1px solid black;">' . $k . '</th>';
        
                }
            }
        }
    }


    $html .= '</tr>';

if (count($dadossss) > 0) {
    for ($i = 0; $i < count($dadossss); $i++) {
        $html .= "<tr>";

        foreach ($dadossss[$i] as $k => $v) {
            if ($k != "id") {
                $html .= '<td style=" border: 1px solid black; border-collapse: collapse; ">' . $v . '</td>';
            }
        }

        $html .= "</tr>";
    }
}


$html .= '</table><br><br><br>';



$html .= '<table style=" width:100%; border: 1px solid black; border-collapse: collapse; ">';
$html .=  '<tr style=" width:100%; border: 1px solid black; border-collapse: collapse; ">';

    if (count($dadol) > 0) {
        for ($i = 0; $i < 1; $i++) {

            foreach ($dadol[$i] as $k => $v) {
                if ($k != "id") {
                    
                        $html .= '<th style=" border: 1px solid black;">' . $k . '</th>';
        
                }
            }
        }
    }


    $html .= '</tr>';

if (count($dadol) > 0) {
    for ($i = 0; $i < count($dadol); $i++) {
        $html .= "<tr>";

        foreach ($dadol[$i] as $k => $v) {
            if ($k != "id") {
                $html .= '<td style=" border: 1px solid black; border-collapse: collapse; ">' . $v . '</td>';
            }
        }

        $html .= "</tr>";
    }
}


$html .= '</table><br><br><br>';



$html .= '<table style=" width:100%;">';

     
     if (count($dadoh) > 0) 
     {

      for ($i = 0; $i <1; $i++) {
        $html .= "<tr>";

        foreach ($dadoh[$i] as $k => $v) {
            if ($k != "id") {
       
                $html .= '<th rowspan="7">' .$k. '</th>'; 
            }
        } 
      }

         for ($i = 0; $i < count($dadoh); $i++) {
             $html .= "<tr>";

             foreach ($dadoh[$i] as $k => $v) {
                 if ($k != "id") {
            
                     $html .= "<td>" . $v . "</td>";
                 }
             } 
             
            
            $html .= "</tr>";
         }
     } 
 

$html .= '</table>';
   


$html .= '</body>';


$dompdf = new Dompdf();
$dompdf->loadHtml("<h1>$html</h1>");
$dompdf->setPaper("A4", "portrait");
$dompdf->render();



$dompdf->stream('document.pdf', array('Attachment' => false));
