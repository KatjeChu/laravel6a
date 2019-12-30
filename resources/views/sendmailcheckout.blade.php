<!--шаблон для сообщения, который приходит на почту из формы обратной связи-->
<table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="100%" cellpadding="0" cellspacing="0">
                <h1 style="font-size: 20px;">Сообщение из формы обратной связи</h1>
            </td>
        </tr>
        <tr>
            <td width="100%" cellpadding="0" cellspacing="0">
                <p><b>От:</b> {{ $contactName }} {{ $contactSurname }}</p>
                <p><b>Адрес:</b> {{ $contactAddress }}</p>
                <p><b>Телефон:</b> {{ $contactPhonenumber }}</p>
                <p><b>Комментарий:</b> {{ $contactComment }}</p>
                <p><b>Заказано:</b></p>
                @foreach (Cart::content() as $item)                
                <p class="product-name"><a href="{{route('shop.show', $item->model->id)}}">{{$item->model->title}}</a> за 
                 {{$item->model->price}} руб.</p>
                @endforeach
            </td>
        </tr></table>

