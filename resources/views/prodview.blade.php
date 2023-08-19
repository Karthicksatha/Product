<!DOCTYPE html>
<html>

<head>
    <title>All Product Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>All Product Details</h2>
        <a href="#" onclick="goBack()" class="btn btn-secondary mb-3">Back</a>

        <table id="productTable" class="table">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Unit Type</th>
                    <th>Category</th>
                    <th>Product Images</th>
                    <th>Price</th>
                    <th>Discount Percentage</th>
                    <th>Discount Amount</th>
                    <th>Discount Range From</th>
                    <th>Discount Range To</th>
                    <th>Tax Percentage</th>
                    <th>Tax Amount</th>
                    <th>Stock Entry</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>prod - {{ $product->id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->unit_type }}</td>
                        <td>{{ $product->category }}</td>
                        <td>@php
                            $imageArray = json_decode($product->product_images);
                            
                            if (is_array($imageArray) && count($imageArray) > 0) {
                                $imageFilename = $imageArray[0];
                            }
                        @endphp
                            <img class="img-fluid profile-prev"
                                src="{{ asset('storage/product_images/' . $imageFilename) }}" alt=""
                                title="" width="100%" height="100%" />
                        </td>
                        <td>{{ $product->price }} &#2352</td>
                        <td>{{ $product->discount_percentage }} %</td>
                        <td>{{ $product->discount_amount }} &#2352</td>
                        <td>{{ $product->discount_range_from }}</td>
                        <td>{{ $product->discount_range_to }}</td>
                        <td>{{ $product->tax_percentage }} % </td>
                        <td>{{ $product->tax_amount }} &#2352</td>
                        <td>
                            @if ($product->stock_entry === 0)
                                <button class="btn btn-success">Stock In</button>
                            @else
                                <button class="btn btn-danger">Stock Out</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#productTable').DataTable();
        });

        function goBack() {
            window.location.href = 'http://127.0.0.1:8000/';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
