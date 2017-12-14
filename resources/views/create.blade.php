@extends('layouts.base')
@section('title', 'Ajouter')
@section('main')
<div class="flex-container center">
    <div class="column">
        <h1 class="accueil">Ajouter un Produit :</h1>
    </div>
</div>
<div class="flex-container center">
  <form method="POST" action="/vin/insert">
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
            <label class="label-style-col-titre">Type</label>
            <input type="text" class="input-style-col" name="color">
        </div>
        <div class="flex-container-row">
            <label class="label-style-col-titre">Region</label>
            <input type="text" class="input-style-col" name="region">
        </div>
        <div class="flex-container-row">
            <label class="label-style-col-titre">Stock</label>
                <select class="input-style-col" name="stock">
                    @foreach($stocks as $stock)
                    <option value="{{ $stock -> id}}">{{ $stock -> stock}}</option>
                    @endforeach
                </select>
        </div>
        <div class="flex-container-row">
            <label class="label-style-col-titre">Producteur</label>
                <select class="input-style-col" name="producteur">
                    @foreach($producteurs as $producteur)
                    <option value="{{ $producteur -> id}}">{{ $producteur -> producteur}}</option>
                    @endforeach
                </select>
        </div>
        
            <button type="submit" class="column style-col-titre">Ajouter</button>
        
      
  </div>
</div>    
@endsection