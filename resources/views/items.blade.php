<div class="container">
    <h1>Item Page</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <!-- Use asset helper to link to the image stored in the public/images folder -->
                <img src="{{ asset('images/12.jpg') }}" alt="Item 1" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Item 1</h5>
                    <p class="card-text">$10</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('12.jpg') }}" alt="Item 2" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Item 2</h5>
                    <p class="card-text">$15</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('12.jpg') }}" alt="Item 2" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Item 2</h5>
                    <p class="card-text">$15</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('12.jpg') }}" alt="Item 3" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Item 3</h5>
                    <p class="card-text">$20</p>
                </div>
            </div>
        </div>
    </div>
</div>
