# Sistema de Cadastro de Funcionários

Este projeto é um sistema de gerenciamento de cadastro de funcionários, desenvolvido com Laravel 11, para atender às necessidades de controle de pessoal de uma construtora.

## Sumário

- [Visão Geral](#visão-geral)
- [Funcionalidades](#funcionalidades)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Instalação](#instalação)
- [Configuração](#configuração)
- [Uso](#uso)
- [Contribuição](#contribuição)
- [Licença](#licença)

## Visão Geral

Este sistema CRUD (Create, Read, Update, Delete) permite gerenciar eficientemente os dados dos funcionários de uma construtora. A aplicação fornece uma interface amigável para adicionar, visualizar, editar e excluir registros de funcionários, incluindo informações como nome, cargo, data de contratação e departamento.

## Funcionalidades

- **Cadastro de Funcionários**: Adicionar novos funcionários ao sistema.
- **Listagem de Funcionários**: Visualizar uma lista de todos os funcionários cadastrados.
- **Edição de Funcionários**: Atualizar informações dos funcionários existentes.
- **Exclusão de Funcionários**: Remover funcionários do sistema.
- **Validação de Dados**: Garantir que os dados inseridos sejam válidos e completos.

## Tecnologias Utilizadas

- **Backend**: [Laravel 11](https://laravel.com/)
- **Frontend**: [Tailwind CSS](https://tailwindcss.com/)
- **Banco de Dados**: MySQL
- **Autenticação**: Laravel Breeze

## Instalação

### Pré-requisitos

- PHP >= 8.1
- Composer
- MySQL
- Node.js e NPM

### Passos para Instalação

1. **Clone o repositório:**
   ```sh
   git clone https://github.com/seu-usuario/sistema-cadastro-funcionarios.git
   cd sistema-cadastro-funcionarios
   ```

2. **Instale as dependências do PHP:**
   ```sh
   composer install
   ```

3. **Instale as dependências do NPM:**
   ```sh
   npm install
   ```

4. **Compile os assets do frontend:**
   ```sh
   npm run build
   ```

5. **Copie o arquivo `.env.example` para `.env` e configure o banco de dados:**
   ```sh
   cp .env.example .env
   ```

6. **Gere a chave da aplicação:**
   ```sh
   php artisan key:generate
   ```

7. **Execute as migrações para criar as tabelas no banco de dados:**
   ```sh
   php artisan migrate
   ```

8. **Inicie o servidor de desenvolvimento:**
   ```sh
   php artisan serve
   ```

A aplicação estará disponível em `http://localhost:8000`.

## Configuração

### Configuração do Banco de Dados

No arquivo `.env`, configure as seguintes variáveis de ambiente com os dados do seu banco de dados:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

### Configuração de Autenticação

Este projeto utiliza Laravel Breeze para autenticação. Após configurar o banco de dados, você pode executar os comandos de migração e seeding para criar um usuário administrador:

```sh
php artisan migrate --seed
```

## Uso

### Cadastro de Funcionários

Para adicionar um novo funcionário, navegue até a página de cadastro de funcionários e preencha o formulário com as informações necessárias.

### Listagem de Funcionários

A página principal exibe uma lista de todos os funcionários cadastrados. Use as opções de busca e paginação para navegar pelos registros.

### Edição de Funcionários

Clique no botão de edição ao lado do funcionário que deseja atualizar, faça as alterações necessárias e salve.

### Exclusão de Funcionários

Clique no botão de exclusão ao lado do funcionário que deseja remover e confirme a exclusão.

## Contribuição

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`)
3. Faça commit das suas alterações (`git commit -am 'Adiciona nova feature'`)
4. Faça push para a branch (`git push origin feature/nova-feature`)
5. Abra um Pull Request

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

Para mais informações, consulte a [documentação do Laravel](https://laravel.com/docs) e a [documentação do Tailwind CSS](https://tailwindcss.com/docs).