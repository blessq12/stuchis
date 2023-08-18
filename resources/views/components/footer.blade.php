<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="footer-logo">
                    <img src="{{ $company->logo }}" alt="{{ $company->name }}">
                    <div class="d-block">
                        <span>{{ $company->name }}</span>
                        <p>{{ $company->name_additional }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="footer-secondary">
                    <h4>Телефон: <a href="tel:{{ $company->phone }}">{{ $company->phone }}</a></h4>
                    <p>Стирка ковров и ковровых покрытий в Анапе и области</p>
                </div>
            </div>
            <div class="col-12">
                <div class="copyright">
                    <p>Разработано  <a href="https://api.whatsapp.com/send/?phone=79833409040">code.me</a> ❤️</p>
                </div>
            </div>
        </div>
    </div>
</footer>
@vite('resources/js/app.js')
</body>

</html>