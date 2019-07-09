<div class="harvee-navbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="harvee-search-bar pt-4 pb-4 m-2 text-center">
                    <input type="text" class="p-2" name="search-bar" placeholder="Search...">
                    <label for="search-bar">
                        <i class="fa fa-search"></i>
                    </label>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <img class="harvee-logo" src="source/images/logo.png" alt="">
            </div>
            <div class="col-lg-4">
                <div class="container  pt-4 pb-4">
                    <div class="row">
                        <div class="col-lg-8 harvee-hotline text-right">
                            <p class="m-0">CALL US NOW</p>
                            <h4 class="font-weight-bold">+8465 469 403</h4>
                        </div>
                        <div class="col-lg-4">
                            <button id="my-cart" class="btn btn-harvee">
                                <i class="fa fa-cart-plus harvee-cart"></i>
                            </button>
                            <div id="cart-detail" class="harvee-cart-detail">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(() => {
        $("#my-cart").click(() => {
            $("#cart-detail").fadeIn();
            return false;
        });
        $("#cart-detail").click(() => {
            return false;
        });
        $("body").click(({target}) => {
            
            $("#cart-detail").fadeOut();
        });
    });
    
</script>