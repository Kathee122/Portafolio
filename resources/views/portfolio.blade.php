@extends('welcome')

@section('content')
<div class="portfolio-container container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center">Hola soy Katherine....</h1>
            <p class="text-center">Me entusiasma profundizar en el fascinante mundo de la programación, donde cada línea de código 
                representa una oportunidad para crear algo asombroso. Descubrir cómo estas simples líneas de texto pueden 
                dar vida a aplicaciones, sitios web y sistemas innovadores es un viaje emocionante y lleno de posibilidades. 
                Aquí encontrarás información sobre mí y algunos de mis trabajos.</p>
        </div>
    </div>
    <div class="row">
        <!-- Tarjetas de trabajos -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('imagenes/php.png') }}" class="card-img-top" alt="Trabajo 1">
                <div class="card-body">
                    <h5 class="card-title">Alojamiento</h5>
                    <p class="card-text">Gestiona alojamientos al momento de registrarse puedes poner tu alojamiento preferido como favorito. Se trabajó con las tecnologías PHP y MySQL.</p>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    <a href="https://github.com/steven015/Grud-de-Alojamientos" class="btn btn-secondary">
                        <img src="{{ asset('imagenes/github.png') }}" alt="GitHub" style="width: 30px;">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('imagenes/starwars.png') }}" class="card-img-top" alt="Trabajo 2">
                <div class="card-body">
                    <h5 class="card-title">Starwars</h5>
                    <p class="card-text">Se hizo el manejo de APIs para mostrar películas, planetas y personajes obteniendo una breve información. Este proyecto se trabajó con REACT, CSS, JavaScript y Firebase.</p>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    <a href="https://starwars-project-ochre.vercel.app/" class="btn btn-dark">
                        <img src="{{ asset('imagenes/sitio.png') }}" alt="Demo" style="width: 30px;">
                    </a>
                    <a href="https://github.com/ElGzus/starwars-project" class="btn btn-secondary">
                        <img src="{{ asset('imagenes/github.png') }}" alt="GitHub" style="width: 30px;">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('imagenes/kodigo.png') }}" class="card-img-top" alt="Trabajo 3">
                <div class="card-body">
                    <h5 class="card-title">Kodigo Music</h5>
                    <p class="card-text">Se realizó un diseño parecido al de Spotify usando las tecnologías de REACT, JavaScript, CSS y Bootstrap.</p>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    <a href="https://kodigo-music4.netlify.app/" class="btn btn-dark">
                        <img src="{{ asset('imagenes/sitio.png') }}" alt="Demo" style="width: 30px;">
                    </a>
                    <a href="https://github.com/Kathee122/KodigoMusic" class="btn btn-secondary">
                        <img src="{{ asset('imagenes/github.png') }}" alt="GitHub" style="width: 30px;">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('imagenes/clinica.jpg') }}" class="card-img-top" alt="Trabajo 4">
                <div class="card-body">
                    <h5 class="card-title">Clinica</h5>
                    <p class="card-text">Se realizó un registro de citas y un inicio de sesión. Se trabajó con las tecnologías JavaScript, Firebase y CSS.</p>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    <a href="https://github.com/Kathee122/Clinica" class="btn btn-secondary">
                        <img src="{{ asset('imagenes/github.png') }}" alt="GitHub" style="width: 30px;">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('imagenes/anime.png') }}" class="card-img-top" alt="Trabajo 5">
                <div class="card-body">
                    <h5 class="card-title">Anime</h5>
                    <p class="card-text">Se hizo una minibiblioteca de mangas con las tecnologías JavaScript, CSS y Bootstrap.</p>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    <a href="https://anime-world424.netlify.app/" class="btn btn-dark">
                        <img src="{{ asset('imagenes/sitio.png') }}" alt="Demo" style="width: 30px;">
                    </a>
                    <a href="https://github.com/Kathee122/anime" class="btn btn-secondary">
                        <img src="{{ asset('imagenes/github.png') }}" alt="GitHub" style="width: 30px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Sección "Sobre mí" -->
    <div class="row mt-5">
        <div class="col-md-8">
            <h2>Sobre mí</h2>
            <p>
                Soy una persona apasionada por la programación y el desarrollo de software.
                Me encanta trabajar en proyectos que requieren creatividad y soluciones innovadoras, ya que creo firmemente que la programación es tanto un arte como una ciencia. Mi enfoque incluye el desarrollo de aplicaciones web, la creación de interfaces de usuario intuitivas y la implementación de soluciones eficientes y escalables.
                <br>
                Además de mis habilidades técnicas, valoro la colaboración y el aprendizaje continuo. Siempre estoy en busca de nuevas oportunidades para crecer profesionalmente y contribuir a proyectos significativos. Si compartes mi pasión por la tecnología y el desarrollo, me encantaría conectarme y explorar cómo podemos trabajar juntos.
            </p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('imagenes/prueba.jpg') }}" alt="Sobre mí" class="img-fluid mb-3 rounded-circle" style="max-width: 350px;">
        </div>
    </div>

    <!-- Sección "Habilidades y Tecnologías" -->
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="text-center">Habilidades y Tecnologías</h2>
            <div class="d-flex justify-content-center flex-wrap">
                <div class="p-2"><img src="{{ asset('imagenes/logo.png') }}" alt="PHP" class="img-fluid" style="width: 50px;"></div>
                <div class="p-2"><img src="{{ asset('imagenes/laravel.avif') }}" alt="Laravel" class="img-fluid" style="width: 50px;"></div>
                <div class="p-2"><img src="{{ asset('imagenes/javascript.png') }}" alt="JavaScript" class="img-fluid" style="width: 50px;"></div>
                <div class="p-2"><img src="{{ asset('imagenes/react.avif') }}" alt="React" class="img-fluid" style="width: 50px;"></div>
                <div class="p-2"><img src="{{ asset('imagenes/node.png') }}" alt="Node.js" class="img-fluid" style="width: 50px;"></div>
                <div class="p-2"><img src="{{ asset('imagenes/mysql.png') }}" alt="MySQL" class="img-fluid" style="width: 50px;"></div>
                <div class="p-2"><img src="{{ asset('imagenes/css.png') }}" alt="CSS" class="img-fluid" style="width: 50px;"></div>
                <div class="p-2"><img src="{{ asset('imagenes/html.png') }}" alt="HTML" class="img-fluid" style="width: 50px;"></div>
                <!-- Añade más tecnologías según sea necesario -->
            </div>
        </div>
    </div>

</div>
<footer class="container-fluid text-light mt-5">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('imagenes/contacto.jpg') }}" alt="Imagen de contacto" class="img-fluid rounded-circle" style="max-width: 50%; height: auto;">
        </div>
        <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
            <h2>Contáctame</h2>
            <p>Email: kathepiaz04@gmail.com</p>
            <p>Teléfono: +503 72783556</p>
            <div class="d-flex justify-content-around w-10">
                <a href="https://www.linkedin.com/in/katherine-paiz-90b800301/" class="btn btn-dark m-2">
                    <img src="{{ asset('imagenes/link.png') }}" alt="LinkedIn" style="width: 30px;">
                </a>
                <a href="https://github.com/Kathee122" class="btn btn-secondary m-2">
                    <img src="{{ asset('imagenes/github.png') }}" alt="GitHub" style="width: 30px;">
                </a>
            </div>
        </div>
    </div>
</footer>
@endsection
