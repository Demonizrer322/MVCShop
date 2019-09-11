$(function(){
    $("#next-page-btn").click(function(){
        event.preventDefault();
        let s = $('.product-image').length;
        console.log(s);
        console.log($data);
        $.post("/product/pages", {
            start: s,
            end: 4
        },
        function ($data){
            var product = JSON.parse($data);
            console.log($data);
            console.log(product);
            $.each(product, function(i, v) {
                var html ='';
                
                console.log(product.pop());
                console.log(v);
                html += `<div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <!-- <div class="product-label">
                                        <span>-20%</span>
                                    </div> -->
                                    <a id="hrefsingleProduct" href="/product/singleProductTabstyle3?IdProduct=${v['Id']}">
                                        <img src="${v['MainImage']}" class="main-image" alt=""></a>
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
                            </div>
                        </div>`;
                        
    $('#addLoad').append(html);
            });
            console.log(product[0]);
        });
    });
    $("#openModal").click(function(){
        console.log("Hello");
        var Id = $(this).attr('data-id');
        console.log(Id);
        console.log($data);
        $.get("/product/getProduct?Id=" + Id,
        function ($data){
            let singleProduct = JSON.parse($data);
            console.log(singleProduct);
            console.log(singleProduct.Name);
            console.log($data);
            $('#modalName').empty();
            $('#modalName').append(`<h2>${singleProduct.Name}</h2>`);
            $('#modalPrice').empty();
            $('#modalPrice').append(`<span class="price new-price" id="modalPrice">${singleProduct.Price}</span>`);
            $('modalDescription').empty();
            $("modalDescription").append(`<p id="modalDescription">${singleProduct.Description}</p>`);
       });
    });
});