@extends('form')

@section('contents')
    <div class="main-content">


        <main>
            <h2 class="dash-title">Stocks History</h2>







            <table class="table table-striped" style="margin-top:20px;">
                <thead style="background-color: #90ccbc;">
                    <tr>

                        <th>Item Name</th>
                        <th>Stock Added</th>
                        <th>Time Added</th>
                        <th>Admin</th>



                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $datas)
                        <tr>
                            <td>{{ $datas->item_name }}</td>
                            <td>{{ $datas->stock_added }}</td>
                            <td>{{ $datas->time_added }}</td>
                            <td>{{ $datas->admin }}</td>


                        </tr>
                    @endforeach


                </tbody>
            </table>



    </div>
    </div>

    </div>

    </main>




    </div>
@endsection
