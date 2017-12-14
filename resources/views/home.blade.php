@extends('layouts.base')
@section('title', 'Accueil')
@section('main')
<section>
<div class="flex-container center">
    <div class="column">
        <h1 class="accueil">Liste des Produits :</h1>
    </div>
</div>
<div class="flex-container center">
<div class="flex-container">
  <div class="column">
      <ul>
      <li class="column style-col-titre">Name</li>
      @foreach($vins as $vin)
      <li class="column style-col">{{ $vin->name }}</li>
      @endforeach
      </ul>
  </div>
  </div>
  <div class="flex-container">
  <div class="column">
      <ul>
      <li class="column style-col-titre">Year</li>
      @foreach($vins as $vin)
      <li class="column style-col">{{ $vin->year }}</li>
      @endforeach
      </ul>
  </div>
  </div>
  <div class="flex-container">
  <div class="column">
      <ul>
      <li class="column style-col-titre">Type</li>
      @foreach($vins as $vin)
      <li class="column style-col">{{ $vin->color }}</li>
      @endforeach
      </ul>
  </div>
  </div>
  <div class="flex-container">
  <div class="column">
      <ul>
      <li class="column style-col-titre">Region</li>
      @foreach($vins as $vin)
      <li class="column style-col">{{ $vin->region }}</li>
      @endforeach
      </ul>
  </div>
  </div>
  </div>
            
</section>
@endsection