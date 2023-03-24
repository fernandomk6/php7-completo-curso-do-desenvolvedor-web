# Tipos de dados 
## Valor literal 

O valor literal é um dado que é 
usado diretamente, sem ser obtido
apartir de uma variável.

## Tipo inteiro (int)

São números, sem ponto flutuante.
Por exemplo: 1, 2, 3, -1, -2, -3.

Use a função `vardump($dado)` para
obter informações sobre o tipo do
dado.

Use a contante `PHP_INT_MAX` e 
`PHP_INT_MIN`, para retornar o 
valor máximo e mínimo, respectivamente,
de um inteiro no php.

## Tipo float (float)

Números de ponto flutuante, positivos 
ou negativos.
Exemplos: 1.2, 0.5, -5.9.
Observação: o número 1.0 é interpretado
como float no php, e não como um 
inteiro.

Também é possivel usar as contantes:
`PHP_FLOAT_MAX` e `PHP_FLOAT_MIN`,
para obter o valor máximo e mínimo
de uma variável do tipo float.

## Operações aritiméticas

```php
echo 1 + 1, "<br>"; // 2 int 
echo 1 + 1.1, "<br>"; // 2.1 float 
```

Todos os operadores mátemáticos são
permitidos e é respeitado as regras 
de precedência da mátemática.

Algumas funções úteis:
- round($numero): retorna o número
arredondado para o inteiro mais 
proxímo.
- intdiv($numero1, $numero2): divide 
o número1 pelo número2, porém, 
retorna um inteiro sempre, truncando as 
casas decimais, caso o resultado seja um
float. Sempre retorna um inteiro.

Em php as divisões por zero, retornam
um valor númerico especial, o `INF`,
que representa um número infinito.

Precedência dos operadores matemáticos:
- `()`: parêntesis
- `**`: exponenciação
- `/, *, %`: divisão, multiplicação, resto
- `+, -`: adição e subtração

Existêm 3 tipos de operadores em php:
- Operadores unários, atuam sobre um
operador.
- Operadores binários, atuam sobre dois 
operandos.
- Operadores ternários, atuam sobre 
três operandos.

## Tipo string (string)

String é uma sequência de caracteres
delimitados por aspas duplas ou simples.
Exemplo: `"isso é uma string"`.

O strlen que é a função que 
calcula o tamanho da string,
não calcula corretamente quando 
usado a codificação UTF8.

### Concatenação

Unir strings.
Para unir strings em PHP, usamos 
o operador `.` (ponto).
Exemplo: `"olá" . " fernando";`.

Se o delimitador for aspas 
duplas, dentro da string
podemos usar aspas simples 
e virse-versa. Porém não é 
possível usar o mesmo (a menos 
que use o caractere de scape
`\`).
Exemplo: `"olá \"Fernando\""`.
 
### Algumas funções 

- strtoupper($string): retorna a string 
com todas letras em maiúsculo.
- strtolower($string): faz a mesma 
coisa que o strtoupper, porém para 
letras minúscula.
- ucfirst($string): deixa apenas a 
primeira letra maiúcula.
- ucwords($string): deixa todas as palavras
com a primeira letra em maiúsculo.
- strlen($string): returna um inteiro,
indicando o tamanho da string. 
Cuidado, pois o strlen, não funciona como 
esperado quando a string possui 
caracteres especiais, como acentos.
Por padrão a função strlen, tem problemas 
com a codificação, UTF8. Para evitar 
esse problema use a função `mb_strlen`
ao invés da `strlen`.
Exemplo: `mb_strlen("café?")`.
Se necessário, ainda é possível passar um 
segundo paramêtro, a codificação. 
Exemplo: `mb_strlen("Café?", "utf-8")`.
- substr($string, $indexInicial, $tamanho): 
retorna uma parte da string. Aonde $string é 
a string aonde será retirado a parte. $indexInicial 
é o index da string, aonde começará a extração da 
sub-string. $tamanho, é o numero de caracteres 
que a sub-string deve ter.
- str_replace($trocaIsso, $porIsso, $nessaString): 
substitui uma parte da string, por outra string,
em uma string. Retorna uma nova string, com a 
substituição feita. 
- strpos($stringReferencia, $stringBuscada):
retorna um inteiro, equivalente ao index da 
string buscada dentro da string de referência.
Caso não seja encontrado retorna false. 
- stripos($stringReferencia, $stringBuscada):
faz a mesma coisa da strpos, porém é case-insensitive.
- strrpos e strripos: faz a mesma coisa das 
strpos e stripos, porém retorna o index da 
última ocorrencia da string buscada.

## Tipo booleano (bool)

Um tipo de dado que tem apenas dois 
valores: false e true.
É um valor lógico. 

É possível verificar se um número 
é booleano com a função `is_bool($dado)`.

Dados que convertém para false:

- (int) 0 (ou -0)
- (float) 0.0 (ou -0.0)
- (string) ""
- (string) "0"
- (bool) false 
- (array) `[]` (array vazio converte 
para false)
- (object) sem propriedades/métodos
- (null) null

*Vá sempre no caminho da simplicidade*

## Conversões de tipo 

*Fuja de conversões estranhas*

- int + float sempre retorna float 
- Conversão explícita:
	É possível usar o tipo do dado 
	a esquerda da expressão, para 
	forçar a conversão do retorno da 
	expressão,, para o tipo especificado.
	Exemplo: `(float) 1` retorna 1.0.
	Exemplo: `(int) 1.5` retorna 1.
- Se uma string númerica for usada em 
uma expressão matemática, a string será 
convertida para número (int ou float).
- Ao usar o operador de concatenação, o PHP 
irá converter todos os operandos em strings (
mesmo que eles sejam números ou outros tipos como array).
Se um tipo não puder ser convertido para string
o php lançará um erro.
- Quando usado uma string com mais de um caractere,
e o primeiro caractere for númerico, esse caractere 
será usado na expressão.
Exemplo: `1 + "5 número"` retorna 6, pois o 5 (
primeiro caractere da string, é númerico). Se
o primeiro caractere da string não for númerico, 
toda a string será ignorada e não fará parte da 
expressão.
Exemplo: `1 + "olá"` retorna 1, pois a string olá
não tem o primeiro caractere númerico.
- É possível converter uma string númerica,
para int ou float. 
- Em operações entre int e float, será sempre retornado 
o tipo float. 

	