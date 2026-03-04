<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
    <style>
        .vip {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Danh sách sản phẩm</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>Tên</th>
            <th>Giá (triệu)</th>
        </tr>

        @foreach ($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>

                <td>
                    @if ($product['price'] > 10)
                        <span class="vip">
                            {{ $product['price'] }} triệu (Vip)
                        </span>
                    @else
                        {{ $product['price'] }} triệu
                    @endif
                </td>
            </tr>
        @endforeach

    </table>
</body>
</html>