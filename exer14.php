<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$media =($num1+$num2)/2;
$metade =($num1-$num2)/2;
echo "A média artmética é: $media e a metade da diferença entre eles é $metade<br>";
echo "<br> <hr>";
$salarioBruto = $_POST["salario"];
echo "Salário bruto é: $salarioBruto<br>";
$desconto = $salarioBruto * 0.08;
echo "Desconto de 8% do salário bruto é $desconto<br>";
$salariol = $salarioBruto - $desconto;
echo "Salário Líquido é $salariol";
echo "<hr>";
$temp = $_POST["temp"];
$conversao =5 / 9 * ($temp-32);
$conversao = number_format($conversao, 2, '.', '');
echo "$temp Graus Fahrenheit  em Graus Celsius é : $conversao<br>";
echo "<hr>";
$kmInicial = $_POST["kmInicial"];
$kmFinal = $_POST["kmFinal"];
$consumoCombustivel = $_POST["consumoCombustivel"];
$percurso = $kmFinal - $kmInicial;
$kmPorLitro = $percurso/$consumoCombustivel;
$kmPorLitro = number_format($kmPorLitro, 2, '.', '');
$litroPorKm = $consumoCombustivel/$percurso;
echo "Quilometragem inicial do veículo: $kmInicial <br>";
echo "Quilometragem final do veículo: $kmFinal <br>";
echo "Combustível consumido: $consumoCombustivel  <br>";
echo "Quilômetros rodados: $percurso  <br>";
echo "Média de quilômetros por litro de combustível: $kmPorLitro  <br>";
echo "Média de combustível por quilômetro rodado: $litroPorKm  <br>";
echo "<hr>";
$alunosMasculino = $_POST["masculino"];
$alunosFeminino = $_POST["feminino"];
$aprovados = $_POST["aprovados"];
$total =($alunosMasculino+$alunosFeminino);
$pMasculino =($alunosMasculino/$total);
$pMasculino = number_format($pMasculino, 2, '.', '');
$pFeminino =($alunosFeminino/$total);
$pFeminino = number_format($pFeminino, 2, '.', '');
$pAlunosAprovados =($aprovados/$total);
$pAlunosAprovados = number_format($pAlunosAprovados, 2, '.', '');
echo "O total de alunos é: $total<br> A porcentagem de alunos masculinos é: $pMasculino<br> A porcentagem de alunas femininas é: $pFeminino<br> A porcentagem de alunos aprovados é: $pAlunosAprovados";
echo "<hr>";
$qtVit = $_POST["vit"];
$qtDer = $_POST["der"];
$qtEmp = $_POST["emp"];
$quantJogos =($qtVit+$qtDer+$qtEmp);
$ptV =($qtVit)+3;
$ptE =($qtDer)+0;
$ptD =($qtEmp)+1;
$ptT =$ptV+$ptE+$ptD;
echo "A quantidade total de jogos foi: $quantJogos<br> A quantidade de pontos disputados foi:$ptT<br> A quantidade de pontos ganhos:$ptV  <br> A quantidade de pontos perdidos:$ptE ";
echo "<hr>";
$salario7 = $_POST["salario7"];
$sexo = $_POST["sexo"];
if ($sexo == "Masculino7") {
    $desconto7 = $salario7 * 0.05;
    $SalarioLiquido = $salario7 - $desconto7;
    echo "Com desconto de 5%, o salário liquido de um funcionário em questão é: $SalarioLiquido."; 
} else {
    $desconto7 = $salario7 * 0.03;
    $SalarioLiquido = $salario7 - $desconto7;
    echo "Com desconto de 5%, o salário liquido de um funcionário em questão é: $SalarioLiquido."; 
};
$num8 = $_POST["num8"];
if ($num8 >0) {
    echo "O número $num8 é Positivo.";
} elseif ($num8 <0) {
    echo "O número $num8 é Negativo.";
} else {
    echo "O número $num8 é Nulo.";
}