@extends('layouts.base')
@section('title', 'Ajouter')
@section('main')
<div class="flex-container">
    {!! Form::open(['url' => '/vin/insert', 'class' => 'insertForm']) !!}
      
  <div class="column">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('name', $vin->name) }}}
  </div>
      
      
    </div>
    <div class="form-group">
      {{{ Form::label('Year') }}}
      {{{ Form::number('year', $vin->year) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Color') }}}
      {{{ Form::number('color', $vin->color) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Region') }}}
      {{{ Form::number('region', $vin->region) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Stock') }}}
      {{{ Form::select('stock', $stocks, $vin->stock->id) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Producteur') }}}
      {{{ Form::select('producteur[]', $producteur, $vin->producteur, ['multiple' => true]) }}}
    </div>
    {{{ Form::submit('Modifier produit') }}}
  {!! Form::close() !!}
    
@endsection