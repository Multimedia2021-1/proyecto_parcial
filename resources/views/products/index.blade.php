@extends('main')
    @section('titulo')
        index
    @endsection
    @section('contenido')
        <table class="table table-danger">
        <thead>
            <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>peso</th>
                    <th>precio</th>
                    <th>otros</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i=0;$i<count($products);$i++){
                    echo '<tr>';
                        echo '<th>'.$products[$i]->id.'</th>';
                        echo '<td>'.$products[$i]->nombre.'</td>';
                        echo '<td>'.$products[$i]->peso.'</td>';
                        echo '<td>'.$products[$i]->precio.'</td>';     
                        echo '<td>';
                        echo "<a title='details' href='".route('products.show',$products[$i]->id)."'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-eyeglasses' viewBox='0 0 16 16'>
                            <path d='M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A1.993 1.993 0 0 0 8 6c-.532 0-1.016.208-1.375.547zM14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z'/>
                            </svg></a>&nbsp";
                        echo "<a title='edit' href='".route('products.edit',$products[$i]->id)."'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-pen-fill' viewBox='0 0 16 16'>
                            <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z'/>
                            </svg></a>&nbsp";
                        echo "<a title='delete' href='".route('products.destroy',$products[$i]->id)."'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg></a>";
                        echo '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <a type="button" class="btn btn-primary" href="{{route('products.create')}}">Nuevo Producto</a>
    @endsection