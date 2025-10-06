const dummyApiData = {
    "Berau": {
        temperature: 30,
        condition: "Cerah",
        icon: "images/panas.png"
    },
    "Palu": {
        temperature: 30,
        condition: "Cerah",
        icon: "images/panas.png"
    },
    "Bandung": {
        temperature: 20,
        condition: "Hujan deras",
        icon: "images/hujan_petir.png"
    },
    "Solo": {
        temperature: 28,
        condition: "Mendung",
        icon: "images/mendung.png"
    },
    "Samarinda": {
        temperature: 40,
        condition: "super panas",
        icon: "images/panas.png"
    },
    "Paser": {
        temperature: 20,
        condition: "Hujan deras",
        icon: "images/hujan_petir.png"
    },
    "Tarakan": {
        temperature: 35,
        condition: "Panas Terik",
        icon: "images/panas.png"
    },
    "Sangatta": {
        temperature: 25,
        condition: "Hujan Deras",
        icon: "images/hujan_petir.png"
    },
    "Tenggarong": {
        temperature: 24,
        condition: "Gerimis",
        icon: "images/hujan.png"
    },
    "Balikpapan": {
        temperature: 30,
        condition: "Cerah",
        icon: "images/panas.png"
    },
};

const searchForm = document.getElementById('search-form');
const citySelect = document.getElementById('city-select'); 
const temperatureEl = document.getElementById('temperature');
const conditionEl = document.getElementById('condition');
const locationEl = document.getElementById('location');
const weatherIconEl = document.getElementById('weather-icon');
const dateMonthEl = document.getElementById('month');
const dateDayEl = document.getElementById('day');
const errorMessageEl = document.getElementById('error-message');

function updateWeather(cityName) {
    const formattedCityName = cityName.trim(); 
    const weatherData = dummyApiData[formattedCityName];

    if (weatherData) {
        temperatureEl.textContent = `${weatherData.temperature}°`;
        conditionEl.textContent = weatherData.condition;
        locationEl.textContent = `${formattedCityName}, Indonesia`;
        weatherIconEl.src = weatherData.icon;
        
        document.getElementById('weather-card').classList.remove('hidden');
        errorMessageEl.classList.add('hidden');
        
        // Tampilkan data di console.log
        console.log(`Cuaca di ${formattedCityName}:`);
        console.log(`Suhu: ${weatherData.temperature}°C`);
        console.log(`Kondisi: ${weatherData.condition}`);
        console.log('--------------------');

    } else {
        // Jika kota tidak ditemukan, tampilkan pesan error
        document.getElementById('weather-card').classList.add('hidden');
        errorMessageEl.classList.remove('hidden');
        console.log(`Data untuk kota "${formattedCityName}" tidak ditemukan.`);
    }
}

function populateCityDropdown() {
    const cities = Object.keys(dummyApiData);

    cities.forEach(city => {
        const option = document.createElement('option');
        option.value = city; // Nilai yang akan diambil JS
        option.textContent = city; // Teks yang dilihat pengguna
        citySelect.appendChild(option);
    });
}

searchForm.addEventListener('submit', function(event) {
    const userCity = citySelect.value;
    if (userCity) {
        updateWeather(userCity);
    }
});
citySelect.addEventListener('change', function() {
    const userCity = citySelect.value;
    if (userCity) {
        updateWeather(userCity);
    }
});

// Fungsi untuk menampilkan tanggal saat ini
function displayCurrentDate() {
    const now = new Date();
    const months = ["JANUARI", "FEBRUARI", "MARET", "APRIL", "MEI", "JUNI", "JULI", "AGUSTUS", "SEPTEMBER", "OKTOBER", "NOVEMBER", "DESEMBER"];
    
    dateMonthEl.textContent = months[now.getMonth()];
    dateDayEl.textContent = now.getDate();
}
populateCityDropdown();
displayCurrentDate(); 