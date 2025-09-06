## **📚 Ventorim's Book - Sistema de E-commerce para Livraria**


Sistema completo de e-commerce para livraria desenvolvido com PHP e MySQL. 
Inclui carrinho de compras, gestão de stock, painel administrativo e interface responsiva.



**✨ Funcionalidades:**

🛒 Carrinho de Compras - Sistema completo de adição/remoção de items

📊 Painel Administrativo - Gestão de livros, utilizadores e encomendas

🔍 Sistema de Busca - Pesquisa por título, autor e categoria

📱 Design Responsivo - Interface adaptada para mobile e desktop

👤 Autenticação de Utilizadores - Sistema de registro e login seguro

📦 Gestão de Stock - Controlo de inventário em tempo real


**🛠️ Tecnologias Utilizadas**

*Backend:*

PHP 8.2+ - Linguagem de programação principal

MySQL 8.0 - Base de dados relacional

Apache - Servidor web


*Frontend:*

HTML5 - Estrutura semântica

CSS3 - Estilização com Bootstrap e custom

JavaScript - Interatividade e validações

Bootstrap 5.2 - Framework CSS


*Ferramentas & Métodologias:*

Docker - Containerização e ambiente de desenvolvimento

Git - Controlo de versão

Metodologias Ágeis - Scrum e Kanban

PHPMailer - Sistema de emails


**📦 Estrutura do Projeto:**

ventorims-book/

├── app/

│   ├── controllers/     # Lógica de controlo

│   ├── models/          # Modelos de dados

│   ├── views/           # Templates e páginas

│   └── config/          # Configurações

├── public/

│   ├── css/             # Estilos Bootstrap e custom

│   ├── js/              # Scripts JavaScript

│   └── images/          # Imagens e assets

├── database/

│   ├── schema.sql       # Estrutura da base de dados

│   └── sample_data.sql  # Dados de exemplo

├── docker/

│   └── docker-compose.yml # Configuração Docker

└── README.md


**🚀 Como Executar o Projeto**

*Pré-requisitos:*

Docker e Docker Compose instalados

Git

Instalação com Docker (Recomendado)


*Clone o repositório:*

git clone https://github.com/IsisVO11/Ventorim-s-Book.git

cd Ventorim-s-Book

*Execute com Docker Compose:*

docker-compose up -d

*Configure a base de dados:*

# Execute o script SQL para criar a base de dados

docker exec -i ventorims-book-mysql mysql -uroot -proot < database/schema.sql

*Acesse a aplicação:*
http://localhost:8080

**👤 Credenciais de Teste**

*Administrador:*

Email: admin@ventorim.com

Password: admin123

*Utilizador:*

Email: user@exemplo.com

Password: password123


**📋 Funcionalidades Detalhadas;**

*Para Clientes:*

Registo e autenticação de utilizadores

Navegação por categorias de livros

Sistema de busca avançada

Carrinho de compras persistente

Processo de checkout simulado

Histórico de encomendas

*Para Administradores:*

Dashboard de gestão

CRUD completo de livros

Gestão de categorias

Visualização de encomendas

Gestão de utilizadores

Relatórios de stock


**🤝 Como Contribuir:**

Faça Fork do projeto

Crie uma Branch para sua Feature (git checkout -b feature/AmazingFeature)

Commit suas Mudanças (git commit -m 'Add some AmazingFeature')

Push para a Branch (git push origin feature/AmazingFeature)

Abra um Pull Request


**📄 Licença:**
Este projeto está sob a licença MIT. Veja o arquivo LICENSE para detalhes.

**👩💻 Autora:**
Isis Venturin - LinkedIn: https://www.linkedin.com/in/isis-venturin-b72443296/ | GitHub: https://github.com/IsisVO11

