# Sistema de Protocolos (PHP + MySQL | Intranet 2007)

Este sistema foi desenvolvido em 2007 para o escritório que eu trabalhava à época com o objetivo de emitir protocolos de documentos para controle e assinatura pelas empresas, substituindo uma versão anterior que 
rodava em **MS-DOS**. A aplicação foi baseada nesse sistema antigo, para trazer uma maior praticidade e autonomia aos usuários em um ambiente totalmente Web, rodando na intranet corporativa.  
Vale destacar que foi meu primeiro grande projeto em PHP, feito de forma autodidata, na época existiam poucos tutoriais e a ajuda vinha basicamente de fóruns na internet. 
Além do back-end, precisei desenvolver também o front-end, acumulando aprendizados em várias camadas do sistema.

Trata-se de um projeto legado, mantido neste repositório com fins documentais e como parte da minha trajetória de formação na área de TI.

---

## Objetivo do sistema

- Cadastrar empresas e documentos  
- Registrar protocolos vinculando-os à empresa e aos documentos, gerando data, vencimento, valor e observações  
- Permitir consulta, alteração e exclusão dos dados  
- Gerar relatórios com layout padronizado para impressão e conferência

---

## Tecnologias utilizadas

- Macromedia Dreamweaver  
- Macromedia Fireworks  
- PHP 4/5 (estruturado de forma procedural)  
- MySQL (via `mysql_connect` e `mysql_query`)  
- HTML 4.01  
- CSS básico  
- JavaScript puro para máscaras de campos, pop-ups e validações simples  

---

## Considerações técnicas

- Desenvolvido para uso interno, sem autenticação, com acesso controlado pela própria rede local.  
- Utiliza SQL direto com variáveis PHP (`$_POST`, `$_GET`), o que hoje representa risco de segurança (SQL Injection).  
- Conexão com banco via funções `mysql_*`, atualmente obsoletas.  
- O foco sempre foi a funcionalidade prática e a facilidade de uso em substituição ao antigo sistema em **MS-DOS**.  

---

## Arquitetura do sistema

- **Front-end**: formulários em HTML 4.01 com CSS básico e JavaScript para validações simples.  
- **Back-end**: PHP procedural, responsável pelas rotinas de cadastro, alteração e exclusão.  
- **Banco de dados**: MySQL relacional, com tabelas para empresas, documentos e protocolos.  
- **Relatórios**: consultas SQL exibidas em layout HTML, preparadas para impressão.  

---

## Valor histórico e aprendizado

Este projeto foi um dos primeiros sistemas completos que desenvolvi e aplicado em ambiente real de trabalho.  
Ele marcou a transição de uma aplicação legada em **MS-DOS** para uma solução web, trazendo avanços significativos na usabilidade e na gestão de informações.

Representa uma etapa importante no meu aprendizado prático com bancos de dados relacionais, lógica de programação e integração entre front-end e back-end.  
Foi utilizado durante anos de forma funcional, comprovando a robustez da estrutura para os padrões da época.

---

## Observações históricas

Ao avaliar os arquivos, acabei encontrando um documento Word datado de **22/06/2007**.  
Ele registra as funcionalidades que ainda faltavam ser implementadas e alguns testes a serem realizados.  
Hoje poderíamos dizer que o documento poderia cumprir o papel de **backlog** e **roteiro de testes**, mas na época nada mais era do que anotações diretas em Word sobre o que precisava ser ajustado ou incluído.  
Ainda assim, fica como um bom registro histórico.  

Alguns exemplos registrados:  
- Possibilidade de vincular mais de um documento a um mesmo protocolo;  
- Melhor refinamento na busca de empresas;  
- Relatórios gerais que exibissem apenas os protocolos da data selecionada;  
- Relatórios individuais filtrados corretamente por empresa e data;  
- Botões de impressão distintos para "apenas seleção" e para "todos os protocolos".  

Essas anotações mostram que, mesmo sem ferramentas modernas de gestão de projetos, já havia a preocupação em **mapear requisitos pendentes** e **organizar a evolução futura** do sistema.

---

## 📸 Prints do sistema

### Menu principal
![Menu principal](Imagem%20001.png)

### Cadastro de Empresas
![Cadastro de Empresas](Imagem%20002.png)

### Empresas Cadastradas
![Lista de Empresas](Imagem%20003.png)

### Cadastro de Protocolos
![Cadastro de Protocolos](Imagem%20004.png)

### Busca de Empresas
![Busca de Empresas](Imagem%20005.png)

### Alterar Protocolo
![Alterar Protocolo](Imagem%20006.png)

### Relatório Geral
![Relatório Geral](Imagem%20007.png)

### Relatório Individual
![Relatório Individual](Imagem%20008.png)

### Protocolo Impresso
![Protocolo Impresso](Imagem%20009.png)

---

## Legado e inspiração para o futuro

Este sistema foi a base para meu entendimento inicial sobre desenvolvimento web integrado a banco de dados.  
Apesar de suas limitações técnicas e da obsolescência de algumas práticas, o aprendizado obtido aqui serviu como alicerce para minha evolução profissional.  

Meus próximos passos envolvem:  
- Recriar este sistema em tecnologias modernas (Python/Flask ou PHP com PDO).  
- Adotar arquitetura em camadas (MVC) e boas práticas de segurança.  
- Implementar interface responsiva usando frameworks atuais como Bootstrap ou Tailwind.  

---

## Status do projeto

**Encerrado** – Mantido apenas para fins documentais e históricos.
