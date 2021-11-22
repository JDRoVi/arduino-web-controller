
@foreach ($data as $datos)
    <li>{{$datos->tarea}}</li>
@endforeach

<form action="{{ route('store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tarea:</strong>
                <input type="text" name="tarea" class="form-control" placeholder="tarea">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>descripcion:</strong>
                <input type="text" name="descripcion" class="form-control" placeholder="descripcion">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>fecha:</strong>
                <input type="date" name="fecha" class="form-control" placeholder="fecha">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>