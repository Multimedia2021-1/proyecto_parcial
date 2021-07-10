@extends('main')
    @section('titulo')
        Show
    @endsection
    @section('contenido')
    <table class="table table-dark table-striped">
    <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">peso</th>
                <th scope="col">precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo '<tr>';
                echo '<th>'.$products->id.'</th>';
                echo '<td>'.$products->nombre.'</td>';
                echo '<td>'.$products->peso.'</td>';
                echo '<td>'.$products->precio.'</td>';
            ?>
        </tbody>
    </table>
    @endsection