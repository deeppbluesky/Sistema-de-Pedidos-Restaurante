@extends('layout.main')
@section('content')

<article class="content items-list-page">   
    <div class="title-search-block">
        <div class="title-block">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title"> Categorias
                        <a href="{{ route('categorias.create') }}" class="btn btn-primary btn-sm rounded-s"> Nueva categoria </a>
                    </h3>
                    <p class="title-description"> Lista de Categorias</p>
                </div>
            </div>
        </div>
        <div class="items-search">
            <form class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control boxed rounded-s" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary rounded-s" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    @if(session('mensaje'))
	    <div class="alert alert-dismissible alert-success">
	        <button type="button" class="close" data-dismiss="alert">×</button>
	        {{ session('mensaje') }}
	    </div>
    @endif
    <div class="card-block">
        <div class="card-title-block">
            <h3 class="title"> Lista de categorias </h3>
        </div>
        <section class="example">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nombre de la caategoria</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($categorias as $categoria)
                    		<tr>
	                            <td>{{$categoria->nombre}}</td>
	                            <td>{{"boton"}}</td>
                        	</tr>
                    	@endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <nav class="text-right">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href=""> Prev </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href=""> 1 </a>
            </li>
            <li class="page-item">
                <a class="page-link" href=""> 2 </a>
            </li>
            <li class="page-item">
                <a class="page-link" href=""> Next </a>
            </li>
        </ul>
    </nav>
</article>
@endsection