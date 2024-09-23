@extends('frontnd.layouts.main')
@push('title')
    <title>see-all</title>
@endpush
@section('main.section')
<style>
    .imge{
        padding-left: 1rem;
        padding-right: 1rem;
    }
    .imge img{
        height: 120px;
        width: 120px;
    }
    .cast{
         border-bottom: 1px solid var(--light-black);
         }
</style>
    {{-- mail start --}}
    <main>
        {{-- about  --}}
        <div class="about" style="margin-left: 1.5rem;padding-top: 1.5rem;padding-bottom: 1.5rem;">
            <h1>About the movie</h1>
            <p>Get ready to fall in love all over again!</p>
        </div>
        {{-- end about  --}}
        {{-- start casting --}}
        <div class="cast py-3" style="margin-left: 1.5rem;padding-top: 1.5rem;padding-bottom: 1.5rem;">
            <h3>Cast</h3>
        </div>
        {{-- main banner section  --}}
        <div class="card-group" style="margin-right: 2rem; margin-left:2rem;margin-bottom: 2rem;padding-top: 1.5rem;" >

            <div class="imge ">
                <img src="/images\img1.avif" alt="Image description">
                <h5 class="imge-title" style="text-align: center">Card title</h5>
                <p class="imge-text"style="text-align:center">Some quick</p>
            </div>
            <div class="imge">
                <img class="rounded-circle" src="images/img2.jpg" alt=" image cap">
                <h5 class="imge-title" style="text-align: center">Card title</h5>
                <p class="imge-text"style="text-align:center">Some quick</p>

            </div>
            <div class="imge">
                <img class="rounded-circle" src="images\img3.avif" alt=" image cap">
                <h5 class="imge-title" style="text-align: center">Card title</h5>
                <p class="imge-text"style="text-align:center">Some quick</p>

            </div>
            <div class="imge ">
                <img src="images\img4.avif" class="rounded-circle" alt="Cinque Terre">
                <h5 class="imge-title" style="text-align: center">Card title</h5>
                <p class="imge-text"style="text-align:center">Some quick</p>

            </div>
            <div class="imge">
                <img class="rounded-circle" src="images\img5.avif" alt=" image cap">
                <h5 class="imge-title" style="text-align: center">Card title</h5>
                <p class="imge-text"style="text-align:center">Some quick</p>

            </div>
            <div class="imge">
                <img class="rounded-circle" src="images\img6.avif" alt=" image cap">
                <h5 class="imge-title" style="text-align: center">Card title</h5>
                <p class="imge-text"style="text-align:center">Some quick</p>

            </div>
        </div>
        </div>
        {{-- end castimg --}}

           {{-- start Crew --}}
           <div class="cast" style="margin-left: 1.5rem;padding-top: 1.5rem;padding-bottom: 1.5rem;">
            <h3>Crew</h3>
        </div>
        {{-- main banner section  --}}
        <div class="card-group" style="margin-right: 2rem; margin-left:2rem;margin-bottom: 2rem;padding-top: 1.5rem;" >

            <div class="imge ">
                {{-- <img class="rounded-circle" src="images\img1.avif" alt=" image cap"> --}}
                <img class="rounded-circle" src="images/img1.avif" alt="image cap">
                <h5 class="imge-title" style="text-align: center">Card title</h5>
                <p class="imge-text"style="text-align:center">Some quick</p>
            </div>
            <div class="imge">
                <img class="rounded-circle" src="images/img2.avif" alt=" image cap">
                <h5 class="imge-title" style="text-align: center">Card title</h5>
                <p class="imge-text"style="text-align:center">Some quick</p>

            </div>
            <div class="imge">
                <img class="rounded-circle" src="images/img3.avif" alt=" image cap">
                <h5 class="imge-title" style="text-align: center">Card title</h5>
                <p class="imge-text"style="text-align:center">Some quick</p>

            </div>
            <div class="imge ">
                <img src="images\img4.avif" class="rounded-circle" alt="Cinque Terre">
                <h5 class="imge-title" style="text-align: center">Card title</h5>
                <p class="imge-text"style="text-align:center">Some quick</p>

            </div>
            <div class="imge">
                <img class="rounded-circle" src="images\img5.avif" alt=" image cap">
                <h5 class="imge-title" style="text-align: center">Card title</h5>
                <p class="imge-text"style="text-align:center">Some quick</p>

            </div>
            <div class="imge">
                <img class="rounded-circle" src="images\img6.avif" alt=" image cap">
                <h5 class="imge-title" style="text-align: center">Card title</h5>
                <p class="imge-text"style="text-align:center">Some quick</p>

            </div>
        </div>
        </div>
        {{-- end Crew --}}
        <section>
            <div class="d-flex justify-content-between navbar navbar-expand-lg navbar-info"style="padding-left: 2rem;padding-right: 2rem;padding-bottom:2rem;padding-top: 2rem;">
                <div>
                   <h4>Top reviews</h4>
                </div>
                <div>
                   <div class="btn btn-light"> <a href="complet_view_all"> reviews </a></div>
                </div>
             </div>
        </section>


    </main>
    {{-- main end     <img src="\images\crickret1.jpeg" alt="..." class="img-fluid"> --}}
@endsection
