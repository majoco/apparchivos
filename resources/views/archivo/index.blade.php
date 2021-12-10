@extends('layouts.app')

@section('template_title')
    Archivo
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Archivo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('archivos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>User</th>
										<th>Nombre</th>
										<th>File</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>                                    
                                    @foreach ($archivos as $archivo)
                                        @if ($archivo->user_id == Auth::user()->id)
                                            <tr>
                                                <td>{{ $archivo->id }}</td>
                                                
                                                <td>{{ Auth::user()->name }}</td>
                                                <td>{{ $archivo->nombre }}</td>
                                                <td>{{ $archivo->file }}</td>
                                                <td>{{ $archivo->descripcion }}</td>

                                                <td>
                                                    <form action="{{ route('archivos.destroy',$archivo->id) }}" method="POST">                                                                                                                                                            
                                                        <a class="btn btn-sm btn-primary" href="{{ route('file-download',['id'=>$archivo->id]) }}">Download</a>
                                                        <a class="btn btn-sm btn-success " href="{{ route('archivos.show',$archivo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                        <!--<a class="btn btn-sm btn-success" href="{{ route('archivos.edit',$archivo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>-->
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $archivos->links() !!}
            </div>
        </div>
    </div>
@endsection
