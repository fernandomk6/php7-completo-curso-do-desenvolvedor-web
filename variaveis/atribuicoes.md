# Atribuições 

## Simples

```php
$variavel = 'valor';
```

## Atribuição aditiva e subtrativa 

```php
$numero = $numero - 1; // Subtrai 1 do valor da variável $numero
$numero += 2; // Atribui 2 a variável
$numero++; // Incrementa o valor em 1
$numero--; // Decrementa o valor em 1

// Podemos usar tanto pos decremento e pré decremento 
// Pre decremento 

$teste = $numero++; // Pos decremento, o valor da variável é retornado e depois é incrementado
$teste = ++$numero; // Pre incremento, incrementa o valor da variável e depois retorna o valor 

// Exemplos de atalhos de atribuições 
$a .= $b; // Concatena as duas variáveis e depois atribui
// Pode usar essa sintaxe para todos os operadores (+=, -=, *=. /=, **=, etc)
```

## Nulish operator 

Use o operador '??' para setar um valor default para a variável caso ela não tenha sido definida,
ou seja null 

```php 
$valor = $variavelInexistente ?? 'valor default';
```

