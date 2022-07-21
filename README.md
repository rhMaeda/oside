
# Informações 




## Variáveis de Ambiente

Para rodar esse projeto, você vai precisar adicionar as seguintes variáveis de ambiente no seu .env

`QUEUE_CONNECTION=database`



## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/rhMaeda/oside
```

Entre no diretório do projeto

```bash
  cd oside
```

Criar o arquivo de configuração do ambiente
```bash
  cp .env.example .env
```

Crie o banco de dados (nesse caso foi utilizado o postgres)


Faça as alterações de acesso ao banco no arquivo .env


O servidor de email utilizado foi o Mailtrap(https://mailtrap.io/) para testes, terá que ser configurado no .env

Criar a tabela das filas do job

```bash
  php artisan migrate
```

Inicie o servidor

```bash
  php artisan serve
```

Rodar o job

```bash
  php artisan queue:work
```

Abrir o postman/insomnia e seguir a documentação da api
## Documentação da API

#### Envia os dados de email, assunto, e conteúdo

```http
  POST /api/email
```

| Parâmetro   | Tipo       | Descrição                           |
| :---------- | :--------- | :---------------------------------- |
| `email` | `string` |  Email para qual será enviado a mensagem  |
| `subject` | `string` |  Assunto do email |
| `message` | `string` | conteúdo do email |




## Notas

Foi feito apenas envio de uma string no conteúdo do email, nada muito elaborado por questão de tempo que foi dado. Não foi implementado nenhum nível de segurança/autenticação e tratamento de dados. Caso tenha faltado algo em relação a configuração, me deixe saber. 

