@extends('layouts.base')
@section('title', 'Read')
@section('main')
<section>
<div class="flex-container center">
    <div class="column">
        <h2 class="accueil">Liste des Produits :</h2>
    </div>
</div>
<div class="flex-container center">
<div class="flex-container">
  <div class="column">
      <ul>
      <li class="column style-col-titre">Name</li>
      @foreach($bottles as $bottle)
      <li class="column style-col">{{ $bottle->name }}</li>
      @endforeach
      </ul>
  </div>
  </div>
  <div class="flex-container">
  <div class="column">
      <ul>
      <li class="column style-col-titre">Year</li>
      @foreach($bottles as $bottle)
      <li class="column style-col">{{ $bottle->year }}</li>
      @endforeach
      </ul>
  </div>
  </div>
  <div class="flex-container">
  <div class="column">
      <ul>
      <li class="column style-col-titre">Color</li>
      @foreach($bottles as $bottle)
      @if($bottle->color_id)
      <li class="column style-col">{{ $bottle->color->color }}</li>
      @else
      <li class="column style-col">N</li>
      @endif
      @endforeach
      </ul>
  </div>
  </div>
  <div class="flex-container">
  <div class="column">
      <ul>
      <li class="column style-col-titre">Taste</li>
      @foreach($bottles as $bottle)
      @if($bottle->tastes)
        @foreach ($bottle->tastes as $taste)
          <td class="content-color">{{ $taste->taste }}</td>
        @endforeach 
      @else
      <li class="column style-col">N</li>
      @endif
      @endforeach
      </ul>
  </div>
  </div>
  <div class="flex-container">
  <div class="column">
      <ul>
      <li class="column style-col-titre">Stock</li>
      @foreach($bottles as $bottle)
      <li class="column style-col">{{ $bottle->stock }}</li>
      @endforeach
      </ul>
  </div>
  </div>

  <div class="flex-container">
  <div class="column">
      <ul>
      <li class="column style-col-titre">Edit</li>
      @foreach($bottles as $bottle)
      <form method="GET" action="/bottle/update/{{$bottle->id}}">
        {{ csrf_field() }}
          <button class="column style-col-fa" color="submit" value="X">
              <i class="fa fa-pencil" aria-hidden="true"></i>
          </button>
      </form>
      @endforeach
      </ul>
  </div>
  </div>

  <div class="flex-container">
  <div class="column">
      <ul>
      <li class="column style-col-titre">Delete</li>
      @foreach($bottles as $bottle)
      <form method="GET" action="/bottle/delete/{{$bottle->id}}">
        {{ csrf_field() }}
          <button class="column style-col-fa" color="submit" value="X">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
          </button>
      </form>
      @endforeach
      </ul>
  </div>
  </div>
  
  </div>
            
</section>
@endsection