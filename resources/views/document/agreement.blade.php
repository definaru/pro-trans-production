@extends('layout/main')
@section('title', isset($user->contract->name) ? 'Детали договора' : 'Заключение договора')

@section('content')

@if(session('status'))
    <x-alert type="success" close="true" message="{{ session('status') }}" />
@endif

@if(isset($user->contract->name))
    <div class="d-flex align-items-center gap-3 d-print-none">
        <x-badge color="{{$contract['state']['color']}}" text="{{$contract['state']['name']}}" />
        <span class="d-flex align-items-center gap-1 text-secondary">
            <span class="material-symbols-outlined fs-5">calendar_month</span>
            {{$time::parse($contract['updated'])->locale('ru')->translatedFormat('d F Y, H:i')}}
        </span>
    </div>

    <div class="card shadow-sm border-0 mt-4">
        <div class="card-body px-5">
            <table class="w-100">
                <tr>
                    <td colspan="2" class="text-center py-5">
                        <h3>ДОГОВОР №{{$contract['name']}}</h3>
                    </td>
                </tr>
                <tr>    
                    <td class="w-50">г. Москва</td>
                    <td class="w-50 text-end">
                    {{$time::parse($contract['moment'])->locale('ru')->translatedFormat('d.m.Y')}} г.
                    </td>
                </tr>
            </table>
            <table class="w-100 d-block mt-4">
                <tr>
                    <td>
                        <p>
                            ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ПРОСПЕКТ ТРАНС", именуемое(ый) в
                            дальнейшем ПОСТАВЩИК, в лице <u>&#160;{{$contract['ownAgent']['director']}}
                                <!-- $dadata::cleanName($contract['ownAgent']['director'])[0]['result_genitive'] -->
                                &#160;</u> ,
                            действующего(ей) на основании устава, с одной СТОРОНЫ, и {{$contract['agent']['legalTitle']}}, 
                            именуемое(ый) в дальнейшем ПОКУПАТЕЛЬ, в лице <u>&#160;{{$user->contract->name}}
                                <!-- $dadata::cleanName($user->contract->name)[0]['result_genitive'] -->
                                &#160;</u>, 
                            действующего(ей) на основании <u>&#160;{{$user->contract->action}}&#160;</u>, с другой СТОРОНЫ, 
                            а вместе именуемые СТОРОНАМИ, заключили настоящий
                            договор о нижеследующем:  
                            <br />                      
                            <br />             
                        </p>                    
                        <p><b class="text-center d-block w-100">1. ПРЕДМЕТ ДОГОВОРА</b></p>
                        <p>
                            1.1. ПОСТАВЩИК обязуется поставить, а ПОКУПАТЕЛЬ принять и оплатить товары и (или) услуги
                            согласно спецификации (счета, счета-фактуры, накладной), в которой отражаются наименование, цена,
                            количество и общая стоимость товара, и которая является неотъемлемой частью настоящего договора.
                            Стоимость товара указывается без учета налога на добавленную стоимость, постольку ПОСТАВЩИК
                            является субъектом, применяющим упрощенную систему налогообложения в соответствии с главой 26.2
                            НК РФ.                        
                        </p>
                        <p>
                            1.2. Сумма договора определяется путем сложения сумм всех поставок, осуществляемых в рамках и в
                            течение срока действия этого Договора, в валюте РФ.
                        </p>
                        <p><b class="text-center d-block w-100 mt-5">2. ПРАВА И ОБЯЗАННОСТИ СТОРОН В ДОГОВОРЕ</b></p>
                        <p><b class="text-center d-block w-100">2.1. Права и обязанности ПОСТАВЩИКА:</b></p>
                        <p>
                            2.1.1. Передать ПОКУПАТЕЛЮ товар в количестве, ассортименте и по ценам, указанным в товарной
                            накладной.                        
                        </p>
                        <p>
                            2.1.2. В момент отгрузки товаров или в течении 5 (пяти) рабочих дней после отгрузки товаров
                            ПОСТАВЩИК должен предоставить ПОКУПАТЕЛЮ счет-фактуру и сертификат качества на товар.                        
                        </p>
                        <p>
                            2.1.3. Переданный товар должен соответствовать стандартам страны изготовителя и быть
                            сертифицированным Российскими Органами Сертификации.                        
                        </p>
                        <p>
                            2.1.4. Упаковка товара должна иметь товарный вид и полностью обеспечивать безопасность и
                            сохранность товара при транспортировке и хранении.                        
                        </p>
                        <p>
                            2.1.5. Отгрузить товар ПОКУПАТЕЛЮ немедленно после оплаты в кассу, либо в течение 3-х рабочих дней
                            с момента получения денег на расчетный счет ПОСТАВЩИКА.                        
                        </p>

                        <p><b class="text-center d-block w-100 mt-5">2.2. Обязанности ПОКУПАТЕЛЯ:</b></p>
                        <p>
                            2.2.1. Принять от ПОСТАВЩИКА товар по накладной в соответствии с требованиями Инструкции о
                            порядке приемки товара по количеству и качеству.                        
                        </p>
                        <p>
                            2.2.2. Выплатить стоимость товара ПОСТАВЩИКУ согласно выставленного счета в течение 5 дней от
                            даты выставления счёта путем перечисления денег на расчетный счет ПОСТАВЩИКА или оплатить
                            стоимость товара согласно спецификации (счета, счёта-фактуры, накладной) в кассу ПОСТАВЩИКА.
                        </p>
                        <p>
                            2.2.3. При нарушении ПОКУПАТЕЛЕМ сроков оплаты по выставленным счетам ПОСТАВЩИК вправе
                            аннулировать счёт и отказать ПОКУПАТЕЛЮ в поставке товара.
                        </p>
                        <p>
                            2.2.4. ПОКУПАТЕЛЬ обязан сообщить ПРОДАВЦУ об изменении своего юридического адреса и своих
                            реквизитов непозднее двух недель с момента их изменения
                        </p>
                        <p><b class="text-center d-block w-100 mt-5">3. ОТВЕТСТВЕННОСТЬ СТОРОН ЗА НАРУШЕНИЕ ДОГОВОРА</b></p>
                        <p>
                            3.1. За нарушение СТОРОНАМИ условий настоящего договора они несут ответственность в соответствии
                            с действующим законодательством.
                        </p>
                        <p>
                            3.2. ПОСТАВЩИК несет ответственность за качество проданного товара.
                        </p>
                        

                        <p><b class="text-center d-block w-100 mt-5">4. ОСОБЫЕ УСЛОВИЯ</b></p>
                        <p>
                            4.1. Поставленный товара вывозится ПОКУПАТЕЛЕМ самостоятельно. По просьбе ПОКУПАТЕЛЯ
                            доставка товара может осуществляться за счет ПОСТАВЩИКА. Стоимость доставки увеличивает цену
                            товара.
                        </p>
                        <p>
                            4.2. Все изменения и дополнения к настоящему договору оформляются только письменным соглашением
                            СТОРОН, которые становятся его неотъемлемой частью.
                        </p>
                        <p><b class="text-center d-block w-100 mt-5">5. РАЗРЕШЕНИЕ СПОРОВ</b></p>
                        <p>
                            5.1. Все споры и разногласия СТОРОНЫ будут пытаться решить путем переговоров.
                            Договор считается пролонгированным на следующий год, если ни одна из сторон не заявляет о его
                            расторжении.                        
                        </p>
                        <p>
                            5.2. Неурегулированные путем переговоров спорные вопросы, вытекающие из настоящего договора,
                            СТОРОНЫ передадут на разрешение арбитражного суда г. Москвы.                        
                        </p>
                        <p>
                            5.3. Все споры и разногласия, которые могут возникнуть по настоящему договору или в связи с ним, будут
                            по возможности разрешаться путем переговоров и переписки между Сторонами. В случае если стороны
                            не придут к соглашению, то все споры по настоящему договору и связанные с ним подлежат
                            рассмотрению в Арбитражном суде в соответствии с действующим законодательством РФ. Обращению в
                            арбитражный суд предшествует предъявление претензии, которая должна быть рассмотрена стороной в
                            течение 30 (тридцать) дней с момента получения.                        
                        </p>
                        <p>
                            5.4. В случае изменения почтовых и банковских реквизитов, Стороны обязуются в течение 3 (три) дней в
                            письменной форме известить об этом друг друга.                        
                        </p>
                        <p>
                            5.5. Во всем остальном, что не предусмотрено настоящим договором, Стороны руководствуются
                            действующим законодательством Российской Федерации.
                        </p>
                        <p><b class="text-center d-block w-100 mt-5">6. СРОК ДЕЙСТВИЯ ДОГОВОРА</b></p>
                        <p>
                            6.1. Настоящий договор вступает в силу с момента его подписания СТОРОНАМИ и действует
                            неограниченное время.    
                        </p>
                        <p>
                            6.2. Договор может быть расторгнут по требованию любой из СТОРОН после завершения расчетов по
                            нему с предупреждением другой СТОРОНЫ за 30 дней.                        
                        </p>
                        <p>
                            6.3. Принудительное расторжение договора производится в соответствии со ст. 450-453 ГК РФ.
                        </p>
                        <p><b class="text-center d-block w-100 mt-5">7. ЮРИДИЧЕСКИЕ АДРЕСА И РЕКВИЗИТЫ СТОРОН</b></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table class="table table-bordered mb-5">
                            <tr>
                                <td class="w-50 text-center">
                                    <i>ПОСТАВЩИК:</i><br />
                                    <b>{{$contract['ownAgent']['legalTitle']}}</b>
                                    
                                </td>
                                <td class="w-50 text-center">
                                    <i>ПОКУПАТЕЛЬ:</i><br />
                                    <b>{{$contract['agent']['legalTitle']}}</b>
                                </td>
                            </tr>
                            <tr>
                                <td><b>ИНН:</b> {{$contract['ownAgent']['inn']}}</td>
                                <td><b>ИНН:</b> {{$contract['agent']['inn']}}</td>
                            </tr>
                            <tr>
                                <td><b>КПП:</b> {{$contract['ownAgent']['kpp']}}</td>
                                <td><b>КПП:</b> {{$contract['agent']['kpp']}}</td>
                            </tr>
                            <tr>
                                <td><b>ОГРН:</b> {{$contract['ownAgent']['ogrn']}}</td>
                                <td><b>ОГРН:</b> {{$contract['agent']['ogrn']}}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Юридический адрес:</b> <br />
                                    {{$contract['ownAgent']['legalAddress']}}
                                </td>
                                <td>
                                    <b>Юридический адрес:</b> <br />
                                    {{$contract['agent']['legalAddress']}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Банк:</b> {{$contract['ownAgent']['accounts']['rows'][0]['bankName']}}
                                </td>
                                <td><b>Банк:</b> {{$user->contract->bank}}</td>
                            </tr>
                            <tr>
                                <td><b>р/с:</b> {{$contract['ownAgent']['accounts']['rows'][0]['accountNumber']}}</td>
                                <td><b>р/с:</b> {{$user->contract->rs}}</td>
                            </tr>
                            <tr>
                                <td><b>БИК:</b> {{$contract['ownAgent']['accounts']['rows'][0]['bic']}}</td>
                                <td><b>БИК:</b> {{$user->contract->bik}}</td>
                            </tr>
                            <tr>
                                <td><b>к/с:</b> {{$contract['ownAgent']['accounts']['rows'][0]['correspondentAccount']}}</td>
                                <td><b>к/с:</b> {{$user->contract->ks}}</td>
                            </tr>
                            <tr>
                                <td><b>Тел.:</b> {{ $contact::format_phone(config('app.phone')) }}</td>
                                <td><b>Тел.:</b> {{ $contact::format_phone($user->contract->phone) }}</td>
                            </tr>
                            <tr>
                                <td><b>E-mail:</b> {{$contract['ownAgent']['email']}}</td>
                                <td><b>E-mail:</b> {{$user->contract->email}}</td>
                            </tr>
                        </table>
                        
                        
                        <table class="w-100 mb-5">
                            <tr>
                                <td class="w-50">
                                    <p>_____________________ Генеральный директор</p>
                                    <p><br />&#160;&#160;М.П.</p>
                                </td>
                                <td class="w-50">
                                    <p>_____________________ Генеральный директор</p>
                                    <p><br />&#160;&#160;М.П.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div> 

    @if($contract['state']['name'] === 'Не заключён')
    <div class="d-flex align-items-center row mt-4">
        <div class="col-12 col-lg-5 d-flex gap-3">
            <form action="/dashboard/action/deal" method="post">
                @csrf
                <input type="hidden" name="deal" value="{{$contract['state']['id']}}" />
                <input type="hidden" name="accountId" value="{{$contract['state']['accountId']}}" />
                <x-button icon="done" color="dark" type="submit" text="Подтвердить" />
            </form>
            <x-button type="a" href="agreement/edit" icon="edit" color="outline-dark" text="Редактировать" />
        </div>
        <div class="col-12 col-lg-7">
            <div class="d-flex align-items-center gap-3">
                <span class="material-symbols-outlined fs-1 text-warning">warning</span>
                <small class="text-muted">
                    Пожалуйста, внимательно ознакомьтесь с деталями договора. Если всё указано верное, нажмите кнопку "Подтвердить".
                    На данный момент вы всё ещё можете отредактировать данный договор.
                </small>                
            </div>
        </div>
    </div>
    @else
    <div class="d-flex mt-4 d-print-none">
        <x-button 
            type="a"
            color="dark"
            href="javascript:;" onclick="window.print(); return false;" 
            text="Распечатать" 
            icon="print" 
        /> 
    </div>
    @endif

@else
<div class="card shadow-sm border-0">
    <form action="/dashboard/agreements" class="card-body" method="post">
        @csrf
        <div class="mt-2">
            <label class="fw-bold">Ваше Ф.И.О.</label>
            <input 
                type="text" 
                name="name" 
                class="form-control @error('name') is-invalid @enderror" 
                value="{{ old('name') }}"
                placeholder="Ваше Ф.И.О." 
            />
            @error('name')
                <small class="valid-feedback d-block text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mt-2">
            <label class="fw-bold">Действуете на основании:</label>
            <select 
                name="action" 
                class="form-control @error('action') is-invalid @enderror" 
                value="{{ old('action') }}"
            >
                <option value="" selected disabled>Действуете на основании...</option>
                <option value="устава">устава</option>
                <option value="договоренности и устава">договоренности и устава</option>
                <option value="учредительного договора">учредительного договора</option>
            </select>
            @error('action')
                <small class="valid-feedback d-block text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="mt-2">
                    <label class="fw-bold">Банк:</label>
                    <input 
                        type="text" 
                        name="bank" 
                        class="form-control @error('bank') is-invalid @enderror" 
                        value="{{ old('bank') }}"
                        placeholder="Наименование Банка" 
                    />
                    @error('bank')
                        <small class="valid-feedback d-block text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="mt-2">
                    <label class="fw-bold">р/с:</label>
                    <input 
                        type="text" 
                        name="rs" 
                        class="form-control @error('rs') is-invalid @enderror" 
                        value="{{ old('rs') }}"
                        placeholder="Рассчётный счёт (номер)" 
                    />
                    @error('rs')
                        <small class="valid-feedback d-block text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="mt-2">
                    <label class="fw-bold">БИК:</label>
                    <input 
                        type="text" 
                        name="bik" 
                        class="form-control @error('bik') is-invalid @enderror" 
                        value="{{ old('bik') }}"
                        placeholder="БИК (номер)" 
                    />
                    @error('bik')
                        <small class="valid-feedback d-block text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="mt-2">
                    <label class="fw-bold">к/с:</label>
                    <input 
                        type="text" 
                        name="ks" 
                        class="form-control @error('ks') is-invalid @enderror" 
                        value="{{ old('ks') }}"
                        placeholder="корр.счёт (номер)" 
                    />
                    @error('ks')
                        <small class="valid-feedback d-block text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="mt-2">
                    <label class="fw-bold">Телефон: ( без пробелов и скобок )</label>
                    <input 
                        type="text" 
                        name="phone" 
                        class="form-control @error('phone') is-invalid @enderror" 
                        value="{{ old('phone') }}"
                        placeholder="Контактный номер телефона" 
                    />
                    @error('phone')
                        <small class="valid-feedback d-block text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="mt-2">
                    <label class="fw-bold">E-mail:</label>
                    <input 
                        type="text" 
                        name="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        value="{{ old('email') }}"
                        placeholder="Контактный E-mail (корпоративный)" 
                    />
                    @error('email')
                        <small class="valid-feedback d-block text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mt-4">
            <x-button icon="drive_file_rename_outline" color="dark" type="submit" text="Заключить договор" />
        </div>
    </form>   
</div>
@endif

@endsection