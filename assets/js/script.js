        $(function(){
            $("#next-page-btn").click(function(){
                event.preventDefault();
                let start = $('#containerLoad').length;
                $.post("/product/pages", {
                    start: '0',
                    end: '3'
                },
                function ($data){
                    var product = JSON.parse($data);
                    console.log(product);
                    $.each(product, function(i, v) {
                        var html ='';
                        console.log(v);
                        html += `<div class="single-grid-product mb-40">
                                    <div class="product-image">
                                        <!-- <div class="product-label">
                                            <span>-20%</span>
                                        </div> -->
                                        <a id="hrefsingleProduct" href="/product/singleProductTabstyle3?IdProduct=${v['Id']}">
                                            <img src="http://<?=$_SERVER['HTTP_HOST']?>/assets/images/productImages/${v['MainImage']}" class="main-image" alt=""></a>
                                        <div class="product-action">
                                            <ul>
                                                <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"> <a href="/product/singleProductTabstyle3?IdProduct=${v['Id']}">${v['Name']}</a></h3>
                                        <p class="product-price"><!--<span class="discounted-price">$</span>--> <span class="main-price">$${v['Price']}</span></p>
                                    </div>
                                </div>`;
         $('#addLoad').append(html);
                    });
                    console.log(product[0]);
                });
            });
        });