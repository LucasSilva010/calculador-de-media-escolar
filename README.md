# calculador-de-media-escolar
Este é um pequeno desafio proposto pelo meu amigo https://github.com/dinaerteneto. É meu primeiro projeto utilizando a linguagem PHP. 

## Instalação
É necessário baixar os arquivos disponíveis neste repositório.  
Para utilizar esta aplicação é necessário ter um servidor PHP local rodando na máquina. Para isto eu utilizei o Windows Subsystem For Linux (wsl) e instalei o PHP neste sistema. Abaixo você verá instruções rápidas de como eu fiz:  
### Instalando o WSL
Este repositório: https://github.com/codeedu/wsl2-docker-quickstart ensina sobre o que é, como instalar e como configurar o WSL na sua máquina (Além de falar sobre a plataforma Docker).

### Instalando o PHP
Após instalar e configurar o wsl, abra seu terminal ubuntu e siga estes passos: 
1. Atualize os pacotes do sistema digitando o seguinte código no terminal: sudo apt update
2. Em seguida, instale o PHP e alguns módulos com o seguinte comando: sudo apt install php libapache2-mod-php php-mysql
Isso instalará o PHP, o módulo apache para PHP e o suporte ao MySQL
3. Após a conclusão da instalação, verifique se o PHP foi instalado corretamente executando o comando: php -v (isso exibirá a versão do php instalada no sistema) 
## Como usar 
Para usar esta ferramenta é muito simples. Basta digitar o nome do aluno e digitar 4 notas referentes a este aluno.
As notas precisam ser de no máximo 4 digítos (exemplo: 9.25) e todos os campos precisam ser preenchidos.
Após o envio dos dados, eles serão processados pelo PHP e retornarão o nome do aluno e se ele foi ou não foi aprovado.
O calculo de aprovação será feito  a partir de uma média de 7 pontos. ( média < (menor que) 7 = reprovado; média >= (maior ou igual a) 7 = aprovado)

## Status do projeto
Ainda está em sua primeira versão. Haverão atualizações para a melhoria da interface e da flexibilidade da ferramenta, além da adição de novas funções no futuro.



