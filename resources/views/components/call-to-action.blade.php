<div class="container py-5">
    <div class="row justify-content-center align-items-center p-5" style="border:1px solid #ced0d4;border-radius:10px;">
        <div class="col-12 col-md-12 col-lg-12 border-1">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
                    <div class="content">
                        <h2 class="m-0">{{ $title }}</h2>
                        <p class="m-0">{{ $text }}</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 form-group">
                                <label for="name">Введите своё имя</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 form-group">
                                <label for="phone">Введите свой номер</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="col-12">
                                <button 
                                    type="submit" 
                                    class="axil-button button-rounded hover-flip-item-wrapper text-center"
                                >Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>