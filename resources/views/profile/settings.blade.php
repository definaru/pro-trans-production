@extends('layout/main')
@section('title', 'Настройки')

@section('content')
<div class="w-100 pb-5 pt-2 d-block">
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item">
            <button class="nav-link active fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane">Данные по умолчанию</button>
        </li>
        <li class="nav-item">
            <button class="nav-link fw-bold" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane">Шкала наценок</button>
        </li>
        <li class="nav-item">
            <button class="nav-link fw-bold" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane">Публичная оферта</button>
        </li>
        <li class="nav-item">
            <button class="nav-link fw-bold" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane">Смена пароля</button>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane rounded-bottom fade show active" id="home-tab-pane">
            <x-card icon="business_center" header="Покупатель ООО &laquo;Проспект транс&raquo;">
                <div>
                    <label class="fw-bold">Грузополучатель</label>
                    <input type="text" class="form-control" value="[ ООО &laquo;Проспект транс&raquo; ] 127576, МОСКВА ГОРОД, УЛИЦА АБРАМЦЕВСКАЯ, ДОМ 8А, Э 1 ПОМ 3 К 47 ОФ Б6Л" />
                </div>
                <div>
                    <label class="fw-bold">Способ получения</label>
                    <select class="form-control">
                        <option value="FOB">Доставка</option>
                        <option value="EXW"selected>Самовывоз</option>
                    </select>
                </div>
                <div>
                    <label class="fw-bold">Пункт выдачи</label>
                    <select class="form-control">
                        <option value="BR1002">РОС Брк-Самовывоз</option>
                        <option value="CH0001">Члб-Самовывоз</option>
                        <option value="CHK001">ЛОМ Курган Самовывоз</option>
                        <option value="EK0002">Ект-Самовывоз</option>
                        <option value="KA0001">Кзн-Самовывоз</option>
                        <option value="KR0001">Крд-Самовывоз</option>
                        <option value="KRL001">ЛОМ Новороссийск-Ленина Самовывоз</option>
                        <option value="KY0001">Красноярск самовывоз</option>
                        <option value="L31A01">ЛОМ 31A Самовывоз</option>
                        <option value="L31C01">ЛОМ 31C Самовывоз</option>
                        <option value="LPU001">ЛОМ Первоуральск Самовывоз</option>
                        <option value="LKM001">ЛОМ Климовск Самовывоз</option>
                        <option value="L23001">ЛОМ 23 Самовывоз</option>
                        <option value="L32001">ЛОМ 32 Самовывоз</option>
                        <option value="L75001">ЛОМ 75 Самовывоз</option>
                        <option value="LOB001">ЛОМ Обнинск Самовывоз</option>
                        <option value="LBR001">ЛОМ Бронницы Самовывоз</option>
                        <option value="LKL001">ЛОМ Калуга Самовывоз</option>
                        <option value="LNG001">ЛОМ Котельники Самовывоз</option>
                        <option value="LSP001">ЛОМ Сергиев Посад Самовывоз</option>
                        <option value="LTUL01">ЛОМ Тула 2 Самовывоз</option>
                        <option value="LTU001">ЛОМ Тула Самовывоз</option>
                        <option selected="selected" value="Z00028">Самовывоз 86км</option>
                        <option value="NK0001">ЦРС-Самовывоз</option>
                        <option value="NN0002">НН-Самовывоз</option>
                        <option value="NS0001">Нск-Самовывоз</option>
                        <option value="PE0001">Прм-Самовывоз</option>
                        <option value="OM0001">Омск Самовывоз</option>
                        <option value="LVL001">ЛОМ Владимир Самовывоз</option>
                        <option value="BL0001">ЛОМ Барнаул Самовывоз</option>
                        <option value="BRK001">ЛОМ Курск Самовывоз</option>
                        <option value="VRB001">ЛОМ Белгород Самовывоз</option>
                        <option value="SMA001">ЛОМ Самара Алексеевка - Самовывоз</option>
                        <option value="NNS001">ЛОМ Саранск - Самовывоз</option>
                        <option value="EKT001">ЛОМ Тюмень - Самовывоз</option>
                        <option value="SMB001">ЛОМ Бузулук Самовывоз</option>
                        <option value="TL0001">Тольятти Самовывоз</option>
                        <option value="KM0001">Кемерово Самовывоз</option>
                        <option value="CHM001">ЛОМ Магнитогорск Самовывоз</option>
                        <option value="KRK001">ЛОМ Кропоткин Самовывоз</option>
                        <option value="NSN001">ЛОМ Новокузнецк Самовывоз</option>
                        <option value="LY0001">Ярославль Самовывоз</option>
                        <option value="SMD001">ЛОМ Димитровград Самовывоз</option>
                        <option value="IR0000">Иркутск Самовывоз</option>
                        <option value="AS0000">Астрахань Самовывоз</option>
                        <option value="SOR001">Орск Самовывоз</option>
                        <option value="NC0000">Набережные Челны Самовывоз</option>
                        <option value="RZ0001">Рязань - Самовывоз</option>
                        <option value="RD0001">РнД-Самовывоз</option>
                        <option value="SM0002">Смр-Самовывоз</option>
                        <option value="SMU001">ЛОМ Ульяновск Самовывоз</option>
                        <option value="SU0001">РОС Ульяновск Самовывоз</option>
                        <option value="SO0001">Оренбург Самовывоз</option>
                        <option value="SP0001">СПб-Самовывоз</option>
                        <option value="SH0001">ЛОМ Шушары-Самовывоз</option>
                        <option value="SPS001">РОС Парнас Самовывоз</option>
                        <option value="SHR001">ЛОМ Шушары Руслан-Самовывоз</option>
                        <option value="SHR004">ЛОМ Псков Самовывоз</option>
                        <option value="SR0001">Срт-Самовывоз</option>
                        <option value="UF1001">Уфа-Самовывоз</option>
                        <option value="VL0001">Влг-Самовывоз</option>
                        <option value="VR1001">РОС Воронеж Самовывоз</option>
                        <option value="LLP001">ЛОМ Липецк Самовывоз</option>
                        <option value="LTM001">ЛОМ Тамбов Самовывоз</option>
                    </select>
                </div>
                <div>
                    <label class="fw-bold">Контактное лицо</label>
                    <input type="text" class="form-control" value="Дущенко Антон" />
                </div>
                <div class="d-flex gap-3">
                    <label class="fw-bold">Программа</label>
                    <div class="d-flex gap-4">
                        <label>
                            <input type="checkbox" name="programm" value="Легковая" />
                            Легковая
                        </label>
                        <label>
                            <input type="checkbox" name="programm" value="Грузовая" />
                            Грузовая
                        </label>                            
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <label class="fw-bold">Покупатель по умолчанию</label>
                    <label>
                        <input type="checkbox" value="yes" />&#160;Да
                    </label>
                </div>
            </x-card>
        </div>
        <div class="tab-pane rounded-bottom fade" id="profile-tab-pane">
            <x-card icon="trending_up" header="Шкала наценок">
                <div class="row">
                    <div class="col-md-6 py-4">
                        <form action="/confirm-reset-password" class="d-flex gap-3 flex-column" method="post">
                            <div>
                                <input type="text" class="form-control" placeholder="Цена от" value="" />
                            </div>
                            <div>
                                <input type="text" class="form-control" placeholder="Наценка (%)" value="" />
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <x-button type="submit" text="Добавить наценку" icon="add" />
                                <x-button type="reset" color="light" text="Сбросить" />
                            </div>
                        </form>                        
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted mt-4">
                            No Data
                        </p>
                    </div>
                </div>
            </x-card>
        </div>
        <div class="tab-pane rounded-bottom fade" id="contact-tab-pane">
            <x-card icon="description" header="Публичная оферта по кроссдокингу" verified="03.02.2022 \ 15:40:56">
                <div>
                    <h4>Уважаемый партнер!</h4>
                    <p>Данным соглашением Вы подтверждаете свое согласие с тем, что:</p>
                    <ol>
                        <li>Осуществление возврата или отказа от КАЧЕСТВЕННОГО товара, заказанного в Центре Закупки (ЦЗ) – НЕВОЗМОЖНО. Брак и некондицию принимаем по условиям, <a href="#">описанным на сайте компании</a>.</li>
                        <li>Ознакомились и согласны с вероятностью получения товара ЦЗ в поиске.  </li>
                        <li>Планируемая дата поставки ЦЗ рассчитана, при условии соблюдения Вами условий по своевременным оплатам и  является ориентировочной с вероятностью отклонения на 1-2 рабочих дня. Отклонение от планируемой даты поставки на 2 рабочих дня, не является причиной отказа от заказанных деталей.</li>
                        <li>Если заказ ЦЗ блокирован   и не был оплачен в течении 48 часов, то заказ будет автоматически удален.</li>
                        <li>Если заказ ЦЗ блокирован  , то фактическая дата поставки будет позже планируемой.</li>
                        <li>Если заказ ЦЗ перешел в статус «Ожидаем», то позиция будет Вам доставлена и Вы обязуетесь ее принять и оплатить.</li>
                    </ol>
                </div>
            </x-card>
        </div>
        <div class="tab-pane rounded-bottom fade" id="disabled-tab-pane">
            <x-card icon="lock_person" header="Смена пароля">
            @if (session('status'))
                <x-alert type="success" message="{{ session('status') }}" />
            @else
                <div>
                    <x-alert type="warning" message="Вам необходимо сменить пароль!" />
                    <x-alert type="danger" message="Новый пароль не должен совпадать со старым!" />
                    <x-alert type="info" header="Требования к паролю:" message="8 и более символов, хотя бы одна буква, хотя бы одна цифра" />                    
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3 py-4">
                        <form action="/confirm-reset-password" class="d-flex gap-3 flex-column" method="post">
                            @csrf
                            <div>
                                <div class="input-group">
                                    <span class="input-group-text material-symbols-outlined bg-white">
                                        password
                                    </span>
                                    <input 
                                        type="password" 
                                        class="form-control border-start-0 border-end-0 @error('password') is-invalid @enderror" 
                                        placeholder="Новый пароль" 
                                        name="password" 
                                    />
                                    <span class="material-symbols-outlined bg-white input-group-text cp text-secondary">
                                        visibility
                                    </span>
                                </div>
                                @error('password')
                                    <small class="valid-feedback d-block text-danger">{{ $message }}</small>
                                @enderror                                
                            </div>

                            <div>
                                <x-button type="submit" icon="done" text="Сохранить" />
                            </div>
                        </form>                        
                    </div>
                </div>            
            @endif

            </x-card>
        </div>
    </div>
</div>
@endsection