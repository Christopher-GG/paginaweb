@extends('app')

@section('content')
    <div class="row">
        <div class="col presentacion">
            <p>Bienvenido a FoxAnime, donde encontraras los mejores anime de todas las categorias.</p>
            <p>En esta sección puedes encontrar las ultimas series y peliculas agregadas a nuestro catálogo.</p>
        </div>
    </div>

    <div class="row espacio"></div>

    <div class="row categorias">
        <p class="pl-4 pr-4">Elegir categoria:</p>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:rgb(24, 94, 247)">
            Categorias
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Shonen</a>
                <a class="dropdown-item" href="#">Peliculas</a>
                <a class="dropdown-item" href="#">Aventuras</a>
            </div>
        </div>
    </div>

    <div class="container peliculas">
        <div class="row">
            <div class="card col-lg-4 col-md-6 col-sm-12" style="width: 18rem;">
                <img src="imagenes/KimiNoNaWa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kimi No Nawa</h5>
                    <p class="card-text">Mitsuha Miyamizu es una chica de secundaria que vive en la pequeña ciudad de Itomori, cerca de la región de Hida. Está aburrida de la vida en el campo y desea ir a vivir a Tokio. Ella comienza a cambiar de cuerpo intermitentemente con Taki Tachibana, un chico de secundaria de Tokio, cuando ambos duermen. Pronto, comienzan a comunicarse escribiéndose mensajes en papel, teléfonos y, a veces, en la piel del otro. Mitsuha hace que Taki desarrolle una relación con su compañera de trabajo Miki, de quien está enamorado y a quien no se atreve a hablarle, mientras que Taki hace que Mitsuha se vuelva popular en la escuela.</p>
                    <a href="#" class="btn btn-primary">Ver pelicula</a>
                </div>
            </div>

            <div class="card col-lg-4 col-md-6 col-sm-12" style="width: 18rem;">
                <img src="imagenes/KoeNoKatachi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Koe No Katachi</h5>
                    <p class="card-text">Un chico llamado Shouya Ishida pone sus asuntos en orden y camina hacia un puente, con la intención de suicidarse. Recuperando sus sentidos en el último minuto, recuerda sus días en la escuela primaria y los eventos que lo llevaron a este punto en su vida. En aquellos días, Shouya era un niño indiferente, uno que veía a sus compañeros estudiantes como una forma de evitar el aburrimiento. La entrada de una nueva estudiante llamada Shouko Nishimiya en su clase despierta su interés: ella es sorda. A pesar de su discapacidad, hace todo lo posible por vivir normalmente y relacionarse con la clase. Sin embargo, los otros estudiantes y el maestro llegan a creer que su presencia está trastornando el equilibrio social.Piensan que ella los está imponiendo a través de su discapacidad. Shouya, que la considera extraña, comienza a intimidarla y acosarla sin fin. La clase, más entretenida que sorprendida, no interviene en la situación.</p>
                    <a href="#" class="btn btn-primary">Ver pelicula</a>
                </div>
            </div>

            <div class="card col-lg-4 col-md-6 col-sm-12" style="width: 18rem;">
                <img src="imagenes/PrincessMononoke.jpg" class="card-img-top" alt="..." style="width: 200px;">
                <div class="card-body">
                    <h5 class="card-title">Princess Mononoke</h5>
                    <p class="card-text">El último príncipe emishi, Ashitaka, salva a su aldea del ataque de un Tatarigami, un demonio que destruye todo lo viviente con tan solo tocarlo. Usando su arco, Ashitaka le da muerte, siendo herido por este, dejando una oscura marca en su brazo. Al observar el cadáver del monstruo, Ashitaka descubre que en realidad era el dios jabalí Nago, quien fue corrompido hasta convertirse en un tatarigami. Ashitaka consulta a los ancianos de la aldea, temiendo por su vida al sospechar que la herida dejada por el demonio en su mano le haya transmitido su maldición. Estos descubren una enorme bola de hierro en el cuerpo de Nago y comprenden que era la causa de su sufrimiento, lo que llevó al dios a la locura. La anciana del pueblo explica al joven que aunque su herida solamente cubre su brazo, se extenderá por su cuerpo y huesos hasta que muera. La maldición es un arma de doble filo, porque en los momentos donde se deje llevar por el odio obtendrá una fuerza sobrehumana a cambio de que se propague más rápido. Cuando esto ocurre, su brazo se llena de gusanos negros retorciéndose, similares a los que tenía Nago.</p>
                    <a href="#" class="btn btn-primary">Ver pelicula</a>
                </div>
            </div>

            <div class="card col-lg-4 col-md-6 col-sm-12" style="width: 18rem;">
                <img src="imagenes/KimetsuNoYaiba.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kimetsu No Yaiba</h5>
                    <p class="card-text">En la Era Taisho,Tanjiro Kamado es un chico inteligente con un buen olfato y corazón que vivía con su familia en las montañas y ganaba dinero vendiendo carbón , pero todo cambia cuando su familia es atacada y asesinada por un demonio (oni). Tanjiro y su hermana Nezuko son los únicos supervivientes del incidente, aunque su hermana Nezuko fue transformada en un demonio, pero sorprendentemente todavía mostrando signos de emoción y pensamiento humanos.Después de un encuentro con Giyu Tomioka,un asesino de demonios,Tanjiro es reclutado por Urokodaki para convertirse también en un asesino de demonios y así comienza su búsqueda para ayudar a su hermana a volverse humana nuevamente.</p>
                    <a href="#" class="btn btn-primary">Ver serie</a>
                </div>
            </div>

            <div class="card col-lg-4 col-md-6 col-sm-12" style="width: 18rem;">
                <img src="imagenes/NanatsuNoTaizai.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nanatsu No Taizai</h5>
                    <p class="card-text">Durante una época medieval en el reino de Liones la tercera princesa del reino Elizabeth Liones en su afán por liberar a las personas del abuso de poder y opresión que los caballeros sagrados ejercen. La princesa huye de su hogar para ir en la búsqueda de los legendarios siete pecados capitales, por lo que usando una armadura oxidada Elizabeth vaga sin rumbo hasta que llega a una cantina llamada Boar's Hat (el sombrero del jabalí) donde conoce al dueño Meliodas, un joven que aparenta ser un adolescente y que tiene un poder oculto y a Hawk un cerdo con la particular habilidad de hablar. Meliodas a pesar de conocer en poco tiempo a Elizabeth se compromete a ayudarla en su travesía por encontrar y reunir a los pecados al revelar que él en realidad es el pecado de la ira y el líder de dicha orden de caballeros.</p>
                    <a href="#" class="btn btn-primary">Ver serie</a>
                </div>
            </div>
        </div>
    </div>
@endsection

