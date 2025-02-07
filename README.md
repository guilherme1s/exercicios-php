# Exercícios de PHP

## Resumo
Este repositório contém a resolução dos exercícios de PHP. 
Cada exercício possui seu próprio script.

## Como Executar
Pode ser executado localmente em um servidor web (utilizando o XAMPP por exemplo) ou pelo terminal utilizando o comando:
```
php nome_do_arquivo.php
```
Necesário ter o PHP instalado no seu sistema.

---

## Exercícios

### Exercício 01 - Cálculo de Reajuste Salarial

#### Descrição
Este programa calcula o reajuste salarial com base em regras já predefinidas:

#### Regras:
- Salários até R$ 280,00 (inclusive) → aumento de 20%
- Salários entre R$ 280,00 e R$ 700,00 → aumento de 15%
- Salários entre R$ 700,00 e R$ 1500,00 → aumento de 10%
- Salários acima de R$ 1500,00 → aumento de 5%

#### Saída esperada:
O programa exibe:
- Salário antes do reajuste
- Percentual de aumento aplicado
- Valor do aumento
- Novo salário após o reajuste

---

### Exercício 02 - Conversão de Expressões para Números de Telefone

#### Descrição
Algumas regiões utilizam letras para representar números de telefone. Este programa converte uma expressão de texto em números de telefone.

#### Regras de Conversão:
| Letras  | Número |
|---------|--------|
| ABC     | 2      |
| DEF     | 3      |
| GHI     | 4      |
| JKL     | 5      |
| MNO     | 6      |
| PQRS    | 7      |
| TUV     | 8      |
| WXYZ    | 9      |

#### Exemplo de Entrada:
```
1-HOME-SWEET-HOME
```

#### Exemplo de saída:
```
1-4663-79338-4663
```

---

### Exercício 03 - Contagem de Votos em Eleição Escolar

#### Descrição
Este programa recebe uma matriz representando os votos dos alunos em uma eleição escolar e determina o aluno mais votado.
Os alunos podem ser de 1 a 100, e cada aluno sempre vota em si mesmo.

---

### Exercício 04 - Sistema de Gerenciamento de Indivíduos

#### Descrição
Este programa permite armazenar, gerenciar e buscar informações de indivíduos usando comandos textuais.

#### Comandos Disponíveis:
1. **add** `<id> <first_name> <last_name> <birthday> <phone_number>`  
   - Adiciona um indivíduo.
2. **del** `<id>`  
   - Remove o indivíduo pelo ID.
3. **info** `<id>`  
   - Exibe todas as informações do indivíduo pelo ID.
4. **query** `<tag>:<valor>`  
   - Busca indivíduos por:
     - `fn` (Primeiro Nome)
     - `ln` (Sobrenome)
     - `bd` (Data de nascimento)
     - `pn` (Telefone)

#### Exemplo de Entradas:
```
add 123 Nome Sobrenome 01/01/2000 +55-99-9999-9999
query bd:01/01/1960
info 123
del 09
```

---

### Exercício 05 - Cálculo de Folha de Pagamento

#### Descrição
Este programa calcula a folha de pagamento de um funcionário, considerando descontos obrigatórios e benefícios.

#### Regras de Cálculo:
- **Imposto de Renda (IR)**:
  - Até R$ 900,00 → **isento**
  - Até R$ 1500,00 → **5%**
  - Até R$ 2500,00 → **10%**
  - Acima de R$ 2500,00 → **20%**
- **Sindicato**: desconto fixo de **3%**
- **INSS**: desconto fixo de **10%**
- **FGTS**: depósito fixo de **11%** (não é descontado do salário)

---

## Autor
Guilherme

---
