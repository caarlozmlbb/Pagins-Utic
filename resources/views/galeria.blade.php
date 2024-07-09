<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <nav>
            <a href="/" class="active">Regresar</a>
        </nav>
    </header>
    <div class="slider">
        <div class="list">
            @foreach ($galerias as $galeria)
            <div class="item">
                <img src="{{asset('assets/imgs/galerias/'. $galeria->foto)}}" alt="">
                <div class="content">
                    <div class="title">U-TIC</div>
                    <div class="type">{{$galeria->descripcion}}</div>
                    {{-- <div class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
                    </div>
                    <div class="button">
                        <button>SEE MORE</button>
                    </div> --}}
                </div>
            </div>
            @endforeach
        </div>


        <div class="thumbnail">
            @foreach ($galerias as $galeria)
            <div class="item">
                <img src="{{asset('assets/imgs/galerias/'. $galeria->foto)}}" alt="">
            </div>
            @endforeach
        </div>

        <div class="nextPrevArrows">
            <button class="prev"> < </button>
            <button class="next"> > </button>
        </div>

    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
