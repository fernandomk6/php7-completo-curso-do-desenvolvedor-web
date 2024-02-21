<?php 

$list = [
    ["Fernando", "Henrique", 25, "Marreco", "Teste"],
    ["Mr", "Falas", 23, "Marreco", "Teste"],
    ["Astrous", "Falous", 25, "Marreco", "Teste"],
    ["Eu", "Taacko", null, "Marreco", "Teste"]
];

$table = "<table>\r\n";
foreach ($list as $i => $value) {
    $table .= "\t<tr>\r\n";
    foreach ($value as $j => $data) {
        $table .= "\t\t<td>$data</td>\r\n";
    }
    $table .= "\t</tr>\r\n";
}
$table .= "</table>";

# echo "$table\r\n";

echo array_reduce(
    $list, 
    fn ($acc, $row) 
        => "$acc\t<tr>\r\n\t\t<td>" . implode("</td>\r\n\t\t<td>", $row) . "</td>\r\n\t</tr>\r\n"
    , "<table>\r\n"
) . "</table>\r\n";

