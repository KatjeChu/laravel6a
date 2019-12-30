<!--шаблон для сообщения, который приходит на почту из формы обратной связи-->
<table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="100%" cellpadding="0" cellspacing="0">
                <h1 style="font-size: 20px;">Сообщение из формы обратной связи</h1>
            </td>
        </tr>
        <tr>
            <td width="100%" cellpadding="0" cellspacing="0">
                <p><b>От:</b> {{ $contactName }} <i>({{ $contactEmail }})</i></p>
                <p><b>Тема:</b> {{ $contactSubject }}</p>
                <p><b>Сообщение:</b></p>
                <p>{{ $contactMessage }}</p>
            </td>
        </tr></table>

