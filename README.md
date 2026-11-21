# Oficina Mecânica — Sistema de Gerenciamento

Sistema web desenvolvido com **PHP, Laravel 12 e MySQL**, com o objetivo de aplicar conceitos de desenvolvimento back-end, arquitetura MVC (Model-View-Controller), persistência de dados e operações CRUD.

O projeto foi iniciado durante as aulas de Desenvolvimento Back-End do curso Técnico em Informática e está em evolução, com foco na construção de uma aplicação para gerenciamento de oficinas mecânicas.

## Tecnologias utilizadas

- **PHP 8.2+** — Linguagem de programação back-end.
- **Laravel 12** — Framework para desenvolvimento da aplicação.
- **MySQL** — Banco de dados relacional.
- **Eloquent ORM** — Manipulação de dados por meio dos Models.
- **Blade** — Sistema de templates do Laravel.
- **HTML5 e CSS3** — Estrutura e apresentação das páginas.
- **Bootstrap 5** — Estilização dos formulários, tabelas e botões.
- **Composer** — Gerenciamento das dependências PHP.
- **Git e GitHub** — Versionamento e armazenamento do código.

## Funcionalidades

### Gerenciamento de mecânicos

O módulo de mecânicos possui as operações CRUD implementadas no código:

- Cadastro de mecânicos com nome, registro, especialidade e telefone.
- Listagem dos mecânicos cadastrados.
- Visualização dos detalhes de um mecânico.
- Edição dos dados cadastrais.
- Exclusão de registros com confirmação na interface.
- Validação de campos obrigatórios e registro único.

**Observação:** o módulo está passando por ajustes de validação e tratamento de exclusões associadas a serviços.

### Gerenciamento de carros e serviços

O projeto possui Models, Controllers e Seeders para representar veículos e serviços mecânicos. As interfaces e rotas para o gerenciamento completo dessas entidades ainda estão em desenvolvimento.

## Arquitetura

O projeto utiliza o padrão MVC:

- **Model:** representa as entidades e a interação com o banco de dados.
- **View:** apresenta os dados ao usuário por meio de templates Blade.
- **Controller:** recebe as requisições, executa validações e coordena as operações.

O sistema também utiliza migrations para a estruturação do banco e seeders para preparar registros de exemplo.

## Como executar localmente

### Pré-requisitos

- PHP 8.2 ou superior
- Composer
- MySQL
- Node.js e npm, para os recursos que utilizam Vite
- XAMPP ou outro ambiente local compatível

### Instalação

**1. Clone o repositório:**

```bash
git clone https://github.com/felipcoqueiroz-profissional/oficina-mecanica-laravel.git
```

**2. Entre na pasta:**

```bash
cd oficina-mecanica-laravel
```

**3. Instale as dependências PHP:**

```bash
composer install
```

**4. Crie o arquivo de ambiente:**

```bash
cp .env.example .env
```

No PowerShell do Windows, utilize `Copy-Item .env.example .env`.

**5. Gere a chave da aplicação:**

```bash
php artisan key:generate
```

**6. Configure o banco MySQL no arquivo `.env`:**

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=oficina_mecanica
DB_USERNAME=root
DB_PASSWORD=
```

Ajuste as credenciais de acordo com seu ambiente e crie previamente o banco `oficina_mecanica`.

**7. Execute as migrations:**

```bash
php artisan migrate
```

**8. Inicie o servidor:**

```bash
php artisan serve
```

Acesse o módulo de mecânicos:

`http://127.0.0.1:8000/mecanicos`

**Observação:** o projeto contém seeders para dados de exemplo, mas a carga inicial ainda requer revisão antes de recomendar `php artisan db:seed`.

## Melhorias planejadas

- Finalização do CRUD de carros.
- Implementação do CRUD de serviços.
- Aprimoramento dos relacionamentos entre mecânicos, carros e serviços.
- Revisão das validações e regras de exclusão.
- Melhorias na interface e navegação.
- Ampliação dos testes automatizados.

## Contexto acadêmico

Projeto desenvolvido como atividade prática da disciplina de Desenvolvimento Back-End, com acompanhamento da professora Luciene Motta.

O código é utilizado para consolidar conhecimentos de PHP, Laravel, banco de dados relacional e desenvolvimento web.

## Desenvolvedor

**Felipe Costa Queiroz**

Estudante de Técnico em Informática, com interesse em desenvolvimento de software e tecnologias back-end.

GitHub: [felipcoqueiroz-profissional](https://github.com/felipcoqueiroz-profissional)

## Status

**Em desenvolvimento** — CRUD de mecânicos implementado, com correções e expansão dos demais módulos em andamento.