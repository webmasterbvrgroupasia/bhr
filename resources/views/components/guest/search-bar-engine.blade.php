<div {{$attributes->merge(['class'=>'box-be-custom '])}}>
    <div class="row gx-3">
        <div class="col-12 col-sm-6 col-lg-2">
            <label>Select Property:</label>
            <select id="merchant" class="input-be mb-1" onclick="OnSelect()">
                <option hidden value="empty">Select Property</option>
            </select>
            <p class="text-danger mb-0" id="alert-merchant" style="display: none;">Please select property</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-2">
            <label id="check-in-label">Check in:</label>
            <input type="date" class="input-be" required name="check-in" id="check-in">
            <p class="text-danger mb-0" id="alert-check-in" style="display: none;">Please select check in date</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-2">
            <label id="check-out-label">Check out:</label>
            <input type="date" class="input-be" required name="check-out" id="check-out">
            <p class="text-danger mb-0" id="alert-check-out" style="display: none;">Please select check out date</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-2">
            <label>Guest:</label>
            <div class="input-be cursor-pointer" onclick="ShowHidePopUp()">
                <p class="center text-truncate"><span id="adult-guest">1</span> Adults, <span id="children-guest">0</span> Children, <span id="infant-guest">0</span> Infants</p>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-2" onclick="HidePopUp()">
            <label>Promo code:</label>
            <input type="text" class="input-be" name="promo-code" placeholder="Promo code" id="promo-code">
        </div>
        <div class="col-12 col-sm-12 col-lg-2">
            <label></label>
            <button type="button" onclick="OnBook()" class="btn-book-now">Search</button>
        </div>
        <div class="col-12 col-sm-6 col-lg-7"></div>
        <div class="col-12 col-sm-6 col-lg-5 position-relative">
            <!-- Pop Up -->
            <div class="pop-up-guest" id="pop-up-guest">
                <div class="border-bottom py-2 mb-2">
                    <div class="row">
                        <div class="col-6">
                            <p class="title">Adult</p>
                            <p class="description">Ages 17 or above</p>
                        </div>
                        <div class="col-6">
                            <div class="row slim-grid-row mt-2">
                                <div class="col-4">
                                    <div class="icon" onclick="AdultsMin()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <p class="bold ml-2" id="adult-amount">1</p>
                                </div>
                                <div class="col-4">
                                    <div class="icon" onclick="AdultsAdd()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom py-2 mb-2">
                    <div class="row">
                        <div class="col-6">
                            <p class="title">Children</p>
                            <p class="description">Ages 2-16</p>
                        </div>
                        <div class="col-6">
                            <div class="row slim-grid-row mt-2">
                                <div class="col-4">
                                    <div class="icon" onclick="ChildrenMin()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <p class="bold ml-2" id="children-amount">0</p>
                                </div>
                                <div class="col-4">
                                    <div class="icon" onclick="ChildrenAdd()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2">
                    <div class="row">
                        <div class="col-6">
                            <p class="title">Infants</p>
                            <p class="description">Under 2</p>
                        </div>
                        <div class="col-6">
                            <div class="row slim-grid-row mt-2">
                                <div class="col-4">
                                    <div class="icon" onclick="InfantMin()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <p class="bold ml-2" id="infant-amount">0</p>
                                </div>
                                <div class="col-4">
                                    <div class="icon" onclick="InfantAdd()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Array yang berisi objek
    var merchantList = [
        { name: 'Aeera Villa', code: 'aeeravilla' },
        { name: 'Aksari Resort Ubud', code: 'aksariresort' },
        { name: 'Aksari Resort Seminyak', code: 'aksariseminyak' },
        { name: 'Aleva Vie Villa', code: 'alevavie' },
        { name: 'Amarea Ubud', code: 'amareaubud' },
        { name: 'Amore Villas', code: 'amore' },
        { name: 'Arkamara Dijiwa', code: 'arkamara' },
        { name: 'Arshika Bali Sunset Road', code: 'arshika' },
        { name: 'Astera Canggu', code: 'asteracanggu' },
        { name: 'Astera Seminyak', code: 'asteraseminyak' },

        { name: 'Asvara Villa Ubud', code: 'asvaravilla' },
        { name: 'Atta Mesari Ubud', code: 'attamesari' },
        { name: 'Ayona Vie Villa', code: 'ayonavie' },
        { name: 'Baleka Resort Hotel & Spa', code: 'balekaresort' },
        { name: 'Bali Palms Resort', code: 'balipalm' },
        { name: 'Bali Seascape Beach Club', code: 'baliseascape' },
        { name: 'Being Sattavaa Luxury', code: 'sattavaa' },
        { name: 'Berry amour', code: 'berryamour' },
        { name: 'BTS Villa', code: 'btsvilla' },
        { name: 'Cyrus Villa', code: 'cyrusvilla' },

        { name: 'Dedary Resort Ubud', code: 'dedaryresort' },
        { name: 'Eden The Residence', code: 'edenresidence' },
        { name: 'Eight Palms Villa', code: 'eightpalm' },
        { name: 'Goya Boutique & Resort', code: 'goya' },
        { name: 'Hideaway Villas Bali', code: 'hideaway' },
        { name: 'Infinity8', code: 'infinity' },
        { name: 'Ini Vie Villa', code: 'inivie' },
        { name: 'Jays Villas', code: 'jayvillas' },
        { name: 'Kamala Resort Ubud', code: 'kaamalaresort' },
        { name: 'Kecapi Villa', code: 'kecapivilla' },

        { name: 'Kupu-kupu Barong', code: 'kupukupubarong' },
        { name: 'La Mira Villa', code: 'lamira' },
        { name: 'La Vie Villa', code: 'lavie' },
        { name: 'Legian Kriyamaha Villa', code: 'kriyamaha' },
        { name: 'Manca Villa', code: 'manca' },
        { name: 'Mayaloka Villa', code: 'mayaloka' },
        { name: 'Mayana Villas', code: 'mayana' },
        { name: 'Monolocal Resort Seminyak', code: 'monolocalresort' },
        { name: 'Nara Villa Canggu', code: 'naravilla' },
        { name: 'Nyanyi Sanctuary Villa', code: 'nyanyisanctuary' },

        { name: 'Purana Boutique Resort', code: 'puranaresort' },
        { name: 'Purana Suite Ubud', code: 'puranaubud' },
        { name: 'Puri Payogan - BVR', code: 'puripayoganbvr' },
        { name: 'Rama Beach Resort & Villas', code: 'ramabeach' },
        { name: 'Roomates Villa', code: 'roomates' },
        { name: 'Royal Tulip', code: 'royaltulip' },
        { name: 'Sampatti', code: 'sampatti' },
        { name: 'Sana Vie Villa', code: 'sanavie' },
        { name: 'Sanctoo', code: 'sanctoo' },
        { name: 'Sanora Villa', code: 'sanora' },

        { name: 'Sini Vie Villa', code: 'sinivie' },
        { name: 'Suara Alam Ubud', code: 'suaraalam' },
        { name: 'Teratai Villa', code: 'terataivilla' },
        { name: 'The Alantara', code: 'alantara' },
        { name: 'The Awan Villas', code: 'awanvillas' },
        { name: 'The Awandari Villa', code: 'awandarivillas' },
        { name: 'The Bidadari Villas & Spa', code: 'bidadarivillas' },
        { name: 'The Calna Villa', code: 'calna' },
        { name: 'The Capital', code: 'thecapital' },
        { name: 'The Chillhouse Canggu', code: 'chillhouse' },

        { name: 'The Jimbaran Villa', code: 'jimbaranvilla' },
        { name: 'The Kayana', code: 'kayana' },
        { name: 'The Light Exclusive', code: 'lightexclusive' },
        { name: 'The Lokha Ubud', code: 'lokhaubud' },
        { name: 'The Nau Villa', code: 'nauvilla' },
        { name: 'The Sankara Suites', code: 'sankarasuite' },
        { name: 'The Sun Hotel & Spa', code: 'sunhotel' },
        { name: 'The Vasini Smart Boutique Hotel', code: 'vasini' },
        { name: 'The Yubi Boutique Villa', code: 'yubiboutique' },
        { name: 'Vije Boutique', code: 'vijeboutique' },

        { name: 'Visakha Sanur', code: 'visakha' },

    ];

    // Mendapatkan elemen select
    var selectElement = document.getElementById("merchant");

    // Looping untuk menambahkan opsi ke dalam select
    merchantList.forEach(function(data) {
        // Membuat elemen option baru
        var option = document.createElement("option");

        // Mengisi nilai dan teks dari opsi
        option.value = data.code; // Menggunakan umur sebagai nilai
        option.textContent = data.name; // Menampilkan nama

        // Menambahkan opsi ke dalam elemen select
        selectElement.appendChild(option);
    });
    function OnBook() {
        let merchant_id = document.getElementById("merchant").value
        let check_in = document.getElementById("check-in").value
        let check_out = document.getElementById("check-out").value
        let promo_code = document.getElementById("promo-code").value
        let adult = document.getElementById("adult-guest").innerHTML
        let children = document.getElementById("children-guest").innerHTML
        let infant = document.getElementById("infant-guest").innerHTML
        let check_in_input = document.getElementById("check-in")
        let check_out_input = document.getElementById("check-out")
        let check_in_label = document.getElementById("check-in-label")
        let check_out_label = document.getElementById("check-out-label")
        if (merchant_id == 'empty') {
            let alert_merchant = document.getElementById('alert-merchant')
            alert_merchant.classList.add('d-block')
        }else{
            if(check_in != '' && check_out != ''){
                if (promo_code != '') {
                    window.open("https://secure.guestaps.com/"+merchant_id+"/hotel-filter-redirect/"+check_in+"/"+check_out+"/"+promo_code+"?guest="+adult+"-"+children+"-"+infant+"", '_blank');
                }else{
                    window.open("https://secure.guestaps.com/"+merchant_id+"/hotel-filter-redirect/"+check_in+"/"+check_out+"/promo_code_empty"+"?guest="+adult+"-"+children+"-"+infant+"" , '_blank');
                }
            }
            else if(check_in == ''){
                check_in_input.style.borderColor = "#dc3545"
                check_in_label.style.color = "#dc3545"
                let alert_check_in = document.getElementById('alert-check-in')
                alert_check_in.classList.add('d-block')
            }else if(check_out == ''){
                check_out_input.style.borderColor = "#dc3545"
                check_out_label.style.color = "#dc3545"
                let alert_check_out = document.getElementById('alert-check-out')
                alert_check_out.classList.add('d-block')
            }
        }
    }
    function OnSelect() {
        let alert_merchant = document.getElementById('alert-merchant')
        let select = document.getElementById('merchant')
        alert_merchant.classList.remove('d-block')
        select.classList.add('color-black')
    }
    $(function(){
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        var maxDate = year + '-' + month + '-' + day;
        $('#check-in').attr('min', maxDate);
        $('#check-out').attr('min', maxDate);
    });
    // ADULT
    function AdultsAdd() {
        var adult = document.getElementById('adult-amount');
        var guest= document.getElementById('adult-guest');
        var number = adult.innerHTML;
        number++;
        adult.innerHTML = number;
        guest.innerHTML = number;
    }
    function AdultsMin() {
        var adult = document.getElementById('adult-amount');
        var guest= document.getElementById('adult-guest');
        if (adult.innerHTML > 1) {
            var number = adult.innerHTML;
            number--;
            adult.innerHTML = number;
            guest.innerHTML = number;
        }
    }

    // Children
    function ChildrenAdd() {
        var children = document.getElementById('children-amount');
        var guest= document.getElementById('children-guest');
        var number = children.innerHTML;
        number++;
        children.innerHTML = number;
        guest.innerHTML = number;
    }
    function ChildrenMin() {
        var children = document.getElementById('children-amount');
        var guest= document.getElementById('children-guest');
        if (children.innerHTML > 0) {
            var number = children.innerHTML;
            number--;
            children.innerHTML = number;
            guest.innerHTML = number;
        }
    }

    // Infant
    function InfantAdd() {
        var infant = document.getElementById('infant-amount');
        var guest= document.getElementById('infant-guest');
        var number = infant.innerHTML;
        number++;
        infant.innerHTML = number;
        guest.innerHTML = number;
    }
    function InfantMin() {
        var infant = document.getElementById('infant-amount');
        var guest= document.getElementById('infant-guest');
        if (infant.innerHTML > 0) {
            var number = infant.innerHTML;
            number--;
            infant.innerHTML = number;
            guest.innerHTML = number;
        }
    }

    function ShowHidePopUp() {
        var show = document.getElementById("pop-up-guest")
        if (show.style.display === "block") {
            show.style.display = "none";
        }else{
            show.style.display = "block"
        }
    }

    function HidePopUp() {
        var hide = document.getElementById("pop-up-guest")
        hide.style.display = "none"
    }

    function WarningCheckIn() {
        let check_in_input = document.getElementById("check-in")
        let check_in_label = document.getElementById("check-in-label")
        check_in_input.style.borderColor = "#afabab"
        check_in_label.style.color = "#212529"
    }

    function WarningCheckOut() {
        let check_out_input = document.getElementById("check-out")
        let check_out_label = document.getElementById("check-out-label")
        check_out_input.style.borderColor = "#afabab"
        check_out_label.style.color = "#212529"
    }
</script>

<style type="text/css">
    .box-be-custom{
        border: 1px solid #ddd;
        padding: 24px 32px;
        margin:32px 5px;
        background-color: #ffffff;
    }
    .input-be{
        width: 100%;
        height: 38px;
        border: 1px solid #afabab;
        padding: 0px 12px;
        background-color: #fff;
    }
    option{
        color:#222;
    }
    label{
        display: block;
        margin-bottom: 8px;
    }
    .btn-book-now{
        color: #fff ;
        background-color: #ff5700;
        border: 1px solid #ff5700;
        border-color: #ff5700;
        padding: 5px 25px;
        text-align: center;
        display: inline-block;
        font-weight: 700;
        font-size: .85em;
        line-height: 1.71428571em;
        letter-spacing: .05em;
        text-transform: capitalize;
        width: 100%;
        height: 38px;
        margin-top: 24px;
        cursor: pointer;
        transition: .3s ease-in-out;
    }
    .btn-book-now:hover{
        opacity: .8;
        color: #FFF;
        background-color: #d94a00;
        border-color: #d94a00;
    }
    .center{
        margin-top: 5px;
    }
    .cursor-pointer{
        cursor: pointer;
    }
    .pop-up-guest{
        background-color: #fff;
        margin: 10px;
        padding: 8px 24px;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        width: 310px;
        box-shadow: 0 4px 6px 0 rgb(0 0 0 / 7%);
        display: none;
        position: absolute;
        left: 5px;
        margin-top: 0;
        z-index: 9;
        transition: .3s ease-in-out;
    }
    .pop-up-guest .title{
        margin-bottom: 2px;
        font-size: 18px;
        font-weight: 400;
    }
    .pop-up-guest .description{
        margin-bottom: 0px;
        font-size: 14px;
    }
    .pop-up-guest .icon{
        border: 1px solid #dee2e6;
        border-radius: 100%;
        width: 35px;
        height: 35px;
        cursor: pointer;
    }
    .pop-up-guest .icon svg{
        position: relative;
        left: 2px;
        top: 1px;
    }
    .bold{
        font-weight: 600;
        font-size: 18px;

    }
    .slim-grid-row{
        margin-left: -8px!important;
        margin-right: -8px!important;
    }
    @media only screen and (max-width: 992px) {
        .pop-up-guest{
            /*	    left: -245px;*/
            top: -70px;
        }
        .input-be{
            margin-bottom: 12px;
        }
        .btn-book-now{
            height: 48px!important;
            margin-top: 6px;
        }
    }
    @media only screen and (max-width: 720px) {
        .pop-up-guest{
            left: -50px;
            top: -70px;
        }
    }
    @media only screen and (max-width: 600px) {
        .input-be{
            width: 100%;
            margin-bottom: 12px;
        }
        .pop-up-guest{
            top: -70px;
            left: 0;
        }
    }
    @media only screen and (max-width: 400px) {
        .pop-up-guest{
            left: -40px;
        }
    }
</style>

