🚗 RentCar2 API



📋 Sobre o Projeto
RentCar2 é uma API criada em Laravel como um projeto de prática pessoal para aprofundar meus conhecimentos no desenvolvimento de APIs RESTful. O sistema simula um serviço de aluguel de carros, permitindo gerenciar clientes, veículos e locações de forma simples e organizada. Esse projeto serve como laboratório para aplicar conceitos essenciais de backend, validação, organização de código e integração com banco de dados.

🏗 Estrutura do Projeto
Organização principal do código:

src/
├── Application/           
│   └── Cliente/
│       ├── DTOs/          
│       ├── Events/        
│       ├── Exceptions/    
│       └── UseCases/      
└── Domain/                
    └── Cliente/
        └── Entities/     
🚀 Começando
Pré-requisitos
Docker e Docker Compose instalados

PHP 8.1+ (para rodar localmente sem Docker)

Composer

Passos para rodar com Docker

git clone https://github.com/seu-usuario/RentCar2.git
cd RentCar2

docker-compose up -d --build

docker-compose exec app composer install

docker-compose exec app php artisan migrate

docker-compose exec app php artisan db:seed

🤝 Contribuição
Contribuições são bem-vindas! Para contribuir:

📞 Contato
E-mail: daniel.victor2007@hotmail.com.br

🙏 Agradecimentos
Laravel Framework — https://laravel.com
