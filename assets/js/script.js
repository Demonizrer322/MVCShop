$(function(){
    $("#next-page-btn").click(function(){
        event.preventDefault();
        let s = $('.product-image').length;
        console.log(s);
        $.post("/product/pages", {
            start: s,
            end: 4
        },
        function (data){
            let product = JSON.parse(data);
            console.log(data);
            $.each(product, function(i, v) {
                console.log(v.Id);
                console.log(v);
                var html ='';
                product.pop();
                html += `<div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <!-- <div class="product-label">
                                        <span>-20%</span>
                                    </div> -->
                                    <a id="hrefsingleProduct" href="/product/singleProductTabstyle3?IdProduct=${v.Id}">
                                        <img src="${v.MainImage}" class="main-image" alt=""></a>
                                    <div class="product-action">
                                        <ul>
                                            <li class="addingToCart" data-id="${v.Id}"><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                                            <li class="openModal" data-id="${v.Id}"><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="/product/singleProductTabstyle3?IdProduct=${v.Id}">${v.Name}</a></h3>
                                    <p class="product-price"><!--<span class="discounted-price">$</span>--> <span class="main-price">$${v.Price}</span></p>
                                </div>
                            </div>
                        </div>`;
                        
    $('#addLoad').append(html);
            });
            console.log(product[0]);
        });
    });

    $(".openModal").click(function(){
        var Id = $(this).attr('data-id');
        console.log(Id);
        $.get("/product/getProduct?IdProduct=" + Id,
        function(data){
            let singleProduct = JSON.parse(data);
            $('#modalName').empty();
            $('#modalName').append(`<h2>${singleProduct.Name}</h2>`);
            $('#modalPrice').empty();
            $('#modalPrice').append(`<span class="price new-price" id="modalPrice">${singleProduct.Price}</span>`);
            $('modalDescription').empty();
            $("modalDescription").append(`<p id="modalDescription">${singleProduct.Description}</p>`);
       });
    });
    $(".addingToCart").click(function(){
        event.preventDefault();
        var IdProduct = $(this).attr('data-id');
        console.log(IdProduct);
        $.get("/cart/addingToCart?IdProduct=" + IdProduct);
    });
        

        var arrayBtnQuantity = $('.qtybtn');
        var lenghtBtnQuantity = arrayBtnQuantity.length;
        for (var i = 0; i < lenghtBtnQuantity; i++){
            $(arrayBtnQuantity[i]).click(function(event) {
                var element = event.srcElement || event.target || event.toElement;
                var parent = $(element).parent();
                var QuantityInput = $(parent).children('.quantity-info-input');
                let valueOfInput = $(QuantityInput).val();
                console.log(valueOfInput);
                let price = $('.priceValue').val();
                console.log(price);
            });
        }
        var arrayInputQuantity = $('.quantity-info');
        var lenghtInputQuantity = arrayInputQuantity.length;
        for (var i = 0; i < lenghtInputQuantity; i++)
        {
            $(arrayInputQuantity[i]).on('input', function(event) {
                var element = event.srcElement || event.target || event.toElement;
                var parent = $(element).parent();
                var QuantityInput = $(parent).children('.quantity-info-input');
                $valueOfInput = $(QuantityInput).val();
                console.log($valueOfInput);
                var priceValue = $('.priceValue');
                let price = $(priceValue[i]).val();
                console.log(priceValue);
            });
        }
});
