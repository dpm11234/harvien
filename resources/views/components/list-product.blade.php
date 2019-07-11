<div class="harvee-list-product py-4 my-4">
    <div class="container-fluid mb-4">
        <div class="harvee-list-prod-nav">
            <div class="row harvee-line">
                <div class="container">
                    <div class="row">
                        <div class="col-auto">
                            <button class="btn text-uppercase font-weight-bold  harvee-list-prod px-0 pb-1 m-0 active">
                               {{$title}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="owl-carousel owl-theme">
            <div class="item">
                @include('components.product-card')
            </div>
            <div class="item">
                @include('components.product-card')
            </div>
            <div class="item">
                @include('components.product-card')
            </div>
            <div class="item">
                @include('components.product-card')
            </div>
            <div class="item">
                @include('components.product-card')
            </div>
            <div class="item">
                @include('components.product-card')
            </div>
        </div>
    </div>
</div>