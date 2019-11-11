---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Jornais


Métodos para gerir jornais.
<!-- START_d984a021fe81033b627b61ae0096b7e7 -->
## Mostrar todos os jornais com user associado.

Este é o método para mostrar todos os jornais inseridos na base de dados e o utilizador que o criou.

> Example request:

```bash
curl -X GET -G "http://localhost/api/jornal" 
```

```javascript
const url = new URL("http://localhost/api/jornal");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "titulo-jor": "Expresso",
            "descricao-jor": "O Expresso é um jornal português de periodicidade semanal publicado ao sábado desde 1973. O atual diretor do Expresso é João Vieira Pereira, desde 23 de março de 2019. Na edição de 26 de junho de 2010 o Expresso passou a utilizar o Acordo Ortográfico de 1990.",
            "image": "images\/byhZaotr0hxDCdHRwQ4Q5AmyJAcs8sDtk5jk35PO.jpeg",
            "user_id": 1,
            "created_at": "2019-11-10 18:39:02",
            "updated_at": "2019-11-11 23:01:31",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-11-10 18:38:15",
                "updated_at": "2019-11-10 18:38:15",
                "deleted_at": null
            }
        },
        {
            "id": 2,
            "titulo-jor": "Jornal de Notícias",
            "descricao-jor": "Jornal de Notícias, também conhecido por JN, é um jornal diário português, fundado em 1888, no Porto.",
            "image": "images\/VSqHU2nkzDIeOQqdpqYaXKdQq0g6YOATCXBtRaSR.jpeg",
            "user_id": 1,
            "created_at": "2019-11-10 18:39:16",
            "updated_at": "2019-11-10 18:39:16",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-11-10 18:38:15",
                "updated_at": "2019-11-10 18:38:15",
                "deleted_at": null
            }
        },
        {
            "id": 3,
            "titulo-jor": "Público",
            "descricao-jor": "O Público é um jornal diário matutino português fundado em 1990. É um dos jornais de referência em Portugal. O diretor é Manuel Carvalho e os diretores-adjuntos, Amilcar Correia, Ana Sá Lopes, David Pontes e Tiago Luz Pedro.",
            "image": "images\/pRSFCXjHeHtQOQIMwdkS6nwFqTmENkQbqsqH2hbi.jpeg",
            "user_id": 1,
            "created_at": "2019-11-10 18:39:28",
            "updated_at": "2019-11-10 18:39:28",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-11-10 18:38:15",
                "updated_at": "2019-11-10 18:38:15",
                "deleted_at": null
            }
        },
        {
            "id": 4,
            "titulo-jor": "The Guardian",
            "descricao-jor": "The Guardian é um jornal diário nacional britânico, conhecido, até 1959, como Manchester Guardian. Junto com seus jornais irmãos, The Guardian Weekly e The Observer, o Guardian faz parte do Guardian Media Group, propriedade do The Scott Trust Limited.",
            "image": "images\/kmHtmQgPIzCYcqBIvzUOYKG4HW37ZluHBjnOmVZc.jpeg",
            "user_id": 1,
            "created_at": "2019-11-10 18:40:13",
            "updated_at": "2019-11-10 18:40:13",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-11-10 18:38:15",
                "updated_at": "2019-11-10 18:38:15",
                "deleted_at": null
            }
        },
        {
            "id": 5,
            "titulo-jor": "Testezito",
            "descricao-jor": "O âmbito do jornal Testezito é ser um teste para apagar um jornal :-(",
            "image": "images\/8J4zUG1LaQUcexUMVNfVU12IjTh9IZGRT9bM9egE.png",
            "user_id": 3,
            "created_at": "2019-11-11 21:48:52",
            "updated_at": "2019-11-11 21:55:51",
            "deleted_at": null,
            "user": {
                "id": 3,
                "name": "Garnet Robel",
                "email": "sibyl88@example.net",
                "email_verified_at": "2019-11-10 18:38:15",
                "role_id": 3,
                "created_at": "2019-11-10 18:38:15",
                "updated_at": "2019-11-10 18:38:15",
                "deleted_at": null
            }
        },
        {
            "id": 7,
            "titulo-jor": "novo jornalinho",
            "descricao-jor": "testeeeeeee novo jornal",
            "image": "images\/iCjKigInriaR2OBSYPFTPWV9Imo5grIUDPVgV5rC.png",
            "user_id": 23,
            "created_at": "2019-11-11 23:12:19",
            "updated_at": "2019-11-11 23:15:25",
            "deleted_at": null,
            "user": {
                "id": 23,
                "name": "Sofia Ribeiro",
                "email": "saribeiro@ua.pt",
                "email_verified_at": null,
                "role_id": 5,
                "created_at": "2019-11-11 22:31:20",
                "updated_at": "2019-11-11 22:31:20",
                "deleted_at": null
            }
        }
    ],
    "message": "Listagem de jornais",
    "result": "OK"
}
```

### HTTP Request
`GET api/jornal`


<!-- END_d984a021fe81033b627b61ae0096b7e7 -->

<!-- START_0be096f9a4a24696c0101813229d4400 -->
## Mostrar formulário para inserir novo jornal.

Geralmente, este método seria para mostrar o formulário para inserir o jornal.

> Example request:

```bash
curl -X GET -G "http://localhost/api/jornal/create" 
```

```javascript
const url = new URL("http://localhost/api/jornal/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/jornal/create`


<!-- END_0be096f9a4a24696c0101813229d4400 -->

<!-- START_7afb5643f3d58dcaf7b7260a3f7c8503 -->
## Inserir um novo jornal.

Para inserir um novo jornal na base de dados deve enviar-se os campos apresentados abaixo.

> Example request:

```bash
curl -X POST "http://localhost/api/jornal" \
    -H "Content-Type: application/json" \
    -d '{"titulo-jor":"alias","descricao-jor":"voluptate","image":"nihil","user_id":18}'

```

```javascript
const url = new URL("http://localhost/api/jornal");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "titulo-jor": "alias",
    "descricao-jor": "voluptate",
    "image": "nihil",
    "user_id": 18
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/jornal`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    titulo-jor | string |  required  | Nome para jornal.
    descricao-jor | string |  required  | Descrição para jornal, deve ter no máx 400 caracteres.
    image | image |  required  | Capa para o jornal (ex.: logótipo).
    user_id | integer |  required  | ID do utilizador que cria o jornal, geralmente o utilizador que está logado.

<!-- END_7afb5643f3d58dcaf7b7260a3f7c8503 -->

<!-- START_f7c0e9011ca5e915ffdd557c2fcc4dca -->
## Mostrar o jornal do ID recebido com as informações do utilizador que o criou.

Deve enviar-se no pedido o ID do jornal que se pretende visualizar.

> Example request:

```bash
curl -X GET -G "http://localhost/api/jornal/1" 
```

```javascript
const url = new URL("http://localhost/api/jornal/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "titulo-jor": "Expresso",
        "descricao-jor": "O Expresso é um jornal português de periodicidade semanal publicado ao sábado desde 1973. O atual diretor do Expresso é João Vieira Pereira, desde 23 de março de 2019. Na edição de 26 de junho de 2010 o Expresso passou a utilizar o Acordo Ortográfico de 1990.",
        "image": "images\/byhZaotr0hxDCdHRwQ4Q5AmyJAcs8sDtk5jk35PO.jpeg",
        "user_id": 1,
        "created_at": "2019-11-10 18:39:02",
        "updated_at": "2019-11-11 23:01:31",
        "deleted_at": null,
        "user": {
            "id": 1,
            "name": "Administrator",
            "email": "admin@tdi.pt",
            "email_verified_at": null,
            "role_id": 1,
            "created_at": "2019-11-10 18:38:15",
            "updated_at": "2019-11-10 18:38:15",
            "deleted_at": null
        }
    }
]
```

### HTTP Request
`GET api/jornal/{jornal}`


<!-- END_f7c0e9011ca5e915ffdd557c2fcc4dca -->

<!-- START_553cb7ab2a5bbbfb4fb264cb8101f070 -->
## Mostrar formulário para editar o jornal do ID recebido.

Geralmente, este método seria para mostrar o formulário para editar o jornal do ID recebido no parâmetro de entrada.

> Example request:

```bash
curl -X GET -G "http://localhost/api/jornal/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/jornal/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/jornal/{jornal}/edit`


<!-- END_553cb7ab2a5bbbfb4fb264cb8101f070 -->

<!-- START_c9596a52c5b6129b0ce629d00465bab2 -->
## Editar o jornal do ID recebido no parâmetro de entrada.

Deve enviar-se no pedido o ID do jornal que se pretende editar.

> Example request:

```bash
curl -X PUT "http://localhost/api/jornal/1" 
```

```javascript
const url = new URL("http://localhost/api/jornal/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/jornal/{jornal}`

`PATCH api/jornal/{jornal}`


<!-- END_c9596a52c5b6129b0ce629d00465bab2 -->

<!-- START_393ce75aea456cc35670e7edc3a415db -->
## Remover o jornal do ID recebido.

Deve ser enviado no pedido o ID do jornal a eliminar.

> Example request:

```bash
curl -X DELETE "http://localhost/api/jornal/1" 
```

```javascript
const url = new URL("http://localhost/api/jornal/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/jornal/{jornal}`


<!-- END_393ce75aea456cc35670e7edc3a415db -->

#Notícia


Métodos para gerir notícias.
<!-- START_3e0792dacbd9e7d214dcc50f52939226 -->
## Mostrar todas as notícias.

Este é o método para mostrar todas as notícias inseridos na base de dados e o utilizador que o criou.

> Example request:

```bash
curl -X GET -G "http://localhost/api/noticia" 
```

```javascript
const url = new URL("http://localhost/api/noticia");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "titulo-not": "Quando a avaliação é por competências, as mulheres progridem tanto como os homens",
            "corpo-not": "A Auchan tem tantas mulheres como homens nos cargos de chefia. Director de recursos humanos diz que o ponto de viragem aconteceu em 2009 quando a empresa trocou a avaliação tradicional pela avaliação por competências. Este é o quarto de uma série de trabalhos feitos a propósito do Dia Nacional da Igualdade Salarial, que se assinala sexta-feira.",
            "image": "images\/WpUHZQUbhdMmluoYhyRPbqebSZXq93hEctBeHBrH.jpeg",
            "user_id": 1,
            "jornal_id": 3,
            "seccao_id": 4,
            "tipo_id": 2,
            "created_at": "2019-11-10 19:26:29",
            "updated_at": "2019-11-10 19:29:52",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-11-10 18:38:15",
                "updated_at": "2019-11-10 18:38:15",
                "deleted_at": null
            }
        },
        {
            "id": 3,
            "titulo-not": "Último dia de Web Summit: entre políticos que mostram a sua fibra e robôs que se transformam em atletas",
            "corpo-not": "A cimeira tecnológica chegou ao fim e no último dia destacou-se também o lado mais político do evento. O filho de Paulo Branco, que é advogado de Assange, defendeu Rui Pinto — e uma comissária europeia mostrou-se a favor da proteção dos whistleblowers. Mas isso não tirou o protagonismo a Marcelo ou à carismática Margrethe Vestager.",
            "image": "images\/3IxSJHoPOxcUyN0PMEdjz28aIIrZhNEsiY8jh7iS.jpeg",
            "user_id": 1,
            "jornal_id": 1,
            "seccao_id": 3,
            "tipo_id": 2,
            "created_at": "2019-11-10 19:38:41",
            "updated_at": "2019-11-10 19:38:41",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-11-10 18:38:15",
                "updated_at": "2019-11-10 18:38:15",
                "deleted_at": null
            }
        },
        {
            "id": 4,
            "titulo-not": "Liberdade, ano zero",
            "corpo-not": "Recordemos essa data tão auspiciosa de 9 de Novembro de 1989 – quando o impensável aconteceu com a queda do muro de Berlim –, buscando nela a inspiração e a força necessárias para voltar a acreditar no futuro.",
            "image": "images\/NtLZf36X3YCJwpdbTTjvsDy2yvnh998KpswW44sv.jpeg",
            "user_id": 1,
            "jornal_id": 3,
            "seccao_id": 4,
            "tipo_id": 1,
            "created_at": "2019-11-10 19:40:22",
            "updated_at": "2019-11-10 19:40:22",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-11-10 18:38:15",
                "updated_at": "2019-11-10 18:38:15",
                "deleted_at": null
            }
        },
        {
            "id": 5,
            "titulo-not": "teste",
            "corpo-not": "teste",
            "image": "images\/yTftEMEJLrrDeLxW7vwau2hkQjfPjVDTLUYeQZQC.jpeg",
            "user_id": 1,
            "jornal_id": 5,
            "seccao_id": 3,
            "tipo_id": 2,
            "created_at": "2019-11-11 23:28:00",
            "updated_at": "2019-11-11 23:28:00",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-11-10 18:38:15",
                "updated_at": "2019-11-10 18:38:15",
                "deleted_at": null
            }
        },
        {
            "id": 6,
            "titulo-not": "nova notícia",
            "corpo-not": "testeeeeeee nova notícia",
            "image": "images\/4WFjt6uP8HOKVXVvN20CvGMQDKpuJbCJGOLyIHh8.png",
            "user_id": 7,
            "jornal_id": 4,
            "seccao_id": 1,
            "tipo_id": 2,
            "created_at": "2019-11-11 23:29:19",
            "updated_at": "2019-11-11 23:29:19",
            "deleted_at": null,
            "user": {
                "id": 7,
                "name": "Yazmin Weimann I",
                "email": "joy82@example.net",
                "email_verified_at": "2019-11-10 18:38:15",
                "role_id": 3,
                "created_at": "2019-11-10 18:38:15",
                "updated_at": "2019-11-10 18:38:15",
                "deleted_at": null
            }
        },
        {
            "id": 7,
            "titulo-not": "ola",
            "corpo-not": "ola",
            "image": "images\/q8u3sBqY2SQB1AtWbYhS7fpI9QzGWtETzCttDbEG.jpeg",
            "user_id": 1,
            "jornal_id": 1,
            "seccao_id": 1,
            "tipo_id": 1,
            "created_at": "2019-11-11 23:29:30",
            "updated_at": "2019-11-11 23:29:30",
            "deleted_at": null,
            "user": {
                "id": 1,
                "name": "Administrator",
                "email": "admin@tdi.pt",
                "email_verified_at": null,
                "role_id": 1,
                "created_at": "2019-11-10 18:38:15",
                "updated_at": "2019-11-10 18:38:15",
                "deleted_at": null
            }
        }
    ],
    "message": "Listagem de notícias",
    "result": "OK"
}
```

### HTTP Request
`GET api/noticia`


<!-- END_3e0792dacbd9e7d214dcc50f52939226 -->

<!-- START_b998b180dfdf8db4acac794a90f5c1d0 -->
## Mostrar formulário para criar nova notícia.

Deve ser feito um return do blade a mostrar ao utilizador.

> Example request:

```bash
curl -X GET -G "http://localhost/api/noticia/create" 
```

```javascript
const url = new URL("http://localhost/api/noticia/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/noticia/create`


<!-- END_b998b180dfdf8db4acac794a90f5c1d0 -->

<!-- START_0762f61893b0e6cb43e2bbc304701edb -->
## Criar nova notícia.

> Example request:

```bash
curl -X POST "http://localhost/api/noticia" \
    -H "Content-Type: application/json" \
    -d '{"titulo-not":"est","corpo-not":"aspernatur","image":"et","jornal_id":3,"seccao_id":7}'

```

```javascript
const url = new URL("http://localhost/api/noticia");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "titulo-not": "est",
    "corpo-not": "aspernatur",
    "image": "et",
    "jornal_id": 3,
    "seccao_id": 7
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/noticia`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    titulo-not | string |  required  | Nome para o jornal a inserir.
    corpo-not | string |  required  | Corpo da notícia.
    image | image |  required  | Imagem para a notícia.
    jornal_id | integer |  required  | ID de um dos jornais inseridos.
    seccao_id | integer |  required  | ID de uma das secções inseridas.

<!-- END_0762f61893b0e6cb43e2bbc304701edb -->

<!-- START_8cc30809f2423150c9e8944ef3c84fe2 -->
## Mostrar notícia do ID recebido.

> Example request:

```bash
curl -X GET -G "http://localhost/api/noticia/1" \
    -H "Content-Type: application/json" \
    -d '{"id":16}'

```

```javascript
const url = new URL("http://localhost/api/noticia/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 16
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET api/noticia/{noticium}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | ID da notícia a editar.

<!-- END_8cc30809f2423150c9e8944ef3c84fe2 -->

<!-- START_e2b64a92180d97911f45a4e151785890 -->
## Mostrar formulário para editar notícia específica.

Deve ser feito um return do blade a mostrar ao utilizador.

> Example request:

```bash
curl -X GET -G "http://localhost/api/noticia/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/noticia/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/noticia/{noticium}/edit`


<!-- END_e2b64a92180d97911f45a4e151785890 -->

<!-- START_156ca02905b8dd3ca8e4b87881fd8031 -->
## Editar notícia específica.

> Example request:

```bash
curl -X PUT "http://localhost/api/noticia/1" 
```

```javascript
const url = new URL("http://localhost/api/noticia/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/noticia/{noticium}`

`PATCH api/noticia/{noticium}`


<!-- END_156ca02905b8dd3ca8e4b87881fd8031 -->

<!-- START_7b913bb5385521eaf328d30e7c974d63 -->
## Apagar notícia específica.

> Example request:

```bash
curl -X DELETE "http://localhost/api/noticia/1" \
    -H "Content-Type: application/json" \
    -d '{"id":12}'

```

```javascript
const url = new URL("http://localhost/api/noticia/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 12
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/noticia/{noticium}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | Enviar ID da notícia a eliminar.

<!-- END_7b913bb5385521eaf328d30e7c974d63 -->

#general


<!-- START_baf680a48bc129f27432c80ec8921433 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/feedback" 
```

```javascript
const url = new URL("http://localhost/api/feedback");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/feedback`


<!-- END_baf680a48bc129f27432c80ec8921433 -->

<!-- START_59de906289e81ee5c26947cc935e52a4 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/feedback/create" 
```

```javascript
const url = new URL("http://localhost/api/feedback/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/feedback/create`


<!-- END_59de906289e81ee5c26947cc935e52a4 -->

<!-- START_cadad8c9a7cbcb11ced37c6856fbbc6a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/feedback" 
```

```javascript
const url = new URL("http://localhost/api/feedback");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/feedback`


<!-- END_cadad8c9a7cbcb11ced37c6856fbbc6a -->

<!-- START_6beeac038cb8ca4b2978acd173b139b5 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/feedback/1" 
```

```javascript
const url = new URL("http://localhost/api/feedback/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/feedback/{feedback}`


<!-- END_6beeac038cb8ca4b2978acd173b139b5 -->

<!-- START_e491efb20fa14fe8f3bd18f993a578f7 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/feedback/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/feedback/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/feedback/{feedback}/edit`


<!-- END_e491efb20fa14fe8f3bd18f993a578f7 -->

<!-- START_fefba5f94dcda41b14d0fa6a79f36016 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/feedback/1" 
```

```javascript
const url = new URL("http://localhost/api/feedback/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/feedback/{feedback}`

`PATCH api/feedback/{feedback}`


<!-- END_fefba5f94dcda41b14d0fa6a79f36016 -->

<!-- START_8b1a50e1fea2157b10de19ada2143dee -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/feedback/1" 
```

```javascript
const url = new URL("http://localhost/api/feedback/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/feedback/{feedback}`


<!-- END_8b1a50e1fea2157b10de19ada2143dee -->

<!-- START_030396ffd2b4f1352cc510e7450ccc38 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/seccao" 
```

```javascript
const url = new URL("http://localhost/api/seccao");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/seccao`


<!-- END_030396ffd2b4f1352cc510e7450ccc38 -->

<!-- START_0ae5b2c562c6674109b23c55f6dd26ea -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/seccao/create" 
```

```javascript
const url = new URL("http://localhost/api/seccao/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/seccao/create`


<!-- END_0ae5b2c562c6674109b23c55f6dd26ea -->

<!-- START_1b1f7d56556b7285bfc23844b38df594 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/seccao" 
```

```javascript
const url = new URL("http://localhost/api/seccao");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/seccao`


<!-- END_1b1f7d56556b7285bfc23844b38df594 -->

<!-- START_14b169b792b9c2b6de9d5cd55878769a -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/seccao/1" 
```

```javascript
const url = new URL("http://localhost/api/seccao/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/seccao/{seccao}`


<!-- END_14b169b792b9c2b6de9d5cd55878769a -->

<!-- START_4705ad5a54d1163f8d4b2b697cb660f0 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/seccao/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/seccao/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/seccao/{seccao}/edit`


<!-- END_4705ad5a54d1163f8d4b2b697cb660f0 -->

<!-- START_b81882dcd03a927ddf68a119e1587ef4 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/seccao/1" 
```

```javascript
const url = new URL("http://localhost/api/seccao/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/seccao/{seccao}`

`PATCH api/seccao/{seccao}`


<!-- END_b81882dcd03a927ddf68a119e1587ef4 -->

<!-- START_93f52473e766962fb6e3ef5b7362a130 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/seccao/1" 
```

```javascript
const url = new URL("http://localhost/api/seccao/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/seccao/{seccao}`


<!-- END_93f52473e766962fb6e3ef5b7362a130 -->

<!-- START_07e7f3ae367cb99564afa991e133a461 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/tipo" 
```

```javascript
const url = new URL("http://localhost/api/tipo");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/tipo`


<!-- END_07e7f3ae367cb99564afa991e133a461 -->

<!-- START_26d20894bfb7310b4c3140ce204e3adc -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/tipo/create" 
```

```javascript
const url = new URL("http://localhost/api/tipo/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/tipo/create`


<!-- END_26d20894bfb7310b4c3140ce204e3adc -->

<!-- START_80a06024db4f0d37a70ede1272c3a4d5 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/tipo" 
```

```javascript
const url = new URL("http://localhost/api/tipo");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/tipo`


<!-- END_80a06024db4f0d37a70ede1272c3a4d5 -->

<!-- START_f695ab48314b4d59f8f1ea5d829afe74 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/tipo/1" 
```

```javascript
const url = new URL("http://localhost/api/tipo/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/tipo/{tipo}`


<!-- END_f695ab48314b4d59f8f1ea5d829afe74 -->

<!-- START_fc3faaddf5db2691ce9cbe79e1408004 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/tipo/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/tipo/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/tipo/{tipo}/edit`


<!-- END_fc3faaddf5db2691ce9cbe79e1408004 -->

<!-- START_208c69de33e9cfaba5c8dccd74aebec5 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/tipo/1" 
```

```javascript
const url = new URL("http://localhost/api/tipo/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/tipo/{tipo}`

`PATCH api/tipo/{tipo}`


<!-- END_208c69de33e9cfaba5c8dccd74aebec5 -->

<!-- START_7c0de1b3482697b6ea2f65ccaa6f0c49 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/tipo/1" 
```

```javascript
const url = new URL("http://localhost/api/tipo/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/tipo/{tipo}`


<!-- END_7c0de1b3482697b6ea2f65ccaa6f0c49 -->


