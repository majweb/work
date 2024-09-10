
<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zamówienie Pdf</title>
    <style>
      @page {
            margin: 0px;
            }

            html {
                  box-sizing: border-box;
                  margin: 0px;
                  color: #8b8e8e;
                  font-family: 'DejaVu Sans', Helvetica, sans-serif;
            }
            .logo{
                  margin-top:30px;
                  margin-left: 50px;
            }
            .first{
                  margin-top:20px;
                  margin-bottom: 30px;
            }
            .first .first__left{
                  float: left;
                  padding-left: 60px;
                  width: 250px;
                  background: #E31E249E27;
            }
            .first .first__right{
                  float: right;
            }
            .first__left-order{
                  font-size:16px;
                  font-weight: 400;
            }
            .first__left-nr{
                  color: #00a0e3;
                  font-weight: bold;
            }
            .first__right{
                  font-size:16px;
                  font-weight: 400;
                  padding-right: 50px;
            }
            .first::after{
                  content: "";
                  display:block;
                  clear: both;
                  }
                  .second{
                        margin-left: 50px;
                        border:1px solid #E31E249E;
                        margin-right: 50px;
            }
            .second-title{
                  background: #E31E249E;
                  padding: 5px 0;
                  padding-left: 10px;
                  color: white;
                  margin-bottom: 10px;
                  font-weight: bold;
            }
            .second-content{
            padding-left: 10px;
            margin-bottom: 20px;
            line-height: 17px;
            font-size:13px;
            }
            .second-transfer{
                  padding-left: 10px;
                  background:#00a0e3;
                  font-weight: bold;
                  color: white;
            }
            .second-transfer strong {
                  color: white;
            }
            .row{
                  height: 35px;
            }
            .third{
                  margin-left: 50px;
                  margin-right: 50px;
                  margin-top: 20px;
                  margin-bottom: 20px;
            }
            .third table{
                  border:1px solid #E31E249E;
            }
            .third table:first-of-type{
                  border-bottom:none;
            }
            .four{
                  margin-left: 50px;
                  margin-right: 50px;
            }
            .four-title{
                  background: #00a0e3;
                  padding: 5px 0;
                  padding-left: 10px;
                  color: white;
                  margin-bottom: 10px;
                  font-weight: bold;
            }
            .four table{
                  border:1px solid #E31E249E !important;
            }
            .opacity{
                  background:rgba(255,255,255,.7);
            }
            .footer{
                  position: fixed;
                  bottom: 20px;
                  left: 0px;
                  right: 0px;
                  height: 2cm;
            }
            .discountClass{
                  background: rgba(209, 235, 245,.7);
            }
    </style>
  </head>
  <body>
      <div class="logo">
          @if (App::environment() == 'local')
              <img width="180" src="{{ public_path().'/images/logo.png' }}" alt="logo">
          @else
              <img width="180" src="{{ asset('images/logo.png') }}" alt="logo">
          @endif
      </div>
      <section class="first">
      <div class="first__left">
            <p class="first__left-order">Zamówienie nr: <span class="first__left-nr">{{ $order->id }}</span></p>
      </div>
      <div class="first__right">
            <p class="first__right-date">DATA {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
      </div>
      </section>
      <div class="inner">
      <section class="second opacity">
            <div class="second-title">
                  Druk zamówienia dla
            </div>
            <div class="second-content">
                  Work 4 YOU GLOBAL LTD<br>
                  Office 180B, 182-184 High Street, North London E6 2JA<br>
                  Numer podatkowy: 4120328702<br>
                  Rejestr działalności: 11112672
            </div>
            <div class="second-transfer">
                  <strong>Nr konta bankowego PL</strong> 39 1140 1179 0000 4255 2700 1001
            </div>
      </section>
      <section class="third" style="font-size:14px;">
            <table cellspacing="0" width="520">
                  <tr>
                        <td style="background:#E31E249E;color:white;text-align:left;padding-left:10px;width:230px;border:1px solid #E31E249E;font-weight:bold;">
                              Dane zamawiającego
                        </td>
                        <td style="text-align:left;padding-left:10px;" class="opacity">
                              <span style="font-weight:400;width:370px;font-size:13px;">
                                    Nazwa firmy:
                                    <span style="font-weight:bold;">{{ $order->user->firm->name_invoice }}</span>
                              </span>
                        </td>
                  </tr>
            </table>
            <table cellspacing="0" width="520" style="border-bottom:none;font-size:13px;">
                  <tr>
                        <td style="width:370px;padding-left:10px;padding-top:2px;height:22px;" class="opacity">Adres firmy: <strong>{{ $order->user->firm->street_invoice }}, {{ $order->user->firm->postal_invoice }} {{ $order->user->firm->city_invoice }} {{ $order->user->firm->country_invoice }}</strong></td>
                        <td style="border-left:1px solid #E31E249E;width:150px;padding-left:10px;height:22px" class="opacity">NIP: <strong>{{ $order->user->firm->nip_invoice }}</strong></td>
                  </tr>
            </table>
            <table cellspacing="0" width="520">
                  <tr>
                        <td style="width:370px;padding-left:10px;height:22px" class="opacity">email: <strong>
                              {{ $user->email }}
                        </strong></td>
                        <td style="border-left:1px solid #E31E249E;width:150px;padding-left:10px;height:22px" class="opacity">Tel: <strong>numer telefonu</strong></td>
                  </tr>

            </table>
      </section>
      <section class="four" style="font-size:14px;">
            <table cellspacing="0" width="520">
            <tbody>
            <tr width=520>
            <td style="width: 100%; text-align: left; height: 21px;padding-left:10px;background:#E31E249E;color:white;font-weight:bold;"  colspan="4">Zamawiane usługi</td>
            </tr>
            <tr>
            <td style="width: 10%; text-align: center;border:1px solid #E31E249E;border-top:none;" class="opacity">nazwa usługi</td>
            <td style="width: 30%; text-align: center;border:1px solid #E31E249E;border-top:none;" class="opacity">cenna netto</td>
            <td style="width: 25%; text-align: center;border:1px solid #E31E249E;border-top:none;" class="opacity">ilość</td>
            <td style="width: 35%; text-align: center;border:1px solid #E31E249E;border-top:none;" class="opacity">cena netto razem</td>
            </tr>
            @php
                $suma=0;
            @endphp
            @if ($products)
                  @foreach ($products as $item)
                              <tr>
                                    <td style="width: 80%;border:1px solid #E31E249E;border-top:none;padding-left:10px;text-align:center;background:white;">{{ $item->name }}</td>
                                    <td style="width: 5%;border:1px solid #E31E249E;border-top:none;text-align:center;background:white;">{{$item->price}}
                                          </td>
                                  <td style="width: 5%;border:1px solid #E31E249E;border-top:none;text-align:center;background:white;">{{$item->qty}}
                                  </td>
                                    <td style="width: 10%;border:1px solid #E31E249E;border-top:none;padding-left:5px;text-align:center;background:white;">{{$item->price * $item->qty}}
                                    </td>
                              </tr>
                              @php

                                          $suma +=$item->price * $item->qty;
                              @endphp
                  @endforeach
            @endif

            <tr>
                  <td style="width:80%;text-align: right;background:#E31E249E;padding-right:10px;color:white;border-right:1px solid #E31E249E;" colspan="3"><strong>Wartość zamówienia:</strong><br />(netto - VAT odwr&oacute;cony)</td>
                  <td style="width: 20%;background:#E31E249E;border-left:1px solid #00a0e3;padding-left:5px;text-align:center;color:white;font-weight:bold;font-size:16px;">{{ number_format($suma, 2,'.','')}} {{Auth::user()->firm->currency}}</td>
            </tr>
            </tbody>
            </table>
      </section>

      <p style="margin-right:50px;margin-top:60px;text-align:right;margin-bottom:80px;">Podpis i pieczeć zamawiającego</p>
</div>
      <p class="footer" style="padding-left:50px;width: 100%;background: #00a0e3;color:white;">
            <strong>Work 4 YOU GLOBAL LTD</strong><br>
            Email: kontakt@dobrasztela.pl / marketing@dobrasztela.pl<br>
            Telefony : +48 570 790 078 / +48 570 987 095
      </p>

  </body>
</html>
