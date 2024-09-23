@extends('frontnd.layouts.main')
  @push('title')
      <title>home</title>
  @endpush
  @section('main.section')
  <style>
    .banner-img{
        padding-top:1.5rem;
        padding-bottom: 1.5rem;
    }
    
</style>
{{-- mail start --}}
<main>
   {{-- main banner section  --}}
   <section>
    <div class="banner-img">
        
        <img src="\images\football.png" class="img-fluid w-100 h-30rem" style="height: 30rem;padding-right: 2.5rem;padding-left: 2.5rem;" alt="Responsive image">
        
    </div>
</main>
  {{-- main end     <img src="\images\crickret1.jpeg" alt="..." class="img-fluid"> --}}
  @endsection