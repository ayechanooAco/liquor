
<x-frontend>

   
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('logo/back.jpg');" data-stellar-background-ratio="0.5">
       <div class="overlay"></div>
     
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
           
            <h2 class="mb-0 bread">My Cart</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="table-wrap">
                        <table class="table">
                          <thead class="thead-primary">
                            <tr>
                               
                              <th>Product</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>total</th>
                              
                            </tr>
                          </thead>
                          <tbody id="shoppingcart_table">
                           
                          </tbody>
                        </table>
                    </div>
            </div>
            <div class="row justify-content-end">
                <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>
                        <p class="d-flex">
                            <span >Subtotal</span>
                            <span class="shoppingcartTotal"></span>
                        </p>
                        
                        <p class="d-flex total-price">
                            <span >Total</span>
                            <span class="shoppingcartTotal"></span>
                        </p>
                    </div>
                     <p class="text-center"><a href="javascript:void(0)" class="btn btn-primary py-3 px-4 checkoutBtn">Proceed to Checkout</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
    </x-frontend>