<h2>Поступил новый заказ</h2>

<h3>Клиент: {{$user->name}} </h3>
<h3>Email: {{$user->email}} </h3>


<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th class="width-1">Product Name</th>
                <th class="width-2">Price</th>
                <th class="width-3">Qty</th>
                <th class="width-4">Subtotal</th>
            </tr>
        </thead>
        @foreach ($cart as $item)

        <tbody>
            <tr>
                <td>
                    <div class="o-pro-dec">
                        <p>{{$item->name}}</p>
                    </div>
                </td>
                <td>
                    <div class="o-pro-price">
                        <p>{{$item->price}}</p>
                    </div>
                </td>
                <td>
                    <div class="o-pro-qty">
                        <p>{{$item->quantity}}</p>
                    </div>
                </td>
                <td>
                    <div class="o-pro-subtotal">
                        <p>{{$item->price * $item->quantity}}</p>
                    </div>
                </td>
            </tr>
            @endforeach
        <tfoot>
            <tr>
                <td colspan="3">Grand Total</td>
                <td colspan="1">{{$sum}}</td>
            </tr>
        </tfoot>
    </table>
</div>
