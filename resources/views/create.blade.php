@extends('layouts.base')
@section('title', 'Add')
@section('main')
<div class="flex-container center">
    <div class="column">
        <h2 class="accueil">Ajouter un Produit :</h2>
    </div>
</div>
<div class="flex-container center">
  <form method="POST" action="/bottle/insert">
        {{ csrf_field() }}
        <div class="column">
        <div class="flex-container-row">
            <label class="label-style-col-titre">Name</label>
            <input type="text" class="input-style-col" name="name">
        </div>
        <div class="flex-container-row">
            <label class="label-style-col-titre">Year</label>
            <input type="text" class="input-style-col" name="year">
        </div>
        <div class="flex-container-row">
            <label class="label-style-col-titre">Color</label>
                <select class="input-style-col" name="color">
                    @foreach($colors as $color)
                    <option value="{{ $color -> id}}">{{ $color -> color}}</option>
                    @endforeach
                </select>
        </div>
        <div class="flex-container-row">
            <label class="label-style-col-titre">Stock</label>
            <input type="text" class="input-style-col" name="stock">
        </div>
        <div class="flex-container-row">
            <label class="label-style-col-titre">Taste</label>
                <select class="input-style-col" name="taste">
                    @foreach($tastes as $taste)
                    <option value="{{ $taste -> id}}">{{ $taste -> taste}}</option>
                    @endforeach
                </select>
        </div>
            <button type="submit" class="column style-col-titre">Ajouter</button>
        
      
  </div>
</div>    
@endsection