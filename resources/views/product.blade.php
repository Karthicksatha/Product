<!DOCTYPE html>
<html>

<head>
    <title>New Product Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>


<body>

    <div class="container mt-5">
        <h1 class="mb-4">Create a New Product</h1>

        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="product_name">Product Name:</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="unit_type">Unit Type:</label>
                    <select class="form-control" id="unit_type" name="unit_type">
                        <option value="Qty">Qty</option>
                        <option value="Ltr">Ltr</option>
                        <option value="KG">KG</option>
                        <option value="Meter">Meter</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="product_category">Product Category:</label>
                    <input type="text" class="form-control" id="product_category" name="product_category" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="product_images">Product Images (Min 3-Images):</label>
                    <input type="file" class="form-control-file" id="product_images[]" name="product_images[]" multiple accept="image/*" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="product_price">Product Price:</label>
                    <input type="number" class="form-control" id="product_price" name="product_price" step="0.01"
                        required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="discount_percentage">Discount Percentage:</label>
                    <input type="number" class="form-control" id="discount_percentage" name="discount_percentage"
                        step="0.01">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="discount_amount">Discount Amount:</label>
                    <input type="number" class="form-control" id="discount_amount" name="discount_amount"
                        step="0.01">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="discount_dates">Discount Range Dates:</label>
                    <input type="date" class="form-control" id="discount_start_date" name="discount_start_date">
                    <input type="date" class="form-control" id="discount_end_date" name="discount_end_date">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="tax_percentage">Tax Percentage:</label>
                    <input type="number" class="form-control" id="tax_percentage" name="tax_percentage" step="0.01">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="stock_quantity">Stock Entry:</label>
                    <select class="form-control" id="stock_entry" name="stock_entry">
                        <option value="0">Available</option>
                        <option value="1">Not Available</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tax_amount">Tax Amount:</label>
                    <input class="form-control" type="number" id="tax_amount" name="tax_amount" step="0.01">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
