@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>About</h2>

        <table class="table table-bordered table-hover">
            <thead style="color:white;background: #0275d8;">
                <th>Subject</th>
                <th>Project</th>   
                <th>Professor</th>   
                <th>Student</th>                   
            </thead>
            <tbody>
                <tr>
                    <td>Projektovanje IS</td>
                    <td>Alcoholic Beverages e-Shop</td>
                    <td>doc. dr Dalibor Radovanović</td>
                    <td>Mladen Dubovac 2017240062</td>
                </tr>
            </tbody>
        </table>

        <h4>Map</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.7904226553155!2d21.893828715053488!3d43.31864647913414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0b16f291241%3A0x5d4587d453cb8630!2z0KPQvdC40LLQtdGA0LfQuNGC0LXRgiDQodC40L3Qs9C40LTRg9C90YPQvA!5e0!3m2!1sen!2srs!4v1591713533742!5m2!1sen!2srs" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
@endsection