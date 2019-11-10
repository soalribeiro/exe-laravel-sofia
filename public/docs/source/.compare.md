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

#Feedback


Métodos para gerir feedbacks.
<!-- START_baf680a48bc129f27432c80ec8921433 -->
## Mostrar os feedbacks.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/feedback`


<!-- END_baf680a48bc129f27432c80ec8921433 -->

<!-- START_59de906289e81ee5c26947cc935e52a4 -->
## Mostrar formulário para editar feedback selecionado.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
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

#Jornais


Métodos para gerir jornais.
<!-- START_d984a021fe81033b627b61ae0096b7e7 -->
## Mostrar todos os jornais e o utilizador associado.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/jornal`


<!-- END_d984a021fe81033b627b61ae0096b7e7 -->

<!-- START_0be096f9a4a24696c0101813229d4400 -->
## Mostrar formulário para inserir novo jornal.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/jornal/create`


<!-- END_0be096f9a4a24696c0101813229d4400 -->

<!-- START_7afb5643f3d58dcaf7b7260a3f7c8503 -->
## Inserir um novo jornal.

> Example request:

```bash
curl -X POST "http://localhost/api/jornal" 
```

```javascript
const url = new URL("http://localhost/api/jornal");

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
`POST api/jornal`


<!-- END_7afb5643f3d58dcaf7b7260a3f7c8503 -->

<!-- START_f7c0e9011ca5e915ffdd557c2fcc4dca -->
## Mostrar um determinado jornal.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/jornal/{jornal}`


<!-- END_f7c0e9011ca5e915ffdd557c2fcc4dca -->

<!-- START_553cb7ab2a5bbbfb4fb264cb8101f070 -->
## Mostrar formulário para editar jornal.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/jornal/{jornal}/edit`


<!-- END_553cb7ab2a5bbbfb4fb264cb8101f070 -->

<!-- START_c9596a52c5b6129b0ce629d00465bab2 -->
## Editar um jornal específico.

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
## Remover um jornal.

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

#Notícias


Métodos para gerir notícias.
<!-- START_3e0792dacbd9e7d214dcc50f52939226 -->
## Apresentar todas as notícias.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/noticia`


<!-- END_3e0792dacbd9e7d214dcc50f52939226 -->

<!-- START_b998b180dfdf8db4acac794a90f5c1d0 -->
## Mostrar formulário para criar nova notícia.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
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
    -d '{"titulo-jor":"molestiae","corpo-jor":"ab","image":"fuga","jornal_id":4,"seccao_id":10}'

```

```javascript
const url = new URL("http://localhost/api/noticia");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "titulo-jor": "molestiae",
    "corpo-jor": "ab",
    "image": "fuga",
    "jornal_id": 4,
    "seccao_id": 10
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
    titulo-jor | string |  required  | Nome para o jornal a inserir.
    corpo-jor | string |  required  | Corpo da notícia.
    image | image |  required  | Imagem para a notícia.
    jornal_id | integer |  required  | ID de um dos jornais inseridos.
    seccao_id | integer |  required  | ID de uma das secções inseridas.

<!-- END_0762f61893b0e6cb43e2bbc304701edb -->

<!-- START_8cc30809f2423150c9e8944ef3c84fe2 -->
## Mostrar notícia em específico.

> Example request:

```bash
curl -X GET -G "http://localhost/api/noticia/1" \
    -H "Content-Type: application/json" \
    -d '{"id":19}'

```

```javascript
const url = new URL("http://localhost/api/noticia/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 19
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/noticia/{noticium}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | ID do jornal a editar

<!-- END_8cc30809f2423150c9e8944ef3c84fe2 -->

<!-- START_e2b64a92180d97911f45a4e151785890 -->
## Mostrar formulário para editar notícia específica.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
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
    -d '{"id":4}'

```

```javascript
const url = new URL("http://localhost/api/noticia/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 4
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

#Secções


Métodos para gerir secções.
<!-- START_030396ffd2b4f1352cc510e7450ccc38 -->
## Mostrar todas as secções com utilizador, jornal e secção associados.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/seccao`


<!-- END_030396ffd2b4f1352cc510e7450ccc38 -->

<!-- START_0ae5b2c562c6674109b23c55f6dd26ea -->
## Mostrar formulário para inserir nova secção.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/seccao/create`


<!-- END_0ae5b2c562c6674109b23c55f6dd26ea -->

<!-- START_1b1f7d56556b7285bfc23844b38df594 -->
## Inserir um nova secção.

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
## Mostrar uma determinada secção.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/seccao/{seccao}`


<!-- END_14b169b792b9c2b6de9d5cd55878769a -->

<!-- START_4705ad5a54d1163f8d4b2b697cb660f0 -->
## Mostrar formulário para editar secção.

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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/seccao/{seccao}/edit`


<!-- END_4705ad5a54d1163f8d4b2b697cb660f0 -->

<!-- START_b81882dcd03a927ddf68a119e1587ef4 -->
## Editar uma secção específica.

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
## Remover uma secção.

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


