@extends('admin.layout.admin')

@section('content')

    <h3>Aggiungi Prodotto</h3>

    <div class="row"> //form con libreria collective
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true]) !!}

            <div class="form-group">
                {{ Form::label('name', 'Nome') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Descrizione') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('size', 'Taglia') }}
                {{ Form::select('size', [ 'bambino' => 'Bambino', 'adolescente' => 'Adolescente','adulto'=>'Adulto'], null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Categoria Prodotto') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Seleziona Categoria']) }}
            </div>

            <div class="form-group">
                {{ Form::label('image', 'Immagine') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>




            {{ Form::submit('Crea Prodotto', array('class' => 'btn btn-success')) }}
            {!! Form::close() !!}

        </div>
    </div>



@endsection
