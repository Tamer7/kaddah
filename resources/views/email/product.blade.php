<div>
    you have new email with following products qoutations
</div>

<div>
    <h3>User Details</h3>
    Name: {{ $details['user']['name'] }} <br>
    Email: {{ $details['user']['email'] }} <br>
    Phone: {{ $details['user']['phone'] }} <br>
    City: {{ $details['user']['city'] }} <br>
    Company: {{ $details['user']['company'] }} <br>
    User Type: {{ $details['user']['type'] }} <br>
    User ID: {{ $details['user']['id'] }} <br>
</div>

<div>
    <h3>Order Details</h3>
    <table>
        <thead>
        <tr>
            <th>Code</th>
            <th>Product Name</th>
            <th>Order id</th>
            <th>Qty</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details['products'] as $item)
            <tr>
                <td>
                    {{ $item['code'] }}
                </td>
                <td>
                    {{ $item['name'] }}
                </td><td>
                    {{ $item['order_id'] }}
                </td><td>
                    {{ $item['qty'] }} </td></tr>
        @endforeach
        </tbody>
    </table>
</div>
