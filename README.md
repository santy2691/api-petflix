# Petflix Project

# REST API DOCUMENTACION   

## V.1

ruta para para logearte y te retorna el token     
metodo POST    
`/login`  

ruta para eliminar token 
metodo GET
`/logout`

ruta para registrar un nuevo usuario    
metodo POST    
`/registrer`   


ruta para mostrar todas las peliculas   
metodo GET
`/peliculas`   

ruta para mostrar una pelicula con un ID 
metodo GET   
`/pelicula/{id}`   

ruta para mostrar todas leas peliculas de un genero
metodo GET 
`/peliculas/genero/{genero}`    


ruta para mostrar todas las peliculas por tipo (series o peliculas)    
metodo GET    
`/peliculas/tipo/{tipo}`  


ruta para mostrar las peliculas por titulo 
metodo GET
`/peliculas/titutlo/{titulo}`


ruta para mostrar todos los generos 
metodo GET
`/generos`    


ruta para mostrar un capitulo especifico de una serie 
metodo GET
`/serie/{title}/temporada/{temporada}/capitulo/{capitulo}`


### rutas solo para admin

ruta para listar usuarios  
metodo GET
`/usuarios`

ruta para borrar un usuario especifico
metodo DELETE
`/usuario/{id}`


ruta para actualizar una pelicula  por id
metodo PUT
`/pelicula/{id}`


ruta para borrar una pelicula por id
metodo DELETE
`/pelicula/{id}`


### rutas que depende si puede un usuario normal o tiene que ser admin

ruta para modificar un usuario 
metodo PUT
`/usuario/{id}`


ruta para listar un usuario por id
metodo GET
`/usuario/{id}`


## Versiones

- 1.0 Sprint 1  
    - Instalar en el servidor  
    - Diagrama de bbdd  
    - Diagrama de casos de uso  
    - Mockups:  
        - Home  
        - Lista de Peliculas  
        - Resultado de busqueda  
        - Pantalla de Login  
        - Formulario de registro  


- 2.0 Sprint 2  
    - Mockups:  
        - Formulario de pago  
        - Formulario datos de usuario   
        - Visualizar streaming  
        - Pagina favoritos/recomendados    
        - Lista de usuarios  
        - Lista de peliculas  
        - Información de usuario (autorización)  
        - Insertar/modificar pelicula  
    - Lista URLs  

## Diagramas

### Diagrama de bbdd
[README .md de la bbdd](./document/base_datos/README.md)  
![Diagrama de bbdd](./document/base_datos/diagrama_base_datos_petflix_v2.png)
### Diagrama de casos de uso
![Diagrama de casos de uso](./document/diagrama_casos_usos/diagrama_casos_usos.png)

## Mockups

**a) Home**  
![home](./document/mockups/home.png)  
**b) Lista de Peliculas**  
![llista_pelis](./document/mockups/llista_pelis.png)  
**c) Resultado de busqueda**    
![resultat_busqueda](./document/mockups/resultat_busqueda.png)  
**c) Resultado de busqueda-Filtros**    
![resultat_busqueda_filtres](./document/mockups/resultat_busqueda_filtres.png)  
**d) Pantalla de Login**   
![login](./document/mockups/login.png)  
**e) Formulario de registro**   
![formulari_registre](./document/mockups/formulari_registre.png)  
### -> Usuarios
**f) Formulario de pago**  
![Formulario de pago](./document/mockups/Formulario%20de%20pago.png)  
**g) Formulario datos de usuario**  
![formulario_datos_usuario](./document/mockups/formulario_datos_usuario.png)  
**h) Visualizar streaming**  
![visualizar_streaming.png](./document/mockups/visualizar_streaming.png)  
**i) Pagina favoritos/recomendados**  
![favoritos_recomendados.png](./document/mockups/favoritos_recomendados.png)  
### -> Administrador  
**j) Lista de usuarios**  
![Mockups-Lista de usuarios.drawio.png](./document/mockups/Mockups-Lista%20de%20usuarios.drawio.png)  
**k) Lista de peliculas**  
![Mockups-Lista de pelis](./document/mockups/Mockups-Lista%20de%20pelis.drawio.png)  
**l) Información de usuario (autorización)**  
![Insertar_modificar peli](./document/mockups/Informacion%20del%20usuario.png)   
**m) Insertar/modificar pelicula**  
![Insertar_modificar peli](./document/mockups/Insertar_modificar%20peli.png)  

## Lista URLs
[Archivo con la lista de las URLs](./document/url-list/url_list.md)
