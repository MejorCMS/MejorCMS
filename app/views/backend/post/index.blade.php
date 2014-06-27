@extends('backend.template.index')

@section('main')
<div class=" panel">
    <ul class="nav nav-pills">
    <li>
        <a href="#" class="glyphicon glyphicon-align-justify">
            Articulos
        </a>
    </li>
    <li>
        <a href="{{route('new.article')}}" class="glyphicon glyphicon-plus">
            Nuevo</a>
    </li>
    <li>
        <a href="#" class="glyphicon glyphicon-pencil">
            Editar</a>
    </li>
    <li>
        <a href="#" class="glyphicon glyphicon-trash">
            Eliminar</a>
    </li>
</ul>
</div>
<div class="panel">
    <table id="posts" class="table">
        <thead>
        <tr>
            <th></th>
            <th>Titulo</th>
            <th>Publicado</th>
            <th>Categoria</th>
            <th>Creado por</th>
            <th>Fecha de publicaion</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $article)
        <tr>
            <td>
                {{Form::radio('selecionar', $article->id,true)}}
            </td>
            <td>{{$article->title}}</td>
            <td>
                @if($article->published==true)
                    <button type="button" class="btn btn-default glyphicon glyphicon-eye-open" ></button>
                @else
                 <button type="button" class="btn btn-danger glyphicon glyphicon-eye-close"></button>
                @endif

            </td>
            <td>{{$article->category->name}}</td>
            <td>Elefante</td>
            <td>{{$article->created_at}}</td>
            <td>
                <a href="" class="btn btn-default glyphicon glyphicon-pencil"></a>
                <a href="" class="btn btn-default glyphicon glyphicon glyphicon-trash"></a>

            </td>

        </tr>
        @endforeach
    </table>
    <div >
        {{ $data->links()}}
    </div>


</div>

@stop
@section('script')

<script>

</script>
@stop