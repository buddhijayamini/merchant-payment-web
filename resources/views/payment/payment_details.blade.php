<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pays:</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css')}}">
        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
        <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
<div class="card">
  <div class="card-header">
   <h2>Merchant Payment Search</h2>
  </div>
  <div class="card-body">

      <table id="pays" class="display table table-bordered" width="100%" cellspacing="0" style="border: 1px solid black; ">
    <thead class="table-secondary">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Bank</th>
        <th>District</th>
        <th>City</th>
        <th>Postal Code</th>
        <th>Payment Id</th>
        <th>Payment Date</th>
        <th>Payment Amount</th>
        <th>Card</th>
        <th>Card No:</th>
        <th>Merchant Status</th>
        <th>Currency</th>
      </tr>
    </thead>
    <tbody>
     @foreach($query as $data)
      <tr>
        <td>{{$data->id }}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->type}}</td>
        <td>{{$data->bank}}</td>
        <td>{{$data->district}}</td>
        <td>{{$data->city}}</td>
        <td>{{$data->postal_code}}</td>
        <td>{{$data->payment_id}}</td>
        <td>{{$data->payment_date}}</td>
        <td>{{$data->payment_amount}}</td>
        <td>{{$data->card}}</td>
        <td>{{$data->card_no}}</td>
        <td>{{$data->merchant_status}}</td>
        <td>{{$data->currency}}</td>
      </tr>
       @endforeach
    </tbody>
  </table>
  </div>
</div>
</div>

</body>
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
        <script src="{{asset('https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js')}}"></script>

        <script type="text/javascript">
            $(document).ready(function () {

                   $('#pays').DataTable();
            });
        </script>
</html>
