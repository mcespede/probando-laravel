
{{-- ------------------------------------------------------------- --}}
{{-- ----INCLUDE------ --}}

@include('contacto.cabecera')

{{-- ------------------------------------------------------------- --}}

<h1> Yo soy {{$nombre}}</h1>

{{-- Las estructuras de control en Blade se hacen igual que en PHP
	pero siempre se les coloca un @ antes --}}
{{-- ------------------------------------------------------------- --}}

{{-- ----IF-ELSE------ --}}

@if ($nombre =='Mauro')
	Bienvenido Admin
@else
	Bienvenido Guesst
@endif

{{-- ------------------------------------------------------------- --}}

{{-- ----TERNARIA------ --}}

{{-- Si existe edad (ISSET) Y (&&) edad no es NULL entonces (?) mostramos edad, sino (:) mostramos mensaje --}}

{{ isset ($edad) && !is_null($edad) ? $edad : 'No existe la edad'}}

{{-- ------------------------------------------------------------- --}}

{{-- ----BUCLE FOR------ --}}
{{-- El bucle for es igual . En este caso hacemos la tabla de multiplicar del 2--}}
<p>
Tabla del 2
</p>
@for ($i=0; $i <=10; $i++)

	{{-- Esto lo que dice es que me imprima $i pero ademas imprimo cada vuelta que hace $i multiplicada ppor 2 --}}

	{{$i.'x 2 ='.($i*2)}}</br>

	{{-- Para concatenar cosas se utiliza el (.). POdemos concatenar String o otras operaciones --}}
@endfor

{{-- Ahora si quiero poder hacer cualquier tabla, solo genero una variabel global que modifique la operacion --}}

<p>
<?php $numero = 8; ?>
Tabla del {{$numero}}
</p>

@for ($i=0; $i <=10; $i++)

	{{-- Aqui modifico para que todo se realice con relacion a $numero --}}

	{{$i.'x'.$numero.'='.($i*$numero)}}</br>

	{{-- Hay que tener mucho cuidado con la concatenacion porque puede crear problemas --}}
@endfor

{{-- ------------------------------------------------------------- --}}

{{-- ----WHILE------ --}}

<?php $f = 1?>
{{--Definimos un avariable, y mientras la variable sea menor o igual a 7 que imprima 'While'--}}

@while ($f <= 7)
	<p>{{'While'.$f}}</p>
	<?php $f++ ?>
@endwhile

{{-- ------------------------------------------------------------- --}}