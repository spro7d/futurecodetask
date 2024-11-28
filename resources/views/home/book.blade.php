 <div class="currently-market">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2><em>Piyasadaki</em> Ürünlerimiz.</h2>
          </div>
        </div>

        

           


        <div class="col-lg-6">
          <div class="filters">
            <ul>
              <li data-filter="*"  class="active">Tüm Kitaplar</li>
              <li data-filter=".msc">Popüler</li>
              <li data-filter=".dig">Son Gelenler</li>
              
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row grid">


            @foreach($data as $data)

            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="book/{{$data->book_img}}" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>{{$data->title}}</h4>
                  <span class="author">
                    <img src="auther/{{$data->auther_img}}" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>{{$data->auther_name}}</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Güncel Stok<br><strong>{{$data->quantity}}</strong><br> 
                  </span>
                  
                  <div class="text-button">
                    <a href="{{url('book_details',$data->id)}}">Kitabın Detaylarına Bak</a>
                  </div>

                </br>

                  <div class="">
                    <a class="btn btn-primary" href="{{url('borrow_books',$data->id)}}">Ödünç Alın</a>
                  </div>
                </div>
              </div>
            </div>
            

            @endforeach

            


          </div>
        </div>
      </div>
    </div>
  </div>