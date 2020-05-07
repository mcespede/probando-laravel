<?php

Route::get('/', function () {
	/*Puedo crear vista y cargar las vistas 
	  que cree en la carpeta de VIEW*/
    return view('welcome');
});
//---------------------------------------//
/* Lo basico en utilizar el get
	Puedo cargar el nombre de la ruta que deseo como en este caso HOLA-MUNDO
	Despues hay una funcion anonima de CALLBACK que carga la vista que deseo mostrar */

Route::get('hola-mundo', function () {
	/*Aqui dentro es parecido a Nodejs
	  Puedo cargar un resultado o puedo cargar un metodo de alguna clase */
    //return 'Hola mundo soy Mauro';
	 return view('hola-mundo');
});
//-----------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------//
										/* RUTAS AVANZADAS*/
//-----------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------//

//---------------------------------------------------//
//------------PARAMETROS POR URL --------------------//
//---------------------------------------------------//

/* Tambien puedo utilizar otros metodos como
	PUT  / POST / DELETE / MATCH / ANY */


/* Puedo indicarle parametros que le quiera 	pasar por la URL
	Le indico el Parametro en la propia URL
	Es una VAR que se va a recojer por la URL y afecta la funcion del CALLBACK
*/

Route::get('contact/{nombre}', function ($nombre) {
	/* Hago que me regrese a travez de un array el nombre que me llegue por la URL
	en la vista que cree*/
    return view('contact',array(
    	"nombre" => $nombre
    ));
    /*Ahora solo tengo que editar la VISTA con {{}} para que me regrese el parametro*/
}); 

//---------------------------------------------------//
//-----PARAMETROS POR URL ORIENTADO A OBJETOS -------//
//---------------------------------------------------//

/* Tambien se puede hacer de una forma mas orientada a objetos. Hago el return del 	view y le agrego WITH para decirle que la variable va con un  parametro. De esta forma puedo seguir encadenando objetos.*/
/*
Route::get('contact/{nombre}', function ($nombre) {

    return view('contact') ->with('nombre',$nombre);
    });
*/


