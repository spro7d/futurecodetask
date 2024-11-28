<div class="main-banner">
    <div class="container">
      <div class="row">

   @if(session()->has('message'))

            <div class="alert alert-success">

             

            {{session()->get('message')}}

             <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">x</button>

             </div>

            @endif

        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Kitap Bilgidir</h6>
            <h2>Bilgi ise Güç</h2>
            <p>Kütüphaneler, sadece kitaplarla dolu raflardan ibaret değildir. Her bir kitap, her bir kaynak, birer bilgi ışığıdır. Kütüphaneler, insanın merakını besler, hayal gücünü geliştirir ve dünyanın dört bir yanındaki bilgiyi erişilebilir kılar. Bir kütüphane, keşfe açık bir evrendir; her köşesinde yeni bir öğrenme fırsatı, her sayfasında derinleşen bir anlayış sunar. Gerçek anlamda zenginlik, kütüphanelerin derinliklerinde yatmaktadır.</p>
            <div class="buttons">
              <div class="border-button">
                <a href="explore.html">Popüler Kitaplar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="">
            <div class="item">
              <img src="assets/images/banner.png" alt="">
            </div>
            <div class="item">
              <img src="assets/images/banner2.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>