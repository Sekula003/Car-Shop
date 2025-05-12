const currentUrl = window.location.href

if(currentUrl === "file:///C:/xampp/htdocs/css%20projekat/stranice/naruci.html"){

    const fields = [
        { input: 'form-name', text: 'ime', error: 'errorName', minLength: 2, maxLength: 50, required: true, },
        { input: 'form-number', text: 'telefon', error: 'errorNumber', regex: /^(\+3816|06)(([0-6]|[8-9])\d{6,7}|(77|78)\d{5,6})$/, required: true, },
        { input: 'form-email', text: 'email', error: 'errorEmail', regex: /^(?:[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})?$/, required: true, }
    ]

    fields.forEach((field) => {
        const inputElement = document.getElementById(field.input)
        inputElement.addEventListener('input', () => validateField(field))
    })

    function validateField (field) {
        let isValid = false

        const inputElement = document.getElementById(field.input)
        const errorElement = document.getElementById(field.error)
        const inputValue = inputElement.value.trim()

        if (field.required && inputValue === '') {
            errorElement.textContent = `The ${field.text} field is required.`
        }
        else if (field.regex && !field.regex.test(inputValue)) {
            errorElement.textContent = `The ${field.text} field format is invalid.`
        }
        else if (inputValue.length < field.minLength || inputValue.length > field.maxLength) {
            errorElement.textContent = `The ${field.text} field must be ${field.minLength} - ${field.maxLength} characters.`
        }
        else {
            errorElement.textContent = ''
            isValid = true
        }
        return isValid
    }

    const carField = [
        "nissan",
        "toyota",
        "lambo",
        "camaro",
        "ford",
        "corvette",
        "bugatti",
        "porsche",
        "ferrari",
        "audi",
        "bmw",
        "mercedes"
    ]

    function validCarField(){
        const car = document.getElementById("car")
        const errorCar = document.getElementById("errorCar")
        
        if(!carField.includes(car.value)){
            errorCar.textContent = "The car field format is invalid."
            return false
        }
        errorCar.textContent = ""
        return true
    }

    function successMessage() {
        const successMessage = document.getElementById('success-msg')
        const computedStyle = window.getComputedStyle(successMessage)

        if (computedStyle.display === "none") {
            successMessage.style.display = "block"
            setTimeout(() => {
                successMessage.style.display = "none"
            }, 4000);
        }
    }

    document.getElementById("contact-form").addEventListener("submit", e => {
        e.preventDefault()
        let isValid = true;

        fields.forEach((field) => {
            if (!validateField(field)) {
                isValid = false;
            }
        });

        if(!validCarField()) isValid = false

        if (isValid) successMessage()
    })
}

if(currentUrl === "file:///C:/xampp/htdocs/css%20projekat/stranice/pretraga.html"){
    const car = [
        {
            name: "Nissan",
            image: "../slike/GTR.png",
            year: 2015,
            priceTag: 200000,
            modelTag: "GTR"
        },
        {
            name: "Toyota",
            image: "../slike/supra.png",
            year: 2001,
            priceTag: 40000,
            modelTag: "Supra"
        },
        {
            name: "Lamborghini",
            image: "../slike/lambo.png",
            year: 2014,
            priceTag: 250000,
            modelTag: "Huracan"
        },
        {
            name: "Chevrolet",
            image: "../slike/Chevrolet.png",
            year: 2019,
            priceTag: 30000,
            modelTag: "Camaro"
        },
        {
            name: "Ford",
            image: "../slike/Mustang.png",
            year: 2015,
            priceTag: 45000,
            modelTag: "Mustang"
        },
        {
            name: "Chevrolet",
            image: "../slike/corvette.png",
            year: 2017,
            priceTag: 80000,
            modelTag: "Corvette"
        },
        {
            name: "Bugatti",
            image: "../slike/bugatti.png",
            year: 2016,
            priceTag: 290000,
            modelTag: "Chiron"
        },
        {
            name: "Porsche",
            image: "../slike/porsche2.png",
            year: 2018,
            priceTag: 190000,
            modelTag: "911"
        },
        {
            name: "Ferrari",
            image: "../slike/ferrari.png",
            year: 2015,
            priceTag: 250000,
            modelTag: "488GTB"
        },
        {
            name: "Audi",
            image: "../slike/audi.png",
            year: 2017,
            priceTag: 130000,
            modelTag: "RS7"
        },
        {
            name: "BMW",
            image: "../slike/BMW.png",
            year: 2015,
            priceTag: 25000,
            modelTag: "M4"
        },
        {
            name: "Mercedes",
            image: "../slike/MercedesBenzGLC.png",
            year: 2020,
            priceTag: 50000,
            modelTag: "Benz"
        }
    ]
    function generateCarHTML(car) {
        return `
            <a href="#">
                <div class="cards">
                    <img src="${car.image}">
                    <h2>${car.name}</h2>
                    <p class="year">${car.year}. god.</p> <br>
                    <p class="price">Cena:</p>
                    <p class="pricetag">${car.priceTag}$</p><br>
                    <p class="model">Model:</p>
                    <p class="modeltag">${car.modelTag}</p>
                </div>
            </a>
        `;
    }
    function generateCars(cars) {
        let html = '';
        for(let i = 0; i < cars.length; i++){
            html += generateCarHTML(cars[i]);
        }
        return html;
    }
    const container = document.querySelector('.card-holder');

    container.innerHTML = generateCars(car);
}







