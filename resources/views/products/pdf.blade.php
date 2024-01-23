<!DOCTYPE html>
<html>
<head>
  <title>Laravel 10 Generate PDF Using DomPDF - Techsolutionstuff</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12" style="margin-top: 15px ">
        <div class="pull-left">
          <h2>{{$product->name}}</h2>
          <h4> Product details</h4>
        </div>
        <div class="pull-right">
        </div>
      </div>
    </div><br>
    <table class="table table-bordered">
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Shipping Cost</th>
        <th>Product Status</th>
      </tr>
      <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>AUD {{ $product->price }}</td>
        <td>AUD {{ $product->shipping_cost }}</td>
        <td>{{ ($product->product_status == 1)? "Active" : "Deactivated" }}</td>
      </tr>
    </table>
  </div>
</body>
</html>
