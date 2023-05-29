<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/estilo.css") }}">
    <link rel="stylesheet" href="{{ asset("css/estilo_grid.css") }}">
</head>
<body>
   @include("layouts.partials.header")


      <main>
          <div class="container p-5">
              <h1>Agencias Productos de Espectaculos</h1>
                <div>
                    <p>
                        Enfocados en la creación y desarrollo  de espectáculos, conciertos artísticos, eventos para empresas y lanzamiento o promoción de marcas.
                        Con experiencia de 20 años en el medio del espectáculo,
                        hemos trascendido gracias al expertise del talento profesional que conforma nuestro equipo,
                        esto nos permite crear ideas avanzadas e innovadoras en relación con las tendencias actuales, generando así proyectos de clase mundial.
                    </p>
                </div>
                <a href="#" class="btn btn-success">Register</a>
          <div><!--container-->

            <div class="container text-center p-3">
                <h1>Nuestros Servicios</h1>
                <div class="grid">
                        <div class="card" style="width: 18rem;">
                            <img src="image/im-01.jpg" class="card-img-top " alt="foto concierto">
                            <div class="card-body">
                                <h5 class="card-title">Rock Metalicos</h5>
                                <p class="card-text">Concierto genero Rock Metalicos, mejores bandas internacionales</p>
                                <span class="indicador">pases limitado</span>
                            </div>
                            <a href="#" class="btn btn-primary">ir entrada</a>
                        </div>
                    
                
                    <div class="card" style="width: 18rem;">
                        <img src="image/im-02.jpg" class="card-img-top" alt="foto concierto">
                        <div class="card-body">
                            <h5 class="card-title">Rock Alternativo</h5>
                            <p class="card-text">Concierto genero Rock alternativo, mejores bandas internacionales</p>
                            <span class="indicador">pases limitado</span>
                        </div>
                        <a href="#" class="btn btn-primary">ir entrada</a>
                    </div>  

                    <div class="card" style="width: 18rem;">
                        <img src="image/im-03.jpg" class="card-img-top" alt="foto concierto">
                        <div class="card-body">
                            <h5 class="card-title">Rock Argentino</h5>
                            <p class="card-text">Concierto genero Rock argentino, mejores bandas de Latinoamérica</p>
                            <span class="indicador">pases limitado</span>
                        </div>
                        <a href="#" class="btn btn-primary">ir entrada</a>
                    </div>
                    
                </div>
            </div>
      </main>

      @include("layouts.helpers.footer")
</body>
</html>